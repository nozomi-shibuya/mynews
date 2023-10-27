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
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            
                        </div>
                    </div>
                    
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>コメント</h2>
                        <ul class="list-group">
                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection