@extends('master_front')

@section('content')
<!-- start single product details -->
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="{{ asset('assets/images/gallery-1.jpg') }}" alt="gallery-1" width="100%" id="productImg">

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="{{ asset('assets/images/gallery-1.jpg') }}" alt="gallery-1" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('assets/images/gallery-2.jpg') }}" alt="gallery-2" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('assets/images/gallery-3.jpg') }}" alt="gallery-3" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('assets/images/gallery-4.jpg') }}" alt="gallery-4" width="100%" class="small-img">
                </div>
            </div>

        </div>
        <div class="col-2">
            <p>Home / T-Shirt</p>
            <h1>Red Printd T-Shirt by HRX</h1>
            <h4>$50.00</h4>
            <select>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>Large</option>
                <option>Medium</option>
                <option>Small</option>
            </select>
            <input type="number" value="1">
            <a href="" class="btn">Add To Cart</a>
            
            <h3>Product Details <i class="fa fa-indent"></i></h3>
            <br>
            <p>Give your summer wardrobe a style upgrade with the HRX Men's Active T-shirt. Team it with a pair of shorts for your morning workout or a denims for an evening out with the guys.</p>
        </div>
    </div>
</div>
<!-- end single product details -->

<!-- start title -->
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>
<!-- end title -->

<div class="small-container">
<!-- start all products products -->
<div class="row">
    <div class="col-4">
        <img src="{{ asset('assets/images/product-1.jpg') }}" alt="product-1">
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
    </div>
    <div class="col-4">
        <img src="{{ asset('assets/images/product-2.jpg') }}" alt="product-2">
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
    </div>
    <div class="col-4">
        <img src="{{ asset('assets/images/product-3.jpg') }}" alt="product-3">
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
        </div>
        <p>$50.00</p>
    </div>
    <div class="col-4">
        <img src="{{ asset('assets/images/product-4.jpg') }}" alt="product-4">
        <h4>Red Printed T-shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
        </div>
        <p>$50.00</p>
    </div>
</div>
<!-- end all products products -->
</div>
@endsection

@push('scripts')
    <!-- js for product details gallery -->
    <script>
        var productImg = document.getElementById("productImg");
        var smallImg = document.getElementsByClassName("small-img");

        smallImg[0].onclick = function () {
            productImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function () {
            productImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function () {
            productImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function () {
            productImg.src = smallImg[3].src;
        }
    </script>
@endpush