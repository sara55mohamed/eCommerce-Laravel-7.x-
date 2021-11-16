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
    
    <form method="post">
        @csrf   
        <div class="inputBox">
        <input type="email" name="email" required="" id="e" >
            <div id="c"></div>
        <label>Email</label>
        </div>
        <div class="inputBox" >
            <input type="password" name="password" required="" id="p" >
            <div id="d"></div>
            <label>Password</label>
            
        </div>
        <a>
        <button type="submit" name="submit" value="Submit">Sign in </button>
        </a>
    </form>
</div>

</body>