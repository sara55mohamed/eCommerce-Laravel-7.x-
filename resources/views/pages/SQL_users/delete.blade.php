<link rel="stylesheet" href="{{ asset('assets/css/admin2.css') }}">
<link rel="icon" href="assets/img/favicon.png" sizes="192x192" />

<body>
    <div class="content">
        <script>
            var msg = '{{Session::get('alert')}}';
            // var error= ('error with email staff!');
            var exist = '{{Session::has('alert')}}';
            if(exist){
            alert(msg);
            }
        </script>
        {{-- @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif --}}
        <form action="{{ route('delete') }}" method="POST">
            @csrf
            <label>current email:</label><br />
            <input type="text" name="email" value="">
            <input type="submit" value="Delete"><br />
            <a href="{{ route('staff') }}">back</a>
        </form>
    </div>

</body>
