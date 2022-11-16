<?php

	  // A sessão precisa ser iniciada em cada página diferente
	  if (!isset($_SESSION)) 
		  session_start();

	  // Verifica se não há a variável da sessão que identifica o usuário
	  if (!isset($_SESSION['Sessao'])) {
		  // Destrói a sessão por segurança
		  session_destroy();
		  // Redireciona o visitante de volta pro login
		  header("Location: login.php"); exit;
	  }
	 
include "API.php";	 

ECHOS_Infinitos();


?>
 

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_GET['filme']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 <link rel="stylesheet" href="jlplayer.css">
    <style>
        *, *::before, *::after{margin: 0; padding: 0;}
        .video-container{width: 500px;}
    </style>
	
	
	<!--Video.jS!-->
	<link href="css/videoJS.css" rel="stylesheet">
	<script src="scripts/videoJS.js"></script>
	 
  
  <?php
echo Blabla3();//Obfuscação
echo Blabla3();//Obfuscação
echo Blabla3();//Obfuscação 
?>

<link rel="stylesheet" type="text/css" href="css/style3.css">
	
 </head>
 
<?php
function BannerFundo() 
{
	 
	if(file_exists("Banners/".$_GET['filme'].".jpg"))
	{
		return "Banners/".$_GET['filme'].".jpg";
	}
	else
	{
		return "ImagensSite/bg_.jpg";
	}
	
}


 
echo "<style>";
echo "body{ background: url('".BannerFundo()."') center center no-repeat fixed; 
            background-size: 100% 100%;
	        background-repeat: no-repeat;  
           }";
echo "</style>";
  
  
//Registrar Acesso do Filme nos logs
$Log = new Logs();
$Log->GravarAcao($_SESSION['Sessao'], "Acessou o filme ".$_GET['filme']);  


?>
 
 

<?php
echo "<center><a href='filmes.php'><img src='ImagensSite/main3.png' class='img-fluid'></a></center>"; 
echo "<br>";

?>

<p style="text-align: center;"><span style="font-size:20px"><span style="font-family:Courier New,Courier,monospace"><span style="color:#ffffff"><?php echo $_GET['filme']; ?><strong></strong></span></span></span></p>

<?php
echo Blabla3();//Obfuscação
echo Blabla3();//Obfuscação
echo Blabla3();//Obfuscação
echo Blabla3();//Obfuscação
echo Blabla3();//Obfuscação
?>

<p style="text-align: center;"><span style="font-size:20px">
<span style="font-family:Courier New,Courier,monospace">
<span style="color:#ffffff"><strong>
<?php
echo Descriptografar($_GET['filme']);
?>
</strong></span></span></span></p>

 

<?php

 

$IndexImagens = 1;  
   echo "<div class='bordin'><center>";   
    
		 
		 
		 
		 
		$string = "";
		 
		echo "<!--stream :'https://www.moviesonline.com/watch?v=".$_GET['filme']."'--!>";
		echo "<!----!>";
		
		//echo Blabla3();//Obfuscação
		
		
		//Verifica se o filme ta em MKV
		if (file_exists("Filmes/".$_GET['filme'].".mkv"))
		{
			//echo "<video width=80% ";
			//echo Blabla();
			//echo " autoplay controls video='Filmes/gleRXuayz55eIlOkSR47fa0Q4LommP.mp4' controlsList='nodownload' src='Filmes/".$_GET['filme'].".mkv' ";
			//echo Blabla2();
			//echo "</video>";
			
			echo '<center>
			<video id="my-video"  class="video-js vjs-default-skin"
			controls  width="auto" autoplay height="auto" ';

			echo "data-setup='";
			echo '{"fluid": true}';
			echo "'>";
			echo " 
			<source ".Blabla()." src='Filmes/".$_GET['filme'].".mkv'  type='video/mp4' width='50px' >".Blabla2()."</source> 
			</video>
			</center>";


		}
		//Verifica se existe o filme em MP4 
		if (file_exists("Filmes/".$_GET['filme'].".mp4"))
		{
			//echo "<video width=80% ";
			//echo Blabla();
			//echo " autoplay controls controlsList='nodownload' src='Filmes/".$_GET['filme'].".mp4' "; 
			//echo Blabla2();
			//echo "</video> ";
			
			echo '<center>
			<video id="my-video"  class="video-js vjs-default-skin"
			controls    width="auto" height="auto" ';
			
			//{"fluid": true}'
			echo "data-setup='";
			echo '{"fluid": true}';
			echo "'>";
			echo " 
			<source ".Blabla()." src='Filmes/".$_GET['filme'].".mp4'  type='video/mp4' width='50px' >".Blabla2()."</source> 
			</video>
			</center>";
		}
		
	 
     
        
echo "</center></div>";

   
?>














<p style="text-align: center;"><span style="font-size:20px"><span style="font-family:Courier New,Courier,monospace"><span style="color:#ffffff"><strong>Encontrou problemas no seu filme? Tente atualizar a pagina ou voltar para a lista e tentar novamente.<br>Caso o problema persista, reporte o erro no grupo do Telegram, <a href="https://t.me/+Sj8QJG3QJ1ZjNmMx">clicando aqui</a></strong></span></span></span></p>

<center><h3><a href="javascript:history.back()">Voltar para lista de filmes</a></h3></center>
 
 
 
 
 
 
 
 
 

<?php
//Bloquear click direito do mouse
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

<script>
document.getElementById('my-video').play();
</script>

</script>";
?>


<?php
//Bloquear teclas do teclado
echo "<script>
document.onkeydown = function(e) {
    if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 ||    e.keyCode === 117 || e.keycode === 17 || e.keycode === 85)) {
         
    }
    return false;
};
</script>"
?>
 
 <?php
echo "<center><a href='filmes.php'><img src='ImagensSite/main.png' class='img-fluid'></a></center>"; 
echo "<br>";
?>
</br></br>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  
  
</html>