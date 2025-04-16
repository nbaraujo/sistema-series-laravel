<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width={device-width}, initial-scale=1.0">
  <title>{{ $title }} - Controle de Series</title>
  @vite(['resources/sass/app.scss'])
</head>
<body>
  <div class="container">
    <h1>{{ $title }}</h1>
    {{ $slot }}
  </div>
</body>
</html>