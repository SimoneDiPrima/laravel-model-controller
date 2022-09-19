<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
<header class="">
        <ul class="nav offset-3 col-6">
      <li class="nav-item">
        <a  href="#">Film italiani</a>
      </li>
      <li class="nav-item">
        <a href="#">FIlm Premiati</a>
      </li>
      <li class="nav-item">
        <a href="#">Film Hollywood</a>
      </li>
      <li class="nav-item">
        <a href="#">Film Bollywood</a>
      </li>
      </ul>
    </header>
    <main>
        <div class="container">
          @yield('main-section')
        </div>

    </main>

    
</body>
</html>