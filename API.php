 
<?php


function SurpreendaMe($entrada_array_Filme)
{
	$linkFinal;
	$total_de_itens = count($entrada_array_Filme) - 1;
	$booleta = true;
	
	while($booleta)
	{
		$numero_aleatorio = rand(0, $total_de_itens);
		if (file_exists("Filmes/".$entrada_array_Filme[$numero_aleatorio].".mkv") || file_exists("Filmes/".$entrada_array_Filme[$numero_aleatorio].".mp4")) //Checka se existe o filme
		{ 
			$linkFinal = "player.php?filme=".$entrada_array_Filme[$numero_aleatorio]; 
			$booleta = false;
		} 
	}
	return $linkFinal;
}



function DestaquesVoid($entrada_array_Filme)
{
	$linkFinal;
	$total_de_itens = count($entrada_array_Filme) - 1;
	$booleta = true;
	$inteiro = 0;
	while($booleta)
	{
		$numero_aleatorio = rand(0, $total_de_itens);
		if (file_exists("Filmes/".$entrada_array_Filme[$numero_aleatorio].".mkv")) //Checka se existe o filme
		{ 
			if (file_exists("destaques/".$entrada_array_Filme[$numero_aleatorio].".png")) //Checka se existe o filme
			{ 
				$linkFinal = "destaques/".$entrada_array_Filme[$numero_aleatorio].".png"; 
				
				echo "<a href=\"player.php?filme=".$entrada_array_Filme[$numero_aleatorio]."\"><img class=\"Filme_em_Destaque\" src=\"".$linkFinal."\"></a>";
				$booleta = false;
			} 
			
		} 
		else if (file_exists("Filmes/".$entrada_array_Filme[$numero_aleatorio].".mp4"))
		{
			if (file_exists("destaques/".$entrada_array_Filme[$numero_aleatorio].".png")) //Checka se existe o filme
			{ 
				$linkFinal = "destaques/".$entrada_array_Filme[$numero_aleatorio].".png"; 
				echo "<a href=\"player.php?filme=".$entrada_array_Filme[$numero_aleatorio]."\"><img class=\"Filme_em_Destaque\" src=\"".$linkFinal."\"></a>";
				
				$booleta = false;
			} 
		}
		else if($inteiro != 1000)
		{
			$inteiro++;
		}
		else if ($inteiro >= 1000)
		{
			$booleta = false;
		}
	}
	 
}

 


function Halloween()
{ 
	$hoje = date('dm');
	if ($hoje == 3110)//3110
	{ 
		echo "<script type='text/javascript' src='scripts/morcego.js'></script>"; 
		 	
	} 
}


function Natal()
{
	$hoje = date('m');
	if ($hoje == 12)
	{    
		echo "<script type='text/javascript' src='scripts/neve.js'></script>";  		
	} 
	
}

function ECHOS_Infinitos()
{
	for($i=0;$i<1000000;$i++){
        echo "\n";
    }
}


 
function Descriptografar($palavra)
{
	$decryption_iv = '1111111111111111';
	$options = 0;
	$decryption_key = "Breso";
	$ciphering = "AES-128-CBC";
	$decryption = "";
	$decryption=openssl_decrypt ($palavra, $ciphering,$decryption_key, $options, $decryption_iv);
	return $decryption;
	  
}
 
 class Edu
 {
	 //Como chamar
	 //$variavel = new NomeClasse();
     //$variavel->NomeFuncao();
	 
	 function Alerta()
	 {
		 echo "<script>";
		 echo "alert('Eu sou um alert!');";
		 echo "</script>";
	 }
 }
 
 
function Pegar_MAC()
{
	$mac = exec('getmac');
	$mac = strtok($mac, ' ');
	return $mac;
}
 
 
function DesativarTeclas()//dentro do body
{
	echo "<script>
document.onkeydown = function(e) {
    if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 ||    e.keyCode === 117 || e.keycode === 17 || e.keycode === 85)) {
         
    }
    return false;
};
</script>";
} 
 
 
function isURL($string)
{
	$website = test_input($string);
	if (!preg_match("/^[a-zA-Z-' ]*$/",$website)) 
		return false;
	else
		return true;
} 


function isNome($string)
{
	$name  = test_input($string);
	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$name )) 
		return false;
	else
		return true;
} 



function isEMAIL($string)
{
	$email = test_input($string);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		return false;
	else
		return true;
}
 
function isMobile() {
        $is_mobile = false;
 
        //Se tiver em branco, não é mobile
        if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
            $is_mobile = false;
 
        //Senão, se encontrar alguma das expressões abaixo, será mobile
        } elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
            || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
                $is_mobile = true;
 
        //Senão encontrar nada, não será mobile
        } else {
            $is_mobile = false;
        }
 
        return $is_mobile;
    } 
 
 
