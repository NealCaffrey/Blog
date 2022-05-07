@extends('layouts.default')
@section('title', $article->title)

@section('css')
  <link rel="stylesheet" href="{{ URL::asset('css/highlight/monokai-sublime.css') }}">
@stop

@section('content')
    <div id="show">
        <h3 class="text-center">{{ $article->title }}</h3>
        <h6 class="text-center mt-3">
            <i class="fa fa-align-left text-muted"></i>
            <a href="{{ route('category.show', $article->category->title) }}">{{ $article->category->title }}</a>
            <i class="fa fa-eye ml-3"></i>
            <span>{{ $article->visits }}</span>
            <span class="ml-3">{{ $article->created_at }}</span>
        </h6>
        <hr>
        <div id="article-show" class="markdown">
            {!! $article->content_html !!}
        </div>
        <div id="article-footer">
            <i class="fa fa-thumbs-up"  @click="star($event)"></i>
            <span id="star" data-content="{{ $article->id }}">{{ $article->star }}</span>
        </div>
    </div>
@stop

@section('js')
  <script src="{{ URL::asset('js/highlight.pack.js') }}"></script>
  <script>hljs.initHighlightingOnLoad();</script>
@stop
