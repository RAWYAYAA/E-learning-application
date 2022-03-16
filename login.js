
var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
let check = document.getElementById('check') ;

check.addEventListener("click", function(e) {
    // e.preventDefault()
    if( !re.test(document.form.email.value) || document.form.email.value == "" ) {
        alert( "Please provide your Email!" );
        document.form.email.focus() ;
        return false;
     }
     if( document.form.password.value == "" || document.form.password.value.length < 8 ) {
        alert( "Enter a valid password" );
        document.form.password.focus() ;
        return false;
     }
});