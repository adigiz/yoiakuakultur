<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yoiakuakultur Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Bulma -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        <!-- Styles -->
        <style>
          .section {
              min-height: 100vh;
          }
        </style>
    </head>
    <body>
        <div id="app">
            <div class="section">
                <div class="container" style="max-width: 50vh; margin-bottom: 2rem;">
                    <h1 class="title has-text-info has-text-weight-light has-text-centered">Mengapa Budidaya Dengan Kami?</h1>
                </div>
                <div class="container">
                    <div class="columns">
                        <div class="column">
                            <card-component card-title="Modal Gotong Royong" card-content="Dengan digunakannya modal gotong royong sehingga tidak harus menggunakan modal besar"/>
                        </div>
                        <div class="column">
                            <card-component card-title="High Return" card-content="Investasi menarik di budidaya perikanan dengan hasil yang sangat menarik"/>
                        </div>
                        <div class="column">
                            <card-component card-title="Teknologi Modern" card-content="Kegagalan terhadap hasil panen memiliki kemungkinan yang sangat kecil karena menggunakan teknologi modern"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
