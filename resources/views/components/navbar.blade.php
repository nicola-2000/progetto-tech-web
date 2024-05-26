<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Bootstrap in PHP</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-nav {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: 100%;
            margin-right: 15px; /* Aggiungi un margine a destra per allineare i link a destra */
        }
        .navbar-nav .nav-item {
            margin-left: 15px; /* Aggiungi un margine tra i link */
        }
        @media (max-width: 992px) {
            .navbar-nav {
                justify-content: center; /* Centra i link quando la larghezza della finestra è inferiore a 992px */
                margin-right: 0; /* Rimuovi il margine a destra */
            }
            .navbar-nav .nav-item {
                margin-left: 0; /* Rimuovi il margine tra i link */
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="/">
        <img src="{{url('/images/logo.png')}}" width="200" height="60" class="d-inline-block align-top" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <img src="{{url('/images/list.svg')}}" alt="">
        </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Chi Siamo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Informazioni utili</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login-customer">Log-in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register-customer">Registrati</a>
            </li>
        </ul>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
