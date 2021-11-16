<link rel="stylesheet" href="{{ asset('assets/css/admin2.css') }}">
<link rel="icon" href="assets/img/favicon.png" sizes="192x192" />  
<body>
    <div class="content">
        @if(Session::has('success'))
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('success') }}</p>
        @endif
        <form action="{{route("delete")}}" method="POST">
            @csrf
            <label>current email:</label><br/>
            <input type="text" name="email" value="">
            <input type="submit"  value="Delete"><br/>
            <a href="{{ route("users")}}">back</a>
        </form>
    </div>

</body>