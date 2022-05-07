@extends('layouts.default')
@section('title', 'NealCaffrey')

@section('content')
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
