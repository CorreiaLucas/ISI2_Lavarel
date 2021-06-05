@extends('Layout')
@section('titrePage')
    Liste des mangas
@endsection
@section('titreItem')
    <h1> tous les mangas <h1>
@endsection
@section('contenu')
@if(session()->has('info'))
        <div class="car text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{session('info')}}</p>
            </div>
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Nous avons selectionné pour vous: </h5>
        </header>
        <div class="card-content">
        	<div class="content">
        		<table class="table is-hoverable">
        			<thread>
        				<tr>
        					<th>#</th>
        					<th>Titre</th>
        					<th>Genre</th>
        					<th></th>
        					<th></th>
        				</tr>
        			</thread>
        			@foreach($mangas as $manga)
        				<tr>
        					<td>{{ $manga->id }} </td>
        					<td><strong>{{ $manga ->titre }}</strong></td>
        					<td>{{ $manga->genre->lib-genre }}</td>
        					<td>
        						<a class="btn btn-primary" href="{{ route('mangas.show', $manga->id)}}"> Voir </a>
        					</td>
        					
        				</tr>
        			@endforeach
        		</table>
        	</div>
        </div>
    </div>
@endsection