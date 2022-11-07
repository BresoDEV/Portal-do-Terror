<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terrorflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
 
  <body bgcolor="#000000" background="img/BACK.jpg" center="true"  >
    
		<style>
	body{
  background: url('img/BACK.jpg') center center no-repeat fixed; 
  -webkit-background-size: 100%;
  -moz-background-size: 100%;
  -o-background-size: 100%;
  background-size: 100%;
}
	</style>

</br></br>

<p style="text-align: center;"><span style="font-family:Courier New,Courier,monospace"><span style="font-size:72px"><span style="color:#c0392b"><strong>Portal do Terror</strong></span></span></span></p>

<p style="text-align: center;"><span style="font-size:20px"><span style="font-family:Courier New,Courier,monospace"><span style="color:#ffffff"><strong>O ID do seu dispositivo atual é:</strong></span></span></span></p>

<p style="text-align: center;"><span style="font-size:50px"><span style="font-family:Courier New,Courier,monospace"><span style="color:#ffffff"><strong>
<?php
$mac = exec('getmac');
		$mac = strtok($mac, ' ');
		echo $mac;
		?>
</strong></span></span></span></p>
 
</br></br>

 
 <p style="text-align: center;"><span style="font-size:30px"><span style="font-family:Courier New,Courier,monospace"><span style="color:#ffffff"><strong>
<?php
if(isMobile())
echo "Acesso atual: Dispositivo Movel (Celular)";
else
echo "Acesso atual: Computador";
		?>
</strong></span></span></span></p>

 
 
 
 
 









<div class="container text-center">

 <div class="row row-cols-2 row-cols-lg-6 g-1 g-l g-1">

 
  

  </div>
   
</div>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>




<?php
    /*
    Trecho de exemplo extraído do WordPress - wp_is_mobile()
    */
 
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
?>