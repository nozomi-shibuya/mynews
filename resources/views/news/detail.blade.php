@extends('layouts.front')
@section('title', 'ニュースの詳細')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース詳細</h2>

                <div class="form-group row">
                    <label class="col-md-2" for="title">タイトル</label>
                    <div class="col-md-10">
                        {{ $news->title }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="body">本文</label>
                    <div class="col-md-10">
                        {{ $news->body }}
                    </div>
                </div>
            
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>コメント</h2>
                        <ul class="list-group">
                            @if ($news->comments != NULL)
                                @foreach ($news->comments as $comment)
                                    <li class="list-group-item">{{ $comment->comment }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                
                <form action="{{ route('comment.add') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="content">コメント</label>
                            <textarea class="form-control" id="content" name="content" rows="3" maxlength="255"></textarea>
                        </div>
                        <input type="hidden" name="news_id" value="{{$news->id}}">
                        <button type="submit" class="btn btn-primary">コメントする</button>
                </form>
@endsection