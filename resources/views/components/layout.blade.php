<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description"
    content="Desde esta página podrá consultar y confirmar diplomas de estudiantes egresados de la Escuela de Educación Para el Desarrollo de Colombia - ESEDCO del departamento de Arauca.">
  <meta name="keywords" content="Verificar diplomasm Diplomas, Certificados, ESEDCO, Saravena, Tame, Arauquita, Arauca">
  <meta name="author" content="Emerson Cabrera">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700&display=swap" rel="stylesheet">

  <link rel="icon" href="https://certificados.esedco.edu.co/img/favicon.png" type="image/png">


  <title>{{ env('APP_NAME') }}</title>

  @vite('resources/css/app.css')
</head>

<body class="bg-color1 bg-logo font-mulish">
  <x-header />

  <x-wrapper>
    <x-content>
      {{ $slot }}
    </x-content>
  </x-wrapper>

  <x-footer />
</body>

</html>
