function numberParaReal(numero) {
  var formatado = "R$ " + numero.toFixed(2).replace(".", ",");
}

function realParaNumber(texto) {
  var compativelComParsetFloat = texto.replace("R$ ", "");
  compativelComParsetFloat = compativelComParsetFloat.replace(",", ".");
  var valor = parseFloat(compativelComParsetFloat);
}

function numberParaReal(numero) {
  var formatado = "R$ " + numero.toFixed(2).replace(".", ",");
  return formatado;
}

function realParaNumber(texto) {
  var compativelComParsetFloat = texto.replace("R$ ", "");
  compativelComParsetFloat = compativelComParsetFloat.replace(",", ".");
  var valor = parseFloat(compativelComParsetFloat);
  return valor;
}