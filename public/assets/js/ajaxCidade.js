
function getValue(valor,id_css){
     $(id_css).html("<option value='0'>Carregando...</option>");
     console.log(valor) 	
     setTimeout(function(){
     $(id_css).load("./index.php/list",{key:valor})
   }, 50)
}

/* CONVERTER DADOS DO INPUT PARA MAIUSCULA */
function handleInput(e) {
     var ss = e.target.selectionStart;
     var se = e.target.selectionEnd;
     e.target.value = e.target.value.toUpperCase();
     e.target.selectionStart = ss;
     e.target.selectionEnd = se;
}
