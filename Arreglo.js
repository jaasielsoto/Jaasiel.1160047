const frutas =["Uva","Fresa","Melon","Pera","Kiwi","Frambuesa","Guayaba","Platano","Papaya","Manzana"];
function logArrayElements(element, index, array) {
console.log("a[" + index + "] = " + element);
frutas.forEach(logArrayElements);
}
