
function form_request(form_id){
    var form = $(form_id);
    var form_method = form.attr('method');
    var url = form.attr('action');
    var form_data = form.serializeArray();
     $.ajaxSetup({
        header: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
     });
   return  $.ajax({
        url: url,
        type: form_method,
        data:form_data,
        cache: false,
        dataType: "json",
        success: function(result, status) {
            result   
        },
        error: function(error){
         "request failed, try again" + error
    }
    });
}


function PasswordValidation(inputs){
        var lowercases = /[a-z]/g;
        var uppercase = /[A-Z]/g;
        var numbers = /[0-9]/g;
        var len = 9;

        if(inputs.value.match(lowercases)){
            document.getElementById('lower').classList.remove('errors');
            document.getElementById('lower').classList.add('validated');
            
        }else{
            document.getElementById('lower').classList.add('errors');
            document.getElementById('lower').classList.remove('validated');
        }
        if(inputs.value.match(uppercase)){
            document.getElementById('capital').classList.remove('errors');
            document.getElementById('capital').classList.add('validated');
        }else{
            document.getElementById('capital').classList.add('errors');
            document.getElementById('capital').classList.remove('validated');
        }
        if(inputs.value.match(numbers)){
            document.getElementById('number').classList.remove('errors');
            document.getElementById('number').classList.add('validated');
        }else{
            document.getElementById('number').classList.add('errors');
            document.getElementById('number').classList.remove('validated');
        }
        if(inputs.value.length  >= len){
            document.getElementById('len').classList.remove('errors');
            document.getElementById('len').classList.add('validated');
           
        }else{
            document.getElementById('len').classList.add('errors');
            document.getElementById('len').classList.remove('validated');
        }

    }

    function confirmPassowrd(pass, confamPass, errorMsg){

       
        if(pass.value !== confamPass.value){
            errorMsg.innerHTML = `<span style="color:red"> Password is not the same</span>`;
        }else{
            errorMsg.innerHTML = "";
        }

    }




