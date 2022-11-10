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

<p style="text-align: center;"><span style="font-family:Courier New,Courier,monospace"><span style="font-size:72px"><span style="color:#c0392b"><strong>TerrorFlix</strong></span></span></span></p>

<p style="text-align: center;"><span style="font-size:20px"><span style="font-family:Courier New,Courier,monospace"><span style="color:#ffffff"><strong>Seu site de filmes de terror</strong></span></span></span></p>
 
</br></br>





<div class="container text-center">

 <div class="row row-cols-2 row-cols-lg-6 g-1 g-l g-1">

 
<?php
$IndexImagens = 1; 
$ListaLinks = array("",
"https://chillx.top/v/poX8ORco3aZM/",
"https://chillx.top/v/QTVlJiyggFex/",
"https://gdriveplayer.to/embed2.php?link=dOjSceTT%252FWov92Iwg6jA%252FA1yjCxySrPMMAUaKSWVhMCfUUDp2dtWJr8frnegmTKdYpkLR05zJwvEvWvboptojs0gZciaVnebW5xPRNv21pQ%252FGoYCgV7HZ1d6DCJIKj7RW0kWi8oN8lWNMICGlC0L4d8VZcfAlLiDr0E8Mdu8ycKjhb1m6QVxrqcKocglrB0TKXHP%252BdM0Js8N%252B6Kmg5fJw0y%252FxN70QfakP2ghDn%252BK%252BvUm2EgXBh6zoNVR7C72KadxQ%253D",
"https://gdriveplayer.to/embed2.php?link=RFdC5mJnK%252BQaNCR9r4sgbwkcbWycQIkWKCS1jY5rLE%252FT3EJVY1jZEQ80kDQwNjcFhVZKqyT54tfGqXDD50zzuVjfNBZR9ChgcctYyy5WDSYZA1Jb4Ft8CrFsPwRIgAkUreN7t0z3C1fmTmfL6337leB9lWTpbULcq%252BabO2XPPsatxXpAstsn0kHS5HON6QphWu23ZIKAleWXREIt9EFa5VNETgqSaixizPyClz1Z2e0ExLSp3gqhoHtxH6XaRhJ1w%253D",
"https://chillx.top/v/exAahREZKR0I/",
"https://chillx.top/v/4XXCRdHW8cfH/",
"https://chillx.top/v/PGYWGJUb99KH/",
"https://chillx.top/v/ETOYc902CGAk/",
"https://chillx.top/v/BFDXuyjJ9DYv/",
"https://gdriveplayer.to/embed2.php?link=So0rSxXTYCH9Wr3Wp8KFgAOOuv%252F7AuQW49Gz7LndAvzPetUFuSi0npJYRtaA%252FGLj9y8%252BKISN66nEzfpE%252B4hnzpNCEABL29C%252FzXoScAYLKKfPHTC85HIpBGk8h6iFpwBt5E7ynWMk%252FvwMTvvWReo5%252BhHdA1rd89qFGb%252BJDES1Avhn0pBrerSwQR2KIvVWmjr4tP6DKaRIah%252F3aus72Z2fmezdizWAEe9RQiEdoGOa8gBvJgQcuLFNHcoGBSdtgUhWA%253D",
"https://gdriveplayer.to/embed2.php?link=ekHUiwJPbCf81IhAU3ZwrwIDUxpY8p3KcG8Es1Tqc8%252FWPggPq500AYSkG7w%252FmNiIXEn8ZIAkapQH%252BQC4mHst%252FiD8qmQX%252F7FTfR4gulgAuhAEou7cQVY%252F7WldsF7w8E4f%252Ff0sZ6Z58h00MEwG1LOsTH8SimA3sahuCMho2%252B2eOnHCjuVvCZSB2jznSHA0pMwKL0eZgmcJyDkBXTart66OMa%252FvvxND1h0TOoihgUKQSoOZykZZfovhrb8slksjFsdyQ%253D",
"https://chillx.top/v/ISaLDlGNhCJ7/",
"https://slmaxed.com/e/WwyJnL9xk8rDMbPa",
"https://chillx.top/v/b9zOqzmB1Nce/",
"https://chillx.top/v/KKyVE6QJXlLS/",
"https://chillx.top/v/1KrmTRKwSwQR/",
"https://chillx.top/v/IrDaifOJzO6H/",
"https://gdriveplayer.to/embed2.php?link=Oh466HMQBYvPVqBkRbaMvwOkgFWOLY1bCKkMFX%252BOw0zPVneJmBZsP9vLMTMpluz1fHf%252BZOMm2ujFnnBPMSGjixmmKqjrWUTsfMR7UthkHylC0zRX%252FCnWqdRBLCK2U8ogIxWwki5bmT5TiV5NcvS4SRro5hm6Y0ULebSzVhbQH1idIfqDjjc0brtMJTjvNnywBjnhGMa8pByqocg6YEyUcqcD9HJxlij0gIgamLaATu99fmaM0eyU31bEyHAXeuQ80%253D",
"https://chillx.top/v/q60PZlUdaH95/",
"https://chillx.top/v/o0ySU9AXlapo/",
"https://chillx.top/v/zRaVkgBGAQ7o/",
"https://chillx.top/v/OA2orFmkRU3c/",
"https://chillx.top/v/vFHgGXvaGORS/",
"https://chillx.top/v/1RXIP1r3z9Mq/",
"https://chillx.top/v/ed0MecQfEail/",
"https://filemoon.sx/e/wejjpr082zsq",
"https://chillx.top/v/GbNvi5JoFRqY/",
"https://chillx.top/v/duiCIrMiaW4d/",
"https://chillx.top/v/TSXXDcx6HPnf/",
"https://gdriveplayer.to/embed2.php?link=pBCA0W2tIpAth4B67%252FlFVAi44UAH65p8sr%252FlZ5bH5OI30n8nU%252FzXCXsiL2RSB63DmKdluJPqv1MotJHMY7CM4YgZtvC0kh7EPXG26x4s1cwtmCYQ9Jk0hTEiEUBgOm5obxUWe0kbbXC0n9O6ZFSaSCx%252BG8Zp7pjR%252B1ZLoX8XqLhzWh9WGXN%252BIKQHW3CLyIZ%252BhMbqFPB7DT1ohYQRzVTjbQBS4CYTNT1cWIRwj9bQt8RTzmVDTuegY4tzxL44z4sSY%253D",
"https://chillx.top/v/YwSTUzdxJPSr/",
"https://chillx.top/v/Ov5iuuzG6gZ3/",
"https://gdriveplayer.to/embed2.php?link=ApwQBQXdFeyu3Xr8A4TDnQQtshoeZ51q7EJo5ofzr%252Fk4IVZdniiVEEdUbmbJY9f8De0KDA6u%252FmFFH9zIsV1yBmE4ShMgpWUn%252FQfdI9YmvP4a%252FhUsbHsEik08mk6XxZcoypCri7TdVanZRzm2U%252F5chG1i98GcGCIP54OIuxteQJKcSpCEdyUNTCPktSlk9xRvt3x8thgDYSSJn21QKFdhOl8m4bHfwyRZn01ahgy1MOO42jaHT685JLyUApdsauJ50%253D",
"https://chillx.top/v/Mm1o78lIWRQj/",
"https://chillx.top/v/7vM9aM5HfPTR/",
"https://chillx.top/v/aEKIDOnBSu59/",
"https://chillx.top/v/jilTzEl7TyIo/",
"https://gdriveplayer.to/embed2.php?link=BYnCrUdQ6tV%252FLmFXEBQ%252FzwopRkP8VsmOaB9c9gtFbzFX9nJQBHBl4ss7maaYJo3CiANpzBQ6jFAnw6QoYRGqPyoZ%252Bfbg9GefIQVwEyAw6Mv7fBLbnfdOICC%252FFBNspqOnH1nC7tNwIuTTUncmW4srZL8p%252FPffa%252FCCJqZRVRQUE4WiMtXy1N8fBgZvRIE8oEjYR81fH%252BPYY9qQB3GLltJckcZtbkGef0chyjLI0jPu8HFDtcCtULq6nnWL3G63CSJ9E%253D",
"https://chillx.top/v/8aIIYOaFZS27/",
"https://chillx.top/v/OMnvV8eic3Nc/",
"https://chillx.top/v/DODJKI2F4d41/",
"https://chillx.top/v/UcX7hOS2kqcu/",
"https://chillx.top/v/0hmo2W1MGj4m/",
"https://chillx.top/v/GCUEja0bnhuj/",
"https://filemoon.sx/e/ho31ruprvc05",
"https://filemoon.sx/e/a12eywyovi2c",
"https://filemoon.sx/e/klml4025apy7",
"https://filemoon.sx/e/5avvwxg3mjy3",
"https://chillx.top/v/Y8pZESr4pX35/",
"https://filemoon.sx/e/phi08p6aiome",
"https://chillx.top/v/H6uBgkSJWaWK/",
"https://filemoon.sx/e/emtgej585nch",
"https://filemoon.sx/e/ofcr5xjmxv1q",
"https://filemoon.sx/e/edlsjauuwxfs",
"https://filemoon.sx/e/rpvhtnbpyspx",
"https://filemoon.sx/e/ptq96ko18y44",
"https://gdriveplayer.to/embed2.php?link=8azpVwkIi1RKsg5q%252FAGmyAzExrWOidJUkl6nDhfyfta4TTacfbi4aSaIvqanYErCa6lUy8TCh65yTDSzUXWCZaQgPtfJgVJQlgZcyT%252FJRkal2KwMKLRzKolHxCF5Rz5vCWvk%252FMye10YNhhlPv8gMhF5m%252Fq7Nk9mFtOcFQKcYsg67Htku1FdDuTwDq4wg7LN3Txg3C3U9YDjejFiLLAkXhdArzZWyRQvqpwIvdM2PPcINxk0Zoe0Vm1fnmZsr9YKrs%253D",
"https://gdriveplayer.to/embed2.php?link=cgtS8Z75KACRMgQeBrnd5gYU94i4KTrKIZukTIdWasiPnz2vTPZdNLbXcr2nGpKi0GfKSvsSlakzAMt0YIkGCzjYSqSA2go4jFObnWrpNuTvRDGkkgr1qLxaggh7YHWXHzQlsAX15NvuQc28u46sn2PLvXVVStquMuyeAymUjcY%252BbvaJIqlVP2b7rAFsZLxHXp4QiKxx8CjroQ2l%252B2tD2RCySbDBouXmgLf39tOZ%252Bmdx9lr5sDQFDRFogYJdsfgNA%253D",
"https://vanfem.com/v/gqxmna-5nmww-ep",
"https://vanfem.com/v/ny08xh2nz-04zpm",
"https://filemoon.sx/e/4r2fdrestmwc",
"https://chillx.top/v/PD23JTGU8u10/",
"https://gdriveplayer.to/embed2.php?link=NPosATlp1WByLCMCtq6V1gdibOzXz1oO5vufqLgA7jJkbzAvqXxCD5PPUSxFPQAW5IaA5L5toZjRj8UsGDZm8tUSE0fzFKFoikH8HV2mHSb%252B1ZeT58yzTBKbKEmcjdg0QyibM60FskzRpP%252Bv7FZZz1hPDMDHiWfJmKcksRd%252FdT%252B1rZgCnsR%252FovQx0gI3ppDGKBtpCZ5CTNzA3vfg%252FXSIbGjCGJFhAt0NAauRkw6EgXaWGPPmxa1CSIhd0B7T3GwlA%253D",
"https://filemoon.sx/e/3wmwvt37qk0r",
"https://filemoon.sx/e/k1a455o18itg",
"https://filemoon.sx/e/u6565ia525hg",
"https://filemoon.sx/e/nbhb2qhi2vnt",
"https://filemoon.sx/e/rhimi72bij4j",
"https://filemoon.sx/e/zl3a2ixj45y5",
"https://suzihaza.com/v/8p-d3h82ey6xw0-",
"https://filemoon.sx/e/8e8o9vcwq5ud",
"https://filemoon.sx/e/ztyf5guj8hhi",
"https://filemoon.sx/e/j5pgpov0ma86",
"https://vanfem.com/v/gqxmna-7rplye1l",
"https://sbfull.com/e/r5rrol7v71nf.html",
"https://embedgram.com/v/63000r7200n63",
"https://gdriveplayer.to/embed2.php?link=ZRKdDUDM6NO%252BnxG2SF6KrAB7MaB72xYzrGQQ4%252BIh9zifUD%252FZFillc%252B6Ex9HbUPx46OJnV2GZqSBd7i0x2McypBnPI8Bhnx8arYoXGOU2uR%252BC%252BoH3BiYwxuLH%252F2TChHjUQYFxWhkey8PYTSqsP8UafDwqYKmBq9oiDKcYS7RLNxaMCs3FoOkYw3vAErmk1yBeMImEsvb8XRJ76g8JrykVA47iM7Mb3gbDxu4fSfnfdAgwLFo%252Bwdqzg9fcgl%252FewSqvg%253D",
"https://gdriveplayer.to/embed2.php?link=AeaPPUBwZzHlpYjPSryxXgnNvC76B2iOadcKuVGQYcHcWnKT00y9HUaj4sEGDRoQmbyX9p%252FBee9Orr6g6X9sdfWEDrceGoZiQFFBv6dIHUWXFRaJMoCOag1LtKAEDIUTPfhWDfOjeZZ74MT2NqNtRTb7AGmI8OAMw4br1ockgQVrjQERNh%252Fm3Uonr3OYY5peOlNRb9uQo%252FHeRfae9CzLrDciLEXtCRrHw8jBYNHQ4TeIiPQao7qcXyLCHzAJwmGcs%253D",
"https://filemoon.sx/e/fhr4cusi5fhw",
"https://filemoon.sx/e/v6u6n4xpjhq6",
"https://sbspeed.com/e/mmfrj9v1vdfa",
"https://filemoon.sx/e/oc6710rdh4wh",
"https://filemoon.sx/e/ccvq4a6mdw39",
"https://filemoon.sx/e/n7jl32zbf4cp/Terror.em.Silent.Hill.BluRay.720p.Dublado.mp4",
"https://filemoon.sx/e/9c7okkc1cl9z",
"https://filemoon.sx/e/cwehgr2yq1b2",
"https://embedgram.com/v/62rqo5s622006",
"https://embedgram.com/v/626226o061412",
"https://filemoon.sx/e/95zcdo1ljoa5",
"https://filemoon.sx/e/brkrcznumk7d",
"https://filemoon.sx/e/4fn0gc6pcbvo",
"https://filemoon.sx/e/cd8bh1ezgzg2",
"https://embedgram.com/v/62731opp6qr2n",
"https://gdriveplayer.to/embed2.php?link=ymr2pRio3YxGJmVFUnYfcQyeR%252FXKz%252F1pSXwjk%252B%252FzNoPkIEPiUmB1wZpY2hkfJLIYy9V%252FZF8Dp%252BVR4%252BmHaxkNrr4uSZlNEKarJPhP9Ma%252F60HkDTZ%252FvylvBAASpVZDIVteGquKq7niyd7Jrs3v6lv1EU%252Fg28E7UJohG4ffKDYv7tRDQv3uizDiP4wz51B5MAxyru1CEC5kDkW48PPDlNlkb7JZbn0ZfJfFdqsBY73UwVRqKvF%252FKPpuO2Cub4JjJGcn0%253D",
"https://suzihaza.com/v/8p-d3h84g6pxx7r",
"https://chillx.top/v/bCgRJ8Zc8lTe/",
);


























while(file_exists("img/".$IndexImagens.".jpg"))
{
	echo "<div class='col'>";
	echo "<a href='".$ListaLinks[$IndexImagens]."'>";
	echo "<img src='img/".$IndexImagens.".jpg' class='img-thumbnail' alt=''>";
	echo "</a>";
	echo "</div>"; 
	
	
	
	$IndexImagens++;
}


 
 
?>

  






  </div>
   
</div>

</br></br>
</br></br> 
<p style="text-align: center;"><span style="font-size:30px"><span style="font-family:Courier New,Courier,monospace"><span style="color:#c0392b"><strong>Aqui voce assiste seus filmes sem propagandas ou anuncios!!</strong></span></span></span></p>

</br></br>
</br></br> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>