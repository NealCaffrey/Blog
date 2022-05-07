<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Handlers\ImageUploadHandler;

class IndexController extends Controller
{
    /**
     * 首页
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(Article $article)
    {
        $articles   = $article->with('category')->orderBy('created_at', 'desc')->paginate(10);
        $active     = $article->getActive();

        return view('index/home', compact('articles', 'active'));
    }

    /**
     * 上传图片
     * @param Request $request
     * @param ImageUploadHandler $uploader
     * @return array
     */
    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        // 初始化返回数据，默认是失败的
        $data = [
            'success'   => false,
            'msg'       => '上传失败!',
            'file_path' => ''
        ];
        // 判断是否有上传文件，并赋值给 $file
        if ($file = $request->upload_file) {
            // 保存图片到本地
            $result = $uploader->save($file);
            // 图片保存成功的话
            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg']       = "上传成功!";
                $data['success']   = true;
            }
        }
        return $data;
    }
}
