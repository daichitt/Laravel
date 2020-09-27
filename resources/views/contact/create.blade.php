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

                    <!-- 一つでもエラーがあれば表示する -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- {{ __('createですよ!') }} -->
                    <form action="{{route('contact.store')}}" class="form-group" method="post">
                        @csrf
                        <label for="">氏名</label>
                        <input type="text" class="form-control " name="your_name" id="">

                        <label for="">件名</label>
                        <input type="text" class="form-control" name="title" id="">

                        <label for="">メールアドレス</label>
                        <input type="email" class="form-control" name="email" id="">

                        <label for="">ホームページ</label>
                        <input type="url" class="form-control" name="url" id="">

                        <label for="">性別</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="0" id="">男性
                            <br>
                            <input class="form-check-input" type="radio" name="gender" value="1" id="">女性
                        </div>
                        
                        <label for="">年齢</label>
                        <select name="age" class="form-control" id="">
                            <option value="">選択してください</option>
                            <option value="1">～19歳</option>
                            <option value="2">20～29歳</option>
                            <option value="3">30～39歳</option>
                            <option value="4">40～49歳</option>
                            <option value="5">50～59歳</option>
                            <option value="6">60～69歳</option>
                        </select>
                        <br>
                        <label for="">お問い合わせ内容</label>
                        <textarea name="contact" class="form-control" id="" cols="30" rows="10"></textarea>
                        <br>

                        <div class="form-group form-check">
                            <input type="checkbox" name="caution" class="form-check-input" value="1" id="">注意事項
                        </div>
                        
                        <input type="submit" class="btn btn-info" value="登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection