@extends('template')

@section('content')
    <div class="card">

        @if($errors->any)
            <div class="alert alert-danger">

                <ul>

                    @foreach($errors->all() as $error)

                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <header class="card-header">
            <p class="card-header-title">Création d'un produit</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('product.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input type="text" name="name" value="{{$product->name}}">
                        </div>

                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description">{{$product->description}}</textarea>
                        </div>

                    </div>
                    <div class="field">
                        <label class="label">Prix</label>
                        <div class="control">
                            <input type="number" name="price" value="{{$product->price}}">
                        </div>

                    </div>


                    <div class="field">
                        <label class="label">Stock</label>
                        <div class="control">
                            <input type="number" name="stock" value="{{$product->stock}}">
                        </div>

                    </div>

                    <div>



                    </div>


                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
