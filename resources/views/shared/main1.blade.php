<main>
    <div class="contenitoremain">
        <div class="container img-comics">
            @foreach ($comics as $comic)
                <div class="contenuto">
                    <img src="{{ $comic['thumb'] }}" alt="img">
                    <div>
                        {{ $comic['title'] }}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</main>
