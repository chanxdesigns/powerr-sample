<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Rubik" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link href="../../assets/css/styles.css" rel="stylesheet">
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

        <a class="navbar-brand" href="/">
            <img class="logo" src="../../assets/img/power-logo.png"> Powerr Sample
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>

            <div id="google_translate_element" class="mr-2"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            @if(session('email'))
                <span class="ml-3 mr-3">Hi {{session('name')}}</span>
                <a href="logout" class="btn btn-primary ml-2">Log out</a>
            @endif
        </div>
        </div>
    </nav>
</header>

@yield('content')

<div class="container">
    <footer>
        <h6 class="text-center"><strong>GET IN TOUCH</strong></h6>
        <div class="text-center">
            <a href="mailto:panel@i-apaconline.com" class="text-center">Contact</a>
        </div>

        <div class="mb-5"></div>

        <p class="text-center attribution">&copy; Powerr Sample, 2018</p>
        <p class="small text-center owner">A brand of <a href="http://i-apaconline.com" target="_blank">iApac Online</a></p>
    </footer>
</div>
<script src="../../assets/js/panel.js"></script>
</body>
</html>