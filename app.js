function agregarPantalla(value){
    document.getElementById("Pantalla").value+=value;
}
function limpiarPantalla(){
    document.getElementById("Pantalla").value="";
}
function calcular(){
    try{
        let result =eval( document.getElementById("Pantalla").value);
        document.getElementById("Pantalla").value = result;

    }catch (error){
        document.getElementById("Pantalla").value = "Error";

    }
}