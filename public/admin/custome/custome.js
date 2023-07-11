var base_path = $("#url").val();
// accept only number -==============================
function allowNumbersOnly(e) {
    var code = (e.which) ? e.which : e.keyCode;
    if (code > 31 && (code < 48 || code > 57)) {
        e.preventDefault();
    }
}
// data table ===========================================================
$(document).ready(function() {
    $('#country_table').DataTable();
  } );
// form validation ========================================================
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()

  // fatch country =============================

$(document).ready(function() {
  $(".browsers_country").html("");
  $.ajax({
      type:'get',
      url: base_path+"/admin-fatch_country",
      success:function(res){
          $(".browsers_country").append(res);
      }
  })
})