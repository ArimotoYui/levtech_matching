<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //use宣言は外部にあるクラスをPostController内にインポートできる。
    //この場合、App\Models内のPostクラスをインポートしている。
    
    /**
    * Post一覧を表示する
    * 
    * @param Post Postモデル
    * @return array Postモデルリスト
    */
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);//$postの中身を戻り値にする。
    }
    
}
