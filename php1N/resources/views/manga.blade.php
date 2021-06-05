@extends('Layout')
@section('titrePage')
    Information sur le manga
@endsection

@section('contenu')
    <div class="card">
            <header class="card-header">
                <h5 class="card-header-title">Titre : {{ $manga->titre}} </h5>
            </header>
            <div class="card-content">
                <div class="content">
                    <p>Dessinateur : {{$dessinateur->nom_dessinateur .' '. $dessinateur->prenom_dessinateur }}</p>
                    <p>Scénariste : {{$scenariste->nom_scenariste .' '. $scenariste->prenom_scenariste  }}</p>
                    <p>Genre : {{$genre->lib-genre }}</p>
                    <hr>
                    <p>Prix : {{$manga->prix }}</p>
                </div>
            </div>
        </div>
@endsection