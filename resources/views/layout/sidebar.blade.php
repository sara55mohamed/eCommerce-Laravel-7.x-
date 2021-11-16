        @section('sidebar')
    <!-- Footer -->
    <div class="foot">
        <div class="content">
            <div class="foot-row">
                <h4>Category</h4>
                <ul>
                    <li><a href="{{ route("category") }}">Male</a></li>
                    <li><a href="{{ route("category") }}">Female</a></li>
                    <li><a href="{{ route("category") }}">Fashion</a></li>
                    <li><a href="{{ route("category") }}">Shoes</a></li>
                </ul>
            </div>
            
            <div class="foot-row">
                <h4>Company</h4>
                <ul>
                    <li><a href="{{ route("shoping") }}">About</a></li>
                    <li><a href="{{ route("shoping") }}">News</a></li>
                    <li><a href="{{ route("shoping") }}">FAQ</a></li>
                    <li><a href="{{ route("shoping") }}">Contact</a></li>
                </ul>
            </div>
            
            <div class="foot-row">
                <h4>Address</h4>
                <ul>
                    <li><a href="{{ route("home") }}">200, blue block, NewYork</a></li>
                    <li><a href="{{ route("home") }}">+10 456 267 1678</a></li>
                    <li><a href="{{ route("home") }}">Contact89@Winter.Com</a></li>
                </ul>
            </div>
            
            <div class="foot-row foot-row-last">
                <h4>Newsletter</h4>
                <form>  
                    <input placeholder="Email Address" type="email">
                    <button>Subscribe</button>
                </form>
                
            </div>
            <div class="clear"></div>
            


        <div class="copyright_text">
            <p>Copyright &copy;2019 All rights reserved | This template is made by sara mohamed </p>
        </div>
        
        
    <!--        <div class="clear"></div>-->
        
    </div>
            </div>   
            @show 