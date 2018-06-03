@extends('layouts/app')


@section('content')
    <!-- Page Content -->
    <div class="container">
      @include('partials.success')
      @include('partials.errors')
      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4" style="position:fixed;">Batiknesia</h1>
          <div class="list-group" style="position:fixed; top : 20%;">
            @foreach ($jenis_list as $jenis)
              <a href="{{URL::action('ProductController@filter', $jenis->idJenis)}}" class="list-group-item">{{$jenis->namaJenis}}</a>
            @endforeach
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="{!! asset('img/web_banner_1.jpg') !!}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{!! asset('img/web_banner_2.jpg') !!}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{!! asset('img/web_banner_3.jpg') !!}" alt="Third slide">
              </div>
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
            @if (!empty($product_list))
                @foreach ($product_list as $product)
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      @if (($gambar_list->firstWhere('idProduct', $product->idProduct) != null))
                        <a href="/product/{{ $product->idProduct }}"><img class="card-img-top" src="{!! asset(($gambar_list->firstWhere('idProduct', $product->idProduct)->gambar)) !!}" alt=""></a>
                      @else
                          <a href="/product/{{ $product->idProduct }}"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                      @endif

                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="/product/{{ $product->idProduct }}">{{ $product->namaProduk }}</a>
                          <a href="{{URL::action('ProductController@show', $product->idProduct)}}"></a>
                        </h4>
                        <h5>IDR {{ $product->harga }}</h5>
                        <p class="card-text">{{ $product->deskripsi }}</p>
                      </div>
                      <div class="card-footer">
                        <a class="col-md-12 btn btn-success" href="/product/{{ $product->idProduct }}" style="background-color: #01579B";>Details</a>
                      </div>
                    </div>
                  </div>
                @endforeach
            @endif

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  @endsection