function Desativar_Click_Mouse()
{
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
} 
 
function Alerta($texto)
{
	echo "<script>";
	echo "alert('".$texto."');";
	echo "</script>";
}

function LimparCookie($cookie)
{
	setcookie($cookie, null, -1, '/'); 
}

function Salvar_Cookie($etiqueta, $valor, $dias)
{
	setcookie($etiqueta, $valor,  time() + (((60 * 60) * 24) * $dias), "/");
}

function ifCookieExiste($etiqueta)
{
	if(isset($_COOKIE[$etiqueta]))
		return true;
	else
		return false;
}

function Criar_Pasta($pasta)
{
	mkdir($pasta);
}

function Criptografar($palavra)
{ 
	$ciphering = "AES-128-CBC";
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
	$encryption_iv = '1111111111111111';
	$encryption_key = "Breso";
	$encryption = "";
	$encryption = openssl_encrypt($palavra, $ciphering,$encryption_key, $options, $encryption_iv);
	return $encryption;
	 
}




function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
  $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
  $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
  $nu = "0123456789"; // $nu contem os números
  $si = "_"; // $si contem os símbolos
$senha = "";
  if ($maiusculas){
        // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($ma);
  }

    if ($minusculas){
        // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($mi);
    }

    if ($numeros){
        // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($nu);
    }

    if ($simbolos){
        // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($si);
    }

    // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
    return substr(str_shuffle($senha),0,$tamanho);
}



function Blabla()
	{
		$string = "";
		for($inta = 0; $inta <= 299; $inta++)
		{
			$string = $string."src_".$inta."='/vimeo/watch?=fragment_".gerar_senha(300, true, true, true, true).".mp4' ";
		}
		return $string;
	}
	
	
	function Blabla2()
	{
		$string = "";
		for($inta = 300; $inta <= 10000; $inta++)
		{
			$string = $string."src_".$inta."='/vimeo/watch?=fragment_".gerar_senha(300, true, true, true, true).".mp4' ";
		}
		return $string;
	}
	
	function Blabla3()
	{
		$string = "";
		for($inta = 0; $inta <= 1000; $inta++)
		{
			$string = $string."<store src_".$inta."='//vimeo/watch?=fragment_".gerar_senha(300, true, true, true, true).".mp4' ></store>";
		}
		return $string;
	}



class Logs
{
	function GravarAcao($usuario, $acao)
	{
		date_default_timezone_set('America/Sao_Paulo');
		$myfile = fopen("LOGS/".$usuario.".txt", "a");
		$t=time(); 
		date("d-m-Y",$t);  
		$txt = "[".date('d')."/".date('m')."/".date('Y')."-".date('h').":".date('m').":".date('s')."] ".$acao."\n";
		fwrite($myfile, $txt); 
		fclose($myfile);
	}	
}

function LerArquivo($arquivo)
{
	$string = "";
	$myfile = fopen($arquivo, "r");
	$string = fread($myfile,filesize($arquivo));
	 
	return $string;
}


function Escrever($arquivo, $texto, $quebra_de_linha = true)
{
	date_default_timezone_set('America/Sao_Paulo');
	$myfile = fopen($arquivo, "a");
	$t=time(); 
	date("d-m-Y",$t);
	if($quebra_de_linha)
		$txt = $texto."\n";
	else
		$txt = $texto;
	fwrite($myfile, $txt); 
	fclose($myfile);
}


function Sobrescrever($arquivo, $texto, $quebra_de_linha = true)
{
	date_default_timezone_set('America/Sao_Paulo');
	$myfile = fopen($arquivo, "w");
	$t=time(); 
	date("d-m-Y",$t);
	if($quebra_de_linha)
		$txt = $texto."\n";
	else
		$txt = $texto;
	fwrite($myfile, $txt); 
	fclose($myfile);
}

function Criar_Arquivo($arquivo)
{
	$myfile = fopen($arquivo, "w");
}


function Arquivo_Existe($arquivo)
{
	if (file_exists($arquivo))
		return true;
	else
		return false;
}

function Inverter_Palavra($palavra)
{
	return strrev($palavra);
}


class Base64_Criptografia
{
	function Obfuscar($palavra)
	{
		return base64_encode($palavra);
	}

	function Desobfuscar($palavra)
	{
		return base64_decode($palavra);
	}
}

function encryptHASH($str){
    $normal = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','y','z','x','w');
    $key = array('3','9','#',')','(','?','0','1','}','p','5','8','!','{','-','*','7','@','4','&','2','^','6','_','+');
    $result = str_replace($normal, $key, $str);
    return (string)$result;
}
    
