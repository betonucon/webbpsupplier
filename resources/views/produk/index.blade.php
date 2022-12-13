@extends('layouts.app')

@section('content')
<main id="main" >
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Produk</li>
        </ol>
        <h2>Produk</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h4>Produk Tersedia</h4>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          <div class="row" style="background: #f7f7f7;">
            <div class="col-md-6"></div>
            <div class="col-md-6" style="padding: 1% 3%;">
              <input type="text" placeholder="Search" class="form-control form-control-sm">
            </div>
            
            
          </div>
        </div>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach($data as $o)
            <div class="col-lg-3 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="{{url_plug()}}/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <p>{{$o->nama_barang}}</p>
                <a href="{{url_foto()}}/{{$o->foto}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
              </div>
            </div>
            @endforeach
          
        </div>
        <div class="row" style="background: #f7f7f7;">
            <div class="col-md-12" style="padding: 1% 3%;">
              {{ $data->links('vendor.pagination.bootstrap-4') }}
            </div>
            
            
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    
  </main><!-- End #main -->
@endsection
