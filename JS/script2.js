var btn2 = document.getElementById("hola");
var btn3 = document.getElementById("closes");
var container2 = document.getElementById("modal_container2");


btn2.addEventListener('click',()=>{
    container2.classList.add('show');
  
  })
  
  btn3.addEventListener('click',()=>{
    container2.classList.remove('show');
  })