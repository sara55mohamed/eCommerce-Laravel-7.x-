        <!-- Header -->
        <div class="nav">
            <div class="content">
                <div class="logo">
                    <a href="{{ route('home') }}"> <img src="{{ asset('assets/img/logo.png') }}"></a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="drop">
                            <a>Shop</a>
                            <ul class="list">
                                <li><a href="{{ route('category') }}">category</a></li>
                                <li><a href="{{ route('shoping') }}">products</a></li>
                            </ul>
                        </li>
                        <li class="drop">
                            <a href="#">pages</a>
                            <ul class="list">
                                <li><a href="#">login</a></li>
                                <li><a href="#">checkout</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
