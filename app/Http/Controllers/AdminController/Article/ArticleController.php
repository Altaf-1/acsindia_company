<?php

namespace App\Http\Controllers\AdminController\Article;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $search = request()->get('searchUser');


        if ($search) {
            $datas = Article::
                where('name',$search)
                ->orWhere('mail',$search)
                ->orWhere('phone',$search);
        } else {
            $datas = Article::latest()->get();
        }

        return view('admin.articles.index', compact('datas'));
    }
}
