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
	 
	 
		
//Adicao da API
include_once "API.php";	  
	 
	  
 //Salva os cookies que vieram do login via SESSION 

  
	if(!isset($_COOKIE["usuarioCK"]) || !isset($_COOKIE["senhaCK"]))  
	{
		$string = 'Bem Vindo(a) ao TerrorFlix \nSalvamos seus dados de login por 1 semana, para facilitar seu acesso.\nApos esse periodo, ele sera resetado e voce \nprecisara entrar com usuario e senha novamente. \n\n\nObrigado e bom filme!!\nEquipe TerrorFlix';
		echo "<script>alert(\"$string\")</script>";
		setcookie("usuarioCK",$_SESSION['EmailKK'],  time() + 604800, "/");//email
	    setcookie("senhaCK",$_SESSION['SenhaKK'],  time() + 604800, "/");//senha
	    setcookie("nomeCK",$_SESSION['Sessao'],  time() + 604800, "/");//nome
	} 


//Efeitos do site em datas comemorativas
Natal();
Halloween();
	  
	   	  

$ListaLinks = array(  
"",
"", 
"Re-Animator - 1985",
"Terra dos Mortos - 2005",
"Os Órfãos - 2020",
"Os Escravos de Satanás - 2018",
"O Segredo da Cabana - 2012",
"O Ritual - 2017",
"Os Esquecidos",
"O Sacrifício - 2006",
"O Portal - 2005",
"O Porão - 1989",
"O Nevoeiro - 2007",
"O Olho do Mal - 2008",
"O Mistério das Duas Irmãs - 2009",
"O Grande Predador - 2007",
"O Internato - 2018",
"O Monstro do Artico - 1951",
"O Lobisomem - 2010",
"O Lobisomem - 1941",
"O Monstro da Neve",
"O Discipulo de Dracula",
"Invasores de Corpos - 1993",
"O Filho de Frankenstein - 1939",
"O Cativeiro - 2010",
"O Castelo Maldito - 1995",
"O Caçador De Cabeças - 1988",
"O Cão do Diabo - 1978",
"O Bosque - 2008",
"Halloween m14 Ends 2022",
"Mortuária - 2005",
"Mother - 2017", 
"Não Olhe - 2019",
"A Orfa 2",
"Minotauro - 2006",
"Mama - 2013",
"Lenda Urbana 2 - 2000",
"Lenda Urbana 3 - 2005",
"Lenda Urbana 1 - 1998",
"Imagens do Além - 2008",
"Invasores - 2007",
"O Pesadelo 2 - 2007",
"O Pesadelo 3 - 2008",
"O Pesadelo 1 - 2005",
"It 2 - 2019",
"It 1 - 2017",
"Invocação do Mal 3 - A Ordem do Demônio - 2021",
"Invocação do Mal 1 - 2013",
"Invocação do Mal 2 - 2016",
"Invasão Zumbi 2 - Peninsula - 2020",
"Invasão Zumbi 1 - 2016",
"Instinto Assassino - 1991",
"Horas de Medo -2010",
"Frankenstein Encontra o Lobisomem - 1943",
"O Fantasma da Opera 1962",
"Histeria - 2000",
"Faces do Medo - 2013",
"Familia Addams",
"Cubo Zero - 2004",
"Cubo 2 - Hipercubo - 2002",
"Cubo 1 - 1997",
"Estrada Maldita - 2007",
"Eu Sempre Vou Saber o Que Vocês Fizeram no Verão Passado - 2006",
"Eu Sei O Que Vocês Fizeram No Verão Passado - 1997",
"Eu Ainda Sei O Que Vocês Fizeram No Verão Passado - 1998",
"Fantasma 4 - 1998",
"Fantasma 3 - 1994",
"Fantasma 2 - 1988",
"Fantasma 1 - 1979",
"A Noiva de Frankenstein - 1935",
"Fome Animal - 1992",
"Banquete no Inferno 2 - 2008",
"Banquete no Inferno 3 - 2009",
"Banquete no Inferno 1 - 2005",
"Espíritos 2 -  Você Nunca Está Sozinho - 2006",
"Espíritos 1 - A Morte Está ao Seu Lado - 2004",
"Pearl",
"Diário do Mortos - 2007",
"Chamado vs O Grito - 2018",
"O Chale - 2019",
"O Culto - 2017",
"Conde Dracula",
"O Chupa-Cabra - 2014",
"Girl - 2020",
"A Mumia - 1932",
"Dia dos Mortos - 1985",
"Esquizofrenia - 1980",
"Drácula de Bram Stoker - 1992",
"Distúrbio - 2018",
"Devorador de Almas - 2006",
"Despertar dos Mortos - 2011",
"Cut - Cenas de Horror - 2000",
"Contos do Além - 1972",
"Corrente do Mal - 2015",
"Cujo - 1983",
"Corra - 2017",
"A Noiva do Re-Animator - 1989",
"Continue Assistindo - 2017",
"Cadillac Preto - 2003",
"Comemoração Sangrenta - 2016",
"Chernobyl - Sinta a Radiação - 2012",
"Christine O Carro Assassino",
"A Morte Te Dá Parabéns 1 - 2018",
"A Morte Te Dá Parabéns 2",
"Chucky Brinquedo Assassino 7 - O Culto de Chucky",
"Chucky Brinquedo Assassino 5 - O Filho de Chucky",
"Chucky Brinquedo Assassino 4 - A Noiva de Chucky",
"Chucky Brinquedo Assassino 8 - 2019",
"Chucky Brinquedo Assassino 3 - 1991",
"Chucky Brinquedo Assassino 2 - 1990",
"Chucky Brinquedo Assassino 1 - 1988",
"Chucky Brinquedo Assassino 6 - A Maldição de Chucky",
"A Filha de Drácula - 1936",
"Benção Mortal - 1981",
"Black Water - 2007",
"Annabelle 3 - De Volta Para Casa - 2019",
"Annabelle 2 - A Criação do Mal",
"Annabelle 1 - 2014",
"A Mosca - Remake - 1986",
"A Mosca 2 - 1989",
"A Maldição da Mosca - 1965",
"A Noite dos Mortos Vivos 3D - 2006",
"A Noite dos Mortos Vivos - Re-Animação - 2012",
"A Noite dos Mortos Vivos - 1990",
"Através da Sombra - 2015",
"------------------------",
"Aviso de Tempestade - 2007",
"Bones - Anjo das Trevas - 2001",
"A Maldição da Casa Winchester - 2018",
"Ilha dos Mortos - 2009",
"Balada Para Satã - 1971",
"Asilo do Medo - 2019",
"As Ruínas - 2008",
"Á Prova de Morte - 2007",
"A Última Casa à Esquerda - Remake - 2009",
"A Montanha dos Canibais - 1978",
"A Experiência 3 - 2004",
"A Experiência 2 - 1998",
"A Experiência - 1995",
"A Experiência 4 - O Despertar - 2007",
"A Praga - 2006", 
"A Gruta - 2020",
"A Enfermeira Assassina - 2014",
"A Coisa - 2011",
"A Caverna Maldita - 2006",
"A Casa dos Mortos  - O Filme - 2003",
"A Casa dos Mortos 2 - 2005",
"A Morte é a Única Saída - 2017",
"A Casa de Vidro 1 - 2001",
"A Casa de Vidro 2 - 2006",
"Tubarao 2",
"Tubarao 4",
"Tubarao 3",
"Tubarao 4 - O Ultimo Tubarao",
"Tubarao 1",
"Suspiria - 2018",
"Sepultado Vivo - 1990",
"Os Mensageiros 2 - 2009",
"Os Mensageiros 1 - 2007",
"A Casa que Pingava Sangue - 1971",
"Pânico no Lago 5 - O Legado - 2018",
"Pânico no Lago 3 - 2010",
"Pânico no Lago 2 - 2007",
"Pânico no Lago 1 - 1999",
"Pânico no Lago 4 - 2012",
"Espelho do Medo 2 - 2010",
"Espelho do Medo 1 - 2008",
"Nasce um Monstro 3 - 1987",
"Nasce um Monstro 2 - 1978",
"Nasce um Monstro 1 - 1974",
"Anjo Maldito - 2009",
"Animal - 2014",
"Além do Lago Ness - 2008",
"O Grito 4 - 2020",
"O Grito 3 - 2009",
"O Grito 2 - 2006",
"O Grito 1 - 2004",
"O Bar Luva Dourada 2019",
"60 Minutos Para Morrer - 2017",
"A Espera do Mal - 2005",
"7 Desejos - 2017",
"Malditas Aranhas - 2002",
"Jogo Macabro",
"Megan is Missing",
"Mutação 3 - O Sentinela - 2003",
"Mutação 2 - 2001",
"Mutação 1 - 1997",
"Lendas do Além-Túmulo - 1995",
"Lendas do Além-Túmulo - 2000",
"Lendas do Além-Túmulo - 1996",
"Olhos Assassinos - 1981",
"Splice A Nova Espécie",
"Irmãs Diabólicas - 1972",
"O Sangue do Dracula",
"A Viúva das Sombras - 2021",
"O Farol",
"Bruxas - 2009",
"Espinhos - 2008",
"Doutor Sono",
"A Mulher de Preto 2",
"A Mulher de Preto 1",
"Hereditário - 2018",
"Anjos Rebeldes 1",
"Anjos Rebeldes 2",
"Anjos Rebeldes 3",
"Anjos Rebeldes 4",
"Anjos Rebeldes 5", 
"Sexta-Feira 13 - Parte 9",
"Sexta-Feira 13 - Parte 8- Jason Ataca Nova York",
"Sexta-Feira 13 - Parte 7- A Matança Continua",
"Sexta-Feira 13 - Parte 6- Jason Vive",
"Sexta-Feira 13 - Parte 5 - Um Novo Recomeço",
"Sexta-Feira 13 - Parte 4 - O Capítulo Final",
"Sexta-Feira 13 - Parte 3",
"Sexta-Feira 13 - Parte 2",
"Sexta-Feira 13 - Parte 1",
"Sexta-Feira 13 2009",
"O Telefone Preto 2022",
"American Guinea Pig Sacrifice",
"American Guinea Pig Song of Solomon",
"American Guinea Pig 2 - Bloodshock",
"American Guinea Pig Bouquet of Guts and Gore",
"Grotesco 2009",
"O Poco",
"O Colecionador de Corpos",
"O Bebê de Rosemary 1968",
"Martyrs - 2015", 
"Barbarian", 
"Anaconda 3 - 2008", 
"Anaconda 4 - 2009", 
"Anaconda 2 - 2004", 
"Anaconda 1", 
"A Bolha Assasina 1958", 
"A Forca - 2015", 
"A Caverna - 2005", 
"A Maldicao de Samantha", 
"A Ilha dos Mortos", 
"A Epidemia - 2010", 
"A Casa Dos 1000 Corpos", 
"A Fronteira", 
"A Casa do Espanto 1", 
"A Casa do Espanto 2", 
"A Casa do Espanto 3", 
"A Casa do Espanto 4", 
"Pânico na Floresta 7 - A Fundação",
"Pânico na Floresta 6",
"Pânico na Floresta 5",
"Pânico na Floresta 4",
"Pânico na Floresta 3",
"Pânico na Floresta 2",
"Pânico na Floresta 1",
"Arraste-me para o Inferno",
"Gritos Mortais",
"Seven - Sete Pecados Capitais",
"Tusk A Transformacao",
"Hellraiser O Julgamento",
"Hellraiser 9 Revelacoes",
"Hellraiser 8 O Mundo do Inferno",
"Hellraiser 7 O Retorno dos Mortos",
"Hellraiser 6 Cacador do Inferno",
"Hellraiser 5 Inferno",
"Hellraiser 4 Herança Maldita",
"Hellraiser 3 Inferno na Terra",
"Hellraiser 2 Renascido das Trevas",
"Hellraiser 1 Renascido do Inferno",
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

	 
?>




<?php
 ECHOS_Infinitos(); 
?>

<!-- |< >|< |< -->
<!-- Expand smartphone -->
<!DOCTYPE html>
<html lang="en">
 <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   <title>
     TerrorFlix - Filmes
   </title>
   <meta charset="utf-8">
   <meta name="viewport" content= "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
	
	


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
 
 
 
 <?php
  echo "<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Logado(a) como ".$_SESSION['Sessao']."</strong></span></span></span></p>";
  ?>
 
 </head>
 <body>
  <header>
  
    <center><img src='ImagensSite/main2.png' border='none' class='img-fluid'></center>
	
	
	 
 
	
	<?php

//Alerta de datas comemorativas
$hoje = date('dm');
if ($hoje == 3110)
{
	//Texto do dia das bruxas
	echo "<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Feliz Dia das Bruxas!!!<br>Nada melhor que um filme de terror hoje!!</strong></span></span></span></p>";
}
else if ($hoje == 2512)
{
	//Texto feliz natal
	echo "<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Feliz Natal para voce!!!<br></strong></span></span></span></p>";
} 
 

//Contador de filmes
echo "<p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'><strong>Atualmente, contamos com ".count($ListaLinks)." filmes em nosso catalogo!</strong></span></span></span></p>";
 

 
 
 
 
//Registrar Acesso nos logs
$Log = new Logs();
$Log->GravarAcao($_SESSION['Sessao'], "Acessou a pagina de filmes");  
 
 
 
 
 
?>

  
	 
	 
	 
	 <a href='dispositivo.php'><button value="Send">Meu ID</button></a> 
	 <a href='https://t.me/+Sj8QJG3QJ1ZjNmMx'><button value="Send">Grupo do Telegram</button></a> 
	 <a href='login.php'><button value="Send">Mudar de Conta</button></a>  
	 <a href='chat.php'><button value="Send">Chat de Duvidas</button></a> 
  
  </header>
  
  
 
   


<!-- Lista de Filmes recen add --> 

<article>
<br>
<p style='text-align: center;'><span style='font-size:20px'>
<span style='font-family:Courier New,Courier,monospace'><span style='color:#ffffff'>
<strong>Adicionados recentemente:</strong></span></span></span></p>

<?php
for ($int = 0; $int <= 8; $int++)
{
	 //Checka se existe o filme 
		if (file_exists("Filmes/".$ListaLinks[$int].".mkv") || file_exists("Filmes/".$ListaLinks[$int].".mp4")) //Checka se existe o filme
		{ 
			if (file_exists("img/".$ListaLinks[$int].".jpg")) 
			{
				echo "<a href='player.php?filme=".$ListaLinks[$int]."'>";
				echo "<img src='img/".$ListaLinks[$int].".jpg' width=140px border-width=20px border='solid' alt=''>";
				echo "</a>"; 
			}
			else if (file_exists("img/".$ListaLinks[$int].".png")) 
			{
				echo "<a href='player.php?filme=".$ListaLinks[$int]."'>";
				echo "<img src='img/".$ListaLinks[$int].".png' width=140px border-width=20px border='solid' alt=''>";
				echo "</a>"; 
			}
			else
			{}
			  	
		  
		}
}
?>

<br>
<br>
<br>
</article>





  
<!-- Lista de Filmes normal -->
<br>
 <p style='text-align: center;'><span style='font-size:20px'><span style='font-family:Courier New,Courier,monospace'>
   <span style='color:#ffffff'><strong>Lista Completa</strong></span></span></span></p>   
  <article>
  
  
   
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
			echo "  <a href='player.php?filme=".$ListaLinks[$IndexImagens]."'>";
			echo "<span style width='140px'><span style border='100px'><img src='img/".$ListaLinks[$IndexImagens].".jpg' alt=''> ";
			echo "</span></span></a>"; 
			$IndexImagens++;			
		}
	}
	else if (file_exists("img/".$ListaLinks[$IndexImagens].".png")) //Checka se existe a capa
	{
		if (file_exists("Filmes/".$ListaLinks[$IndexImagens].".mkv") || file_exists("Filmes/".$ListaLinks[$IndexImagens].".mp4")) //Checka se existe o filme
		{ 
			echo "  <a href='player.php?filme=".$ListaLinks[$IndexImagens]."'>";
			echo "<span style width='140px'><span style border='100px'><img src='img/".$ListaLinks[$IndexImagens].".png' alt=''> ";
			echo "</span></span></a>"; 
			$IndexImagens++;			
		}
	}
	else
	{}
}
 
  
?>
 
  
 
   
  </article>
  
  
  
  
  
  
  
  
  
  
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
  
  <footer>
    <?php
echo "<center><img src='ImagensSite/main.png' class='img-fluid'></center>"; 
echo "<br>";
?> 
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 </body>
</html>