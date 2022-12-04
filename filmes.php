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
	//$string = 'Bem Vindo(a) ao TerrorPrime \nSalvamos seus dados de login por 1 semana, para facilitar seu acesso.\nApos esse periodo, ele sera resetado e voce \nprecisara entrar com usuario e senha novamente. \n\n\nObrigado e bom filme!!\nEquipe TerrorPrime';
	//echo "<script>alert(\"$string\")</script>";
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
			<a href="busca.php">Procurar</a> 
			<a href="login.php">Sair</a> 
			
			 
			
		</div>
	</nav>
	
	 
	 
	<header class="header">
		 <center>
		<?php
			
			DestaquesVoid($ListaLinks); //Calcula se existe a imagem e o filme, e exibe aleatoriamente
		
		?>
		</center>
	</header>
	
	
	 
		
	<div class="fundo">
		<div class="divisor">
			Ultimos filmes...
		</div>
		
		<div class="vidro">
		 
			<?php 
			 
			for ($int = 0; $int <= 5; $int++)
			{
			//Checka se existe o filme 
				if (file_exists("Filmes/".$ListaLinks[$int].".mkv") || file_exists("Filmes/".$ListaLinks[$int].".mp4")) //Checka se existe o filme
				{ 
					if (file_exists("img/".$ListaLinks[$int].".jpg")) 
					{
						echo "<div class='vidro2'><a href='player.php?filme=".$ListaLinks[$int]."'><img class='capa' src='img/".$ListaLinks[$int].".jpg'></a><center></center></img></div>"; 
					}
					else if (file_exists("img/".$ListaLinks[$int].".png")) 
					{
							echo "<div class='vidro2'><a href='player.php?filme=".$ListaLinks[$int]."'><img class='capa' src='img/".$ListaLinks[$int].".png'></a><center></center></img></div>"; 
					
					}
					else
					{}
						
				
				}
			} 
			 ?>
			 
			
		</div>
	</div>
	
	 
	 
	 
	 
	 
	<div class="fundo">
		<div class="divisor">
			Lista completa de filmes         
			
			
		</div>
		<?php
		echo "<a class='botaoAleatorio' href=\"".SurpreendaMe($ListaLinks)."\">Deixe a gente escolher para voce!</a>";
		?>
		<div class="vidro">
			<!--<div class="vidro2"><a href="Filmes/Pearl.mkv"><img class="capa" src="img/Pearl.jpg"></a><center>Pearl</center></img></div> !-->
			
			
			
			
			
			<?php
			
			 
 
			$IndexImagens = 0; 

 
			//Ordena a lista de filmes por ordem alfabetica
			sort($ListaLinks);
			
			
			//So exibe os filmes que tem o arquivo de video e a capa
			foreach ($ListaLinks as $IndexImagens => $nome)
			{
				if (file_exists("img/".$ListaLinks[$IndexImagens].".jpg")) //Checka se existe a capa
				{
					if (file_exists("Filmes/".$ListaLinks[$IndexImagens].".mkv") || file_exists("Filmes/".$ListaLinks[$IndexImagens].".mp4")) //Checka se existe o filme
					{  
						echo "<div class='vidro2'><a href='player.php?filme=".$ListaLinks[$IndexImagens]."'><img class='capa' src='img/".$ListaLinks[$IndexImagens].".jpg'></a><center></center></img></div>"; 
						$IndexImagens++;			
					}
				}
				else if (file_exists("img/".$ListaLinks[$IndexImagens].".png")) //Checka se existe a capa
				{
					if (file_exists("Filmes/".$ListaLinks[$IndexImagens].".mkv") || file_exists("Filmes/".$ListaLinks[$IndexImagens].".mp4")) //Checka se existe o filme
					{ 
						echo "<div class='vidro2'><a href='player.php?filme=".$ListaLinks[$IndexImagens]."'><img class='capa' src='img/".$ListaLinks[$IndexImagens].".png'></a><center></center></img></div>";  
						
						$IndexImagens++;			
					}
				}
				else
				{}
			}
			
			
			?>
 
 
		</div>
		
		<?php
		echo "<a class='botaoAleatorio' href=\"".SurpreendaMe($ListaLinks)."\">Deixe a gente escolher para voce!</a>";
	?>
	</div> 
	 
	
	<div class="barra2"></div>
	
	
		
	
		
		
		
		
</body>

<footer>



</footer>





</html>