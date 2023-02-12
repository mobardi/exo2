{{-- ressources/views/liste_departements.blade.php --}}
@extends('main')
@section('title', 'Liste des departements')
@section('contenu')
<p>La liste des departements</p>
@unless(empty($departements))
<table border='4'>
<th>Code</th>
<th>Departement</th>
@foreach ($departements as $departement)
<tr><td> {{ $departement->no }}</td> <td> {{ $departement->nom }}</td></tr>
@endforeach
</table>
@else
@endunless
@endsection