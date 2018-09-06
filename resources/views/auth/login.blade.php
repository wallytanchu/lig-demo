@extends('layouts.admin')
@section('content')
    <!--start l-contents-->
    <div class="l-container u-clear">

        <!--start l-main-->
        <main class="l-main js-main">
            <div class="l-main-block"></div>
            <form method="post" action="{{ route('login') }}" class="form">
            @csrf
                <label for="user-id" class="form-title">USER ID</label>
                <input type="text" id="user-id" name="email" class="input input-text">
                <label for="password" class="form-title">PASSWORD</label>
                <input type="password" id="password" name="password" class="input input-text">
                <label for="submit" class="form-button">
                @if ($errors)
                <div class="alert alert-danger">
                        <strong>Error</strong>
                </div>
                @endif

                    <div class="button">
    <p class="button-text">Login</p>
</div>
                </label>
                    <input type="submit" id="submit" class="input input-submit">
            </form>
        </main>
        <!--end l-main-->

    </div>
    <!--end l-contents-->
@endsection