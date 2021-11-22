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
        @if (session('success'))
        <div class="error">{{ session('success') }}<div>
            @else
                <div class="error">{{ session('error') }}<div>
        @endif
            <div class="content">
                <a href="#">Add products</a>
                <a href="#">Edit products </a>
                <a href="#">Delete products</a>
                <a href="{{ route("view.products") }}">veiw all products</a>
                <a href="#">search  </a>
                <a href="{{ route("staff")}}">Staff </a>
                <a href="{{ route("logout") }}">logout </a>

            </div>
        </body>