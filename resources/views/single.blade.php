@extends('layouts.public')
@php ($title = '')
@if($post) $title = $post->title @endif
@section('title', $title )
@section('content')
        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <div class="single">
                @if($post)
                    <img src="/{{ $post->photo }}" alt="" class="single-image">
                    <div class="l-container u-clear">
                        <h1 class="single-title">{{ $post->title }}</h1>
                        <time class="single-date" datetime="{{ Carbon\Carbon::parse($post->created_at)->format('Y-n-j') }}">{{ Carbon\Carbon::parse($post->created_at)->format('d M, Y') }}</time>
                        <p class="single-desc">{{ $post->inquiry }}</p>
                        <div class="single-button">
                            <div class="button">
                                <a href="/" class="clean"> <p class="button-text">Top</p></a>
                            </div>
                        </div>
                    </div>
                 @endif
            </div>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection