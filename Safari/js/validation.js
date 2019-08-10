$(document).ready(function() {
    <!-- Real-time Validation -->
        <!--Name can't be blank-->
        $('#contact_name').on('input', function() {
            var input=$(this);
            var re = /^[a-zA-Z]+$/;
            var is_name=re.test(input.val());
           // var is_name=input.val();
            if(is_name){input.removeClass("invalid").addClass("valid");}
            else{input.removeClass("valid").addClass("invalid");}
        });

        <!--Email must be an email -->
        $('#contact_email').on('input', function() {
            var input=$(this);
            var re = /^[a-zA-Z0-9\.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var is_email=re.test(input.val());
            if(is_email){input.removeClass("invalid").addClass("valid");}
            else{input.removeClass("valid").addClass("invalid");}
        });

        <!--Phone must be an phone -->
        $('#contact_tel').on('input', function() {
            var input=$(this);
            var re = /^[0-9]{10}$/;
            var is_tel=re.test(input.val());
            if(is_tel){input.removeClass("invalid").addClass("valid");}
            else{input.removeClass("valid").addClass("invalid");}
        });



    <!-- After Form Submitted Validation-->
    $("#contact_submit").click(function(event){
        var form_data=$("#contact").serializeArray();
        var error_free=true;
        for (var input in form_data){
console.log(input);
            var element=$("#contact_"+form_data[input]['name']);
            var valid=element.hasClass("valid");
            var error_element=$("span.error_span", element.parent());
//console.log(element.parent());
            if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
            else{error_element.removeClass("error_show").addClass("error");}
        }
        if (!error_free){
            event.preventDefault();
        }
        else{
            alert('No errors: Form will be submitted');
        }
    });

    $(window).resize(function(){
       $('header').height($('header').width()*(615/950));
       $('#pic2').height($('#pic2').width()*(529/950));
    });

});





