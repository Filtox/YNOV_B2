@extends ('layouts.template')
@section ('titre')
mon article 
@endsection
@section ('contenu')
C'est l'article n° {{ $numero }}
@endsection


 
<!doctype html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <title>Les articles</title>
</head>
<body>
<p>C'est l'article n° {{ $numero }}</p>
</body>

