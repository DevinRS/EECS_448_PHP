function resetForm(){
    const form = document.getElementById('checkout');
    form.reset();
    alert("Selections cleared");
}



function validateForm(){
    const form = document.getElementById('checkout');
    const inputs = form.getElementsByTagName('input');
    var input = null;

    for(var i=0; i<inputs.length; i++){
        input = inputs[i];
        if(!input.value){
            alert("Please fill all the inputs");
            input.focus();
            return;
        }
        else if(i==0){
            var check = isEmailValid(input.value);
            if(check == false){
                alert("Please enter a valid email address");
                input.focus();
                return;
            }
        }
        else if(i==2 || i==3 || i==4){
            var check = isQuantityValid(input.value);
            if(check == false){
                alert("Quantity must be 0 or above");
                input.focus();
                return;
            }
        }
        else if(i==5){
            if(!isRadioValid()){
                alert("Please select one of the shipping options");
                return;
            }
        }
    }
    
    form.submit();
}

function isEmailValid(email) {
    const emailRegexp = new RegExp(
      /^[a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1}([a-zA-Z0-9][\-_\.\+\!\#\$\%\&\'\*\/\=\?\^\`\{\|]{0,1})*[a-zA-Z0-9]@[a-zA-Z0-9][-\.]{0,1}([a-zA-Z][-\.]{0,1})*[a-zA-Z0-9]\.[a-zA-Z0-9]{1,}([\.\-]{0,1}[a-zA-Z]){0,}[a-zA-Z0-9]{0,}$/i
    )
  
    return emailRegexp.test(email)
}

function isQuantityValid(quantity){
    if(quantity < 0){
        return false;
    }
    else{
        return true;
    }
}

function isRadioValid(){
    const radioButtons = document.querySelectorAll('input[name=shippingradio]');
    var check = false;
    for(const radioButton of radioButtons){
        if(radioButton.checked){
            check = true;
        }
    }

    return check;

}