<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) 
	session_start();

// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['Sessao'])) 
{
	// Destrói a sessão por segurança
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: login.php"); exit;
}

//-------------------------------------------------------------------------------------------------------
//Adicao da API
include("API.php");

//-------------------------------------------------------------------------------------------------------

//Salva os cookies que vieram do login via SESSION 
if(!isset($_COOKIE["usuarioCK"]) || !isset($_COOKIE["senhaCK"]))  
{
	$string = 'Bem Vindo(a) ao TerrorPrime \nSalvamos seus dados de login por 1 semana, para facilitar seu acesso.\nApos esse periodo, ele sera resetado e voce \nprecisara entrar com usuario e senha novamente. \n\n\nObrigado e bom filme!!\nEquipe TerrorPrime';
	echo "<script>alert(\"$string\")</script>";
	setcookie("usuarioCK",$_SESSION['EmailKK'],  time() + 604800, "/");//email
    setcookie("senhaCK",$_SESSION['SenhaKK'],  time() + 604800, "/");//senha
    setcookie("nomeCK",$_SESSION['Sessao'],  time() + 604800, "/");//nome
}
//-------------------------------------------------------------------------------------------------------

//Efeitos do site em datas comemorativas
Natal();
Halloween();

//-------------------------------------------------------------------------------------------------------


 
//-------------------------------------------------------------------------------------------------------

ECHOS_Infinitos(); 

//-------------------------------------------------------------------------------------------------------


//Registrar Acesso nos logs
$Log = new Logs();
$Log->GravarAcao($_SESSION['Sessao'], "Acessou a pagina de filmes"); 



?> 

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width-device-width, initial-width">
	<link rel="stylesheet" href="css/edu.css">
	<title>TerrorPrime - Filmes</title>
</head>


<body>
	<nav class="navbar">
		<div class="logo">
			<img src="ImagensSite/main3.png">
		</div>		
		<div class="menu">
			<a href="filmes.php">Inicio</a> 
			<a href="dispositivo.php">Meu ID</a> 
			<a href="chat.php">Duvidas</a> 
			<a href="https://t.me/+Sj8QJG3QJ1ZjNmMx">Telegram</a> 
			<a href="login.php">Sair</a> 
			 
		</div>
	</nav>
	
	 
	 
	 
	
	
	 
		
	<div class="fundo">
		<div class="divisor">
		<?php
		if(isset($_GET['filme']))
		{
			echo '<form action="/busca.php" method="get" id="nameform">  
				<input type="text" id="filme" name="filme">
				<button type="submit" form="nameform" value="Submit">Buscar</button>
			</form>';
			 
		}
		else
		{
			 echo '<form action="/busca.php" method="get" id="nameform">  
				<input type="text" id="filme" name="filme">
				<button type="submit" form="nameform" value="Submit">Buscar</button>
			</form>';
			 
		}
		
		
		?> 
		</div>
		
		<div class="vidro">
		 
			
			 
			
			
			<?php
			
			 
 
			$IndexImagens = 0; 

 
			//Ordena a lista de filmes por ordem alfabetica
			sort($ListaLinks);
			
			
			if(isset($_GET['filme']))
			{
			
			foreach ($ListaLinks as $palavra)
				{
					 
					if (file_exists("img/".$ListaLinks[$IndexImagens].".jpg")) //Checka se existe a capa
					{
						
						if (file_exists("Filmes/".$ListaLinks[$IndexImagens].".mkv") || file_exists("Filmes/".$ListaLinks[$IndexImagens].".mp4")) //Checka se existe o filme
						{
							$listaBaixo = strtolower($ListaLinks[$IndexImagens]);
							$buscaBaixo = strtolower($_GET['filme']);
							if (strpos($listaBaixo, $buscaBaixo) !== false)
							{
								echo "<div class='vidro2'><a href='player.php?filme=".$ListaLinks[$IndexImagens]."'><img class='capa' src='img/".$ListaLinks[$IndexImagens].".jpg'></a><center></center></img></div>"; 
										
							}	
							
						}
					}
					
					else if (file_exists("img/".$ListaLinks[$IndexImagens].".png")) //Checka se existe a capa
					{
						
						if (file_exists("Filmes/".$ListaLinks[$IndexImagens].".mkv") || file_exists("Filmes/".$ListaLinks[$IndexImagens].".mp4")) //Checka se existe o filme
						{
							$listaBaixo = strtolower($ListaLinks[$IndexImagens]);
							$buscaBaixo = strtolower($_GET['filme']);
							if (strpos($listaBaixo, $buscaBaixo) !== false)
							{
								echo "<div class='vidro2'><a href='player.php?filme=".$ListaLinks[$IndexImagens]."'><img class='capa' src='img/".$ListaLinks[$IndexImagens].".png'></a><center></center></img></div>"; 
										
							}	
							
						}
					}
					
					$IndexImagens++;
				}
			
			}
			
			
			
			
			
			
			
			
			
			?>
			 
			
		</div>
	</div>
	
	 
	 
	 
	
	<div class="barra2"></div>
	
	
		
</body>

<footer>



</footer>





</html>