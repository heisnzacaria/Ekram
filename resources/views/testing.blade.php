@foreach($produits as $produit)

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $produit->name}}</td>
      <td>{{ $produit->price}}</td>
      <td>{{ $produit->category}}</td>
      <td><a href="/produit/{{$produit->id}}/edit">Edit</a></td>
    </tr>
   
  

</table>


@endforeach
  <td><a href="/produit/create">Add</a></td>




<!-- msgfmt_get_pattern -->
<body>
    

<div class ="container-wrapper">
    @yield('content')
      
</div>
    
</body>