<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        //news/index.blade.php ファイルを渡している
       // また View テンプレートに headline、 posts、という変数を渡している
       return view('news.index', ['headline' => $headline, 'posts' => $posts]);
    }
    
    public function show(Request $request)
    {
        $news = News::find($request->id);
        if (empty($news)) {
            abort(404);
        }
        return view('news.detail', ['news' => $news]);
    }
    
    public function addComment(Request $request)
    {
        // Validationを行う
        $this->validate($request, News::$rules);
        
        $comment = new Comment;
        $form = $request->all();
        // コメントを登録する
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $postId;
        $comment->save();

        return redirect('admin/news?='.$request->id);
    }
}
