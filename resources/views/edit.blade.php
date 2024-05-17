@extends('layout')

@section('content')
    <h1>modifier la tache</h1>

    <form action="{{ route('modification', $Clients->id)}}" method="post">
        @csrf

        @method('POST')
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$Clients->name}}">
        </div>

        <div class="form-group">
            <label for="surname">surname</label>
            <input type="text" name="surname" id="surname" claas="form-control" value="{{$Clients->surname}}">
        </div>

        <div class="form-group">
            <label for="ville">ville</label>
            <input type="text" name="ville" id="ville" class="form-control" value="{{$Clients->ville}}">
        </div>
        <div class="form-group">
            <label for="montant_assurance">Montant Assurance</label>
            <input name="montant_assurance" id="montant_assurance" class="form-control" value="{{$Clients->montant_assurance}}">
        </div>
        <div class="form-group">
            <label for="status">statut</label>
            <input name="status" id="status" class="form-control" value="{{$Clients->status}}">
        </div>
        <button type="submit" class="btb btn-primary">modifier</button>
    </form>
@endsection
