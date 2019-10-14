/**
 * Created by IP DAS on 11/28/2016.
 */

$(function(){
    $('form')[0].reset();
    $('#form_validation').submit(function(){

    /*assign value into variable form input field*/
        var email= $('#email').val();
        var password=$('#pwd').val();

    /*set a flag for validation*/
        var flag=false;
        var error_messages=[];
    /*check for email Entry*/
        if(email === ''){
            flag= true;
            error_messages.push("Email required....!!");
        }
    /*check for password entry*/
        if(password===''){
            flag=true;
            error_messages.push("password is required...!!!");
        }
    /*generating the list of errors*/
        if(flag){
            var error='<div class="alert alert-danger"><h3>Fixes these errors:</h3><ul>';

            var len=error_messages.length;
            for(var i=0 ; i<len ; i++ )
            {
               error +='<li>' + error_messages[i]+'</li>';
            }
            error +='</ul></div>';
           $('#login-form-validation').html(error);
           return false;
        } else
            return true;
});

});