<link rel="stylesheet" href="css\botnav.css">
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