<?php
include "API.php";	

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $fname = $_POST['femail'];
    $fsenha = $_POST['fsenha'];
    if (empty($fname)) 
	{
        echo "<script>";
		echo "alert('Entre com um email autorizado');";
		echo "</script>";
    } 
	else if (empty($fsenha)) 
	{
		echo "<script>";
		echo "alert('Senha em branco');";
		echo "</script>";
	}
	else
	{
	#------------------------------------------------------------------------------
		$host = "localhost";
		$user = "root";
		$pass = "";
		$dbname = "terror";
		$porta = 3306;
		
		$conn = new mysqli($host, $user, $pass, $dbname);
		$sql = "SELECT ID, Nome, usuario,senha, MAC1, MAC2, MAC3, MAC4 FROM usuarios";
		
		
		$result = $conn->query($sql);

		$mensagem = "";
		
		$mac = exec('getmac');
		$mac = strtok($mac, ' ');
		
		if ($result->num_rows > 0) 
		{ 
			while($row = $result->fetch_assoc()) 
			{ 
				if($row['usuario'] == $fname)
				{
					if($row['senha'] == $fsenha)
					{
						if($row['MAC1'] == $mac || $row['MAC2'] == $mac || $row['MAC3'] == $mac || $row['MAC4'] == $mac)
						{ 
							session_start();
							$_SESSION['Sessao'] = $row['Nome'];
							
							//Passa os dados pra proxima pagina pra salvar nos cookies
							$_SESSION['EmailKK'] = $row['usuario'];
							$_SESSION['SenhaKK'] = $row['senha'];
							
							
							
							//Registrar Acesso do Filme nos logs
							$Log = new Logs();
							$Log->GravarAcao($_SESSION['Sessao'], "Logou com o dispositivo ".$mac); 
							
							 
							
							
							header("Location: filmes.php");
							 
						} 
						else
						{
							echo "<script>";
							echo "alert('Dispositivo nao autorizado');";
							echo "</script>"; 
						}								
					}
					else
					{
						echo "<script>";
						echo "alert('Senha Invalida');";
						echo "</script>";
					}
						 
				}
				else
				{
					echo "<script>";
					echo "alert('Email Invalido');";
					echo "</script>";
				}
					 	
			}
		} 
		else 
		{ 
			echo "<script>";
			echo "alert('Nenhum resultado');";
			echo "</script>";
		}
		
	
		//echo $mensagem;
 
	#===================================
	}
}
 
 ?>
 
 
<?php
echo "<script>
if (document.addEventListener) {
   document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
        return false;
    });
} else { //Versões antigas do IE
    document.attachEvent('oncontextmenu', function(e) {
    e = e || window.event;
    e.returnValue = false;
    return false;
    });
}
</script>";
?>

 



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel = "icon" href = "codewithanonymous.png" 
        type = "image/x-icon"> 
  <title>TerrorPrime - Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./css/style2.css">

</head>
<body>
<!-- partial:index.partial.html -->
<style>
#teste{
  width: 100%;
  height: 100%;
  background-image: url(ImagensSite/bg.jpg);
background-size: 100% 100%;
	background-repeat: no-repeat;  
}
</style>


  <div id="teste">
 <center>
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<div class="login">
   
   
   

   
   
     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <center>
	 
	
	<?php //Sistema de Carregar Cookies
	if(isset($_COOKIE["usuarioCK"])) 
	{
		if(isset($_COOKIE["senhaCK"])) 
		{
	
			echo "
			<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Bem Vindo(a) novamente ".$_COOKIE['nomeCK']."!!</strong></span></span></span></p>
			<br> 
			<br> 
			<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Email</strong></span></span></span></p>
			<br> 
			<input type='text' name='femail' value='".$_COOKIE["usuarioCK"]."'>
			<br>
			<br>
			<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Senha</strong></span></span></span></p>
			<br> 
			<input type='password' name='fsenha' value='".$_COOKIE["senhaCK"]."'>";
		}
	}
	else
	{
			echo "
			<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><b>Email</b></span></span></span></p>
			<br> 
			<input type='text' name='femail' value=''>
			<br>
			<br>
			<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><b>Senha</b></span></span></span></p>
			<br> 
			<input type='password' name='fsenha' value=''>";
	}
	
	?>
  
  
	<br><br>
	<input type="submit" value="Entrar"> 
	
	<br><br>
	 
	</center>
   
  </form> 
  
</div>
</center>
<!-- partial -->
  
   </div>
<?php
 



?>

</body>
</html>
