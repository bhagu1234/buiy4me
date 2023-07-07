var base_path = $("#url").val();
// fatch country =============================

// $(document).ready(function() {
//     $("#browsers_country").html("");
//     $.ajax({
//         type:'get',
//         url: base_path+"/admin-fatch_country",
//         success:function(res){
//             alert(res);
//                 $("#browsers_country").append(res);
//         }
//     })
// })
function fatch_country(res,from)
{
    $("#browsers_country").html("");
    $("#browsers_country_to").html("");
    $("#editOrderFrom").html("");
    $("#editOrderTo").html("");
    $.ajax({
        type:'get',
        url: base_path+"/admin-fatch_country",
        data:{'value':res},
        success:function(res){
            if(from=='travel_from')
            {
                $("#browsers_country").append(res);
            }
            else if(from=='travel_to')
            {
                $("#browsers_country_to").append(res);
            }
            else if(from=='editOrderFrom')
            {
                $("#editOrderFrom").append(res);
            }
            else if(from=='editOrderTo')
            {
                $("#editOrderTo").append(res);
            }
           
        }
    })
}
const tabs = document.querySelectorAll('[data-tab-value]')
const tabInfos = document.querySelectorAll('[data-tab-info]')
tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document
            .querySelector(tab.dataset.tabValue);

        tabInfos.forEach(tabInfo => {
            tabInfo.classList.remove('active')
        })
        target.classList.add('active');
    })
});

// open add trip modal 
$("#AddTripModal").click(function(){
    $("#StoreTripDataMo").modal('show');
});
$(".closeTripModal").click(function(){
    $("#StoreTripDataMo").modal('hide'); 
});
// close verify mobile number 
$(".closeverifyMobileNumberModal").click(function(){
    $("#verifyMobileNumberModal").modal('hide'); 
});
// accept only number -==============================
function allowNumbersOnly(e) {
    var code = (e.which) ? e.which : e.keyCode;
    if (code > 31 && (code < 48 || code > 57)) {
        e.preventDefault();
    }
}
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


//settings page active and close menus (toggle menus)



document.addEventListener('DOMContentLoaded', function() {
    var menuItems = document.getElementsByClassName('menu-list');
    var contents = document.getElementsByClassName('content-container');

    // Set initial active state
    menuItems[0].classList.add('active');
    contents[0].style.display = 'block';

    for (var i = 0; i < menuItems.length; i++) {
      menuItems[i].addEventListener('click', function() {
        var target = this.getAttribute('data-target');

        for (var j = 0; j < contents.length; j++) {
          contents[j].style.display = 'none';
          menuItems[j].classList.remove('active');
        }

        document.getElementById(target).style.display = 'block';
        this.classList.add('active');
      });
    }
  });
  
//   upload button function in settings page starts
  
var uploadButton = document.getElementById("upload-btn");
uploadButton.addEventListener("click", openFileManager);

function openFileManager() {
    // Create an invisible file input element
    var fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.style.display = "none";

    // Trigger a click event on the file input element
    fileInput.click();

    // When a file is selected, handle the upload logic
    fileInput.onchange = function(event) {
    var selectedFile = event.target.files[0];

    // Perform the necessary actions with the selected file
    // For example, you can upload it to a server using AJAX or process it in some way

        console.log("Selected file:", selectedFile);
    };
}
  

//   upload button function in settings page ends


// profile page pending hover starts

var statusBtn = document.getElementById('statusBtn');

statusBtn.addEventListener("click", function(){
   console.log("clicked");
});

// profile page pending hover ends

