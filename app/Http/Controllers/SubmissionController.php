<?php

namespace App\Http\Controllers;

use App\Models\AuthorSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'manuscript' => 'nullable|file|mimes:pdf,doc,docx|max:15360', // Max 15MB
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'phone.required' => 'Nomor WhatsApp wajib diisi.',
            'title.required' => 'Judul buku wajib diisi.',
            'synopsis.required' => 'Sinopsis atau deskripsi buku wajib diisi.',
            'manuscript.mimes' => 'Format file naskah harus berupa PDF, DOC, atau DOCX.',
            'manuscript.max' => 'Ukuran file naskah maksimal adalah 15 Megabyte (MB).',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->only(['name', 'email', 'phone', 'title', 'synopsis']);
        
        if ($request->hasFile('manuscript')) {
            $file = $request->file('manuscript');
            $filename = time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
            $filePath = $file->storeAs('manuscripts', $filename, 'local');
            $data['file_path'] = $filePath;
        }

        $submission = AuthorSubmission::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Naskah Anda "' . $submission->title . '" berhasil diajukan! Tim Editor IGAKERTA akan meninjau naskah Anda dan menghubungi Anda melalui WhatsApp atau Email dalam waktu 3-5 hari kerja.'
        ]);
    }
}
