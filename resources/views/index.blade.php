@extends('app')
@section('content')



        <div class="col-lg-3">
            <h1 class="my-4">Shop Name</h1>
            <div class="list-group">
                @foreach($categories as $category)
                <a class="list-group-item" href="/?category_id={{$category->id}}">{{$category->name}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-lg-9">
            <div class="carousel slide my-4" id="carouselExampleIndicators" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"><img class="d-block img-fluid" src="https://images.prismic.io/frameworkmarketplace/5dc5fc06-aec5-4f28-a924-0230aa91a360_Pre-Marketplace+-+image_02.jpg?auto=compress,format" alt="First slide" /></div>
                    <div class="carousel-item"><img class="d-block img-fluid" src="https://images.prismic.io/frameworkmarketplace/cca31de3-3b75-4932-af96-7646b7eba6c7__DSC3630-Edit-cropped.jpg?auto=compress,format" alt="Second slide" /></div>
                    <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Third slide" /></div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="https://media.ldlc.com/r374/ld/products/00/05/88/57/LD0005885732_1_0005886014.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">{{$product->name}}</a></h4>
                            <h5>${{$product->price}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <hr/>
                            Category {{$product->category->name}}
                        </div>
                        <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

@endsection
