@extends('master_front')

@section('content')
<!-- start cart items details -->
<div class="small-container cart-page">
    <table>
        <tr>
            <th>Product</th>
            <th style="text-align: center;">Quantity</th>
            <th>Subtotal</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="assets/images/buy-1.jpg" alt="buy-1">
                    <div>
                        <p>Red Printed T-Shirt</p>
                        <small>Price: $50.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td style="text-align: center;">1</td>
            <td>$50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="assets/images/buy-2.jpg" alt="buy-2">
                    <div>
                        <p>Red Printed T-Shirt</p>
                        <small>Price: $80.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td style="text-align: center;">1</td>
            <td>$80.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="assets/images/buy-3.jpg" alt="buy-3">
                    <div>
                        <p>Red Printed T-Shirt</p>
                        <small>Price: $75.00</small>
                        <br>
                        <a href="">Remove</a>
                    </div>
                </div>
            </td>
            <td style="text-align: center;">1</td>
            <td>$75.00</td>
        </tr>
    </table>

    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$200.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$20.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$220.00</td>
            </tr>
        </table>
    </div>

    <div class="checkout">
            <a href="" class="btn">Checkout &#8594;</a>
    </div>
</div>
<!-- end cart items details -->
@endsection