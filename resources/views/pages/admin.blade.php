    {{-- //parent --}}
    {{-- @extends('layout.master') --}}
    {{-- // child --}}
    @section('title', 'users ')

    @section('content')
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="icon" href="assets/img/favicon.png" sizes="192x192" />

        <body>
            <div class="content">

                @if (session('success'))
                    <div class="error">{{ session('success') }}<div>
                        @else
                            <div class="error">{{ session('error') }}<div>
                @endif
            </div>
            <div class="box">

                <h2>Login</h2>

                <form method="post" action="{{ route('view.login') }}">
                    @csrf
                    <div class="inputBox">
                        <input type="email" name="email" required="">
                        <div id="c"></div>
                        <label>Email</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="password" required="">
                        <div id="d"></div>
                        <label>Password</label>

                    </div>
                    <a>
                        <button type="submit" name="submit" value="Submit">Sign in </button>
                    </a>
                </form>
            </div>

        </body>
