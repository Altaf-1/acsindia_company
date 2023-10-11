<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $datas = Article::where('mail', $user->email)->latest()->get();
        return view('article.index', compact('datas'));
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $user = Auth::user();
        return view('article.create', compact('user'));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'mail', 'phone', 'pdf']);
        if ($request->hasFile('pdf')) {
            $data['pdf'] = $request->pdf->store('articles', 'public');
        }
        Article::create($data);
        return redirect()->route('user.index')->with('success', 'Article Submitted');
    }
}
