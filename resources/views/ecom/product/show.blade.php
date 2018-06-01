@extends('layouts/app')


@section('content')
  <body>
    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">
        {{$product->namaProduk}}
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          @if (isset($gambar->gambar))
              <img class="img-fluid" src="{!! asset($gambar->gambar) !!}" alt="">
          @else
               <img class="img-fluid" src="http://placehold.it/750x500" alt="">
          @endif

        </div>

        <div class="col-md-4">
          <h3 class="my-3">Deskripsi</h3>
          <p>{{$product->deskripsi}}</p>
          <h3 class="my-3">IDR {{$product->harga}}</h3>
          <ul>
            <li>Stok     : {{$product->stock}}</li>
            <li>Dimensi  : {{$product->dimensi}}</li>
            <li>Jenis    : namaJenis</li>
          </ul>
        </div>

      </div>
      <!-- /.row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    {{-- <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer> --}}

@endsection
