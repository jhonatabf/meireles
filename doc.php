<meta charset="utf-8">

<?php
$ieDoc = $_GET['ie_tipo'];

if($ieDoc == 'CPF'){
	echo "
	<div class='row'>
		<div class='col-sm-4'>
		<label for='idCPF'>CPF:</label>
		<input type='text' name='nr_documento' id='idCNPJ' onkeyup='FormataCPF(this,event)' maxlength='14'  class='form-control' required>
		<input type='hidden' name='nr_documento_cpf' value='0' id='idCPF'/>
		</div>
	</div>
	<br/>
	";
}elseif($ieDoc == 'CNPJ'){
	echo "
	<div class='row'>
		<div class='col-sm-4'>
		<label for='idCNPJ'>CNPJ:</label>
		<input type='text' name='nr_documento' id='idCNPJ' onkeyup='FormataCnpj(this,event)' maxlength='18'  class='form-control' required>
		</div>
		<div class='col-sm-4'>
		<label for='idCPF'>CPF do responsável da empresa:</label>
		<input type='text' name='nr_documento_cpf' id='idCPF' onkeyup='FormataCPF(this,event)' maxlength='14'  class='form-control' required>
		</div>
	</div>
	<br/>
	";
}elseif($ieDoc == 'NIRF-ITR'){	
	echo "
	<div class='row'>
		<div class='col-sm-4'>
		<label for='idNIRF'>NIRF ITR:</label>
		<input name='nr_documento' type='text' required='required' class='form-control' onkeyup='FormataNIRF(this,event)' maxlength='11' id='idNIRF'>
		</div>
		<div class='col-sm-4'>
		<label for='idCPF'>CPF do proprietário da inscritura:</label>
		<input type='text' name='nr_documento_cpf' id='idCPF' onkeyup='FormataCPF(this,event)' maxlength='14'  class='form-control' required>
		</div>
	</div>
	<br/>
	";
}
?>