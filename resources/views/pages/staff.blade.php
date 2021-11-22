    {{-- //parent --}}
    {{-- @extends('layout.master')  --}}
    {{-- // child --}}
        @section('title','staff ')

        @section('content')
            {{-- @foreach()

            @dd($shoping)


            @endforeach --}}
            {{-- @dd($users) --}}

            {{-- @dd($users[2]->name) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="icon" href="assets/img/favicon.png" sizes="192x192" />    

    <body>
        @if (session('success'))
        <div class="error">{{ session('success') }}<div>
            @else
                <div class="error">{{ session('error') }}<div>
        @endif
        
        <!-- Header -->
                <div class="content">
                <a href="{{ route("view.add") }}">Add staff</a>
                <a href="{{ route("view.delete") }}">Delete staff</a>
                <a href="{{ route("view.edit") }}">Edit staff</a>
                <a href="{{ route("view.staff") }}">veiw all staff</a>
                <a href="{{ route("view.search") }}">search  </a>
                <a href="{{ route("products") }}">product </a>
                <a href="{{ route("logout") }}">logout </a>

            </div>
        

    </body>



