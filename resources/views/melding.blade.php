<<<<<<< Updated upstream
<!-- hier komt medingen pagina -->
=======
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styling.css">
    <title>Meldingen</title>
</head>
<body>

<center><h2>Meldingen</h2><center>


<div class="container">
    <div class="content">
      <div class="text">Nieuwe producten zijn binnen!</div>
      <div class="arrow"></div>
    </div>
    <div class="dropdown-content">
      <div class="info-text">Onze nieuwe broodjes vers gemaakt met sla, ui en ons geheim ingredient: ananas</div>
    </div>
  </div>

<hr class="solid">

<div class="container">
    <div class="content">
      <div class="text">Uw bestelling is klaar over 15 minuten!</div>
      <div class="arrow"></div>
    </div>
    <div class="dropdown-content">
      <div class="info-text">U kunt uw bestelling over 15 minutes ophalen bij ons.</div>
    </div>
  </div>

<hr class="solid">

<div class="container">
    <div class="content">
      <div class="text">Nieuwe acties beschikbaar!</div>
      <div class="arrow"></div>
    </div>
    <div class="dropdown-content">
      <div class="info-text">Onze nieuwe deals die u zeker zullen verbazen. U kunt dit niet missen!</div>
    </div>
  </div>

<hr class="solid">

<div class="container">
    <div class="content">
      <div class="text">Nieuwe producten zijn binnen!</div>
      <div class="arrow"></div>
    </div>
    <div class="dropdown-content">
      <div class="info-text">Onze nieuwe broodjes vers gemaakt met sla, ui en ons geheim ingredient: ananas</div>
    </div>
  </div>

<hr class="solid">

<div class="container">
    <div class="content">
      <div class="text">Uw bestelling is klaar over 15 minuten!</div>
      <div class="arrow"></div>
    </div>
    <div class="dropdown-content">
      <div class="info-text">U kunt uw bestelling over 15 minutes ophalen bij ons.</div>
    </div>
  </div>

<hr class="solid">

<div class="container">
    <div class="content">
      <div class="text">Nieuwe acties beschikbaar!</div>
      <div class="arrow"></div>
    </div>
    <div class="dropdown-content">
      <div class="info-text">Onze nieuwe deals die u zeker zullen verbazen. U kunt dit niet missen!</div>
    </div>
  </div>

<hr class="solid">

<div class="container">
    <div class="content">
      <div class="text">Nieuwe producten zijn binnen!</div>
      <div class="arrow"></div>
    </div>
    <div class="dropdown-content">
      <div class="info-text">Onze nieuwe broodjes vers gemaakt met sla, ui en ons geheim ingredient: ananas</div>
    </div>
  </div>

<hr class="solid">

<div class="container">
    <div class="content">
      <div class="text">Uw bestelling is klaar over 15 minuten!</div>
      <div class="arrow"></div>
    </div>
    <div class="dropdown-content">
      <div class="info-text">U kunt uw bestelling over 15 minutes ophalen bij ons.</div>
    </div>
  </div>

<hr class="solid">

<div class="container">
    <div class="content">
      <div class="text">Nieuwe acties beschikbaar!</div>
      <div class="arrow"></div>
    </div>
    <div class="dropdown-content">
      <div class="info-text">Onze nieuwe deals die u zeker zullen verbazen. U kunt dit niet missen!</div>
    </div>
  </div>

<hr class="solid">
<hr class="solid">

<div class="topImg"><img src="images/wavesgroenboven.svg"></div>
<div class='botImg'><img src="images/wavesgroenonder.svg"></div>

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
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const containers = document.querySelectorAll('.container');

      containers.forEach(container => {
        const content = container.querySelector('.content');
        const dropdownContent = container.querySelector('.dropdown-content');

        content.addEventListener('click', function() {
          dropdownContent.classList.toggle('active');
        });
      });
    });
  </script>
>>>>>>> Stashed changes
