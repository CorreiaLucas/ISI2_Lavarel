@extends('Layout')
@section('titrePage')
    Liste des mangas
@endsection
@section('titreItem')
    <h1> tous les mangas <h1>
@endsection
@section('contenu')
    <table class= "table table-bordered table-striped">
        <thread>
            <th> Id </th>
            <th> Titre </th>
            <th> Prix </th>
            <th> Genre </th>
            <th> Nom Dessinateur</th>
            <th> Prenom Dessinateur</th>
        </thread>
        
        @foreach ($mangas as $manga)
            <tr>
                <td> {{$manga ->id_manga}}</td>
                <td> {{$manga ->titre}}</td>
                <td> {{$manga ->prix}}</td>
                <td> {{$manga ->lib_genre}}</td>
                <td> {{$manga ->nom_dessinateur}}</td>
                <td> {{$manga ->prenom_dessinateur}}</td>
            </tr>
        @endforeach
    </table>
@endsection
