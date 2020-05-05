<?php
include 'contato.class.php';
$contato = new Contato();

if(!empty($_POST['email'])){
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	$contato->adicionar($email, $nome);
	header("Location: index.php");
}
?>
<!--Nome: <?php echo $_POST['nome']; ?><br/>
E-mail: <?php echo $_POST['email']; ?>-->