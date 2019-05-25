/*
*
* Created by Luis Moran
* validation for numeric-values-only fields 
* add class allownumericwithoutdecimal to field
*
*/

$(".allownumericwithoutdecimal").on("keypress keyup",function (event) {
    $(this).val($(this).val().replace(/[^\d].+/, ""));
     if ((event.which < 48 || event.which > 57)) {
         event.preventDefault();

         $.notifyClose();

            $.notify({
                icon: 'pe-7s-server',
                message: 'El Campo solo admiten valores numericos'

            }, {
                type: 'danger',
                timer: 1000
            });
        
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
      $(this).val( $(this).val().replace(regexp,''));
            
        demo.initChartist();

        $.notifyClose();

        $.notify({
            icon: 'pe-7s-server',
            message: 'El Campo solo admite texto'

        }, {
            type: 'danger',
            timer: 1000
        });
    }
});

/*
*
* Created by Luis Moran
* validation for limiting the length of the input 
* add class dui/nit/ncr to field
*
*/

$(".dui").keyup(function() {
    var maxChars = 9;
    if ($(this).val().length > maxChars) {
        $(this).val($(this).val().substr(0, maxChars));
        
        //Take action, alert or whatever suits
        $.notifyClose();

        $.notify({
            icon: 'pe-7s-server',
            message: 'El Campo solo admite 9 numeros'

        }, {
            type: 'danger',
            timer: 1000
        });
    }
});

$(".nit").keyup(function() {
    var maxChars = 14;
    if ($(this).val().length > maxChars) {
        $(this).val($(this).val().substr(0, maxChars));
        
        //Take action, alert or whatever suits
        $.notifyClose();

        $.notify({
            icon: 'pe-7s-server',
            message: 'El Campo solo admite 14 numeros'

        }, {
            type: 'danger',
            timer: 3000
        });
    }
});

$(".ncr").keyup(function() {
    var maxChars = 14;
    if ($(this).val().length > maxChars) {
        $(this).val($(this).val().substr(0, maxChars));
        
        //Take action, alert or whatever suits
        $.notifyClose();

        $.notify({
            icon: 'pe-7s-server',
            message: 'El Campo solo admite 14 numeros'

        }, {
            type: 'danger',
            timer: 3000
        });
    }
});