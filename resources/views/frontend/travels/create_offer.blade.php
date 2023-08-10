<?php
$userMobile=Auth::User()->mobile;
?>
@include('frontend.includes.header')
<body>
    @include('frontend.includes.nav')
    <!-- header end -->
    <div class="best-product-area pb-15">
      <div class="pl-100 pr-100">
        <div class="container-fluid">
              <div class="section-title-3 text-center mb-40">
                <h2>Orders  Details</h2>
               
              </div>
              <div class="best-product-style">
                <?php
                    $img=$data->product_imgs;
                    $img=explode(' , ', $img);
                ?>
                <div class="card">
					<div class="row g-0">
					    <div class="col-md-4 border-end">
                            @foreach($img as $i)
                            <?php 
                                $i=str_replace([']','[']," " ,$i);
                                $i=trim($i); 
                            ?>
                            @endforeach
                            <a href="{{URL::to('/')}}/public/upload/product_img/{{$i}}">
                                <img src="{{URL::to('/')}}/public/upload/product_img/{{$i}}" alt="" class="img-fluid">
                            </a>
						
					    </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h4 class="card-title">{{$data->product_name}}</h4>
                            <div class="d-flex gap-3 py-3">
                                <div class="rating-number">
                                    <div class="quick-view-rating">
                                        <i class="pe-7s-star red-star"></i>
                                        <i class="pe-7s-star red-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                        <i class="pe-7s-star"></i>
                                    </div>
                                    <div class="quick-view-number">
                                        <span>2 Ratting (S)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3"> 
                                <span class="price h4">${{$data->product_price}}</span> 
                                
                            </div>
                            <p class="card-text fs-6">{{$data->product_details}}</p>
                            <dl class="row">
                                <dt class="col-sm-3">Deliver from</dt>
                                <dd class="col-sm-9">{{$data->fromCountry}},{{$data->fromCity}}</dd>
                            
                                <dt class="col-sm-3">Deliver to</dt>
                                <dd class="col-sm-9">{{$data->toCountry}},{{$data->toCIty}}</dd>
                            
                                <dt class="col-sm-3">Deliver before</dt>
                                <dd class="col-sm-9">{{$data->during_time}} </dd>
                            </dl>

                            <dl class="row">
                                <dt class="col-sm-3">Traveler reward</dt>
                                <dd class="col-sm-9">{{$data->traveller_reward}}</dd>
                            
                                <dt class="col-sm-3">Sales Tax</dt>
                                <dd class="col-sm-9">{{$data->us_sale_tax}}</dd>
                            
                                <dt class="col-sm-3">Buy4me fee</dt>
                                <dd class="col-sm-9">{{$data->buy4me_fee}} </dd>

                                <dt class="col-sm-3">Payment processing</dt>
                                <dd class="col-sm-9">{{$data->payment}} </dd>
                            </dl>
                            <div class="details-price">
                                <span>Estimated total </span>:-<span id="">{{$data->estimated_total}}</span>
                            </div>
                            <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
                                <div class="col">
                                    <label class="form-label">Quantity</label>
                                    <div class="input-group input-spinner">
                                        <span>{{$data->product_qty}}</span>
                            
                                    </div>
                                </div> 
                            </div>
                            
                            <p><input type="checkbox"> By making a delivery offer or starting a delivery, I agree to Buy4me's Terms and Conditions and acknowledge that I am familiar with and agree to abide by the customs rules and regulations of my destination country. I also acknowledge that I am responsible for paying customs duties and covering any extra charges that the customs at my destination country may impose.</p>
                            <div class="d-flex gap-3 mt-3">
                                <a href="{{route('stripeIdentity.index')}}" class="btn btn-primary">Make delivery offer</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- menu area end -->
@include('frontend.includes.footer');
<!-- all js here -->
@include('frontend.includes.footer_script');
</body>
</html>
