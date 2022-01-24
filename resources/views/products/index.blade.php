@extends('app')

@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">Product</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">New Product</a>

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
            </tr>

            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}} </td>
                    <td>${{$product->price}} </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline">
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="btn btn-danger" value="Delete" onclick="return confirm('Are you sure?')">
                        </form>
                    </td>
                </tr>

            @endforeach
            </thead>

        </table>

    </div>
@endsection

