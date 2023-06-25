<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container-jumbo">
        <img class="img-jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
    <div class="black">
        {{-- Card --}}
        @foreach ($comics as $comic)
            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>

            <div class="card">
                <div class="container-image">
                    <img class="cards" src="{{ $comic['image'] }}" alt="title">
                </div>
                <div class="text-container">
                    <div>{{ $comic['title'] }}</div>
                    <div>{{ $comic['price'] }}</div>
                    <div>{{ $comic['series'] }}</div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="color-cont">
        <div class="max-container">
            <div class="mini-main">
                <div class="container">
                    <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                        alt="">
                    <h5>DIGITAL COMICS</h5>
                </div>
                <div class="container">
                    <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                        alt="">
                    <h5>DC MERCHANDISE</h5>
                </div>
                <div class="container">
                    <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                        alt="">
                    <h5>SUBSCRIPTION</h5>
                </div>
                <div class="container">
                    <img class="img-main" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                        alt="">
                    <h5>COMIC SHOP LOCATOR</h5>
                </div>
                <div class="container">
                    <img class="img-main" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"
                        alt="">
                    <h5>DC POWER VISA</h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
