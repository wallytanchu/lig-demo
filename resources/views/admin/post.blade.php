@extends('layouts.admin')
@section('title', $post->title )
@section('content')
    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <form method="post" action="@if($post) {{ route('post-update', ['id' => $post->id]) }} @else {{ route('post-create') }} @endif" class="form" enctype="multipart/form-data">
            {{ csrf_field() }}
                <label for="image" class="form-title">EYE CATCH IMAGE
                    <div class="form-file u-clear">
                        <span class="filename"></span>
                        <span class="form-file-button">UPLOAD</span>
                    </div>
                </label>
                <input type="file" id="image" name="image" class="input input-image">
                <label for="title" class="form-title">TITLE</label>
                <div class="form-body">
                    <input type="text" id="title" class="input input-text" name="title" value="@if($post){{ $post->title }}@endif">
                </div>
                <label for="contents" class="form-title">CONTENTS</label>
                <div class="form-textarea">
                    <textarea name="inquiry" id="inquiry" cols="30" rows="10" class="input input-contents">@if($post) {{ $post->inquiry}} @endif</textarea>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-danger">
                    <strong>{{ session()->get('message') }}</strong>
                </div>
                @endif
                <label for="submit" class="form-button">
                    <div class="button">
    <p class="button-text">Submit</p>
</div>
                </label>
                <input type="submit" id="submit" class="input input-submit">
                <a href="#" class="form-button">
                    <div class="button">
    <p class="button-text">Back</p>
</div>
                </a>
            </form>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection