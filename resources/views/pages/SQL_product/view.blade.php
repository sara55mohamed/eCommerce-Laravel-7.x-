    <link rel="stylesheet" href="{{ asset('assets/css/admin2.css') }}">
    <link rel="icon" href="assets/img/favicon.png" sizes="192x192" />

    <body>
        <br><br><br><br><br><br>

        <center>
            <table border='2' cellspacing='0' cellpadding='50' align='center'
                style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
                <tr>
                    <td style='color:#03a9f4; font-size: 25px;'>Name</td>
                    <td style='color:#03a9f4; font-size:25px;'>Price</td>
                    <td style='color:#03a9f4; font-size: 25px;'>Category</td>
                    <td style='color:#03a9f4; font-size: 25px;'>Logo</td>
                </tr>

                @foreach ($viewProduct as $data)
                    <tr role='row'>
                        <td style='color:#40739e; font-size: 15px;'>{{ $data->name }}</td>
                        <td style='color:#434444; font-size: 15px;'>{{ $data->price }}</td>
                        <td style='color:#434444; font-size: 15px;'>{{ $data->category }}</td>
                        <td style='color:#40739e; font-size: 15px;'>
                            <img src="{{ URL::asset('assets/img/product-images/' . $data->logo) }}" width="100"
                                height="100">
                        </td>
                    </tr>
                @endforeach
                {{-- for object  src="{{ asset('assets/product-images/') }} "
                        <td style='color:#40739e; font-size: 15px;'>{{ $data['type'] }}</td> --}}

            </table>
        </center>


    </body>
