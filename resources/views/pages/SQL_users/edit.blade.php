<link rel="stylesheet" href="{{ asset('assets/css/admin2.css') }}">
<link rel="icon" href="assets/img/favicon.png" sizes="192x192" />  
<body>
    <div class="content">
        @if(Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('success') }}</p>
        @endif
        <form action="{{route("edit")}}" method="post">
            @csrf
            <label>current email:</label><br/>
            <input type="text" name="email" value="">
            <label>new password:</label><br/>
            <input type="text" name="password" value="">
            <label>new name:</label><br/>
            <input type="text" name="name" value="">
            <label>new type:</label><br/>
            <input type="text" name="type" value="">
            <input type="submit" value="Edite"><br/>
            <a href="{{ route("users")}}">back</a>
        </form>
    </div>
</body>