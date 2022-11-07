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
	 
?>

<?php
 for($i=0;$i<1000000;$i++){
        echo "\n";
    } 
 
 ?>
 
<!----------------------------------------------> 
 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terrorflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  
  
<?php
//Script de neve no mes de dezembro   
$hoje = date('m');
if ($hoje == 12)
{
	echo "<script src='neve.js'></script>";
	echo "<script src='neve.js'></script>";
	echo "<script src='neve.js'></script>";
	echo "<script src='neve.js'></script>";
}
?>
<!---------------------------------------------->

<?php
//Script de halloween 31/10 
$hoje2 = date('dm');
if ($hoje2 == 3110)
{ 
	echo "<script type='text/javascript' src='morcego.js'></script>"; 
	echo "<script type='text/javascript' src='morcego.js'></script>"; 
	echo "<script type='text/javascript' src='morcego.js'></script>"; 
	echo "<script type='text/javascript' src='morcego.js'></script>"; 
	echo "<script type='text/javascript' src='morcego.js'></script>"; 
	echo "<script type='text/javascript' src='morcego.js'></script>"; 
	echo "<script type='text/javascript' src='morcego.js'></script>"; 
}
?>
<!---------------------------------------------->



<!--Botao de Subir e Descer!--> 
<?php
echo "<center><img id='back-to-top' src='ImagensSite/subir.png' class='img-fluid'></center>"; 
echo "<center><img id='back-to-down' src='ImagensSite/descer.png' class='img-fluid'></center>"; 
echo "<br>";
?> 

<style>
#back-to-top {
  position: fixed;
  bottom: 0px;
  right: 0px;
}
#back-to-down {
  position: fixed;
  bottom: 0px;
  right: 50px;
}
</style>

<script>
var btn = document.querySelector("#back-to-top");
btn.addEventListener("click", function() {
    window.scrollTo(0, 0);
});

var btn = document.querySelector("#back-to-down");
btn.addEventListener("click", function() {
    window.scrollTo(0, 100000000);
});
</script>
<!---------------------------------------------->
 


</head>



<!-- Imagen de Fundo do Site -->  
<body  bgcolor="#000000" background="bg2.jpg" center="true"  >   
<style>
	body{
  background: url('ImagensSite/bg_.jpg') center center no-repeat fixed; 
  background-size: 100% 100%;
	background-repeat: no-repeat;  
}
	</style>

</br>
<!---------------------------------------------->



<?php


