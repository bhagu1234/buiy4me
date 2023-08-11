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
// $("#deliver_to_ord").change(function(){
//     var s=$(this).attr('data-name');
//     // alert(s);
//     var lblValue = document.getElementById("summery_Deliverto");
//     lblValue.innerText =  s;
// });
// $("#delivery_from_ord").change(function(){
//     var s=$(this).attr('data-name');
//     // alert(s);
//     var lblValue = document.getElementById("summery_Deliverfrom");
//     lblValue.innerText =  s;
// });
function summery_vali(res,buy4meFee,paymentPro,travel_tax)
{
    if(res=='product_name')
    {
        var edValue = document.getElementById("order_productName");
        var s = edValue.value;
        var lblValue = document.getElementById("summ_productName");
        lblValue.innerText =  s;
    }
    // if(res=='product_price')
    // {
        var edValue = document.getElementById("order_product_price");
        var qty = document.getElementById("order_product_qty");
        var productPric= Number(edValue.value)*Number(qty.value);
        var travller_re=productPric*Number(travel_tax)/Number(100);
        if(travller_re<10)
        {
            travller_re=Number(10);
        }
        var buy4mefee=productPric*Number(buy4meFee)/Number(100);
        var paymentproccessing=productPric*Number(paymentPro)/Number(100);
        var total= productPric+travller_re+buy4mefee+paymentproccessing;
        var lblValue = $("#summery_pro_price").val("$"+productPric) 
        document.getElementById("summery_estimated_total").value ="$"+total;
        document.getElementById("summery_traveler_reward").value ="$"+travller_re;
        document.getElementById("summery_buy4me_fee").value ="$"+buy4mefee;
        // document.getElementById("summery_salesTax").value ="$"+salseTax;
        document.getElementById("summery_payment_processing").value ="$"+paymentproccessing;
        
    // }
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
}

$("#store_orderwith_details").click(function(){
    var _token = $("input[name=_token]").val();
    var product_link = $("input[name=product_link]").val();
    var product_name = $("input[name=product_name]").val();
    var product_price = $("input[name=product_price]").val();
    var product_qty = $("input[name=product_qty]").val();
    var box = $("input[name=box]").val();
    var product_details = $(".product_details").val();
    var devliver_from_country = $("#delivery_from_ord").val();
    var devliver_to_country = $("#deliver_to_ord").val();
    var devliver_from_city = $("#deliveryFromCity").val();
    var devliver_to_city = $("#deliver_to_ordCity").val();
    // var product_img = $("#product_images").prop('files')[0];   
    var during_time = $(".during_time").val();
    var summery_traveler_reward = $("#summery_traveler_reward").val();
    var summery_buy4me_fee = $("#summery_buy4me_fee").val();
    // var summery_salesTax = $("#summery_salesTax").val();
    var summery_payment_processing = $("#summery_payment_processing").val();
    var summery_estimated_total = $("#summery_estimated_total").val();
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
        Swal.fire('Please Enter Product price');
        return false
    }
    if(product_qty =="")
    {
        Swal.fire('Please Enter Product qty');
        return false
    }
    if(devliver_from_country =="" || devliver_from_country==null)
    {
        Swal.fire('Please select from country');
        return false
    }
    if(devliver_to_country =="" || devliver_to_country==null)
    {
        Swal.fire('Please select to country');
        return false
    }
    if(devliver_to_city =="" || devliver_to_city==null)
    {
        Swal.fire('Please select to City');
        return false
    }
    if($("#product_images_pro").val()=="" || $("#product_images_pro").val()==null)
    {
        Swal.fire('Please select some images');
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
    formData.append("product_details", product_details);
    formData.append("devliver_from_country", devliver_from_country);
    formData.append("devliver_to_country", devliver_to_country);
    formData.append("devliver_from_city", devliver_from_city);
    formData.append("devliver_to_city", devliver_to_city);
    formData.append("during_time", during_time);
    formData.append("summery_traveler_reward", summery_traveler_reward);
    formData.append("summery_buy4me_fee", summery_buy4me_fee);
    // formData.append("summery_salesTax", summery_salesTax);
    formData.append("summery_payment_processing", summery_payment_processing);
    formData.append("summery_estimated_total", summery_estimated_total);
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
        }
    })
})
// profile updated end ===============================================

// create_order===================================================
// header("Access-Control-Allow-Origin: *");
$("#create_order").click(function(){
 
    // alert("bnbm");
    var url=$("#fromduct_from_url").val();
    if(url=="")
    {
        alert("enter any product link");
        return false;
    }
    $.get(url).then(function(responseData) {
        $('#display').append(responseData);
      });
    // $("#display").load(url);
    // $.ajax({
    //     url:url,
    //     headers: {
    //         'X-Requested-With': 'XMLHttpRequest',
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    //         'Access-Control-Allow-Methods' : 'POST',
    //         'Access-Control-Allow-Origin':' *',
    //         'Access-Control-Allow-Headers' : 'X-Requested-With, Content-Type, X-Auth-Token, Origin, Authorization'
    //     },
    //     type:"post" , 
    //     data:{'_token':$("input[name=_token]").val()},
    //     contentType: false,
    //     processData: false, 
    //     dataType: "json",
    //     cache: false,
    //     crossDomain: false,
    //     success:function(response)
    //     {
    //         console.log(response);
    //     }
    // });
});


// mobile verification ============================================
// function sendOTP() {
    $("body").on("click","#sendOTP",function(){
	$(".error").html("").hide();
	var number = $("#mobile").val();
	if (number.length == 10 && number != null) {
        var _token = $("#token").val();
        let formData = new FormData();
        formData.append("_token", _token);
        formData.append("mobile_number", number);
        formData.append("action", 'send_otp');
		// var input = {
		// 	"mobile_number" : number,
		// 	"action" : "send_otp"
		// };
        $.ajax({
            url: base_path+"/processMobileVerification",
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
            }
        })
		// $.ajax({
		// 	url : 'controller.php',
		// 	type : 'POST',
		// 	data : input,
		// 	success : function(response) {
		// 		$(".container").html(response);
		// 	}
		// });
	} else {
		$(".error").html('Please enter a valid number!')
		$(".error").show();
	}
});
// }

function verifyOTP() {
	$(".error").html("").hide();
	$(".success").html("").hide();
	var otp = $("#mobileOtp").val();
    var _token = $("#token").val();
    let formData = new FormData();
    formData.append("_token", _token);
    formData.append("otp", otp);
    formData.append("action", 'verify_otp');
	// var input = {
	// 	"otp" : otp,
	// 	"action" : "verify_otp"
	// };
	if (otp.length == 6 && otp != null) {
        $.ajax({
            url: base_path+"/processMobileVerification",
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
            }
        })
		// $.ajax({
		// 	url : 'controller.php',
		// 	type : 'POST',
		// 	dataType : "json",
		// 	data : input,
		// 	success : function(response) {
		// 		$("." + response.type).html(response.message)
		// 		$("." + response.type).show();
		// 	},
		// 	error : function() {
		// 		alert("ss");
		// 	}
		// });
	} else {
		$(".error").html('You have entered wrong OTP.')
		$(".error").show();
	}
}