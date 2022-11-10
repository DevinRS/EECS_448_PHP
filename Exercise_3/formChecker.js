function validateForm(){
    var form = document.getElementById('checkout');
    var inputs = form.getElementsByTagName('input');
    var input = null;
    var flag = true;

    for(var i=0; i<inputs.length; i++){
        input = inputs[i];
        if(!input.value){
            flag = false;
            alert("Please fill all the inputs");
            window.history.back();
            return(flag);
        }
    }
    
    form.submit();
}