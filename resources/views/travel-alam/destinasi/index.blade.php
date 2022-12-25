@extends('travel-alam.layout')

@section('title')
  Travel Alam - Destinasi
@endsection

@section('content')
  <!-- Destinasi Section -->
  <section class="mt-5">

    <div class="container mt-5">

      <div class="row mb-2">
        <div class="col-md">
          <header class="section-header">
            <p>Destinasi Wisata</p>
          </header>
        </div>
      </div>

      @forelse ($provinces as $province)
        <h4 class="fw-bold prim-color">{!! ucwords($province->nama_provinsi) !!}</h4>
        <div class="owl-carousel mb-4">
          @foreach ($locations as $location)
            @if ($location->province->nama_provinsi == $province->nama_provinsi)
              <a class="item">
                <div class="card">
                  <div class="card-body">
                    <img src="{{ asset('storage/' . $location->locationImages->first()->path) }}" alt="" class="img-float">
                    <h4 class="mt-3">{!! ucwords($location->nama_lokasi) !!}</h4>
                    <p>{{ $location->deskripsi }}</p>
                  </div>
                </div>
              </a>
            @endif
          @endforeach
        </div>

      @empty
        <div class="d-flex align-items-center justify-content-center" style="min-height: 40vh">
          <h3>Ups, destinasinya belum ada nih :(</h3>
        </div>
      @endforelse

    </div>

  </section>

  <a class="cart-btn d-flex align-items-center justify-content-center" href="{{ url('peralatan') }}"
    style="cursor: pointer;"><i class="fa fa-shopping-cart"></i></a>

  <!-- End Destinasi Section -->

  <script>
    $(function() {
      $('.owl-carousel').owlCarousel({
        // loop:true,
        margin: 10,
        nav: true,
        dots: false,
        navText: [
          `<div id="prev-slide" class="btn-control d-flex justify-content-center align-items-center">
            <i class="fa fa-chevron-left" style="margin-left: -3px;"></i>
          </div>`,
          `<div id="next-slide" class="btn-control d-flex justify-content-center align-items-center">
            <i class="fa fa-chevron-right" style="margin-right: -3px;"></i>
          </div>`
        ],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 4
          }
        }
      })
    });
  </script>
@endsection
