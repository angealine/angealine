 @extends('layouts.content')
 @section("contenu_header")
        <header>
            <h1>La liste de vos produits disponible dans cette section  </h1>
            <p>Consultez les différents produits disponible.</p>
        </header>
        <body>
            @if (session('sucess'))
        <div class='alert alert-success' style="color: green;">
         {{ session('sucess') }}
        </div>
        @endif
        <div class="container text-center">
            <div class="row" >
              <div class="col s12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom du produit</th>
                                <th>Description</th>
                                <th>Prix</th>
                                <th>Quantite</th>
                                <th>Categorie</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id}}</td>
                                <td> {{ $product->product_name}}</td>
                                <td> {{ $product->description_product}}</td>
                                <td> {{ $product->price_product}}</td>
                                <td> {{ $product->qte_product}}</td>
                                <td>{{ $product->category_id}}</td>
                                <td>
                                    <a href="/updatepdt/{{ $product->id}}" class="btn btn-primary">Modifier</a>
                                    <a href="/d" class="btn btn-danger">Supprimer</a>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
              </div>
            </div>
          </div>
@endsection
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      </body>
    </html>