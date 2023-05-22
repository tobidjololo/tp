<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <br><br>
    <a type="button" href="/add_articles" class="btn btn-primary">Ajouter un article</a>
    <br><br>
    <h1>Liste des articles</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Descrption</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articles as $item)
        <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->nom }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->prix }} FCFA</td>
        </tr>
    @endforeach

  </tbody>
</table>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
