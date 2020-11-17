
@extends ('layouts.cv')

@section ('titre')
Nouveau contact
@endsection

@section ('contenu')
<form method="POST" action="{{ route ('contacts.store') }}">
 @csrf
 <label for="lastname"> Votre nom : </label>
 <input type="text" name="lastname" id="lastname" required="required">

 <label for="firstname"> Votre prénom : </label>
 <input type="text" name="firstname" id="firstname" required="required">
 
 <label for="email"> Votre email : </label>
 <input type="text" name="email" id="email" required="required">

 <label for="phonenumber"> Numéro de téléphone : </label>
 <input type="text" name="phonenumber" id="phonenumber" required="required">

 <input type="submit" value="Envoyer !">
 </form>
@endsection
