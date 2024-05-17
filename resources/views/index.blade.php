
@extends('layout')

@section('content')

    <h1 style="text-align:center">liste des des clients</h1>
    <button><a href="{{'/client/create'}}" class="btn btn-primary">creer un client</a></button>

    <table class="" style="margin-left:500px ; ">
        <thead style="margin-left:20px ; ">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>ville</th>
                <th>Montant Assurance</th>
                <th>statut</th>
                     </thead>
        <tbody>

            @foreach($Clients as $client)

                <tr>
                    <td>{{$client->name}}</td>
                    <td>{{$client->surname}}</td>
                    <td>{{$client->ville}}</td>
                    <td>{{$client->montant_assurance}}</td>
                    <td>{{$client->status}}</td>
                    <td>
                        <button><a href="{{ route('modifier', $client->id) }}" class="">modifier</a></button>

                        <form action="{{route('delete', $client->id)}}" method="POST" style="display:inline">

                            @csrf

                            @method('DELETE')

                            <button type ="submit" class="btn btn-danger">supprimer</button>
                    
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

    