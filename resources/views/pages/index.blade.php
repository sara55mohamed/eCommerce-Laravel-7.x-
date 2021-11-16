    @extends('layout.master')

    @section('title','home')

    @section('content')
    <link rel="icon" href="{{ asset('assets/img/favicon.png')}}" sizes="192x192" />    
    <link rel="stylesheet" href="{{ asset('assets/css/shopcatogry.css') }}">
    <!-- Home -->
    <div class="home">
        <div class="content">
            <h5>Winter Fashion</h5>
            <h1>Fashion<br>Collection 2019</h1>
            <a href="{{ route("shoping") }}">Shop Now</a>
        </div>
    </div>
    {{-- @foreach()
    
    @dd($user)


    @endforeach --}}
    {{-- @dd($users[0]->name) --}}

    <!-- Types -->
    <div class="types">
        <div class="row">
            <div class="row-img">
                <img src="{{ asset('assets/img/feature_1.png') }}">
            </div>
            <div class="row-a">
                <a href="{{ route("shoping") }}">Shop For Male</a>
            </div>
        </div>
        <div class="row row-center">
            <div class="row-img">
                <img src="{{ asset('assets/img/feature_2.png') }}">
            </div>
            <div class="row-a">
                <a href="{{ route("shoping") }}">Shop For Female</a>
            </div>
        </div>
        <div class="row row-last">
            <div class="row-img">
                <img src="{{ asset('assets/img/feature_3.png') }}">
            </div>
            <div class="row-a">
                <a href="{{ route("shoping") }}">Shop For Shoes</a>
            </div>
        </div>
        
        <div class="clear"></div>
        
        <div class="new">
        <div class="content">
            <div class="new-arrival">
                <h1>New Arrival</h1>
            </div>
            <div class="new-list">
                <ul>
                    <li><a class="active" href="shopcatogry.html">All</a></li>
                    <li><a href="{{ route("shoping") }}">Men</a></li>
                    <li><a href="{{ route("shoping") }}">Women</a></li>
                    <li><a href="{{ route("shoping") }}">Shoes</a></li>
                </ul>
            </div>
        </div>
        
        </div>
        
        <div class="clear"></div>
        
        <div class="items">
        
            <div class="items-1">
            
                <div class="row row-items">
                    <div class="row-img">
                        <img src="{{ asset('assets/img/arrivel/arrivel_1.png') }}">
                    </div>
                    <div class="row-a items-overlay">
                        <h6>Canvas</h6>
                        <h2>Lorem Canvas Low-Top Sneaker</h2>
                        <p>150$</p>
                        <div class="icons">
                            <a href="{{ route("shoping") }}"><div class="heart">&#10084;</div></a>
                            
                        </div>
                    </div>
                </div>
                
                <div class="row row-center row-items">
                    <div class="row-img">
                        <img src="{{ asset('assets/img/arrivel/arrivel_2.png') }}">
                    </div>
                    <div class="row-a items-overlay">
                        <h6>Canvas</h6>
                        <h2>Lorem Canvas Low-Top Sneaker</h2>
                        <p>150$</p>
                        <div class="icons">
                            <a href="{{ route("shoping") }}"> <div class="heart">&#10084;</div></a>
                            
                        </div>
                    </div>
                </div>
                <div class="row row-last row-items">
                    <div class="row-img">
                        <img src="{{ asset('assets/img/arrivel/arrivel_3.png')}}">
                    </div>
                    <div class="row-a items-overlay">
                        <h6>Canvas</h6>
                        <h2>Lorem Canvas Low-Top Sneaker</h2>
                        <p>150$</p>
                        <div class="icons">
                            <a href="{{ route("shoping") }}"><div class="heart">&#10084;</div></a>
                        
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="clear"></div>

            <div class="items-2">
            
                <div class="row row-items items-4">
                    <div class="row-img">
                        <img src="{{ asset('assets/img/arrivel/arrivel_4.png')}}">
                    </div>
                    <div class="row-a items-overlay">
                        <h6>Canvas</h6>
                        <h2>Lorem Canvas Low-Top Sneaker</h2>
                        <p>150$</p>
                        <div class="icons">
                            <a href="{{ route("shoping") }}"><div class="heart">&#10084;</div></a>
                            
                        </div>
                    </div>
                </div>
                
                <div class="row row-center row-items items-5">
                    <div class="row-img">
                        <img src="{{ asset('assets/img/arrivel/arrivel_5.png') }}">
                    </div>
                    <div class="row-a items-overlay">
                        <h6>Canvas</h6>
                        <h2>Lorem Canvas Low-Top Sneaker</h2>
                        <p>150$</p>
                        <div class="icons">
                            <a href="{{ route("shoping") }}"><div class="heart">&#10084;</div></a>

                        </div>
                    </div>
                </div>
                <div class="row row-last row-items items-6">
                    <div class="row-img">
                        <img src="{{ asset('assets/img/arrivel/arrivel_6.png')}}">
                    </div>
                    <div class="row-a items-overlay">
                        <h6>Canvas</h6>
                        <h2>Lorem Canvas Low-Top Sneaker</h2>
                        <p>150$</p>
                        <div class="icons">
                            <a href="{{ route("shoping") }}"><div class="heart">&#10084;</div></a>

                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="clear"></div>
        </div>
        
    </div>

    <!-- Shipping  -->
    <div class="ship">
        <div class="ship-1 ship1">
            <img src="{{ asset('assets/img/icon/icon_1.png') }}">
            <h3>Fast shipping</h3>
            <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
            <div class="ship-overlay"></div>
        </div>
        
        <div class="ship-1 ship2">
            <img src="{{ asset('assets/img/icon/icon_2.png') }}">
            <h3>Fast shipping</h3>
            <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
            <div class="ship-overlay"></div>
        </div>
        <div class="ship-1 ship3">
            <img src="{{ asset('assets/img/icon/icon_3.png') }}">
            <h3>Free shipping</h3>
            <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
            <div class="ship-overlay"></div>
        </div>
        <div class="ship-1 ship4" style="float: right">
            <img src="{{ asset('assets/img/icon/icon_4.png') }}">
            <h3>Fast shipping</h3>
            <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
            <div class="ship-overlay"></div>
        </div>
        
    </div>

    <!-- instagram Photo -->
    <div class="instagram">
        <div class="photo">
            <img src="{{ asset('assets/img/instagram/inst_1.png') }}">
            <div class="photo-overlay">
                <a href="shopcatogry.php"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        
        <div class="photo">
            <img src="{{ asset('assets/img/instagram/inst_2.png') }}">
            <div class="photo-overlay">
                <a href="shopcatogry.php"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        
        <div class="photo photo-3">
            <img src="{{ asset('assets/img/instagram/inst_3.png') }}">
            <div class="photo-overlay">
                <a href="shopcatogry.php"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        
        <div class="photo photo-4">
            <img src="{{ asset('assets/img/instagram/inst_4.png') }}">
            <div class="photo-overlay">
                <a href="shopcatogry.php"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        
        <div class="photo photo-last">
            <img src="{{ asset('assets/img/instagram/inst_5.png') }}">
            <div class="photo-overlay">
                <a href="shopcatogry.php"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        
        <div class="clear"></div>
    </div>
    @stop