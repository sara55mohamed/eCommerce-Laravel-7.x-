<link rel="stylesheet" href="{{ asset('assets/css/admin2.css') }}">
<link rel="icon" href="assets/img/favicon.png" sizes="192x192" />

<body>
    <div class="content">

        @if (session('success'))
        <div class="success">{{ session('success') }}<div>
            @else
                <div class="warning">{{ session('warning') }}<div>
    @endif
        <br>
        <form method="post" action="{{ route('search') }}">
            @csrf
            <label>email:</label><br />
            <input type="text" name="email" value="">
            <input type="submit" value="Search"><br />
            <a href="{{ route('staff') }}">back</a>
        </form>

    </div>
    <div>

        @if (!empty($staff))
            <div class="content1">
                <center>
                    <table border='2' cellspacing='0' cellpadding='50' align='center'
                        style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
                        <tr>
                            <td style='color:#03a9f4; font-size: 25px;'>Name</td>
                            {{-- <td style='color:#03a9f4; font-size:25px;'>Password</td> --}}
                            <td style='color:#03a9f4; font-size: 25px;'>Email</td>
                            <td style='color:#03a9f4; font-size:25px;'>Type</td>
                        </tr>
                        {{-- IF Array -> @foreach ($search_users as $row) --}}
                        {{-- @dd($search_users) --}}
                        <tr role='row'>
                            <td style='color:#40739e; font-size: 15px;'>{{ $staff->name }}</td>
                            {{-- <td style='color:#434444; font-size: 15px;'>{{ $staff->password }}</td> --}}
                            <td style='color:#40739e; font-size: 15px;'>{{ $staff->email }}</td>
                            <td style='color:#40739e; font-size: 15px;'>{{ $staff->type }}</td>
                        </tr>
                        {{-- @endforeach --}}
                    </table>
                </center>
            </div>
        @endif

        </tbody>
        </table>
    </div>
    </div>
    </div>

    </div>
</body>
