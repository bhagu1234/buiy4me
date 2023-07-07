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
                  <div class="product-tab-list2 text-center mb-95 nav product-menu-mrg" role="tablist">
                    <a class="active" href="#order_Orderpublished" data-bs-toggle="tab" role="tab">
                      <h4>Order published </h4>
                    </a>
                    <a href="#order_Offerreceived" data-bs-toggle="tab" role="tab">
                        <h4>Offer received </h4>
                    </a>
                    <a href="#order_Offerchosen" data-bs-toggle="tab" role="tab">
                        <h4>Offer chosen</h4>
                    </a>
                    <a href="#order_Deliverystarted" data-bs-toggle="tab" role="tab">
                        <h4> Delivery started</h4>
                    </a>
                </div>
                <?php
                    $img=$data->product_imgs;
                    $img=explode(' , ', $img);
                    // foreach($img as $i)
                    // {
                    //     $i=$i;
                    // }
                    // $i=str_replace([']','[']," " ,$i);
                    // $i=trim($i);
                ?>
                <div class="tab-content">
                    <div class="tab-pane active show fade" id="order_Orderpublished" role="tabpanel">
                        <div class="custom-row">
                            <div class="product-details ptb-100 pb-90">
                                <div class="container">
                                    <p>Awaiting offers</p>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-7 col-12">
                                            <div    class="product-details-img-content">
                                                <div class="product-details-tab mr-35 product-details-tab2">
                                                    <div class="product-details-large tab-content">
                                                        <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                                            @foreach($img as $i)
                                                                <?php 
                                                                    $i=str_replace([']','[']," " ,$i);
                                                                    $i=trim($i); 
                                                                ?>
                                                            @endforeach
                                                            <div class="easyzoom easyzoom--overlay  ">
                                                                <a href="{{URL::to('/')}}/public/upload/product_img/{{$i}}">
                                                                    <img src="{{URL::to('/')}}/public/upload/product_img/{{$i}}" alt="" width="500px">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-details-small nav ml-10 product-details-2 " role=tablist>
                                                        @foreach($img as $i)
                                                            <?php 
                                                                $i=str_replace([']','[']," " ,$i);
                                                                $i=trim($i); 
                                                            ?>
                                                            <a class="active mb-10" href="#pro-details1" data-bs-toggle="tab" role="tab" aria-selected="true">
                                                                <img src="{{URL::to('/')}}/public/upload/product_img/{{$i}}" alt="">
                                                            </a>
                                                        @endforeach
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-5 col-12">
                                            <div class="product-details-content">
                                                <h3 id="summ_productName">{{$data->product_name}}</h3>
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
                                                    <div class="">
                                                        <span>Deliver from </span> :- {{$data->deliver_from}}<span ></span>
                                                    </div>
                                                    <div class="">
                                                        <span>Deliver to </span> :-{{$data->deliver_to}} <span ></span>
                                                    </div>
                                                    <div class="">
                                                        <span>Deliver before </span> :- <span>{{$data->during_time}}</span>
                                                    </div>
                                                    <div class="">
                                                        <span>Quantity</span> :- <span>{{$data->product_qty}}</span>
                                                    </div>
                                                    <div class="">
                                                        <span>Packaging </span> :- 
                                                        @if($data->box==0)
                                                            <span>Without Box</span>
                                                        @else
                                                            <span>With Box</span>
                                                        @endif
                                                    </div>
                                                    <p>{{$data->product_details}}</p>
                                                    <div class="details-price">
                                                        <span>Product price</span> :-<span id="">${{$data->product_price}}</span>
                                                    </div>
                                                    <div class="">
                                                        <span>Traveler reward </span> :-<span id="">${{$data->traveller_reward}}</span>
                                                    </div>
                                                    <div class="">
                                                        <span>Grabr fee </span>:-<span id="">${{$data->us_sale_tax}}</span>
                                                    </div>
                                                    <div class="">
                                                        <span>Payment processing </span>:-<span id="">${{$data->buy4me_fee}}</span>
                                                    </div>
                                                    <div class="details-price">
                                                        <span>Estimated total </span>:-<span id="">${{$data->estimated_total}}</span>
                                                    </div>
                                                    <div class="quickview-btn-cart">
                                                        <a class="btn-hover-black" href="{{route('user.order_cancle',['id'=>$data->id,'status'=>'cancle'])}}" onclick="return confirm('Are you sure you want to cancle this ?');" >Cancle Order</a>
                                                    <a class="btn-hover-black" href="{{route('user.edit_order',['id'=>$data->id])}}" >Edit Order</a>
                                                    <a class="btn-hover-black" href="{{route('user.matched_order',['id'=>$data->id,'status'=>$from])}}" >check matched trip</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="order_Offerreceived" role="tabpanel">
                        <div class="custom-row">
                            <div class="custom-col-5 custom-col-style mb-95">
                                order_Offerreceived
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="order_Offerchosen" role="tabpanel">
                        <div class="custom-row">
                            <div class="custom-col-5 custom-col-style mb-95">
                              
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="order_Deliverystarted" role="tabpanel">
                        <div class="custom-row">
                            <div class="custom-col-5 custom-col-style mb-95">
                                order_Deliverystarted
                            </div>
                        </div>
                    </div>
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
