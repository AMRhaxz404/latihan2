@extends('template.baseclient')

@section('content') 

    <!-- /NAVIGATION -->

    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
          <div class="row">
               <div class="main-start-box">
                  <div class="container">
                     <div class="buyer-box clearfix">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                           <div class="left-buyer">
                              <img class="img-responsive" src="{{url("public//app/images/produk/2469744452.png")}}" width="300" height="300" ml-5 />
                           </div>
                        </div>
                                  <h3>Sepatu Air{{$produk->nama}}</h3>
                                  <hr>
                                  <p>
                                    Rp.50000{{($produk->harga)}} |
                                    Stok : 100{{$produk->stok}} |
                                    Berat : 1 {{$produk->berat}} gr
                                  </p>
                                  <p>
                                    {!! nl2br($produk->deskripsi) !!}
                                  </p>
                              <a class="primary-btn cta-btn" href="../checkout">Beli Sekarang</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /SECTION -->

    
  </body>
</html>
@endsection
