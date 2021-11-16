        {{-- //parent --}}
        @extends('layout.master') 
        {{-- // child --}}
            @section('title','poducts ')

            @section('content')
                {{-- @foreach()

                @dd($shoping)


                @endforeach --}}
                {{-- @dd($shoping) --}}

                {{-- @dd($shoping[2]->category) --}}

            <link rel="stylesheet" href="{{ asset('assets/css/shopcatogry.css') }}">
            <div class="body">  
            <div class="pagename1">HOME / shop catogry</div>
            <!--body -->
            <div class="catogrybody">
                
                <div class="right">
                <div style="width:98%">   
                        <div class="container">
        <img src="{{ asset('assets/img/category/category_1.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div>
                    <div class="container">
                    <img src="{{ asset('assets/img/category/category_2.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div>
                    <div class="container">
                    <img src="{{ asset('assets/img/category/category_3.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div>
                </div>
                    <div style="width:98%">   
                        <div class="container">
        <img src="{{ asset('assets/img/category/category_4.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div><div class="container">
                    <img src="{{ asset('assets/img/category/category_5.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div>
                    <div class="container">
                    <img src="{{ asset('assets/img/category/category_6.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div>
                </div>
                    <div style="width:98%">   
                        <div class="container">
        <img src="{{ asset('assets/img/category/category_7.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div><div class="container">
                    <img src="{{ asset('assets/img/category/category_8.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div>
                    <div class="container">
                    <img src="{{ asset('assets/img/category/category_9.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90</div> <div class="word">&#10084;</div></div>
        </div>
        </div>
                </div>
                    <div style="width:98%">   
                        <div class="container">
        <img src="{{ asset('assets/img/category/category_10.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div><div class="container">
                    <img src="{{ asset('assets/img/category/category_11.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div>
                    <div class="container">
                    <img src="{{ asset('assets/img/category/category_12.png')}}" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><div class="word">90$</div><div class="word">&#10084;</div></div>
        </div>
        </div>
                </div>  
                    
                </div>
                <div class="left"> 
                    <div class="fleft">
                                    <h5 class="hnav"><a>BROWSE CATEGORIES</a></h5>
                                    <h5><a href="{{ route("category") }}">Fruits and Vegetables</a></h5>
                                    <h5><a href="{{ route("category") }}">Electronics</a></h5> 
                                    <h5><a href="{{ route("category") }}">Cooking</a></h5> 
                                    <h5><a href="{{ route("category") }}">Beverages</a></h5>                      
                                    <h5><a href="{{ route("category") }}">Home and Cleaning</a></h5>
                        </div>
            



                    <div class="sleft">
                        <h5 class="hnav">PRODECT FILTERS</h5>
                        <form action=""method="">
                            prands<br>
                            <input type="checkbox" name="vehicle1" value="apple"> apple<br>
                            <input type="checkbox" name="vehicle2" value="Asus"> Asus<br>
                            <input type="checkbox" name="vehicle3" value="Gionee" >Gionee<br>
                            <input type="checkbox" name="vehicle3" value="micromax" >micromax<br>
                            <input type="checkbox" name="vehicle3" value="samusng" >samsung<br>
        
                        
                        </form>
                        
                        <hr>
                        <form action=""method="">
                            color<br>
                            <input type="checkbox" name="vehicle1" value="black"> Black<br>
                            <input type="checkbox" name="vehicle2" value="BlackLeather"> Black Leather<br>
                            <input type="checkbox" name="vehicle3" value="Blackwithred" >Black with red<br>
                            <input type="checkbox" name="vehicle3" value="GLod" >Gold<br>
                            <input type="checkbox" name="vehicle3" value="Spacegrey" >Spacegrey<br>
        
                        
                        </form>
                                        

                    </div>
                    
                    
                </div>
                                <div class="clear"></div>

                <hr>
                <br>
            </div>
            <div class="clear"></div>
            <!-- Shipping  -->
            <div class="ship">
                <div class="ship-1 ship1">
                    <img src="{{ asset('assets/img/icon/icon_1.png')}}">
                    <h3>Fast shipping</h3>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    <div class="ship-overlay"></div>
                </div>
                
                <div class="ship-1 ship2">
                    <img src="{{ asset('assets/img/icon/icon_2.png')}}">
                    <h3>Fast shipping</h3>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    <div class="ship-overlay"></div>
                </div>
                <div class="ship-1 ship3">
                    <img src="{{ asset('assets/img/icon/icon_3.png')}}">
                    <h3>Free shipping</h3>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    <div class="ship-overlay"></div>
                </div>
                <div class="ship-1 ship4" style="float: right">
                    <img src="{{ asset('assets/img/icon/icon_4.png')}}">
                    <h3>Fast shipping</h3>
                    <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    <div class="ship-overlay"></div>
                </div>
                
            </div>
            
            <!-- instagram Photo -->
                    <br>
                <br>
                <br>

            <div class="instagram">
                <div class="photo">
                    <img src="{{ asset('assets/img/instagram/inst_1.png')}}">
                    <div class="photo-overlay">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="photo">
                    <img src="{{ asset('assets/img/instagram/inst_2.png')}}">
                    <div class="photo-overlay">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="photo photo-3">
                    <img src="{{ asset('assets/img/instagram/inst_3.png')}}">
                    <div class="photo-overlay">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="photo photo-4">
                    <img src="{{ asset('assets/img/instagram/inst_4.png')}}">
                    <div class="photo-overlay">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="photo photo-last">
                    <img src="{{ asset('assets/img/instagram/inst_5.png')}}">
                    <div class="photo-overlay">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="clear"></div>
            </div>
            </div>
            @stop