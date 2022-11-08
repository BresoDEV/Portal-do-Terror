
  var x=0;var y=0;
  if(document.getElementById)
  {
	  if(navigator.appName.substring(0,3)=="Net")
		  document.captureEvents(Event.MOUSEMOVE);
	  document.onmousemove=Pos_Souris;
	  window.onload=Bouge_Image
  }
  
  function Pos_Souris(e)
  {
	  x=(navigator.appName.substring(0,3)=="Net")?e.pageX:event.x+document.body.scrollLeft;
	  y=(navigator.appName.substring(0,3)=="Net")?e.pageY:event.y+document.body.scrollTop
   }
   
   posX=0;
   posY=0;
   
   anim=true;
   
   oldpos="ImagensSite/fant.png";
   
   function Bouge_Image()
   {
	   if(document.getElementById&&anim)
	   {
		   posX=posX+(((x-posX)+50)/35);
		   posY=posY+(((y-posY)+50)/35);
		   if(posX<x)
			   newpos='ImagensSite/fant.png';
		   else 
			   newpos='ImagensSite/fant.png';
		   if(newpos!=oldpos)
		   {
			   document.tete.src=newpos;
			   oldpos=newpos
			}
			document.getElementById("ghost").style.top=posY+"px";
			document.getElementById("ghost").style.left=posX+"px";
			tempo=setTimeout("Bouge_Image()",5)
			}
		}
		if(document.getElementById)
		{
			document.write('<div id="ghost" style="position: absolute">');
			document.write('<a href="#" onClick="anim=false;document.getElementById(\'ghost\').style.visibility = \'hidden\';return(false)">');
			document.write('<img src="https://cdn2.iconfinder.com/data/icons/spooky-halloween-icons/842/ghost-64.png" style="border:0px" name="tete" alt="Apagar" />');
			document.write('</a>');
			document.write('</div>')
	}