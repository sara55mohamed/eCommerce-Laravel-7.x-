    {{-- //parent --}}
    {{-- @extends('layout.master')  --}}
    {{-- // child --}}
        @section('title','users ')

        @section('content')
            {{-- @foreach()

            @dd($shoping)


            @endforeach --}}
            {{-- @dd($users) --}}

            {{-- @dd($users[2]->name) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="icon" href="assets/img/favicon.png" sizes="192x192" />    

    <body>
        <!-- Header -->
                <div class="content">
                <a href="{{ route("view.add") }}">Add users</a>
                <a href="{{ route("view.delete") }}">Delete users</a>
                <a href="{{ route("view.edit") }}">Edit users</a>
                <a href="{{ route("view.users") }}">veiw all users</a>
                <a href="{{ route("view.search") }}">search  </a>
                <a href="{{ route("products") }}">product </a>
            </div>
        

    </body>



