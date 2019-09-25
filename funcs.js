var req;
var doc;
var anex;
var orca;
 
//E-Mail
function enviarEmail(ds_nome, ds_email, ds_telefone, ds_descricao) {
if(window.XMLHttpRequest) {
   req = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   req = new ActiveXObject("Microsoft.XMLHTTP");
}
var url = "email.php?ds_nome="+ds_nome+"&ds_email="+ds_email+"&ds_telefone="+ds_telefone+"&ds_descricao="+ds_descricao+"&contato=contato";
req.open("Get", url, true); 
req.onreadystatechange = function() {
	if(req.readyState == 1) {
		document.getElementById('mensagem').innerHTML = 'Enviando e-mail...';
	}
	if(req.readyState == 4 && req.status == 200) {
	var resposta = req.responseText;
	document.getElementById('mensagem').innerHTML = resposta;
	}
}
req.send(null);
}

//E-Mail cliente
function enviarOrcamento(ie_dados, nr_documento, nr_documento_cpf, ds_abertura, ds_alteracao, ds_encerramento, ds_folha, ds_imposto, ds_rural, ds_sefip, ds_rais, ds_dctf, ds_trabalhista, ds_nome, dt_nascimento, nr_rg, ds_civil, ds_endereco, nr_numero, ds_complemento, ds_estado, ds_cidade, ds_cep, ds_telefone, ds_email, ds_descricao, ie_anexo) {
if(window.XMLHttpRequest) {
   orca = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   orca = new ActiveXObject("Microsoft.XMLHTTP");
}
var urlOrca = "email.php?ie_dados="+ie_dados+"&nr_documento="+nr_documento+"&nr_documento_cpf="+nr_documento_cpf+"&ds_abertura="+ds_abertura+"&ds_alteracao="+ds_alteracao+"&ds_encerramento="+ds_encerramento+"&ds_folha="+ds_folha+"&ds_imposto="+ds_imposto+"&ds_rural="+ds_rural+"&ds_sefip="+ds_sefip+"&ds_rais="+ds_rais+"&ds_dctf="+ds_dctf+"&ds_trabalhista="+ds_trabalhista+"&ds_nome="+ds_nome+"&dt_nascimento="+dt_nascimento+"&nr_rg="+nr_rg+"&ds_civil="+ds_civil+"&ds_endereco="+ds_endereco+"&nr_numero="+nr_numero+"&ds_complemento="+ds_complemento+"&ds_estado="+ds_estado+"&ds_cidade="+ds_cidade+"&ds_cep="+ds_cep+"&ds_telefone="+ds_telefone+"&ds_email="+ds_email+"&ds_descricao="+ds_descricao+"&ie_anexo="+ie_anexo+"&cliente=cliente";
orca.open("Get", urlOrca, true); 
orca.onreadystatechange = function() {
	if(orca.readyState == 1) {
		document.getElementById('msgOrca').innerHTML = 'Enviando e-mail...';
	}
	if(orca.readyState == 4 && orca.status == 200) {
	var respostaOrca = orca.responseText;
	document.getElementById('msgOrca').innerHTML = respostaOrca;
	}
}
orca.send(null);
}

//Documentos
function selectDoc(ie_tipo) {
if(window.XMLHttpRequest) {
   doc = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   doc = new ActiveXObject("Microsoft.XMLHTTP");
}
var urlDoc = "doc.php?ie_tipo="+ie_tipo;
doc.open("Get", urlDoc, true); 
doc.onreadystatechange = function() {
	if(doc.readyState == 1) {
		document.getElementById('idDocumento').innerHTML = 'Procurando tipo de documento';
	}
	if(doc.readyState == 4 && doc.status == 200) {
	var respostaDoc = doc.responseText;
	document.getElementById('idDocumento').innerHTML = respostaDoc;
	}
}
doc.send(null);
}

//Anexos
function nrAnexos(nr_anexos) {
if(window.XMLHttpRequest) {
   anex = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   anex = new ActiveXObject("Microsoft.XMLHTTP");
}
var urlAnex = "anexos.php?nr_anexos="+nr_anexos;
anex.open("Get", urlAnex, true); 
anex.onreadystatechange = function() {
	if(anex.readyState == 1) {
		document.getElementById('idAnexo').innerHTML = 'Calculando Anexos';
	}
	if(anex.readyState == 4 && anex.status == 200) {
	var respostaAnex = anex.responseText;
	document.getElementById('idAnexo').innerHTML = respostaAnex;
	}
}
anex.send(null);
}
