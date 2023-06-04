function saludar() {
    //alert("saludar");
    let nombre =document.getElementById("txtNombre").value;
    let apellido = document.getElementById("txtApellido").value;
    alert("Bienvenido(a): "+ nombre + " " + apellido);
    //let color = document.getElementById("miColor").value;
    //let card = document.getElementById("miDiv");
    //card.style.background=color;{}
}

function cambiarColor(){
    //alert("cambiar color");
    let color = document.getElementById("miColor").value;
    let card = document.getElementById("miDiv");
    card.style.background=color;
}

function crearDegradado(){
   let color1= document.getElementById("color1").value;
   let color2= document.getElementById("color2").value;
   let lienzo = document.getElementById("degradado");

   //lienzo.style.background = "linear-gradient(" + color1 + "," + color2 + ")";
   lienzo.style.background = `linear-gradient(${color1},${color2})`;
   
}