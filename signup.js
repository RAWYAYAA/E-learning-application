var x = /^[0-9]{10,10}$/
var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
function validate() {
      
    if( document.myForm.nom.value == "" ) {
       alert( "Please enter your name!" );
       document.myForm.nom.focus() ;
       return false;
    }
    if( document.myForm.prenom.value == "" ) {
        alert( "Please enter your prenom!" );
        document.myForm.prenom.focus() ;
        return false;
     }
     if( !x.test(document.myForm.phone.value) || document.myForm.phone.value=="" ) {
        alert( "Please enter a phone!" );
        document.myForm.phone.focus() ;
        return false;
     }
    if( !re.test(document.myForm.email.value) ||document.myForm.email.value == "" ) {
       alert( "Please provide your Email!" );
       document.myForm.email.focus() ;
       return false;
    }
    if( document.myForm.password.value == "" || document.myForm.password.value.length < 8 ) {
       alert( "Enter a valid password" );
       document.myForm.password.focus() ;
       return false;
    }
    if(document.myForm.confirmpassword.value == "" ){
        alert( "Enter a valid password" );
        document.myForm.confirmpassword.focus() ;
        return false;
    }
    if( !(document.myForm.confirmpassword.value == document.myForm.password.value) ){
        alert( "don't match" );
        document.myForm.confirmpassword.focus() ;
        return false;
    }
 }