{{-- <h1> bienvenue dans la page produits</h1> --}}

@extends('layouts.content')
    @section("contenu_header")
        <header>
            <h1>La liste de vos produits disponible dans cette section  </h1>
            <p>Consultez les différents produits disponible.</p>
        </header>
        @if (session('status'))
        <div class='alert alert-success' style="color: green;">
         {{ session('status') }}
        </div>
        @endif
            <table class="table-bordered" >
                    <thead>
                      <tr>
                        <h1><th scope="col">Categorie produits</th></h1>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>
                                <a href="{{ route('category.product', [$category->id]) }}">{{ $category->category_name }} ({{ $category->products_count }})</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table> 
    @endsection

       
    
      
        

            



    
        

    