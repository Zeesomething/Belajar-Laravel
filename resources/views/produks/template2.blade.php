<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    {{-- Navbar Start --}}

    @include('layouts.navbar')

    {{-- Navbar End --}}


    {{-- Main Start --}}

    <div class="section">
        <div class="container">
            {{-- Row 1 --}}
            <div class="row mt-5 justify-content-center">
                <center>
                    <h1>List Artikel</h1>
                </center>
            </div>
            {{-- Row 2 --}}
            <div class="row mt-5">
                @foreach ( $produk as $data )
                <div class="col-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="https://cdn.eraspace.com/media/catalog/product/a/p/apple_iphone_15_pro_max_natural_titanium_1_1_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <hr>
                            <h5 class="card-title">{{ $data->nama_produk }}</h5>
                            <hr>
                            <p class="card-text">Merek : {{ $data->merek->nama_merek }}</p>
                            <p class="card-text">Jumlah : {{ $data->jumlah }} Buah</p>
                            <p class="card-text">Tanggal Produksi : {{ $data->tanggal_produksi }}</p>
                            <p class="card-text">Tentang : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore quidem culpa sapiente sint atque fuga?</p>
                            <a href="produk/{{ $data->id }}" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    {{-- Main End --}}

    {{-- Footer Start --}}

    @include('layouts.footer')

    {{-- Footer End --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


</body>

</html>
