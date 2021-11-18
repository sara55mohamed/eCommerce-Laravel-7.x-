    {{-- //parent --}}
    {{-- @extends('layout.master')  --}}
    {{-- // child --}}
    @section('title','users ')

    @section('content')
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="icon" href="assets/img/favicon.png" sizes="192x192" />    

<body>
<div class="box">
    
    <h2>Login</h2>
    
        {{-- @if(isset(Auth::user()->worker))
            <script>window.location="{{route("product")}}";</script>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
            </div>
        @endif --}}
        {{-- @if(isset(Auth::user()->email))
            <div class="alert alert-danger success-block">
            <strong>Welcome {{ Auth::user()->email }}</strong>
            <br />
            <a href="{{route("logout")}}">Logout</a>
            </div>
        @else
            <script>window.location = "pages.users";</script>
        @endif --}}
        <form method="post"action="{{route("admin.login")}}">
        @csrf   
        <div class="inputBox">
        <input type="email" name="email" required=""  >
            <div id="c"></div>
        <label>Email</label>
        </div>
        <div class="inputBox" >
            <input type="password" name="password" required=""  >
            <div id="d"></div>
            <label>Password</label>
            
        </div>
        <a>
        <button type="submit" name="submit" value="Submit">Sign in </button>
        </a>
    </form>
</div>

</body>