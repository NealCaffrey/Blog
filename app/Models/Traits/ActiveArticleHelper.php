<?php

namespace App\Models\Traits;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Support\Facades\Cache;

trait ActiveArticleHelper
{
    // 用于存放临时数据
    protected $articles = [];

    // 缓存相关配置
    protected $active_key   = 'article:active';
    protected $new_key      = 'article:new';
    protected $category_key = 'category:list';
    protected $cache_expire_in_seconds = 3600 * 13;


    /**
     * 获取边栏推荐数据
     * @return array
     */
    public function getActive()
    {
        $active_article = $this->getActiveArticles();
        $new_article = $this->getNewArticles();
        $category_list = $this->getCategoryList();

        return compact('active_article', 'new_article', 'category_list');
    }

    /**
     * 获取最热文章列表
     * 从缓存获取数据，如果没有数据，重新获取并缓存
     */
    public function getActiveArticles()
    {
        return Cache::remember($this->active_key, $this->cache_expire_in_seconds, function () {
            return $this->calculateActiveArticles();
        });
    }

    /**
     * 获取最新文章列表
     * @return mixed
     */
    public function getNewArticles()
    {
        return Cache::remember($this->new_key, $this->cache_expire_in_seconds, function () {
            return $this->calculateNewArticles();
        });
    }

    /**
     * 获取所有分类列表
     * @return mixed
     */
    public function getCategoryList()
    {
        return Cache::remember($this->category_key, $this->cache_expire_in_seconds, function () {
            return $this->calculateCategoryList();
        });
    }

    /**
     * 获取最热文章列表
     * @return mixed
     */
    public function calculateActiveArticles()
    {
        $articles = Article::orderBy('visits', 'desc')->limit(5)->get();

        return $articles;
    }

    /**
     * 获取最新文章列表
     * @return mixed
     */
    public function calculateNewArticles()
    {
        $articles = Article::orderBy('created_at')->limit(5)->get();

        return $articles;
    }

    /**
     * 获取所有分类列表
     * @return Category[]|\Illuminate\Database\Eloquent\Collection
     */
    public function calculateCategoryList()
    {
        $category = Category::all();

        return $category;
    }
}
