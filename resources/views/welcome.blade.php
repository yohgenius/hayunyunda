<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kuda Zebra</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        

    <!-- Custom styles for this template -->
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                color: black;
            }

            .welcome{
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .navbar{
                padding-right: 10%;
                text-align: right;
                background-color: #603e11;
            }

            .kuda{
                text-align: right;
                margin-bottom: 10;
                margin-top: 5;
                margin-right: 8%;
                background-color: white;
            }
            
            .kuda a{

                color: red;
            }

            .hayunyunda{
              margin-left: 2%;
              margin-right: 2%;
            }

            .carouseldo{
              min-height: 200px;
              max-height: 300px;

            }
        </style>
    </head>
    <body>
        <div class="kuda">
        <a href="#">Log In</a> | <a href="#">Register</a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-inverse sticky-top">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Articles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">News</a>
          <a class="dropdown-item" href="#">Videos</a>
          <a class="dropdown-item" href="#">Others</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Us</a>
          <a class="dropdown-item" href="#">This Website</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Admin's Corner</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner carouseldo">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('images/1.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/2.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/3.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        <div class="content">
            <div class="welcome">
            <h1>Welcome to Hayu Nyunda</h1>
            </div>
            <div class="hayunyunda">
              <p style="text-indent: 18px">
                  In Hayu Nyunda, you will learn about Basa Sunda (Sundanese language), starts from the
                basic vocabularies, to sentence structures.
                This website's content will be based on English, Japanese and Basa Sunda itself. So, if you have something you don't
                understand just ask us at the 'Contact Us' section in the 'About' link.
              </p>
              <p style="text-indent: 18px">
                In Basa Sunda, there are three levels of language. The first is "Basa Lemes". It is used when you speak with someone older or someone whom you respect.
                In other word, basa lemes is the most polite level that you have to learn.
                The second is "Basa Loma", where you use it when you speak with someone 
                And the last is "Basa Kasar", it is the worst language in Basa Sunda, and you shouldn't use it so much.
                Usually people use this language when they are at their limit and wants to explode, or just annoyed by something/someone.
              </p>
              <p style="text-indent: 18px">
                Besides learning how the sundanese speaks, you also will learn the art and cultures. There are so many interesting things to learn besides the language.
                The Myths, for example. The famous <i>Prabu Siliwangi</i>, or King Siliwangi whose end of life become a <i>Maung</i>, or a tiger in english which is called <i>Ngahiang</i>.
              </p>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
