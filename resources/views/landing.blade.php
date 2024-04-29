@extends('template')

@section('hero')
    <div class="container">
        <div class="row my-lg-5" style="height: 700px">
            <div class="col-md-8 flex my-auto">
                <h3 class="fw-semibold">Experience the Luxurious Taste of</h3>
                <h1 class="fw-bold mt-3" style="font-size: 50px">🌟 Red Velvet Latte! 🌟</h1>
                <p class="fw-semibold text-secondary mt-3 mr-5">Indulge in our delightful Red Velvet Latte, a unique blend
                    crafted to elevate your coffee experience. Immerse yourself in the rich flavors of creamy cocoa and
                    velvety smoothness, perfectly combined with our finest espresso. Savor the moment. Savor the flavor.
                    Discover Red Velvet Latte today! 🍫☕️</p>
                <button class="btn btn-lg btn-info text-black fw-bold">Buy Now!</button>
            </div>
            <div class="col-md-4 my-auto">
                <img class="img-fluid rounded"
                    src="https://kurio-img.kurioapps.com/20/06/28/b8bcbf61-e003-459b-b347-dd8d72f0d4b8.jpg" alt="">
            </div>
        </div>
    </div>
@endsection

@section('product')
    <div class="container">
        <div class="row w-100 my-lg-5 bg-info rounded">
            <div class="w-100 my-5">
                <h1 class="fw-bold text-center">PRODUCTS</h1>
                <div class="border border-top border-black mx-auto mt-3" style="width: 100px"></div>
                <div class="grid mt-5 mx-3">
                    <div class="row row-gap-4">
                        @foreach ($products as $product)
                            <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ $product['image'] }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="card-title my-auto">{{ $product['menu'] }}</h5>
                                            <p class="bg-info px-3 py-1 rounded fw-semibold my-auto">{{ $product['price'] }}
                                            </p>
                                        </div>
                                        <p class="card-text mt-3"
                                            style=" overflow: hidden;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
           line-clamp: 3;
   -webkit-box-orient: vertical;">
                                            {{ $product['description'] }}</p>
                                        <a href="#" class="btn btn-primary w-100">Pesan Seakrang</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
