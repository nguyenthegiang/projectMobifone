/*------------ <select> trong Form ------------*/
// Class definition
var KTSelect2 = function() {
 // Private functions
 var demos = function() {
  // 4 thẻ Select
  $('#kt_select2_1').select2({
   placeholder: "Select a state"
  });

  $('#kt_select2_2').select2({
    placeholder: "Select a state"
  });

  $('#kt_select2_3').select2({
    placeholder: "Select a state"
  });

  $('#kt_select2_4').select2({
    placeholder: "Select a state"
  });

  // disabled results
  $('.kt-select2-general').select2({
   placeholder: "Select an option"
  });
 }

 // Public functions
 return {
  init: function() {
   demos();
   modalDemos();
  }
 };
}();

// Initialization
jQuery(document).ready(function() {
 KTSelect2.init();
});


/*------------ DatePicker trong Form ------------*/

// Class definition

var KTBootstrapDatepicker = function () {

    var arrows;
    if (KTUtil.isRTL()) {
     arrows = {
      leftArrow: '<i class="la la-angle-right"></i>',
      rightArrow: '<i class="la la-angle-left"></i>'
     }
    } else {
     arrows = {
      leftArrow: '<i class="la la-angle-left"></i>',
      rightArrow: '<i class="la la-angle-right"></i>'
     }
    }
   
    // Private functions
    var demos = function () {
   
     // Range Picker
     $('#kt_datepicker_5').datepicker({
        rtl: KTUtil.isRTL(),
        todayHighlight: true,
        orientation: "bottom right",
        templates: arrows
       });
    }
   
    return {
     // public functions
     init: function() {
      demos();
     }
    };
   }();
   
   jQuery(document).ready(function() {
    KTBootstrapDatepicker.init();
   });