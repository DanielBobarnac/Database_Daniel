<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('article');
    }

    public function article(){
        $articles = Article::orderBy('created_at' , 'desc')->get();
        return view('article/index' , compact('articles'));
    }

    public function articleCreate(){
        return view('article/create');
    }

    public function articleStore(ArticleRequest $request){

        $article = Article::create(
            [
                'title'=> $request->input('title'),
                'description'=> $request->input('description'),
                'author'=> $request->input('author'),
                'img' =>$request->has('img') ? $request->file('img')->store('public/copertine') : 'img/default.png'
                
            ]
        );
        return redirect(route('homepage'))->with('message' , 'il tuo articolo e stato correttamente pubblicato');
    }

    public function detail($id){
        $articles = Article::orderBy('created_at' , 'desc')->get();
        foreach($articles as $article){
            if($article->if == $id){
                return view('article/detail', compact('article'));
            }
        }
    }

    public function update(Article $article){
        return view('article/update',compact('article'));
    }
}
