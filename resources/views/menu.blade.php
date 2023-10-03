<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <style>
body {
  margin: 0;
}

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

.bottomNav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.bottomNav a:hover {
  background: #f1f1f1;
  color: black;
}

.bottomNav a.active {
  background-color: #04AA6D;
  color: white;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
}
.icons{
    width: 40px
}
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
<div class="bottomNav">
        <a href="/meldingen" class="icon-link">
            <img class="icons" src="images/meldingen.svg" alt="meldingen">
        </a>
        <a href="/menu" class="icon-link">
            <img class="icons" src="images/home.svg" alt="home">
        </a>
        <a href="/winkelwagen" class="icon-link">
            <img class="icons" src="images/winkelwagen.svg" alt="winkelwagen">
        </a>
        <a href="/coupon" class="icon-link">
            <img class="icons" src="images/coupon.svg" alt="coupon">
        </a>
    </div>
</body>
</html>