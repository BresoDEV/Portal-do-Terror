<!DOCTYPE html>
<html>
<head>

    <title> Chat TerrorFlix</title>
     <meta name="viewport" content="width=device-width ,initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" type="text/css" href="chatbot.css">
       <center><script type="text/javascript" src="chatbot.js"></script></center>
<style>
 @import url(https://fonts.googleapis.com/css?family=Dosis);
@import url(https://fonts.googleapis.com/css?family=Philosopher);
@import url(https://fonts.googleapis.com/css?family=Alegreya+SC);
@import url(https://fonts.googleapis.com/css?family=Calligraphica);
@import url(https://fonts.googleapis.com/css?family=Rye);
@import url(https://fonts.googleapis.com/css?family=Nosifer);
@import url(https://fonts.googleapis.com/css?family=Libre+Baskerville);

body {
    margin:0;
    background-color: #1f1b1b;
}

#header{
    width: 100%;
    height:46px;
    background-color:#333;
     

}

 #header>.head_{

    
    width:50%;
    color: rgba(162, 163, 224, 0.651);
     margin:0 auto;
    
    font-family: Nosifer;
    font-size:20pt;

 }

 #container_ {
     margin-top: 5px;
     width:60%;
     height:350px;
     border:1px solid rgb(31, 9, 13);
     background-color: #fff;
    
      
      
     background-color: rgb(9, 6, 19);
     color:chartreuse;
     overflow: scroll;
     overflow-x: hidden;
     overflow-wrap:break-word;
     font-size: 14px;
     font-family: "Libre Baskerville";
    word-spacing: 3pt;
 }

 aside {
    
     color:rgba(15, 15, 170, 0);
     background-color: #000;
     width: 300px;
     height: 300px;
     border-radius: 10px;
     background-clip: padding-box;
     color: #000;
 
     font-size: x-small ;
     margin-right: 10px;
     margin-top: 10px;
    
      
 }

 aside>h3{
      
     text-decoration: none;
     
     font-size:medium;
     

     font-family: Calligraphica;
 }

 a:link {
     text-decoration: none;
      
          
     

 }

 .kash {
     -webkit-animation : colorchange  ease-in 1s infinite reverse;
     animation : colorchange  ease-in 1s infinite reverse;
 

}

 @keyframes colorchange {

     0%{color: red;}
     20%{color: blue;}
     30%{
         color: pink;
     }
     40%{
         color: blue;
     }
     50%{color:skyblue;}

     75%{color:green;}
     100%{
         color: black;
     }
 

     

 }

 ul>li{
     margin-top: 5px;
     font-size:small;
     list-style-type: square;
 }

 #controls{

        
     margin:0 auto;
     width: 100%;


 }

 #textBox{
      width:50%;
       
      color:rgb(194, 178, 178);
      background-color: #1f1f1f; 
 }

 #send{
      
 }
 .userName {

    color: rgb(216, 202, 177);
    font-weight: bold;
    font-family:  "Alegreya SC";

 }

 .Bot{
    
        color: rgb(16, 250, 160);
        font-weight: bold;
        font-family:  "Alegreya SC";
    
     }

.hidden {
    display:hidden ;
}
</style>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>

   <center><img src='ImagensSite/main2.png' border='none' class='img-fluid'></center>  
   <center> <div id="container_" align='left'>   </div>

<div id="controls" style="color:ghostwhite;" >
    
    <br><textarea id="textBox" cols="20"  placeholder="Digite aqui ......." ></textarea><br>
    <input type="checkbox" id="checkbox" checked> Enviar apertando ENTER<br><br>
    <button id="send" class="btn btn-primary btn-inline" > Enviar </button> <br>
   
</div>
 </center>

     
<?php
echo "<style>";
echo "body{ background: url('ImagensSite/bg_.jpg') center center no-repeat fixed; 
            background-size: 100% 100%;
	        background-repeat: no-repeat;  
           }";
echo "</style>";
?>