function decryptHASH($str){
    $normal = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','y','z','x','w');
    $key = array('3','9','#',')','(','?','0','1','}','p','5','8','!','{','-','*','7','@','4','&','2','^','6','_','+');
    $result = str_replace($key, $normal, $str);
    return (string)$result;
}

function password_gen($length = 8) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
}



class Strings
{
	function Substituir_Palavra($string, $palavra_original,$nova_palavra)
	{
		return str_replace($palavra_original,$nova_palavra,$string);
	}
}


function NumeroAleatorio($min, $max)
{
	return mt_rand($min, $max);
}

class Hashs//irreversivel
{
	function MD5_($palavra)
	{
		return md5($palavra);
	}
	function SHA1_($palavra)
	{
		return sha1($palavra);
	}
	function CRIPT($palavra, $chave)
	{
		return crypt($palavra, $chave);
	}
	function HASH_($palavra)
	{
		return hash('sha512', $palavra);
	} 
	
}


class Ceasar
{
	function encrypt($str, $offset = 5) {
    $encrypted_text = "";
    $offset = $offset % 26;
    if($offset < 0) {
        $offset += 26;
    }
    $i = 0;
    while($i < strlen($str)) {
        $c = strtoupper($str{$i}); 
        if(($c >= "A") && ($c <= 'Z')) {
            if((ord($c) + $offset) > ord("Z")) {
                $encrypted_text .= chr(ord($c) + $offset - 26);
        } else {
            $encrypted_text .= chr(ord($c) + $offset);
        }
      } else {
          $encrypted_text .= " ";
      }
      $i++;
    }
    return $encrypted_text;
}
function decrypt($str, $offset = 5) {
    $decrypted_text = "";
    $offset = $offset % 26;
    if($offset < 0) {
        $offset += 26;
    }
    $i = 0;
    while($i < strlen($str)) {
        $c = strtoupper($str{$i}); 
        if(($c >= "A") && ($c <= 'Z')) {
            if((ord($c) - $offset) < ord("A")) {
                $decrypted_text .= chr(ord($c) - $offset + 26);
        } else {
            $decrypted_text .= chr(ord($c) - $offset);
        }
      } else {
          $decrypted_text .= " ";
      }
      $i++;
    }
    return $decrypted_text;
}
}





function DestaquesVoid_novo($entrada_array_Filme)
{
	$linkFinal;
	$total_de_itens = count($entrada_array_Filme) - 1;
	$booleta = true;
	$inteiro = 0;
	while($booleta)
	{
		$numero_aleatorio = rand(0, $total_de_itens);
		if (file_exists("Filmes/".$entrada_array_Filme[$numero_aleatorio].".mkv")) //Checka se existe o filme
		{ 
			if (file_exists("destaques/".$entrada_array_Filme[$numero_aleatorio].".png")) //Checka se existe o filme
			{ 
				$linkFinal = "destaques/".$entrada_array_Filme[$numero_aleatorio].".png"; 
				
				
				echo "<a href=\"player.php?filme=".$entrada_array_Filme[$numero_aleatorio]."\"><img src=\"destaques/".$entrada_array_Filme[$numero_aleatorio].".jpg'></a>";
				
				 	$booleta = false;
			} 
			
		} 
		else if (file_exists("Filmes/".$entrada_array_Filme[$numero_aleatorio].".mp4"))
		{
			if (file_exists("destaques/".$entrada_array_Filme[$numero_aleatorio].".png")) //Checka se existe o filme
			{ 
				$linkFinal = "destaques/".$entrada_array_Filme[$numero_aleatorio].".png"; 
				echo "<a href=\"player.php?filme=".$entrada_array_Filme[$numero_aleatorio]."\"><img src=\"destaques/".$entrada_array_Filme[$numero_aleatorio].".jpg'></a>";
				$booleta = false;
			} 
		}
		else if($inteiro != 1000)
		{
			$inteiro++;
		}
		else if ($inteiro >= 1000)
		{
			$booleta = false;
		}
	}
	 
}



function Busca($entrada_array_Filme, $palavra)
{ 
	$vector = array($entrada_array_Filme);
 
	//Ordena a lista de filmes por ordem alfabetica
	sort($entrada_array_Filme);
	
	$index = 0;
	$nome;
	//So exibe os filmes que tem o arquivo de video e a capa
	foreach ($entrada_array_Filme as $nome)
	{
		$vector[$index] = $nome[$index];
		$index++;
		 
	}
	var_dump($vector);
	 
}




?>
 
 
