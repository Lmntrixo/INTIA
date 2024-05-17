<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de creation</title>
</head>
<body>

<form action="{{'store'}}" method="post">
    @csrf
    <label for="titre"> tritre</label>
    <input type="text" name="titre" id="titre">

    <label for="description"> description</label>
    <input type="text" name="description" id="description">

    <label for="auteur"> auteur</label>
    <input type="text" name="auteur" id="auteur">

    <label for="titre"> date_publication</label>
    <input type="text" name="date_publication" id="date_publication">

    <button>creer</button>
    
</form>
    
</body>
</html>