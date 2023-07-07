// store trip data ===========================================
var base_path = $("#url").val();
$(".store_trip_data").submit(function(e){
    e.preventDefault();
    var user_mobile = $(".user_mobile").val();
    var from_location = $(".from_location").val();
    var to_location = $(".to_location").val();
    var travel_date = $(".travel_date").val();
    var _token = $("input[name=_token]").val();
    if(user_mobile != "")
    {
        $.ajax({
            url: base_path+"/create_trip",
            type:"POST" ,  
            data: {
                user_mobile:user_mobile,
                from_location:from_location,
                to_location:to_location,
                travel_date:travel_date,
                _token:_token
            },
            success:function(response)
            {
                alert("success  Data stored");
                $("#StoreTripDataMo").modal('hide'); 
                window.reload();
            }
        })
    }
    else
    {
        $("#verifyMobileNumberModal").modal('show');
    }
   
});
// end store trip ==================================================
// store order details ============================================
$("#product_with_box").change(function(){
    if($(this).is(':checked'))
    {
        $("#product_with_box").val(1);  // checked
        var lblValue = document.getElementById("summery_Packaging");
        lblValue.innerText =  "With Box";
    }
    else
    {
        $("#product_with_box").val(0);
        var lblValue = document.getElementById("summery_Packaging");
        lblValue.innerText =  "Without Box";
    }
})
$("#update_product_box").change(function(){
    if($(this).is(':checked'))
    {
        $("#update_product_box").val(1); 
    }
    else
    {
        $("#update_product_box").val(0);
    }
})
$(".during_time").change(function(){
    var during_time=$(this).val();
    var lblValue = document.getElementById("summery_Deliverbefore");
    lblValue.innerText =  during_time;    
});
// preview img sing =================================
var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
    
  };


// multipal img preview ====================================
$(function() 
{
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
        if (input.files) 
        {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) 
            {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };
    $('#product_images_pro').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
function summery_vali(res)
{
    if(res=='product_name')
    {
        var edValue = document.getElementById("order_productName");
        var s = edValue.value;
        var lblValue = document.getElementById("summ_productName");
        lblValue.innerText =  s;
    }
    if(res=='product_price')
    {
        var edValue = document.getElementById("order_product_price");
        var a = Number(edValue.value);
        var b=Number(30);
        var c= a+b;
        var lblValue = document.getElementById("summery_pro_price");
        lblValue.innerText =  a;
        document.getElementById("summery_estimated_total").innerText =  c;
        
    }
    if(res=='product_qty')
    {
        var edValue = document.getElementById("order_product_qty");
        var s = edValue.value;
        var lblValue = document.getElementById("summery_Quantity");
        lblValue.innerText =  s;
    }
    if(res=='product_details')
    {
        var edValue = document.getElementById("order_product_details");
        var s = edValue.value;
        var lblValue = document.getElementById("sum_pro_description");
        lblValue.innerText =  s;
    }
    if(res=='delivery_from')
    {
        var edValue = document.getElementById("delivery_from_ord");
        var s = edValue.value;
        var lblValue = document.getElementById("summery_Deliverfrom");
        lblValue.innerText =  s;
    }
    if(res=='delivery_to')
    {
        var edValue = document.getElementById("deliver_to_ord");
        var s = edValue.value;
        var lblValue = document.getElementById("summery_Deliverto");
        lblValue.innerText =  s;
    }
}

$("#store_orderwith_details").click(function(){
    var _token = $("input[name=_token]").val();
    var product_link = $("input[name=product_link]").val();
    var product_name = $("input[name=product_name]").val();
    var product_price = $("input[name=product_price]").val();
    var product_qty = $("input[name=product_qty]").val();
    var box = $("input[name=box]").val();
    var product_details = $(".product_details").val();
    var devliver_from = $("input[name=devliver_from]").val();
    var devliver_to = $("input[name=devliver_to]").val();
    // var product_img = $("#product_images").prop('files')[0];   
    var during_time = $(".during_time").val();
    if(product_link =="")
    {
        Swal.fire('Please Enter Product Link');
        return false
    }
    if(product_name =="")
    {
        Swal.fire('Please Enter Product Name');
        return false
    }
    if(product_price =="")
    {
        Swal.fire('Please Enter Product Ampount');
        return false
    }
    if(product_qty =="")
    {
        Swal.fire('Please Enter Product qty');
        return false
    }
    if(devliver_from =="")
    {
        Swal.fire('Please Enter Product Deliver from');
        return false
    }    
    if(devliver_to =="")
    {
        Swal.fire('Please Enter Product Deliver To');
        return false
    }
    let formData = new FormData();
    $.each($("#product_images_pro")[0].files, function(i, file) {            
        formData.append('file[]', file);
    });
    formData.append("product_link", product_link);
    formData.append("product_name", product_name);
    formData.append("product_price", product_price);
    formData.append("product_qty", product_qty);
    formData.append("box", box);
    formData.append("devliver_from", devliver_from);
    formData.append("product_details", product_details);
    formData.append("devliver_to", devliver_to);
    formData.append("during_time", during_time);
    formData.append("_token", _token);
    $.ajax({
        enctype: 'multipart/form-data',
        url: base_path+"/order_product",
        type:"POST" , 
        contentType: false,
        processData: false, 
        data:formData,
        success:function(response)
        {
            Swal.fire(
                'Good job!',
                'Verifyed Your Order',
                'success'
            )
            window.location.assign(base_path+"/orders")
        }
    })
});
if($("#update_product_box").val() == 1)
{
    $("#update_product_box").attr("checked", "checked");
}

// update user profile setting ==========================================
$(".update_pro_setting").click(function(){
    var _token = $("input[name=_token]").val();
    var id=$("input[name=id]").val();
    var first_name=$("input[name=first_name]").val();
    var last_name=$("input[name=last_name]").val();
    var email=$("input[name=email]").val();
    var email=$("input[name=email]").val();
    var mobile=$("input[name=mobile]").val();
    var description=$("#biotextarea").val();
    var profile = $("#profile_img_up").prop('files')[0]; 
    let formData = new FormData();
    formData.append("id", id);
    formData.append("first_name", first_name);
    formData.append("last_name", last_name);
    formData.append("email", email);
    formData.append("mobile", mobile);
    formData.append("description", description);
    formData.append("profile", profile);
    formData.append("_token", _token); 
    // alert("DFDdg");
    $.ajax({
        enctype: 'multipart/form-data',
        url: base_path+"/edit_profile_data",
        type:"POST" , 
        contentType: false,
        processData: false, 
        data:formData,
        success:function(response)
        {
            Swal.fire(
                'Good job!',
                'Verifyed Your Order',
                'success'
            )
            // window.location.assign(base_path+"/orders")
        }
    })
})