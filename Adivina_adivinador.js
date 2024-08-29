let numeroMaquina = Math.floor(Math.random()*(10 - 1)+1);
    console.log(numeroMaquina);
 
let numeroUsuario = parseInt ( prompt("Adivina adivinador un numero del 1 al 10"));

let vidas= 4;
 while (numeroMaquina !== numeroUsuario && vidas > 1){
    vidas --;
    numeroUsuario = parseInt (prompt ("Que mal vuelve a intentarlo, te quedan estas vidas: "+vidas));
 }

 if (numeroMaquina === numeroUsuario){
    console.log("Ganaste!, toma una papa");
 }else {
    console.log("Que mal perdiste");
    console.log("El número secreto era: "+ numeroMaquina);

 }