<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <style>


.bottomNav {
   position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #a0c49d;
    color: white;
    text-align: center;
    display: grid;
    grid-template-columns: auto auto auto auto;
    height: 60px;}





.main {
  padding: 16px;
  margin-bottom: 30px;

.imgbroodje{
  width: 20%;
  height: 20%;
}


</style>
</head>

<body>
  <div class="populair">
  <h1>populair</h1>

</div>

<div class="container">
    <div class="grid">
        @foreach ($products as $product)
        <div data-category='{{$product["categorie_categorieid"]}}' class="grid-item">
            <div class="product-info">
                <h3>{{$product->naam}}</h3>
                <p>€{{$product->prijs}}</p>
                <img class="imgbroodje" src="images/{{$product->afbeeldingnaam}}">
            </div>
        </div>
        @endforeach
    </div>
</div>

@component('components.footer')
@endcomponent

</body>
</html>