<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
      }

      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }

      .carousel-inner img {
        width: 100%;
        margin: auto;
        min-height: 200px;
      }

      @media (max-width: 600px) {
        .carousel-caption {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    {{-- @include('common.navigation') --}}
    <x-navigation></x-navigation>
    {{-- @include('components.carousel') --}}
    <x-carousel></x-carousel>
    @hasSection('content')
        @yield('content')
    @else
        <h3 class="text-center my-3 text-info">No content found.</h3>
    @endif
    {{-- @includeIf('components.footer') --}}
    <x-footer></x-footer>
  </body>
</html>
