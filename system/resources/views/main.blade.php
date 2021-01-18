@extends('template.baseclient')

@section('content')		
		<div class="container mt-5">
						<div class="row">
							<div class="col-md-3">
										<!-- tab -->
									<div class="card">
											<div class="card-header">
												Filter
											</div>
											<div class="card-body">
												<form action="{{url('category/filter')}}" method="post">
													@csrf
													<div class="form-group">
														<label for="" class="control-label">Nama</label>
														<input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
													</div>
													<div class="form-group">
														<label for="" class="control-label">Stok</label>
														<input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label for="" class="control-label">Harga Min</label>
																<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label for="" class="control-label">Harga Max</label>
																<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
															</div>
														</div>
													</div>
													<div id="button" float-right>
														<button class="btn btn-primmary" float-right><i class="fa fa-search" float-right></i>Filter</button>
											    	</div>
												</form>
											</div>
									</div><br>
								</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<div class="header">
									<h3> FILTER PRODUK</h3>
									<img src="https://media.suara.com/pictures/480x260/2020/07/26/92303-ilustrasi-olshop-online-shop-toko-online.jpg" alt="LOGO OLSHOP" style="width: 130%">
								</div>
							</div>


												

										<div id="tab1" class="tab-pane active">
											<div class="products-slick" data-nav="#slick-nav-1">
												
												
												@foreach($list_produk as $produk)	
												<!-- product -->
												<div class="product">
													<div class="product-img">
														<img src="{{url("public/$produk->foto")}}" alt="">
													</div>
													<div class="product-body">
														<p class="product-category">Category</p>
														<h3 class="product-name"><a href="{{url('produk-client', $produk->id)}}"> {{$produk->nama}}</a></h3>
														<h4 class="product-price">{{$produk->harga}}<del class="product-old-price">-10%</del></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="product-btns">
															<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
															<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
															<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
													</div>
												</div>
												@endforeach 
												<!-- /product -->
											</div><br><br><br>


											<div id="slick-nav-1" class="products-slick-nav"></div>
										</div>

										<div id="tab1" class="tab-pane active">
											<div class="products-slick" data-nav="#slick-nav-1">
												
												
												@foreach($list_produk as $produk)	
												<!-- product -->
												<div class="product">
													<div class="product-img">
														<img src="{{url("public/$produk->foto")}}" alt="">
													</div>
													<div class="product-body">
														<p class="product-category">Category</p>
														<h3 class="product-name"><a href="{{url('produk-client', $produk->id)}}"> {{$produk->nama}}</a></h3>
														<h4 class="product-price">{{$produk->harga}}<del class="product-old-price">-10%</del></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="product-btns">
															<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
															<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
															<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
													</div>
												</div>
												@endforeach 
												<!-- /product -->
											</div>
											<div id="slick-nav-1" class="products-slick-nav"></div>
										</div>
					</div>
							<!-- Products tab & slick --><br><br><br>

					
@endsection