var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var x = /^[0-9]{10,10}$/

function valid(){
    if( document.form.image.value == "" ) {
        alert( "Please enter an image!" );
        document.form.image.focus() ;
        return false;
     }
    if( document.form.name.value == "" ) {
        alert( "Please enter your name!" );
        document.form.name.focus() ;
        return false;
     }
     if( !re.test(document.form.email.value) || document.form.email.value == "" ) {
        alert( "Please provide your Email!" );
        document.form.email.focus() ;
        return false;
     }
     if( !x.test(document.form.phone.value) || document.form.phone.value=="" ) {
        alert( "Please enter a phone!" );
        document.form.phone.focus() ;
        return false;
     }
     if( document.form.enroll.value == "" ) {
        alert( "Please enter an enroll!" );
        document.form.enroll.focus() ;
        return false;
     }
     if( document.form.datedadmission.value == "" ) {
        alert( "Please enter an enroll!" );
        document.form.datedadmission.focus() ;
        return false;
     }
}

