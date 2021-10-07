
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT Product</title>

</head>
<body>
    <form action="/produit/{{ $produit->id }}" method="POST">

@csrf

<label for="name"> name</label>
<input type="text" name="name" id="name" value="{{ $produit->name}}">

<label for="price"> price</label>
<input type="text" name="price" id="price" value="{{ $produit->price}}">

<label for="category"> category</label>
<input type="category" name="category" id="category" value="{{ $produit->category}}">


<button type="submit" value="update">Submit </button>
</form>


<form action="/produit/{{ $produit->id }}" method="get">


@csrf
<button type="delete" value="delete">DELETE </button>

</form>
</body>
</html>
