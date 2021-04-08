<div class="row">
    <div class="col 2"></div>
    <div class="col 3">Name</div>
    <div class="col 2">Quantity</div>
    <div class="col 2">Tone Price</div>
    <div class="col 3">Total Price</div>
</div><hr/>
<div class="row">
    <div class="col 2"><img src="{{ asset('images/product_image/')."/".$product_data->product_image }}" width="150" height="250" alt=""></div>
    <div class="col 3">{{ $product_data->product_name}} </div>
    <div class="col 2">{{$cart_data->quantity }} Tone</div>*
    <div class="col 2">₹{{$cart_data->price}}</div>=								
    <div class="col 3">₹<span id="cart_total_price">{{$cart_data->total_price}}</span></div>
</div>