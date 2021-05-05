@if(isset($headerColor) && $headerColor == true) <div class="header"> @endif
    <div class="container">
        <div class="navbar">
            <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="125px"></a>
            </div>
            <nav>
            <ul id="MenuItems">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('products') }}">Products</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
                <li><a href="#footer">Contact</a></li>
                <li><a href="{{ route('auth') }}">Login/Register</a></li>
            </ul>
            </nav>
            <a href="{{ route('cart') }}"><img src="{{ asset('assets/images/cart.png') }}" alt="cart" width="30px" height="30px"></a>
            <img src="{{ asset('assets/images/menu.png') }}" alt="menu" class="menu-icon" onclick="menuToggle()">
        </div>
        @if(isset($landing) && $landing == true)
        <div class="row">
            <div class="col-2">
            <h1>Give Your Workout<br>A New Style!</h1>
            <p>Success isn't always about greatness. It's about consistency. Consistent<br>hard work gain success. Greatness will come.</p>
            <a href="" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
            <img src="{{ asset('assets/images/image1.png') }}" alt="image1">
            </div>
        </div>
        @endif
    </div>
@if(isset($headerColor) && $headerColor == true) </div> @endif