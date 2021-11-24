<link rel="stylesheet" href="{{ asset('assets/css/admin2.css') }}">
<link rel="icon" href="assets/img/favicon.png" sizes="192x192" />

<body>
    <div class="content">
        @if (session('success'))
            <div class="success">{{ session('success') }}<div>
                @else
                    <div class="warning">{{ session('warning') }}<div>
        @endif
        <form action="{{ route('delete') }}" method="POST">
            @csrf
            <label>current email:</label><br />
            <input type="text" name="email" value="">
            <input type="submit" value="Delete"><br />
            <a href="{{ route('staff') }}">back</a>
        </form>
    </div>

</body>
