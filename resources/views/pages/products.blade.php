    {{-- //parent --}}
    {{-- @extends('layout.master')  --}}
    {{-- // child --}}
        @section('title','poducts ')

        @section('content')
            {{-- @foreach()

            @dd($shoping)


            @endforeach --}}
            {{-- @dd($category)

            @dd($category[2]->category) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link rel="icon" href="assets/img/favicon.png" sizes="192x192" />    

<body>
            <div class="content">
                <a href="#">Add products</a>
                <a href="#">Edit products </a>
                <a href="#">Delete products</a>
                <a href="{{ route("view.products") }}">veiw all products</a>
                <a href="#">search  </a>
                <a href="{{ route("users")}}">users </a>
            </div>
        </body>