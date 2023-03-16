@extends('layouts.app')
@section('title', 'つぶやき一覧')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form class='card-header' action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-2" for="body">つぶやき</label>
                        <div class="col-md-10">
                            <input class="form-control" name="body" value="{{ old('body') }}" placeholder="いまどうしてる？">
                        </div>
                    </div>

                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="submit" class="btn btn-primary" value="つぶやく">
                </form>
              <div>
              @foreach($posts as $post)
              @foreach($users as $user)
                @if($post->user_id == $user->id)
                  <div>{{ $user->name }}</div>
                  <div>{{ $post->created_at }}</div>
                  <div>{{ $post->body }}</div>
                  @if($post -> user_id == Auth::user()->id)
                  <div><a href="{{ action('PostController@delete', ['id' => $post->id]) }}">削除</a><div>
                  @endif
                  @endif
              @endforeach
              @endforeach
              <div>
            </div>
        </div>
    </div>
@endsection