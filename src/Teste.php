<html>
 <head>
  <title>Teste PHP</title>
 </head>
 <body>
<pre>
<?php echo "array SERVER = ".print_r($_SERVER, true);
?>
 </pre>
<form action="Teste.php" method="post"> 
Usuario:<input type="text" id="user" name="user"/>
Senha:<input type="password" id="senha" name="senha"/>
<input type="hidden" id="login" value="login"/> 
<button type="submit">Entrar</button>
</form>

<?php
session_start();

if(!empty($_POST)) {if($_POST("login") == "login")
{
    $ret = login($_POST["user"], $_POST["senha"])

    if($ret){
        echo "Bem Vindo ".$_POST["user"];
    }
    else{
        echo "Usuario ou senha estão inválidos";
    }
}
}
?>
 </body>
</html>