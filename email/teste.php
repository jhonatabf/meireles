</script>
<title>Enviando texto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
</style>
</head>
<body onLoad="document.email.nome.focus();">
<form action="multEmail.php" method="post" enctype="multipart/form-data" name="email">
<h1 align="center" class="style1">Formulario de email com anexo </h1>
<table width="32%" border="0" align="center">
<tr>
<td><div align="right" class="texto">Anexo</div></td>
<td><input name="arquivo[]" type="file" multiple></td>
</tr>
<tr>
<td> </td>
<td><input type="submit" name="Submit" value="Enviar"></td>
</tr>
</table>
</form>
</body>
</html>