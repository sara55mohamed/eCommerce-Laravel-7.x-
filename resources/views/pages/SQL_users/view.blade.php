    <link rel="stylesheet" href="{{ asset('assets/css/admin2.css') }}">
    <link rel="icon" href="assets/img/favicon.png" sizes="192x192" />

    <body>
        <br><br><br><br><br><br>

        <center>
            <table border='2' cellspacing='0' cellpadding='50' align='center'
                style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
                <tr>
                    <td style='color:#03a9f4; font-size: 25px;'>Name</td>
                    <td style='color:#03a9f4; font-size:25px;'>Password</td>
                    <td style='color:#03a9f4; font-size: 25px;'>Email</td>
                    <td style='color:#03a9f4; font-size:25px;'>Type</td>
                </tr>

                @foreach ($viewUsers as $data)
                    <tr role='row'>
                        <td style='color:#40739e; font-size: 15px;'>{{ $data->name }}</td>
                        <td style='color:#434444; font-size: 15px;'>{{ $data->password }}</td>
                        <td style='color:#40739e; font-size: 15px;'>{{ $data->email }}</td>
                        <td style='color:#40739e; font-size: 15px;'>{{ $data->type }}</td>
                    </tr>
                @endforeach
                {{-- <td style='color:#40739e; font-size: 15px;'>{{ $data['type'] }}</td> --}}

            </table>
        </center>


    </body>
