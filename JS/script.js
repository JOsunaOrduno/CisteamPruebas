var div=document.querySelector("div.contenedor-servicios");  
var h=document.querySelector("h2.titulo");  
var header=document.querySelector("header");
var ul=document.querySelector("ul.singup");
var div2=document.querySelector("div.contenedor-productos");        
var h2=document.querySelector("h2.tituloPr");           
                
                
window.onscroll = function(){
        div.classList.toggle("abajoServ", window.scrollY>300);
        h.classList.toggle("abajoServ", window.scrollY>300);
        header.classList.toggle("abajo",window.scrollY>0);
        ul.classList.remove("_",window.scrollY>0);
        ul.classList.toggle("abajo",window.scrollY>0);        
        div2.classList.toggle("abajo",window.scrollY>1200);
        h2.classList.toggle("abajo",window.scrollY>1200);
        
}


const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});



// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
  window.scrollTo = "0, 0"
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



