{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')
{{-- admin.blade.phpの@yield('title')に'ホーム'を埋め込む --}}
@section('title', 'ホーム')
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="post-container">
        <form method="POST" action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">
            <div class="post-card">
                <div class="post-title">
                    <h2>ホーム</h2>
                </div><!-- /.post-title -->
                <div class="post-box">
                <input id="tweet-txt" type="text" class="form-control" name="body" value="{{ old('title') }}" placeholder="いまどうしてる？">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                {{ csrf_field() }}
                <input id="tweet-btn"v type="submit" value="つぶやく" class="btn btn-primary">
                </div><!-- /.post-box -->
            </div><!-- /.post-card -->
        </form>
        @foreach($posts as $post)
            @foreach($users as $user)
                <table class="post-list">
                    <tr class="post-up">
                        <th class="post-tableL">{{ $user->name }}</th>
                        <th class="post-tableR">{{ $post->created_at }}</th>
                    </tr>
                    <tr class="post-down">
                        <td class="post-tableL">{{ $post->body }}</td>
                        <td class="post-tableR post-delete"><a href="" style="color: red">削除</a></td>
                    </tr>
                </table>
            @endforeach
        @endforeach
    </div><!-- /.post-container -->
@endsection
