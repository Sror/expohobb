<?php
	include_once 'includes.php';
	
	if(isset($_POST['ingresar']))
	{
		$user = new Usuario();
		if(isset($_POST['recordar']) && $_POST['recordar'] == 'ok')
		{
			$recordar = $_POST['recordar'];
		}
		else
		{
			$recordar = 'no';
		}
		$user->login($_POST['mail'], $_POST['pass'], $recordar);
	}

	if(isset($_POST['agregar_marquee']))
	{
		$marquee = new Marquee();
		$marquee->insetMarquee($_POST, $_FILES);
		header("Location: listado_marquees.php");
	}
	if(isset($_POST['btn_marquee_eliminar']))
	{
		$marquee = new Marquee();
		$marquee->deletemarquee($_POST['id']);
		header("Location: listado_marquees.php");
	}
	if(isset($_POST['editar_marquee']))
	{
		$marquee = new Marquee();
		$marquee->updatemarquee($_POST, $_FILES);

		header("Location: listado_marquees.php");
	}
	if(isset($_POST['agregar_revista']))
	{
		$revista = new Revista();
		$revista->insetRevista($_POST, $_FILES);
		header("Location: listado_revistas.php");
	}
	if(isset($_POST['editar_revista']))
	{
		$revista = new Revista();
		$revista->updaterevista($_POST, $_FILES);
		header("Location: listado_revistas.php");
	}
	if(isset($_POST['btn_revista_eliminar']))
	{
		$revista = new Revista();
		$revista->deleteRevista($_POST['id']);
		header("Location: listado_revistas.php");
	}
	if(isset($_POST['registration_mail']))
	{
		if(preg_match("/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/i", $_POST['registration_mail'])) {
			$user = new Usuario();
			$user->verificar_mail_repetido($_POST['registration_mail'], $_POST['revista_id']);
		} else {
			header("Location: revistas.php");
		}
	}





	if(isset($_POST['btnRegistrarse']))
	{
		$register = Usuario::register($_POST['nombre'], $_POST['apellido'], $_POST['nick'], $_POST['pass'], $_POST['mail']);
		//header("Location: index.php");
	}
	if(isset($_POST['btnActualizar']))
	{
		$user = new Usuario();
		$update = $user->update($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['nick'], $_POST['pass'], $_POST['mail']);
		$id = $_POST['id'];
		header("Location: muro.php?$id");
	}
	if(isset($_POST['valor']))
	{
		$valor = $_POST['valor'];
		$mentions = $buscador->setMention($valor);
	}
	if(isset($_POST['btnpost'])){
    $post = $_POST['post'];
	$mencionados = explode(' ',$_POST['IDmencionados']);
	$buscador->setPost($post,$mencionados);
    header('Location: post.php?q='.$_SESSION['usuario'].'');
	}
	if(isset($_POST['addFriend'])){
		$user = new Usuario();
		$addFriend = $user->addFriend($_POST['id'],$_POST['idUser']);
		header('Location: perfil.php?q='.$_POST['idUser'].'');
	}
	if(isset($_POST['delFriend'])){
		$user = new Usuario();
		$addFriend = $user->delFriend($_POST['id'],$_POST['idUser']);
		header('Location: perfil.php?q='.$_POST['idUser'].'');
	}
?>