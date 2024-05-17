
@extends('layout')

@section('content')

    <h1>creation d'un nouveau Client</h1>

    <form action="{{'store'}}" method="POST">

        @csrf

        <div class="">
            <label for="name">Nom</label>
            <input type="text" name="name" id="title" class="">
        </div>
        <div class="">
            <label for="surname">Prenom</label>
            <input type="text" name="surname" id="surname" class="">
        </div>

        <div class="">
            <label for="ville">ville</label>
            <input name="ville" id="ville" class="">
        </div>
        <div class="">
            <label for="montant_assurance">Montant Assurance</label>
            <input name="montant_assurance" id="montant_assurance" class="">
        </div>
        <div class="">
            <label for="status">statut</label>
            <input name="status" id="status" class="">
        </div>
        <button type="submit" class="">creer</button>
    
    </form>
@endsection