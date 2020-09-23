<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/15518dc3da.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <script src="/public/js/main.js"></script>

    <title><?= $title ?></title>
</head>

<body class="container d-flex justify-content-center" style="background: #3e4853">
<div class="app shadow mt-4 mb-4 rounded d-inline-flex">

    <aside class="border-right border-secondary">
        <header class="border-bottom border-secondary text-center">
            <a href="/">
                <div class="logo"></div>
            </a>
            <a style="text-decoration: none; color: white" href="/add">
                <div class="add d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-primary btn-sm pl-5 pr-5">
                        Add note
                    </button>
                </div>
            </a>
        </header>

        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active text-center" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
               role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
            <a class="nav-link text-center" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
               role="tab" aria-controls="v-pills-profile" aria-selected="false">High</a>
            <a class="nav-link text-center" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
               role="tab" aria-controls="v-pills-messages" aria-selected="false">Medium</a>
            <a class="nav-link text-center" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
               role="tab" aria-controls="v-pills-settings" aria-selected="false">Low</a>
        </div>
    </aside>

    <?= $content ?>

</div>

</body>
</html>