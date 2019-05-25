/*
*
* Created by Luis Moran
* validation for numeric-values-only fields 
* add class allownumericwithoutdecimal to field
*
*/

$(".allownumericwithoutdecimal").on("keypress keyup blur",function (event) {
    $(this).val($(this).val().replace(/[^\d].+/, ""));
     if ((event.which < 48 || event.which > 57)) {
         event.preventDefault();
         
         /*
            demo.initChartist();

            $.notify({
                icon: 'pe-7s-server',
                message: 'El Campo solo admite valores numericos'

            }, {
                type: 'danger',
                timer: 4000
            });
        */
     }
 });

/*
*
* Created by Luis Moran
* validation for text-values-only fields 
* add class alpha-only to field
*
*/

 $(".alpha-only").on("input", function(){
    var regexp = /[^a-zA-Z]/g;
    if($(this).val().match(regexp)){
      $(this).val( $(this).val().replace(regexp,'') );
    }
});