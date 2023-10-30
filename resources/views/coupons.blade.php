<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupons</title>
    <link rel="stylesheet" href="css\styling.css">
</head>

<body>
<div class="topImg"><img src="images/wavesgroenboven.svg" class="waveMaxTop"></div>
<div class="botImg"><img src="images/wavesgroenonder.svg" class="waveMaxBot"></div>
  
 
@component('components.burger')
@endcomponent

  <h1 class="Pagetitle">Coupons</h1>
  

<div class="tussenkop">
    <div class="line left-line"></div>
        <div class="titletext2">Populair</div>
    <div class="line right-line"></div>
</div>  
<div class="populair">
@php
    $count = 0; // Initialize a counter variable
@endphp

@foreach ($coupons as $coupon)
    @if ($coupon->populair && $count < 2) {{-- Check if it's a popular product and the count is less than 2 --}}
        <div class="@if ($count == 0) popI1 @else popI2 @endif">
        <div class="containerbroodjeP">
            <img class="imgbroodje" src="images/{{$coupon->afbeeldingnaam}}">
        </div>
        <div class="popextra">
            <div class="product-infoP">
                <h3 class="producttitle">{{$coupon->naam}}</h3>
                <p class="beschrijving">{{$coupon->beschrijving}}</p>
            </div>
        
            <div class="buttonplaceP">
                <button class="@if ($count == 0) winkelwagenknopG @else winkelwagenknop @endif"><img class="winkelwagenimg" src="images/winkelwagen.svg"></button>
                <p class="prijs">{{$coupon->procent}}%</p>
            </div>
        </div>
        </div>
        @php
            $count++; // Increment the counter
        @endphp
    @endif
@endforeach
</div>

<div class="tussenkop">
    <div class="line left-line"></div>
        <div class="titletext2">Coupons</div>
    <div class="line right-line"></div>
</div>  

<div class="productcontainer">
    @foreach ($coupons as $coupon)
    <div class="containerbroodje">
        <img class="imgbroodje" src="images/{{$coupon->afbeeldingnaam}}">
    </div>
        <div class="product-info">
            <h3 class="producttitle">{{$coupon->naam}}</h3>
            <p class="beschrijving">{{$coupon->beschrijving}}</p>
        </div>
        
        <div class="buttonplace2">
            <button class="winkelwagenknop"><img class="winkelwagenimg" src="images/winkelwagen.svg"></button>
            <p class="prijs">{{$coupon->procent}}%</p>
        </div>
    <div class="line2"></div>
    @endforeach
</div>
<div class="line2"></div>
<div class="line2"></div>

@component('components.footer')
@endcomponent
</body>
</html>