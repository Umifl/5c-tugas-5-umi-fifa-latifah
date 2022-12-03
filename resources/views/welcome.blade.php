<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ 'style.css' }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <header class="header-area overlay">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a href="#" class="navbar-brand">Fashionista</a>

                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <li><a href="#" class="nav-item nav-link active">Home</a></li>
                        <li><a href="#content" class="nav-item nav-link">About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="banner">
            <div class="container">
                <h1>Fashion No 1 Di Indonesia</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et tempor molestie.</p>
                <a href="{{ route('baju.index') }}" class="button button-primary">Lihat Data Pakaian</a>
            </div>
        </div>
    </header>

    <main>
        <section id="content" class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et tempor molestie. Pellentesque vestibulum dui sit amet dui volutpat sollicitudin. Etiam non erat finibus, iaculis nunc vel, convallis eros. Etiam efficitur tempor dui, vitae fringilla ipsum tristique quis. Aliquam erat volutpat. Cras ullamcorper ex et viverra vulputate. Nam lectus ligula, pretium nec risus nec, ultricies fringilla mauris. Proin quis venenatis neque, iaculis porta nulla. </p>
                    </div>
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et tempor molestie. Pellentesque vestibulum dui sit amet dui volutpat sollicitudin. Etiam non erat finibus, iaculis nunc vel, convallis eros. Etiam efficitur tempor dui, vitae fringilla ipsum tristique quis. Aliquam erat volutpat. Cras ullamcorper ex et viverra vulputate. Nam lectus ligula, pretium nec risus nec, ultricies fringilla mauris. Proin quis venenatis neque, iaculis porta nulla. </p>
                    </div>
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et tempor molestie. Pellentesque vestibulum dui sit amet dui volutpat sollicitudin. Etiam non erat finibus, iaculis nunc vel, convallis eros. Etiam efficitur tempor dui, vitae fringilla ipsum tristique quis. Aliquam erat volutpat. Cras ullamcorper ex et viverra vulputate. Nam lectus ligula, pretium nec risus nec, ultricies fringilla mauris. Proin quis venenatis neque, iaculis porta nulla. </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
  <script src="{{ 'script.js' }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
