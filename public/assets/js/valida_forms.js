/* -----------------VALIDADOR ALTERA FOTO ------------------------------*/

function validaAlteraFoto(formAlteraFoto){
	var fup = document.getElementById('input03');
	var fileName = fup.value;
	var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
	if(ext == "JPG" || ext == "jpg" || ext == "jpeg" || ext == "JPEG" || ext == "PNG" || ext == "png")
		{
			return true;
		}
		{
			alert("Insira sua foto. Formatos aceitos: imagem em JPEG ou PNG");
			fup.focus();
			return false;
		}		
    return true;
}


/* -----------------VALIDADOR UPLOAD SIMPLES DE ARQUIVO ------------------------------*/

function validaUploadFile(form_uploadFile){
	var fup = document.getElementById('upload_anexo');
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "JPG" || ext == "jpg" || ext == "JPEG" || ext == "jpeg" || ext == "PNG" || ext == "png")
			{
				return true;
			}
			{
			alert("Anexe a imagem do seu documento. Formatos aceitos: JPEG e PNG.");
			fup.focus();
			return false;
	}
	return true;
}

/* -----------------VALIDADOR UPLOAD FRENTE E VERSO DE ARQUIVO ------------------------------*/

function validaUploadFiles(form_uploadFiles){
	var fup = document.getElementById('upload_anexo1');
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "JPG" || ext == "jpg" || ext == "JPEG" || ext == "jpeg" || ext == "PNG" || ext == "png")
			{
				return true;
			}
			{
			alert("Anexe a foto FRENTE do seu documento. Formatos aceitos: JPEG e PNG.");
			fup.focus();
			return false;
	}
	return true;
}


/* ------------- VALIDADOR DE CPF ----------------------------------*/

function validaCPF(usu_cpf) {
    if (usu_cpf.length < 11) return false
    var nonNumbers = /\D/
    if (nonNumbers.test(usu_cpf))return false
    if (usu_cpf == "00000000000" || usu_cpf == "11111111111" ||
        usu_cpf == "22222222222" || usu_cpf == "33333333333" ||
        usu_cpf == "44444444444" || usu_cpf == "55555555555" ||
        usu_cpf == "66666666666" || usu_cpf == "77777777777" ||
        usu_cpf == "88888888888" || usu_cpf == "99999999999")
            return false
    var a = []
    var b = new Number
    var c = 11
    for (i=0; i<11; i++){
            a[i] = usu_cpf.charAt(i)
            if (i < 9) b += (a[i] * --c)
    }
    if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
    b = 0
    c = 11
    for (y=0; y<10; y++) b += (a[y] * c--)
    if ((x = b % 11) < 2) { a[10] = 0 } else { a[10] = 11-x }
    if ((usu_cpf.charAt(9) != a[9]) || (usu_cpf.charAt(10) != a[10]))return false
    return true
}

/* DAR DESTAQUE NO CAMPO CPF */

function vCPF(i){
  i.setCustomValidity(validaCPF(i.value)?'':'Número de CPF inválido')
}


function validaCadAdministrador(formCadAdministrador){
	if(formCadAdministrador.usu_nome.value == ''){
		alert("Informe o primeiro nome");
		return false;
	}
	if(formCadAdministrador.usu_nome2.value == ''){
		alert("Informe o sobrenome");
		return false;
	}	
	if(formCadAdministrador.usu_email.value == ''){
		alert("Informe o email");
		return false;
	}
	if(formCadAdministrador.usu_email.value.indexOf(('@' && '.'),0)== -1){
	alert("Informe um email válido");
		return false;
	}
	return true;
}

function updateUsuCad(formUpdateUsuCad){
	if(formUpdateUsuCad.usu_nome.value == ''){
		alert("Informe seu nome");
		return false;
	}
		if(formUpdateUsuCad.usu_nome2.value == ''){
		alert("Informe seu sobrenome");
		return false;
	}
	if(formUpdateUsuCad.usu_email.value == ''){
		alert("Informe seu email");
		return false;
	}
	if(formUpdateUsuCad.usu_email.value.indexOf(('@' && '.'),0)== -1){
	alert("Informe um email válido");
	return false;
	}
	if(formUpdateUsuCad.usu_senha.value == ''){
		alert("Informe uma senha");
		return false;
	}
	return true;
}

/* ---------------- FORM CADASTRO GARANTIA ----------------------*/

function validaCadGarantia(formCadGarantia){
	if(formCadGarantia.rev_nome.value == ''){
		alert("Informe seu nome");
		return false;
	}
	if(formCadGarantia.rev_nome2.value == ''){
		alert("Informe seu sobrenome");
		return false;
	}
	if(formCadGarantia.rev_cpf.value == ''){
		alert("Informe seu CPF");
		return false;
	}		
	if(formCadGarantia.rev_email.value == ''){
		alert("Informe o email");
		return false;
	}
	if(formCadGarantia.rev_email.value.indexOf(('@' && '.'),0)== -1){
		alert("Informe um email válido");
		return false;
	}
	if (formCadGarantia.rev_uf.selectedIndex == 0){
		alert ( "Informe o estado" );
		return false;
	}
	if (formCadGarantia.rev_cidade.selectedIndex > 11059){
		alert ( "Informe a cidade" );
		return false;
	}
	if(formCadGarantia.rev_ddd.value == ''){
		alert("Informe o DDD");
		return false;
	}
	if(formCadGarantia.rev_tel.value == ''){
		alert("Informe o telefone");
		return false;
	}
	if(formCadGarantia.rev_refRel.value == ''){
		alert("Informe a referência do produto");
		return false;
	}
	if(formCadGarantia.rev_numNf.value == ''){
		alert("Informe o número da nota fiscal");
		return false;
	}

	if(formCadGarantia.cli_nome.value == ''){
		alert("Informe nome do cliente");
		return false;
	}
	if(formCadGarantia.cli_nome2.value == ''){
		alert("Informe sobrenome do cliente");
		return false;
	}
	if(formCadGarantia.cli_cpf.value == ''){
		alert("Informe CPF do cliente");
		return false;
	}		
	if(formCadGarantia.cli_email.value == ''){
		alert("Informe o email do cliente");
		return false;
	}
	if(formCadGarantia.cli_email.value.indexOf(('@' && '.'),0)== -1){
		alert("Informe um email do cliente válido");
		return false;
	}
	if (formCadGarantia.cli_uf.selectedIndex == 0){
		alert ( "Informe o estado do cliente" );
		return false;
	}
	if (formCadGarantia.cli_cidade.selectedIndex > 11059){
		alert ( "Informe a cidade do cliente" );
		return false;
	}
	if(formCadGarantia.cli_ddd.value == ''){
		alert("Informe o DDD do cliente");
		return false;
	}
	if(formCadGarantia.cli_tel.value == ''){
		alert("Informe o telefone do cliente");
		return false;
	}
	if(formCadGarantia.cli_dataCompra.value == ''){
		alert("Informe a data da compra");
		return false;
	}
	/*
	var fup = document.getElementById('upload_anexo');
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "JPG" || ext == "jpg" || ext == "JPEG" || ext == "jpeg" || ext == "PNG" || ext == "png")
			{
				return true;
			}
			{
			alert("Anexe a imagem da nota fiscal. Formatos aceitos: JPEG e PNG.");
			fup.focus();
			return false;
	}
	
	if (document.formCadGarantia.aceito.checked == false) {
		alert ("É preciso aceitar os termos de uso do site.");
		return false;
   }
   */
	return true;
}

/* ------------------------------------------------------*/



