<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css\styling.css">
</head>

<body>
<div class="topImg"><img src="images/wavesgroenboven.svg" class="waveMaxTop"></div>
<div class="botImg"><img src="images/wavesgroenonder.svg" class="waveMaxBot"></div>
  
=======
<div class="topImg"><img src="images/wavesgroenboven.svg" class="waveMaxTop"></div>
<div class="botImg"><img src="images/wavesgroenonder.svg" class="waveMaxBot"></div>
 
@component('components.burger')
@endcomponent

>>>>>>> Stashed changes
  <h1 class="Pagetitle">Menu</h1>
  

<!-- <div class="filtermenu"><h3>hierkomt filter menu</h3></div> -->

<div class="tussenkop">
    <div class="line left-line"></div>
        <div class="titletext2">Populair</div>
    <div class="line right-line"></div>
</div>  
<div class="populair">
@php
    $count = 0; // Initialize a counter variable
@endphp

@foreach ($products as $product)
    @if ($product->populair && $count < 2) {{-- Check if it's a popular product and the count is less than 2 --}}
        <div class="@if ($count == 0) popI1 @else popI2 @endif">
        <div class="containerbroodjeP">
            <img class="imgbroodje" src="images/{{$product->afbeeldingnaam}}">
        </div>
        <div class="popextra">
            <div class="product-infoP">
                <h3 class="producttitle">{{$product->naam}}</h3>
                <p class="beschrijving">{{$product->beschrijving}}</p>
                <img src="images/vegan.svg" class="@if ($product->vegan) veganon @else veganoff @endif">
            </div>
        
            <div class="buttonplaceP">
                <button class="@if ($count == 0) winkelwagenknopG @else winkelwagenknop @endif"><img class="winkelwagenimg" src="images/winkelwagen.svg"></button>
                <p class="prijs">€{{$product->prijs}}</p>
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
        <div class="titletext2">Broodjes</div>
    <div class="line right-line"></div>
</div>  

<div class="productcontainer">
    @foreach ($products as $product)
    <div class="containerbroodje">
        <img class="imgbroodje" src="images/{{$product->afbeeldingnaam}}">
    </div>
        <div class="product-info">
            <h3 class="producttitle">{{$product->naam}}</h3>
            <p class="beschrijving">{{$product->beschrijving}}</p>
            <img src="images/vegan.svg" class="@if ($product->vegan) veganon @else veganoff @endif">
        </div>
        
        <div class="buttonplace">
            <button class="winkelwagenknop"><img class="winkelwagenimg" src="images/winkelwagen.svg"></button>
            <p class="prijs">€{{$product->prijs}}</p>
        </div>
        <!-- INSERT INTO product_cart (product_id, cart_id) VALUES({{$product->id}}, 1); -->
    <div class="line2"></div>
    @endforeach
</div>

@component('components.footer')
@endcomponent
</body>
</html>