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
  
  <h1 class="Pagetitle">Menu</h1>
  

<!-- <div class="filtermenu"><h3>hierkomt filter menu</h3></div> -->

<div class="tussenkop">
    <div class="line left-line"></div>
        <div class="titletext2">Populair</div>
    <div class="line right-line"></div>
</div>  
<div class="productcontainer">
@foreach ($products as $product)
    <div class="containerbroodje">
        <img class="imgbroodje" src="images/{{$product->afbeeldingnaam}}">
    </div>
    <div class="product-info">
        <h3 class="producttitle">{{ $product->naam() }}</h3> <!-- Use the custom method to get the product name -->
        <p class="beschrijving">{{ $product->beschrijving }}</p>
        <img src="images/vegan.svg" class="@if ($product->vegan) veganon @else veganoff @endif">
    </div>
    
    <div class="buttonplace">
        <button class="winkelwagenknop"><img class="winkelwagenimg" src="images/winkelwagen.svg"></button>
        <p class="prijs">€{{$product->prijs}}</p>
    </div>
    <div class="line2"></div>
@endforeach
</div>

@component('components.footer')
@endcomponent
</body>
</html>