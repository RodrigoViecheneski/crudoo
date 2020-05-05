<h1>Adicionar</h1>
<!--<form method="POST">-->
<form method="POST" action="adicionar_submit.php">
	Nome:<br/>
	<input type="text" name="nome" /><br/><br/>

	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>

	<input type="submit" value="Adicionar"/>
</form>

<!--<?php if(!empty($_POST['nome'])): ?>
	Nome: <?php echo $_POST['nome']; ?><br/>
	E-mail: <?php echo $_POST['email']; ?>
<?php endif; ?>-->
