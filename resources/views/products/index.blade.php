@extends('template')

@section('content')

    @if(session('success'))
        <div  class="notification is-success" id="success-message">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Products</p>
            <a class="button is-info" href="{{ route('product.create') }}">Ajouter un Produit</a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable" border="1">
                    <thead class=" text-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th colspan="3" align="center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id }}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->stock}}</td>

                            <td>
                                <a class="button is-primary" href="{{ route('product.show',$product->id) }}">
                                    Détails</a>
                                {{--  <a class="btn btn-outline-success" href="{{ route('product.edit',$product->id) }}">Modifier</a>
                                  <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-outline-success">Delete</button>
                                  </form>
  --}}</td>
                            <td><a class="button is-warning" href="{{ route('product.edit', $product->id) }}">Modifier</a></td>
                            <td>
                                <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-danger" >Delete</button>
                                </form>

                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery if not already included -->

<script>
    // Wait for the DOM to be fully loaded
    $(document).ready(function() {
        // Select the success message by its ID
        var $successMessage = $('#success-message');

        // Check if the success message exists
        if ($successMessage.length) {
            // Display the message for 2 seconds (5000 milliseconds)
            $successMessage.fadeIn().delay(2000).fadeOut();
        }
    });
</script>
