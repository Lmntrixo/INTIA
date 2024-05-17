<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage</title>
</head>
<body>
    <div class="content">
        <div class="show">
            <table>
                <thead>
                    <tr>
                        <th>titre</th>
                        <th>descriptin</th>
                        <th>auteur</th>
                        <th>date_publication</th>
                    </tr>
                    
                </thead>
                <tbody>
                @foreach($taches as $task)
                    <tr>
                        <td>{{$task->name}}</td>
                        <td>{{$task->description}}</td>
                        <td>{{$task->auteur}}</td>
                        <td>{{$task->date_publication}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <button><a href="{{ route('create') }}">creer</a></button>
        </div>
    </div>
    
</body>
</html>