//Lista de Filmes
$ListaLinks = array( 
"",
"",
"",
"",
"",
"Sinais",
"Rogai por Nos",
"O Bosque de Blair Witch",
"O Iluminado",
"O Pacto",
"O Monstro do Armario",
"Assim na Terra Como no Inferno",
"Livrai-nos do Mal",
"A Entidade",
"A Entidade 2",
"A Casa Que Jack Construiu",
"120 Dias de Sodoma",
"A Arte do Demonio 3 - 2008",
"A Arte do Demonio - 2004",
"A Arte do Demonio 2 - 2005",
"Outra Alma",
"Um Lugar Silencioso",
"O Exorcismo de Emily Rose",
"O Abominavel Dr. Phibes",
"o Apostolo",
"Nosferatu 1922",
"Laranja Mecanica",
"Navio Fantasma",
"It- Uma obra prima do medo",
"Carrie - A Estranha 1976",
"Dia dos Mortos",
"Alta Tensao",
"A Piramide",
"A Orfa",
"A Morte Pede Carona",
"A Hora do Espanto 2",
"A Hora do Espanto",
"A Freira",
"A Casa dos Passaros Mortos",
"A Autopsia",
"O Massacre da Serra Elétrica 2022",
"O Massacre Da Serra Elétrica Inicio",
"O Massacre Da Serra Elétrica 2003",
"O massacre da serra elétrica 4 O retorno",
"O Massacre da Serra Eletrica 3D",
"O Massacre Da Serra Elétrica 3 1990",
"O Massacre Da Serra Elétrica 2",
"O Massacre Da Serra Elétrica 1",
"Lobisomem Americano em Paris - 1997",
"Lobisomem Americano em Londres - 1981",
"Mestre dos Desejos 4",
"Mestre dos Desejos 3",
"Mestre dos Desejos 2",
"Mestre dos Desejos 1",
"Leatherface Massacre no Texas",
"A Tribo 2 - 2009",
"A Tribo - 2008",
"Nos - 2019",
"Suspiria - 1977",
"Terrifier - 2016",
"Terrifier 2 -2022",
"Cadaveres 2 - 2008",
"Cadaveres - 2006",
"A Casa Amaldiçoada - 1999",
"De Volta à Casa da Colina - 2007",
"A Praga da Múmia - 1944",
"A Múmia - 2017",
"A Múmia - 1959",
"Martyrs Lane",
"Jason X - 2001",
"Maligno - 2019",
"O Exorcista 1",
"O Exorcista 2",
"O Exorcista 3",
"O Exorcista 4",
"Jogos Mortais 8",
"Jogos Mortais 7",
"Jogos Mortais 6",
"Jogos Mortais 5",
"Jogos Mortais 4",
"Jogos Mortais 3",
"Jogos Mortais 2",
"Jogos Mortais 1",
"Jogos Mortais 9 - Espiral - O Legado de Jogos Mortais",
"Halloween m13 Ends",
"Halloween l12 Kills",
"Halloween j10 2",
"Halloween k11 2018",
"Halloween i9 - O Inicio",
"Halloween h8 - Ressurreição",
"Halloween g7 H20",
"Halloween f6 A Última Vingança",
"Halloween e5 A Vingança de Michael Myers",
"Halloween d4 O Retorno de Michael Myers",
"Halloween c3 A Noite das Bruxas",
"Halloween b2 O Pesadelo Continua",
"Halloween a1 A Noite do Terror",
"Panico 5",
"Panico 4",
"Panico 3",
"Panico 2",
"Panico 1",
"Psicopata Americano 2",
"Psicopata Americano",
"O Chamado 3",
"O Chamado 2",
"O Chamado 1",
"Holocausto Canibal",
"Dracula 1931",
"Ze do caixao - Encarnação Do Demonio",
"Ze do caixao - Esta Noite Encarnarei no Teu Cadáver",
"Ze do caixao - À Meia Noite Levarei Sua Alma",
"O Dentista 1",
"O Dentista 2",
"Olhos Famintos 1",
"Olhos Famintos 2",
"Olhos Famintos 3",
"O Albergue 1",
"O Albergue 3",
"O Albergue 2",
"Freddy vs Jason",
"Doce Vingança 3",
"Doce Vingança 2",
"Doce Vingança 1",
"Cemiterio Maldito 1",
"Cemiterio Maldito 2",
"Cemitério Maldito   Remaster",
"Canibais - A Tribo",
"Bruxa de Blair 2",
"Bruxa de Blair 1",
"A Volta dos Mortos Vivos 1",
"A Volta dos Mortos Vivos 2",
"A Volta dos Mortos Vivos 3",
"Aracnofobia - 1990", 
"Sanatorio - 2013",   
"Seed - Assassino em Serie - 2006",   
"Seed 2 - A Nova Geração - 2014",   
"Escuridão - 2005",   
"Perseguidos pela Morte - 2014",   
"Siga o Mestre - 2006",   
"Não Adianta Fugir - 2009",   
"Mutilados - 2006",   
"Dragão Vermelho - 2002",
"Hannibal - 2001",
"Noite das Bruxas Macabra - 2014",
"Além da Escuridao - 2012",
"Cães Assassinos - 2006",
"Colinas De Sangue - 2009",
"Drive-Thru - Fast Food Da Morte - 2007",
"Pumpkinhead - 1988",
"Pumpkinhead 2 - 1994",
"Palhaços Assassinos do Espaço Sideral - 1988",
"Palhaços Infernais - 2017",
"Ripper - O Mensageiro do Inferno - 2001", 
"A Profecia - 1976",
"A Profecia 5 - 2006",
"A Profecia 2 - 1978",
"A Profecia 3 - 1981",
"A Profecia 4 - 1991",
"Anjos da Morte - 2006",
"Aprisionados - 2015",
"Colisão Mortal - 2016",
"O Atalho - 2013",
"Hush - A Morte Ouve - 2016",
"Entrevista com Vampiros - 1994",
"Hannibal - A Origem do Mal - 2007",
"Noite de Halloween - 2006",
"Ninguém Sobrevive - 2013",
"Terras de Sangue - 2014",
"Morte Súbita - 2007",
"Abismo do Medo 1",
"Abismo do Medo 2", 
"A Bolha Assassina - 1988",
"REC 1",
"REC 2",
"REC 3",
"REC 4",
"A Hora do Pesadelo 1",
"A Hora do Pesadelo 2",
"A Hora do Pesadelo 3",
"A Hora do Pesadelo 4",
"A Hora do Pesadelo 5",
"A Hora do Pesadelo 6",
"A Hora do Pesadelo 7",
);


