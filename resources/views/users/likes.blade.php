@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container">
    @include('users.user')
    @include('users.tabs',['hasArticles' => false, 'hasLikes' => true])
    @foreach($articles as $article)
      @include('articles.card')
    @endforeach
  </div>
@endsection
