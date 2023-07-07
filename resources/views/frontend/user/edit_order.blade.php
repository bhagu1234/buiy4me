@include('frontend.includes.header')
<body>
    @include('frontend.includes.nav')
    <!-- header end -->
    <div class="best-product-area pb-15">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="section-title-3 text-center mb-40">
                    <h2>Edit Order</h2>
                </div>
                <form action="{{route('user.update_order')}}" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-input-style mb-30">
                                <label>Product Name</label>
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <input name="product_name" required="" type="text" placeholder="Enter Product Name" value="{{$data->product_name}}">
                            </div>
                            <div class="contact-input-style mb-30">
                                <label>Product Img</label>
                                <input name="product_img[]"  type="file" multiple>
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
                                <div>
                                    @foreach($img as $i)
                                        <?php 
                                            $i=str_replace([']','[']," " ,$i);
                                            $i=trim($i);
                                        ?>
                                        <img src="{{URL::to('/')}}/public/upload/product_img/{{$i}}" width="50px" height="50px;">
                                    @endforeach
                                </div>
                            </div>
                            <div class="contact-input-style mb-30">
                                <label>Product price</label>
                                <input name="product_price" required="" type="text" placeholder="Enter Product price" value="{{$data->product_price}}">
                            </div>
                            <div class="contact-input-style mb-30">
                                <label>Product qty</label>
                                <input name="product_qty" required="" type="number" placeholder="Enter Product qty" value="{{$data->product_qty}}">
                            </div>
                            <div class="contact-input-style mb-30">
                                <label>Product details</label>
                                <textarea name="product_details" required="">{{$data->product_details}}</textarea>
                            </div>
                            <div class="contact-input-style mb-30">
                                <label>With Box</label>
                                <input name="box" type="checkbox" id="update_product_box" value="{{$data->box}}" >
                            </div>
                            <div class="contact-input-style mb-30">
                                <label>Delivery route</label>
                                <input name="deliver_from" required="" type="text" placeholder="deliver from" value="{{$data->deliver_from}}" list="editOrderFrom" onkeyup="fatch_country(this.value,'editOrderFrom')">
                                <datalist id="editOrderFrom"></datalist>
                            </div>
                            <div class="contact-input-style mb-30">
                                <label>Delivery to</label>
                                <input name="deliver_to" required="" type="text" placeholder="Deliver to" value="{{$data->deliver_to}}" list="editOrderTo" onkeyup="fatch_country(this.value,'editOrderTo')">
                                <datalist id="editOrderTo"></datalist>
                            </div>
                            <div class="contact-input-style mb-30">
                                <label>How long are you willing to wait?</label>
                                <input name="during_date" required="" type="date" value="<?php echo date('Y-m-d',strtotime($data["during_time"])) ?>">
                                <!-- <select name="during_time" >
                                <option value="up_one_month">Up to 1 Month</option>
                                    <option value="up_3_week">Up to 3 Week</option>
                                    <option value="up_2_week"> Up to 2 week</option>
                                    <option value="up_2_months">Up To 2 months</option>
                                </select> -->
                                <button type="submit">Update order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <!-- menu area end -->
  @include('frontend.includes.footer');
  <!-- all js here -->
  @include('frontend.includes.footer_script');
</body>
</html>

    <!-- menu area end -->
    @include('frontend.includes.footer');
    <!-- all js here -->
    @include('frontend.includes.footer_script');
</body>
</html>
