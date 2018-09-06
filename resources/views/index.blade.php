

@extends('layouts.public')
@section('title', 'Home')
@section('content')
    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <div class="archive">
                <ul class="archive-list">

                @if($posts)
                    @foreach($posts as $post)
                        <li class="archive-item">
                        <article class="card">
                            <a href="/single/{{ $post->id }}" class="card-link">
                                <img src="/{{ $post->photo }}" alt="" class="card-image">
                                <div class="card-bottom">
                                    <h1 class="card-title">{{ $post->title }}</h1>
                                    <time class="card-date" datetime="{{ Carbon\Carbon::parse($post->created_at)->format('Y-n-j')  }}">
                                        {{ Carbon\Carbon::parse($post->created_at)->format('d M, Y')  }}
                                    </time>
                                </div>
                             </a>
                        </article>
                        </li>
                    @endforeach
                @endif
                    
                    
                    
                </ul>
            </div>
            <a href="/archive" class="archive-button">
                <div class="button">
    <p class="button-text">More</p>
</div>
            </a>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection