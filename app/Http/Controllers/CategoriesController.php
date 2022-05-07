<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function show($name, Article $article)
    {
        // 获取分类信息
        $category = Category::where('title', $name)->first();
        if (empty($category)) {
            return view('errors.404');
        }

        // 读取文章分类
        $articles = $article->with('category')->where('type', $category->id)->orderBy('created_at', 'desc')->paginate(10);
        $active = $article->getActive();

        return view('categories.show', compact('articles', 'active'));
    }
}
