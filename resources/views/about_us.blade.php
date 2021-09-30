<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css' integrity='sha512-6KY5s6UI5J7SVYuZB4S/CZMyPylqyyNZco376NM2Z8Sb8OxEdp02e1jkKk/wZxIEmjQ6DRCEBhni+gpr9c4tvA==' crossorigin='anonymous' />
    <title>About Us</title>
</head>

<body>
    <div class="container">
        <header class="py-3 text-center">
            <h1 class="mb-4">About Us</h1>
            <ul class="row list-unstyled justify-content-between">
                @foreach($links as $link)
                <li class="col"><a href="{{ route($link['view']) }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
        </header>
    </div>
</body>

</html>