//Logo
echo "<center><img src='ImagensSite/main.png' class='img-fluid'></center>"; 
echo "<br>";




//Alerta de datas comemorativas
$hoje = date('dm');
if ($hoje == 3110)
{
	//Texto do dia das bruxas
	echo "<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Seja bem vindo ".$_SESSION['Sessao'].".<br> Feliz Dia das Bruxas!!!<br>Nada melhor que um filme de terror hoje!!</strong></span></span></span></p>";
}
else if ($hoje == 2512)
{
	//Texto feliz natal
	echo "<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Seja bem vindo ".$_SESSION['Sessao'].".<br> Feliz Natal para voce!!!<br></strong></span></span></span></p>";
} 
else
{
	//Texto normal
echo "<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Seja bem vindo ".$_SESSION['Sessao']."</strong></span></span></span></p>";	
}

//Contador de filmes
echo "<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Atualmente, contamos com ".count($ListaLinks)." filmes em nosso catalogo!</strong></span></span></span></p>";
 

 
?>


<!---------------------------------------------->
 
 
 <br>
 

<div class="container text-center">

 <div class="row row-cols-2 row-cols-lg-6 g-1 g-l g-1">

 
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
			$simple_string = $ListaLinks[$IndexImagens];
			$ciphering = "AES-128-CTR";
			$iv_length = openssl_cipher_iv_length($ciphering);
			$options = 0;
			$encryption_iv = '1234567891011121';
			$encryption_key = "Breso";
			$encryption = openssl_encrypt($simple_string, $ciphering,
            $encryption_key, $options, $encryption_iv);
			
			
			
			
			
			echo "<div class='col'>";
			echo "<a href='player.php?filme=".$encryption."'>";
			echo "<img src='img/".$ListaLinks[$IndexImagens].".jpg' class='img-thumbnail' alt=''>";
			echo "</a>";
			
			echo "<br>";
			echo "<p style='text-align: center;'><span style='font-size:15px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ff1111'><strong>".$ListaLinks[$IndexImagens]."</strong></span></span></span></p>";
 
			echo "</div>"; 
			
			
			 
			$IndexImagens++;	
		}
	}
}
 

 
?>



 































<!-- Bloquear Mouse e Inspecionar Elementos -->
 <script>
if (document.addEventListener) {
    document.addEventListener("contextmenu", function(e) {
        e.preventDefault();
        return false;
    });
} else { //Versões antigas do IE
    document.attachEvent("oncontextmenu", function(e) {
        e = e || window.event;
        e.returnValue = false;
        return false;
    });
}
</script>

<script>
document.onkeydown = function(e) {
    if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 ||    e.keyCode === 117 || e.keycode === 17 || e.keycode === 85)) {
         
    }
    return false;
};
</script> 
<!---------------------------------------------->





  </div>
   
</div>

 


</br></br>
</br></br> 
<p style="text-align: center;"><span style="font-size:20px"><span style="font-family:Courier New,Courier,monospace"><span style="color:#ffffff"><strong>Nao encontrou o filme que procurava? De a sua sugestão no grupo do Telegram, <a href="https://t.me/+Sj8QJG3QJ1ZjNmMx">clicando aqui</a></strong></span></span></span></p>

</br></br>
</br></br> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
<?php
echo "<center><img src='ImagensSite/main.png' class='img-fluid'></center>"; 
echo "<br>";
?> 
<br>



 </body>
</html>