
@extends('layouts.public')
@section('title', 'Archive Page ' . $list->current_page . ' of ' . $list->last_page)
@section('content')
    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
                <div class="page-number">
                    Page <span >{{ $list->current_page }}/{{ $list->last_page }}</span>
                </div>
                <div class="archive">
                    <ul class="archive-list">
                    @if($list->data)
                        @foreach($list->data as $post)
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
                <div class="paginate">
                    <a href="{{ $list->prev_page_url }}" class="paginate-prev @if($list->current_page == 1 ) is-disable @endif">
                        <span class="paginate-prev-arrow"></span>
                    </a>
                    @for($x = 1; $x <= $list->last_page; $x++ )
                    <a href="{{ $list->path }}?page={{$x}}" class="paginate-number @if($list->current_page == $x) {{ 'is-current' }}@endif">{{ $x }}</a>
                    @endfor
                    <a href="{{ $list->next_page_url }}" class="paginate-next @if($list->current_page == $list->last_page) is-disable @endif">
                        <span class="paginate-next-arrow"></span>
                    </a>
                </div>
            </div>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection