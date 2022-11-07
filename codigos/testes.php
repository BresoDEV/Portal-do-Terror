<!DOCTYPE html>
<html>
<head>
    <title> Chat Bot simple</title>
     <meta name="viewport" content="width=device-width ,initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       //<link rel="stylesheet" type="text/css" href="chatbot.css">
       //<center><script type="text/javascript" src="chatbot.js"></script></center>
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
</head>
<body>

     
   <center> <div id="container_" align='left'>   </div>

<div id="controls" style="color:ghostwhite;" >
    
    <br><textarea id="textBox" cols="20"  placeholder="Digite aqui ......." ></textarea><br>
    <input type="checkbox" id="checkbox" checked> Enviar apertando ENTER<br><br>
    <button id="send" class="btn btn-primary btn-inline" > Enviar </button> <br>
   
</div>
 </center>

     


<!--<div id="anim" style="height: 300px;width: 400px;background-color: black; color: white; font-size: bold;">  </div>
-->
</body>
<script>
var username =""; 
 
 
 function send_message(message){
	 
    var prevMsg = $("#container_").html();
    
        $("#container_").html(prevMsg +
             " <span class= 'current_message'>"+ "<span class = 'Bot'> TerrorFlix :  </span>" 
              + message +"</span>" + "<br>");
        $(".current_message").hide();
        $(".current_message").delay(100).fadeIn();
		
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
                 send_message("");
            }
			else if(message.toLowerCase().indexOf("3")>=0)//Sugestoes
            {
				$("#container_").html(" "); 
                 send_message("");
            }
			else if(message.toLowerCase().indexOf("4")>=0)//alguem acessou
            {
				$("#container_").html(" "); 
                 send_message("");
            }
			else if(message.toLowerCase().indexOf("5")>=0)//erros filmes
            {
				$("#container_").html(" "); 
                 send_message("");
            }
			else if(message.toLowerCase().indexOf("6")>=0)//outros
            {
				$("#container_").html(" "); 
                 send_message("");
            }
			
			 
			else if(message.toLowerCase().indexOf("7")>=0)//sair
            { 
                 $("#container_").html(" "); 
                 send_message("Tchau, tenha um otimo dia. Qualquer duvida, estaremos aqui para atender.<br>Caso prefira uma resposta direta,<br>entre em contato pelo grupo do telegram");
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