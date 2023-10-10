<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="css\styling.css">
</head>

<body>
  
  <h1 class="Pagetitle">menu</h1>

<div class="filtermenu"><h3>hierkomt filter menu</h3></div>

<div class="tussenkop">
    <div class="line left-line"></div>
        <div class="titletext2">populair</div>
    <div class="line right-line"></div>
</div>  
<div class="populair">
@php
    $count = 0; // Initialize a counter variable
@endphp

@foreach ($products as $product)
    @if ($product->populair && $count < 2) {{-- Check if it's a popular product and the count is less than 2 --}}
        <div class="@if ($count == 0) popI1 @else popI2 @endif">
            <img class="imgbroodjeP1" src="images/{{$product->afbeeldingnaam}}">
            <div class="product-info">
                <h3>{{$product->naam}}</h3>
                <p>€{{$product->prijs}}</p>
                <img src="images/vegan.png" class="@if ($product->vegan) veganon @else veganoff @endif">
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
        <div class="titletext2">broodjes</div>
    <div class="line right-line"></div>
</div>  

<div class="productcontainer">
    @foreach ($products as $product)
    <img class="imgbroodje" src="images/{{$product->afbeeldingnaam}}">
        <div class="product-info">
            <h3>{{$product->naam}}</h3>
            <p>€{{$product->prijs}}</p>
        </div>
        <img src="images/vegan.png" class="@if ($product->vegan) veganon @else veganoff @endif">
        <button class="winkelwagenknop"><img class="winkelwagenimg" src="images/winkelwagen.svg"></button>
    <div class="line"></div>
    @endforeach
</div>

@component('components.footer')
@endcomponent

</body>
</html>