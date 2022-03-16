let modal = document.getElementById('modaladd');
var span = document.getElementsByClassName("close")[0];
modal.addEventListener("click" , function(){
    document.querySelector('.model').classList.toggle('hidden')
})
span.onclick = function() {
    document.querySelector('.model').style.display = "none";
  }