<main>
    <div class="contenitoremain">
        <div class="container img-comics">
            @foreach ($comics as $comic)
                <div class="contenuto">
                    <img src="{{ $comic['thumb'] }}" alt="img">
                    <div>
                        {{ $comic['title'] }}
                    </div>
                    <div>
                        {{ $comic['price'] }}
                    </div>
                    <div>
                        {{ $comic['series'] }}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="bgcolor">
            <div class=" container d-flex justify-content-between contenitoreimg align-items-center">
                <span>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="img1">
                    <span>Digital Comics</span>
                </span>
                <span>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="img2">
                    <span>Dc Mercandise</span>
                </span>
                <span>
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="img3">
                </span>
                <span>Shop Locator</span>
                <span>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="img4">
                </span>
                <span>Subscription</span>
            </div>
        </div>
    </div>
</main>

