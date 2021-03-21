@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- {{ __('showですよ!') }} -->

                    <p>氏名</p>
                    <div class="alert alert-success" role="alert">
                        <strong>{{ $contact->your_name}}</strong>
                    </div>
                    <!-- 氏名 : {{ $contact->your_name}} -->
                    <p>件名</p>
                    <div class="alert alert-success" role="alert">
                        <strong>{{ $contact->title}}</strong>
                    </div>
                    <p>メールアドレス</p>
                    <div class="alert alert-success" role="alert">
                        <strong>{{ $contact->email}}</strong> : 
                    </div>
                    <p>ホームページ</p>
                    <div class="alert alert-success" role="alert">
                        <strong>{{ $contact->url}}</strong>
                    </div>
                    

                    <p>性別</p>
                    <div class="alert alert-success" role="alert">
                        <strong>{{ $gender}}</strong>
                    </div>
        
                    <p>年齢</p>
                    <div class="alert alert-success" role="alert">
                        <strong>{{ $age}}</strong>
                    </div>
                    
                    <p>お問い合わせ内容</p>
                    <div class="alert alert-success" role="alert">
                        <strong>{{ $contact->contact}}</strong>
                    </div>

                    <!-- {{ $contact->your_name}}
                    {{ $contact->title}}
                    {{ $contact->email}}
                    {{ $contact->url}}
                    {{ $gender}}
                    {{ $age}}
                    {{ $contact->contact}} -->
                    <form action="{{route('contact.edit', ['id' => $contact->id ])}}" method="get">
                        @csrf
                        <input type="submit" class="btn btn-info" value="変更する">
                    </form>
                    <br>
                    <form method="post" action="{{route('contact.destroy', ['id' => $contact->id ])}}" id="delete_{{$contact->id}}">
                        @csrf
                        <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    /*********************
削除ボタンを押してすぐにレコードが削除
されるのも問題なので、一旦Javascriptで
確認メッセージを流します。
*********************/

    function deletePost(e) {
        'use script';
        if (confirm('本当に削除してもよろしいですか？')) {
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>

@endsection