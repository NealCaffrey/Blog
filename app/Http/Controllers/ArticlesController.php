<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{
    /**
     * 文章详情页
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article)
    {
        $active = $article->getActive();
        $article->increment('visits');

        return view('articles.show', compact('article', 'active'));
    }


    /**
     * 文章查询页
     * @param $keyword
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search($keyword, Article $article)
    {
        $articles = $article->with('category')->where('title', 'like', "%$keyword%")->paginate(10);
        $active = $article->getActive();

        return view('articles/search', compact('articles', 'keyword', 'active'));
    }

    /**
     * 点赞
     * @param Article $article
     * @return false|string
     */
    public function star(Article $article)
    {
        $article->increment('star');

        return json_encode(array('status'=>1,'msg'=>'成功'));
    }
}
