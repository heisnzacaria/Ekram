
@extends('produits.master')
@section('title','add products')
@section('content')

    
<div class="all-title-box">
<form action="/produit" method="POST">

@csrf

<label for="name"> name</label>
<input type="text" name="name" id="name" >

<label for="slug"> slug</label>
<input type="text" name="slug" id="slug" >

<label for="description"> Description</label>
<input type="text" name="Description" id="Description" >

<label for="price"> price</label>
<input type="text" name="price" id="price" >

<label for="category"> category</label>
<input type="category" name="category" id="category" >


<button type="submit" value="update">Submit </button>
</body>
</html>
</div>
@endsection