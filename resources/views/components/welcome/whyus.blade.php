<div class="container" style="max-width: 50vh; margin-bottom: 2rem;">
    <h1 class="title has-text-info has-text-weight-light has-text-centered">
        Mengapa Budidaya Dengan Kami?
    </h1>
</div>
<div class="container">
    <div class="columns is-multiline is-centered">
        @foreach ($card_contents as $card_content)
        <div class="column is-one-third">
            <card-component card-title="{{ $card_content->card_title }}"
            card-content="{{ $card_content->description }}" card-image='{{ asset("$card_content->path") }}' />
        </div>
        @endforeach
    </div>
</div>