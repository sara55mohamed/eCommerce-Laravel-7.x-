    {{-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Category</title>
    </head>
    <body>
        Category {{ $the_id }}
    </body>
    </html> --}}
    {{-- //parent --}}
    @extends('layout.master')
        {{-- // child --}}
        @section('title','Category')
        @section('content')
        <link rel="stylesheet" href="{{ asset('assets/css/catocrydetails.css') }}">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

            <div class="pagename1">HOME /  catocry details</div>
            
            
            <div class="frist_div">

                <div class="frist_left">
                


    <div class="container">
    <div class="mySlides">
    <div class="numbertext">1 / 4</div>
    <img src="{{ asset('assets/img/product_details/prodect_details_1.png')}}" style="width:100%">
    </div>

    <div class="mySlides">
    <div class="numbertext">2 / 4</div>
    <img src="{{ asset('assets/img/product_details/prodect_details_2.png')}}" style="width:100%">
    </div>

    <div class="mySlides">
    <div class="numbertext">3 / 4</div>
    <img src="{{ asset('assets/img/product_details/prodect_details_3.png')}}" style="width:100%">
    </div>

    <div class="mySlides">
    <div class="numbertext">4 / 4</div>
    <img src="{{ asset('assets/img/product_details/prodect_details_4.png')}}" style="width:100%">
    </div>





    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>


    <div class="caption-container">
    <p id="caption"></p>
    </div>

    <div class="row">
    <div class="column">
    <img class="demo cursor" src="{{ asset('assets/img/product_details/prodect_details_1.png')}}" style="width:100%" onclick="currentSlide(1)" alt="Long Sleeve TShirt
    $150.00">
    </div>
    <div class="column">
    <img class="demo cursor" src="{{ asset('assets/img/product_details/prodect_details_2.png')}}" style="width:100%" onclick="currentSlide(2)" alt="Long Sleeve TShirt 
    $150.00">
    </div>
    <div class="column">
    <img class="demo cursor" src="{{ asset('assets/img/product_details/prodect_details_3.png')}}" style="width:100%" onclick="currentSlide(3)" alt="Long Sleeve TShirt
    $150.00">
    </div>
    <div class="column">
    <img class="demo cursor" src="{{ asset('assets/img/product_details/prodect_details_4.png')}}" style="width:100%" onclick="currentSlide(4)" alt="Long Sleeve TShirt
    $150.00">
    </div>


    </div>
    </div>
                    
        </div>
                <div class="frist_right" style="width:40%;">
                    <h1>Faded SkyBlu Denim Jeans</h1>
                    <p class="p"><b>$150.0</b></p>
                    <br>
                    <br>
                    <p class="pa"> Category :<span>Household</span>  </p>
                    <br>
                    <p class="pa">Availibility : In Stock</p>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <br>
                    <p>
                        
                    Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time.
                    </p>
                    <br>
                    
                    <div class="couter">
                        <input type="button"value="+" onclick="pouns()" ><input id="pouns" type="text"value="1" min="1"><input type="button"value="-"onclick="minse()">
                    </div>
                    <div class="AddToCart">
                        <p>AddToCart</p>
                    </div>
                    <div class="love"><p>&#10084;</p></div>
                    <div class="media">
                    <div class="face"><a href="https://facebook.com" target="_blank"><img src="{{ asset('assets/img/icon/feature_icon_1.png')}}" style="width:30px;height:30px"></a></div>
                        <div class="face"><a href="https://facebook.com" target="_blank"><img src="{{ asset('assets/img/icon/feature_icon_1.png')}}" style="width:30px;height:30px"></a></div>
                        <div class="face"><a href="https://facebook.com" target="_blank"><img src="{{ asset('assets/img/icon/feature_icon_1.png')}}" style="width:30px;height:30px"></a></div>

                    </div>
                </div>
        </div>
            <div class="clear"></div>

    <div class="second_div">
        <div class="Description">Description</div>
    <div class="pargraph">
        <p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and

    It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less</p>
        
        
        </div>
    </div>
                                <div class="clear"></div>

        <div class="BestSellers">
            
            <h1>BestSellers</h1>
            <div>
            <div class="container2">
    <img src="{{ asset('assets/img/category/category_1.png')}}" alt="Avatar" class="image2">
    <div class="overlay2">
    <div class="text2"><div class="word2">90$</div><div class="word2">&#10084;</div></div>
    </div>
    </div>
    <div class="container2">
    <img src="{{ asset('assets/img/category/category_2.png')}}" alt="Avatar" class="image2">
    <div class="overlay2">
    <div class="text2"><div class="word2">90$</div><div class="word2">&#10084;</div></div>
    </div>
    </div>
    <div class="container2">
    <img src="{{ asset('assets/img/category/category_3.png')}}" alt="Avatar" class="image2">
    <div class="overlay2">
    <div class="text2"><div class="word2">90$</div><div class="word2">&#10084;</div></div>
    </div>
    </div>
    </div>
    <div style="width:98%">   
        <div class="container2">
    <img src="{{ asset('assets/img/category/category_4.png')}}" alt="Avatar" class="image2">
    <div class="overlay2">
    <div class="text2"><div class="word2">90$</div><div class="word2">&#10084;</div></div>
    </div>
            </div>
            
        </div> 
            
            <div class="clear"></div>
            
    </div>



    <script src="{{ asset('assets/js/catocrydetails.js')}}"></script>  



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
    <div class="instagram">
    <div class="photo">
    <img src="{{ asset('assets/img/instagram/inst_1.png')}}">
    <div class="photo-overlay">
        <a href="{{ route("shoping") }}"><i class="fab fa-instagram"></i></a>
    </div>
    </div>

    <div class="photo">
    <img src="{{ asset('assets/img/instagram/inst_2.png')}}">
    <div class="photo-overlay">
        <a href="{{ route("shoping") }}"><i class="fab fa-instagram"></i></a>
    </div>
    </div>

    <div class="photo photo-3">
    <img src="{{ asset('assets/img/instagram/inst_3.png')}}">
    <div class="photo-overlay">
        <a href="{{ route("shoping") }}"><i class="fab fa-instagram"></i></a>
    </div>
    </div>

    <div class="photo photo-4">
    <img src="{{ asset('assets/img/instagram/inst_4.png')}}">
    <div class="photo-overlay">
        <a href="{{ route("shoping") }}"><i class="fab fa-instagram"></i></a>
    </div>
    </div>

    <div class="photo photo-last">
    <img src="{{ asset('assets/img/instagram/inst_5.png')}}">
    <div class="photo-overlay">
        <a href="{{ route("shoping") }}"><i class="fab fa-instagram"></i></a>
    </div>
    </div>

    <div class="clear"></div>
        @stop