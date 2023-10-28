<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>winkelwagen</title>
    <link rel="stylesheet" href="../css\styling.css">
</head>

<body>
<div class="topImg"><img src="../images/wavesgroenboven.svg" class="waveMaxTop"></div>
<div class="botImg"><img src="../images/wavesgroenonder.svg" class="waveMaxBot"></div>
  
  <h1 class="Pagetitle">winkelwagen</h1>
  

<!-- <div class="filtermenu"><h3>hierkomt filter menu</h3></div> -->

<div class="tussenkop">
    <div class="line left-line"></div>
        <div class="titletext2">bestelling</div>
    <div class="line right-line"></div>
</div>  
<div class="productcontainer">
@foreach ($products as $product)
    <div class="containerbroodje">
        <img class="imgbroodje" src="../images/{{$product->afbeeldingnaam}}">
    </div>
    <div class="product-info">
        
    <!-- <h3 class="producttitle">{{ $product->id }}</h3> -->
        <h3 class="producttitle">{{ $product->naam }}</h3> <!-- Use the custom method to get the product name -->
        <p class="beschrijving">{{ $product->beschrijving }}</p>
        <img src="../images/vegan.svg" class="@if ($product->vegan) veganon @else veganoff @endif">
    </div>
    
    <div class="buttonplace">
    <form method="POST" action="{{ route('deleteFromCart', ['user_id' => Auth::id(), 'productId' => $product->id]) }}">
    @csrf
    @method('DELETE')
        <button class="winkelwagenknop"><p class="delete">X</p></button>
    </form>
        <p class="prijs">€{{$product->prijs}}</p>
    </div>
    <div class="line2"></div>
@endforeach
</div>
<div class="tussenkop">
    <div class="line left-line"></div>
        <div class="titletext2">Nog iets extra</div>
    <div class="line right-line"></div>
</div>
<div class="populair">
@php
    $count = 0; // Initialize a counter variable
@endphp

@foreach ($popProducts as $popProduct)
    @if ($popProduct->populair && $count < 2) {{-- Check if it's a popular product and the count is less than 2 --}}
        <div class="@if ($count == 0) popI1 @else popI2 @endif">
        <div class="containerbroodjeP">
            <img class="imgbroodje" src="../images/{{$popProduct->afbeeldingnaam}}">
        </div>
        <div class="popextra">
            <div class="product-infoP">
                <h3 class="producttitle">{{$popProduct->naam}}</h3>
                <p class="beschrijving">{{$popProduct->beschrijving}}</p>
                <img src="../images/vegan.svg" class="@if ($popProduct->vegan) veganon @else veganoff @endif">
            </div>
            <div class="buttonplaceP">
            <form method="POST" action="{{ route('addToCart', ['user_id' => Auth::id(), 'productId' => $popProduct->id]) }}">
            @csrf
                <button type="submit" class="@if ($count == 0) winkelwagenknopG @else winkelwagenknop @endif"><img class="winkelwagenimg" src="../images/winkelwagen.svg"></button> 
            </form>
                <p class="prijs">€{{$popProduct->prijs}}</p>
            </div>
        </div>
        </div>
        @php
            $count++; // Increment the counter
        @endphp
    @endif
@endforeach
</div>

<link rel="stylesheet" href="../css\botnav.css">
<div class="bottomNav">
        <a href="/meldingen" class="icon-link">
            <img class="icons" src="../images/meldingen.svg" alt="meldingen">
        </a>
        <a href="/menu" class="icon-link">
            <img class="icons" src="../images/home.svg" alt="home">
        </a>
        <a href="/winkelwagen" class="icon-link">
            <img class="icons" src="../images/winkelwagen.svg" alt="winkelwagen">
        </a>
        <a href="/coupon" class="icon-link">
            <img class="icons" src="../images/coupon.svg" alt="coupon">
        </a>
    </div>
</body>
</html>