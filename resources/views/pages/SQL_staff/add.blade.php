    {{-- @dd($adding) --}}

    <link rel="stylesheet" href="{{ asset('assets/css/admin2.css') }}">
    <link rel="icon" href="assets/img/favicon.png" sizes="192x192" />  
    <body>
        {{-- @dd($adding); --}}

        <div class="content">
        
                    @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('success') }}</p>
                    @endif
            <form method="post" action="{{route("insert")}}">
                @csrf
                <label>name:</label><br/>
                <input type="text" name="name" value="">
                <label>password:</label><br/>
                <input type="text" name="password" value="">
                <label>email:</label><br/>
                <input type="text" name="email" value="">
                <label>type:</label><br/>
                <input type="text" name="type" value="">
                <input type="submit"value="Save"><br/>
                <a href="{{route("staff")}}">back</a>
            </form>
        </div>
    </body>
    
