<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $featuredBooks = Book::where('is_featured', true)->take(4)->get();
        $latestNews = News::latest()->take(3)->get();
        
        return view('home', compact('featuredBooks', 'latestNews'));
    }

    public function bookstore(Request $request)
    {
        $books = Book::all();
        $categories = Book::select('category')->distinct()->pluck('category');
        
        return view('bookstore', compact('books', 'categories'));
    }

    public function jurnal()
    {
        return view('jurnal');
    }

    public function authorServices()
    {
        return view('author-services');
    }

    public function news()
    {
        $articles = News::latest()->paginate(6);
        return view('news', compact('articles'));
    }

    public function newsDetail($slug)
    {
        $article = News::where('slug', $slug)->firstOrFail();
        $recentArticles = News::where('id', '!=', $article->id)->latest()->take(3)->get();
        
        return view('news-detail', compact('article', 'recentArticles'));
    }

    public function mitra()
    {
        return view('mitra');
    }

    public function hubungiKami()
    {
        return view('hubungi-kami');
    }

    public function tentangKami()
    {
        return view('tentang-kami');
    }

    public function storeContact(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'name.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'phone.required' => 'Nomor WhatsApp wajib diisi.',
            'subject.required' => 'Subjek pesan wajib diisi.',
            'message.required' => 'Pesan Anda wajib diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        \App\Models\ContactMessage::create($request->only(['name', 'email', 'phone', 'subject', 'message']));

        return response()->json([
            'success' => true,
            'message' => 'Pesan Anda berhasil dikirim! Tim IGAKERTA akan segera menghubungi Anda kembali.'
        ]);
    }
}
