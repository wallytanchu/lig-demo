@extends('layouts.admin')
@section('title', 'Admin Blog list' )
@section('content')
    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <a href="#" class="l-main-button">
                <div class="button">
    <a href="/admin-post"><p class="button-text">New Article</p></a>
</div>
            </a>
            <ul class="archive archive-admin">
                @if($posts)
                @foreach($posts as $post)
                    <li class="archive-item">
                        <a href="/admin-post/edit/{{ $post->id }}" class="post-article">
                            <time class="post-article-date" datetime="{{ Carbon\Carbon::parse($post->created_at)->format('Y-n-j')  }}">
                                {{ Carbon\Carbon::parse($post->created_at)->format('d M, Y')  }}
                            </time>
                            <h1 class="post-article-title">{{ $post->title }}</h1>
                        </a>
                    </li>
                    @endforeach
                @endif
                    
                
                    
                
            </ul>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection