<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {

        $articles = Article::where('is_accepted',true)->orderBy('created_at','desc')->take(6)->get();
        // dd($articles);
        return view('welcome',compact('articles'));
        
    }

    public function categoryShow(Category $category){
        
        return view('categoryShow', compact('category'));
    }

    public function searchArticles(Request $request){

        $articles=Article::search($request->searched)->where('is_accepted',true)->paginate(10);

        return view('article.index',compact('articles'));
    }

    public function setLocale($lang){

        session()->put('locale',$lang);
        return redirect()->back();
    }
}
