@extends('layouts.default')
@section('title', 'Search')

@section('content')
    <div class="col-md-12">
        <h5>{{ $keyword }} 的搜索结果</h5>
    </div>
    <section class="status">
        @if ($articles->count() > 0)
            <ul class="list-unstyled">
                @include('index._article')
            </ul>
            <div class="mt-5">
                {!! $articles->render() !!}
            </div>
        @else
            <p>没有数据！</p>
        @endif
    </section>
@stop