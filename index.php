<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['msg'];
if(isset($_POST["enviar"])){
	echo "Dados Enviados com sucesso! '$nome' '$email' $assunto $mensagem";
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>Project Foundation</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css"/>
<script type="text/javascript">
	function controle(contato) {
	var test = document.contato.input.value;

}


</script>
</head>
<body>
	<div id="menu .dropdown-menu">
	<?php require_once ("pag/menu.php");?>

	</div>
	<div>

	<?php require_once ($_GET["../pag/menu"]); ?>
	</div>




 <footer>
    Victor Phellyppe Todos os direitos reservados - <?php
    echo date('Y') ?>
 <footer>

</body>

</html>