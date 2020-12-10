<!DOCTYPE html>
<html>
  <head>
    <title>TP Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@1.0.0-beta.3.1/dist/css/axentix.min.css">
  </head>

  <body class="layout">
    <header>
      <nav class="navbar shadow-1 primary">
        <a href="{{ route('restaurant.index') }}" class="navbar-brand">Restaurants</a>
        <div class="navbar-menu ml-auto">
          <a class="navbar-link" href="{{ route('restaurant.index') }}">Accueil</a>
          <a class="navbar-link" href="{{ route('restaurant.create') }}">Ajouter</a>
        </div>
      </nav>
    </header>

    <main>
        <h1 style="margin-bottom: 1em">@yield('title')</h1>
        <div><p>@yield('contenu')</p></div>
        <div><p>@yield('formulaire')</p></div>
    </main>

    <footer class="footer primary">
      Copyright © 2020 - Clément Llorens
    </footer>
  </body>
</html>