<meta charset="utf-8">
<div class="img-thumbnail">
<?php
$nrAnexo = $_GET['nr_anexos'];
for($i = 1; $i <= $nrAnexo; $i++){
	echo "
		<div class='row'>
		<div class='col-sm-12'>
			<label for='idCep'>Anexo $i:</label>
			<input name='ie_anexo$i' type='file' required='required' class='form-control' id='idAnexo$i'>
		</div>
		</div>
	";
}
?>
</div>