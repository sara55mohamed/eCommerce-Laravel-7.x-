    {{-- @dd($adding) --}}

    <link rel="stylesheet" href="{{ asset('assets/css/admin2.css') }}">
    <link rel="icon" href="assets/img/favicon.png" sizes="192x192" />  
    <body>

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
        <a href="{{route("users")}}">back</a>
    </form>
    </div>
    </body>
            {{-- @foreach($adding) --}}
            {{-- @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                    </div>
                    @endif --}}
                
    {{-- @dd($users) --}}

                {{-- @dd($users[2]->name) --}}
                
                {{-- if(isset($_POST['name'])==true){
                    $n= isset($_POST['name']) ? $_POST['name'] : '';
                    $p= isset($_POST['password']) ? $_POST['password'] : '';
                    $e= isset($_POST['email']) ? $_POST['email'] : '';
                    $t= isset($_POST['type']) ? $_POST['type'] : '';
                    //prevent dublication
                    $check_dublicate_email="SELECT email from users
                    where email = '$e' ";
                    $check_dublicate_emailStatement = $connect->prepare($check_dublicate_email); 
                    $check_dublicate_emailStatement -> execute();

                    if ($row= $check_dublicate_emailStatement->fetch(PDO::FETCH_ASSOC)){            
                    echo  "<html><head><script>alert('Email already taken. please use another Email!');</script></head><body></body>";
                    //header("Location:../sign-up.php");
                    }else{
                        // check fields are empty
                    if(empty($n)|| empty($p)||empty($e)|| empty($t)) {
                    echo  "<html><head><script>alert('Enter All fields Please');
                    window.location='add.php';</script></head><body></body>";
                    }else {        
                    // set the PDO error mode to exception
                    // $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
                    $dsn = "INSERT INTO users (name,password,email,type)
                        VALUES ('".$n."','".$p."','".$e."','".$t."')";
                    // use exec() because no results are returned
                    // Do connect with query $db
                    $success= $connect->exec($dsn);
                    // tell staff with message is saved or not
                    if($success){
                        echo "<html><head><script>alert('saved');
                        window.location='../users.php';</script></head><body></body>";
                        
                    }else{
                        echo  "<html><head><script>alert('failed');
                        window.location='add.php';</script></head><body></body>";
                    
                    }
                }
                    }
            } --}}