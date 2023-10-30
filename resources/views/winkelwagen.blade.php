<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styling.css">
    <title>Winkelwagen</title>
</head>
<body>
    <p>Hier komt de winkelwagen</p>

    <form action="{{ route('move.data') }}" method="POST">
    @csrf
    <button type="submit">Move Data</button>
</form>


@component('components.footer')
@endcomponent

</body>
</html>