<!--<div id="anim" style="height: 300px;width: 400px;background-color: black; color: white; font-size: bold;">  </div>
-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
<script>
var username =""; 
 
 
 function send_message(message){
	 
    var prevMsg = $("#container_").html();
    
        $("#container_").html(prevMsg +
             " <span class= 'current_message'>"+ "<span class = 'Bot'> TerrorFlix :  </span>" 
              + message +"</span>" + "<br>");
        $(".current_message").hide();
        $(".current_message").delay(2000).fadeIn();
		
        $(".current_message").removeClass("current_message"); 
		
		$("#container_").scrollTop($("#container_").prop("scrollHeight"));
		
		
     

   }
   
   



    function get_username(){
        send_message("Ola, sou o seu assistente virtual da Terrorflix. Qual o seu nome?");
     }
     
     //all the AI is here 
     
      function ai(message){
          if ((username.length < 3) && (message.length>=3)){

              var l = $("#container_").html();
              username = message;
              send_message("Muito prazer " + username + " , Qual a sua duvida? ");
            }
            else if ((username.length<3)&&(message.length<3)) {
                send_message("Vamos la, diga seu nome! ");
            }

            else if(message.toLowerCase().indexOf("Como voce esta?")>=0){
                send_message("Estou muito bem, obrigado. Qual a sua duvida? ");
            }
            
			//------------------opcoes----------------------------------------------------------------
            else if((message.toLowerCase().indexOf("opcoes")>=0) || (message.toLowerCase().indexOf("opções")>=0))
            {
				$("#container_").html(" "); 
                 send_message("Muito bem. Basta digitar o numero correspondente a cada duvida: <br>1 = Pagamentos<br>2 = Adicionar novos dispositivos<br>3 = Sugestoes de Filmes<br>4 = Alguem acessou minha conta sem permissão<br>5 = Reportar algum erro ou filme com problemas<br>6 = Outras duvidas<br>7 = Sair");
            }
			
			
			else if(message.toLowerCase().indexOf("1")>=0)//Pagamentos
            {
				$("#container_").html(" "); 
                 send_message("Muito bem, a plataforma aceita pagamentos via PIX, e cada mensalidade devera ser paga ate o dia 10 de cada mes.<br>Entre em contato pelo Telegram com os nossos administradores, para voce receber a chave para fazer o pagamento.<br>Lembrando que temos uma tolerancia de 2 dias, apos isso, sua conta sera desativada. Nao vai querer isso ne??");
            }
			else if(message.toLowerCase().indexOf("2")>=0)//Adicionar disp
            {
				$("#container_").html(" "); 
                 send_message("Para adicionar um novo dispositivo, voce precisa acessar o link de dispositivos <a href='dispositivo.php'>clicando aqui</a>.<br>Voce sera redirecionado para a pagina onde mostra o ID atual do dispositivo que voce esta usando. Acesse ele usando o dispositivo que quer adicionar a sua lista, e copie o codigo que sera mostrado na tela. Apos isso, entre no grupo do Telegram do canal e contate um administrador, fornecendo o codigo e solicitando a adicao. Depois disso, é com a gente, e em breve, estara liberado o acesso.");
            }
			else if(message.toLowerCase().indexOf("3")>=0)//Sugestoes
            {
				$("#container_").html(" "); 
                 send_message("Opa, que bom que voce tem sugestoes, nossa prioridade é sempre trazer conteudo novo para nossos clientes. Para dar uma sugestão, acesse o nosso grupo do Telegram,  <a href='https://t.me/+Sj8QJG3QJ1ZjNmMx'>clicando aqui</a>, e pode ficar a vontade para postar la");
            }
			else if(message.toLowerCase().indexOf("4")>=0)//alguem acessou
            {
				$("#container_").html(" "); 
                 send_message("Isso nao é problema.<br>Nosso sistema nao deixa dispositivos desconhecidos acessarem sua conta, pois é voce quem decide quem entra.Caso voce ainda ache que alguem entrou, entre em contato com nossos administradores no Telegram, <a href='https://t.me/+Sj8QJG3QJ1ZjNmMx'>clicando aqui</a>, e solicitando um relatorio dos acessos, pois guardamos tudo e assim podemos saber se houve ou nao acesso, mas fique tranquilo, ninguem que voce nao autorizar, entrara na sua conta.");
            }
			else if(message.toLowerCase().indexOf("5")>=0)//erros filmes
            {
				$("#container_").html(" "); 
                 send_message("Como assim? Isso nao é nada agradavel, e ja pedimos desculpa caso seu filme tenha dado problemas. Voce conhece nosso grupo do Telegram? Com certeza sim. La voce pode relatar o filme que voce encontrou problema, e logo logo vamos dar um jeito de arrumar. Para acessar o grupo, <a href='https://t.me/+Sj8QJG3QJ1ZjNmMx'>clique aqui</a>");
            }
			else if(message.toLowerCase().indexOf("6")>=0)//outros
            {
				$("#container_").html(" "); 
                 send_message("");
            }
			
			 
			else if(message.toLowerCase().indexOf("7")>=0)//sair
            { 
                 $("#container_").html(" "); 
                 send_message("Tchau, tenha um otimo dia. Qualquer duvida, estaremos aqui para atender.<br>Caso prefira uma resposta direta,<br>entre em contato pelo grupo do Telegram");
;            
            }
			 
            //-----------------------Palavras pra tentar adivinhas-------------------------------------------------------------
           else if((message.toLowerCase().indexOf("fredd")>=0) || message.toLowerCase().indexOf("kruegu")>=0)
            {  
                 send_message("1..2...3...Freddy esta atras de voce");
            }
		    
			 else if((message.toLowerCase().indexOf("myers")>=0) || message.toLowerCase().indexOf("micha")>=0)
            {  
                 send_message("1..2...3...Freddy esta atras de voce");
            }
		  
              //-----------------------------------------------------------
			else if(message.toLowerCase().indexOf("kkk")>=0)
            {  
                 send_message("Nao de risada de mim kkkk estou aprendendo ainda");
            }

            else if ((message.toLowerCase().indexOf("tchau")>=0) || (message.toLowerCase().indexOf("sair")>=0))
			{
                  
                 $("#container_").html(" "); 
                 send_message("Tchau, tenha um otimo dia. Qualquer duvida, estaremos aqui para atender.<br>Caso prefira uma resposta direta,<br>entre em contato pelo grupo do telegram");
;           }


            else if ((message.toLowerCase().indexOf("obrigado")>=0) || (message.toLowerCase().indexOf("obrigada")>=0))
			{
                   
                 send_message("Eu que agradeço, tenha um otimo dia!!");
;           }


///---------------------------------------------------------------------
			else if ((message.toLowerCase().indexOf("baixar")>=0) 
				|| (message.toLowerCase().indexOf("apk")>=0)
			|| (message.toLowerCase().indexOf("aplicativo")>=0)
			|| (message.toLowerCase().indexOf("download")>=0)
			|| (message.toLowerCase().indexOf("baixo")>=0))
			{
                   $("#container_").html(" "); 
                 send_message("Para baixar o aplicativo, clique <a href='https://appsgeyser.io/16220495/TerrorFlix?_ga=2.246572929.464995234.1667394558-1987572509.1667394557'>aqui</a>, ou se preferir, use o seguinte QR Code para ir direto para a pagina de downloads: <br><img src='https://raw.githubusercontent.com/BresoDEV/Portal-Do-Terror-APK/main/chart.png' alt='' width=200 height=200>");
;           }


             else
			 {
                 send_message("Nao entendi oque voce quis dizer, caso prefira escolher opcoes, é só digitar OPCOES");
             }


             
      }

$("document").ready(function(){

    get_username();




    //send text by clicking enter 

    $("#textBox").keypress(function(event){
        if( event.which == 13){
            if($("#checkbox").prop("checked")){
                $("#send").click();
                // runs the same code as if user were to click the send button 

                event.preventDefault();
        
            }
        }
    });

$("#send").click(function(){

    var userName = " <span class = 'userName'> Voce: </span> ";

    var txt = $("#textBox").val();
    $("#textBox").val(" ");
     
    var prevMsg = $("#container_").html();

    $("#container_").html(prevMsg + userName + ": " + txt + "<br>"  );

    //For getiing the messages to scroll up top .
    $("#container_").scrollTop($("#container_").prop("scrollHeight"));

    ai(txt);


     });
     
     $("#more").click(function (){
         
         $(".hidden").removeClass("hidden");
         
         
     });

});

</script>

</html>