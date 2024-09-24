@extends('template')

@section('content')



    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Détails du Produit</p>
            <a class="button is-info" href="{{ route('product.index') }}">Retour à la liste des produits</a>
        </header>

        <div class="card-content">
            <div class="content">
                <table class="table is-striped">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $product->id }}</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>{{ $product->name }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>{{ $product->price }} </td>
                    </tr>
                    <tr>
                        <th>Stock</th>
                        <td>{{ $product->stock }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection


