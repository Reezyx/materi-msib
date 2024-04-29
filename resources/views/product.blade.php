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
