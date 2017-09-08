<?session_start();?>
<!DOCTYPE html>
  <head>
	<meta http-equiv="content-type" content="text/html; charset=utf8">
	<link rel="icon" type="image/png" href="/favicon.png" />
	<noscript><meta http-equiv="refresh" content="0; URL=/nojs.php"></noscript>
	<?require_once "config.php";?>
    <title>Ore RolePlay - Личный кабинет</title>
    <meta name="keywords" content="samp, gta, gta online, gta sa, samp-rp, diamond-rp, advance-rp, ore-rp" />
	<meta name="description" content="Начать играть в GTA San Andreas по сети">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
	<SCRIPT type="text/javascript">
/*
Snow Fall 1 - no images - Java Script
Visit http://rainbow.arch.scriptmania.com/scripts/
  for this script and many more
*/
 
// Set the number of snowflakes (more than 30 - 40 not recommended)
var snowmax=40
 
// Set the colors for the snow. Add as many colors as you like
var snowcolor=new Array("#aaaacc","#ddddff","#ccccdd","#f3f3f3","#f0ffff")
 
// Set the fonts, that create the snowflakes. Add as many fonts as you like
var snowtype=new Array("Times","Arial","Times","Verdana")
 
// Set the letter that creates your snowflake (recommended: * )
var snowletter="*"
 
// Set the speed of sinking (recommended values range from 0.3 to 2)
var sinkspeed=0.6
 
// Set the maximum-size of your snowflakes
var snowmaxsize=30
 
// Set the minimal-size of your snowflakes
var snowminsize=8
 
// Set the snowing-zone
// Set 1 for all-over-snowing, set 2 for left-side-snowing
// Set 3 for center-snowing, set 4 for right-side-snowing
var snowingzone=1
 
///////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE
///////////////////////////////////////////////////////////////////////////
 
// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)
var browserok=ie5||ns6||opera
 
function randommaker(range) {
        rand=Math.floor(range*Math.random())
    return rand
}
 
function initsnow() {
        if (ie5 || opera) {
                marginbottom = document.body.scrollHeight
                marginright = document.body.clientWidth-15
        }
        else if (ns6) {
                marginbottom = document.body.scrollHeight
                marginright = window.innerWidth-15
        }
        var snowsizerange=snowmaxsize-snowminsize
        for (i=0;i<=snowmax;i++) {
                crds[i] = 0;
            lftrght[i] = Math.random()*15;
            x_mv[i] = 0.03 + Math.random()/10;
                snow[i]=document.getElementById("s"+i)
                snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
                snow[i].size=randommaker(snowsizerange)+snowminsize
                snow[i].style.fontSize=snow[i].size+'px';
                snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
                snow[i].style.zIndex=1000
                snow[i].sink=sinkspeed*snow[i].size/5
                if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
                if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
                if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
                if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
                snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
                snow[i].style.left=snow[i].posx+'px';
                snow[i].style.top=snow[i].posy+'px';
        }
        movesnow()
}
 
function movesnow() {
        for (i=0;i<=snowmax;i++) {
                crds[i] += x_mv[i];
                snow[i].posy+=snow[i].sink
                snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i])+'px';
                snow[i].style.top=snow[i].posy+'px';
 
                if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
                        if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
                        if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
                        if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
                        if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
                        snow[i].posy=0
                }
        }
        var timer=setTimeout("movesnow()",50)
}
 
for (i=0;i<=snowmax;i++) {
        document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
        window.onload=initsnow
}
 
</SCRIPT>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/templatemo_misc.css">
    <link href="/css/templatemo_style.css" rel="stylesheet">
	<script src="/js/jquery.js"></script>
    <script src="/js/jquery-1.10.2.min.js"></script> 
	<script src="/js/jquery.lightbox.js"></script>
	<script src="/js/templatemo_custom.js"></script>
	<link href='//fonts.googleapis.com/css?family=Comfortaa:400,700,300&subset=latin,cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/diamond.css">
	<link rel="stylesheet" href="/css/animate.css">
    <script>
    function showhide()
    {
    	var div = document.getElementById("newpost");
		if (div.style.display !== "none")
		{
			div.style.display = "none";
		}
		else {
			div.style.display = "block";
		}
    }
  	</script>
	<style>
	input#nickname {
	background:url(img/ico_nickname.png) no-repeat left center!important;
	background-color:#fff!important;
	padding-left:50px!important;
	width:246px!important;
	margin-top:20px!important
	}
	input#password {
	background:url(img/ico_pass.png) no-repeat left center!important;
	padding-left:50px!important;
	background-color:#fff!important;
	width:246px!important
	}
	</style>
	</head>
	<body>
  	<div class="site-header">
		<div class="main-navigation">
			<div class="responsive_menu">
				<ul>
					<li><a href="/">На главную</a></li>
					<li><a class="show-1 templatemo_home" href="/accounts">Личный кабинет</a></li>
					<li><a href="/forum">Форум</a></li>
					<li><a href="/donate.html">Донат</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="row templatemo_gallerygap">
					<div class="col-md-12 responsive-menu">
						<a href="#" class="menu-toggle-btn">
				            <i class="fa fa-bars"></i>
				        </a>
					</div> <!-- /.col-md-12 -->
                    <div class="col-md-3 col-sm-12">
                    	<a href="/"><img src="/images/templatemo_logo.jpg" alt="SAMP Brilliant RolePlay - играй в GTA San Andreas по сети"></a>
                    </div>
					<div class="col-md-9 main_menu">
						<ul>
							<li><a href="/">
                            	<span class="fa fa-home"></span>
                                На главную</a></li>
							<li><a class="show-1 templatemo_home" href="/accounts">
                            	<span class="fa fa-tablet"></span>
                          		  Личный кабинет</a></li>
							<li><a href="/forum">
                            	<span class="fa fa-users"></span>
                            	Форум</a></li>
							<li><a href="/donate.html">
                            	<span class="fa fa-money"></span>
                                Донат</a></li>
						</ul>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.main-navigation -->
	</div> <!-- /.site-header -->
    <!-- ucp start -->
	<center><div id='content_mini'>
	<style>
	#content_mini {
	width:350px;
	padding:50px;
	background:#e7e7e7;
	margin:0 auto;
	}
	</style>
	<b><h2 style="color: black; font-size: 20px;">Личный кабинет</h2></b>
	<?
			if(isset($_POST['exit']))
			{
				setcookie("Login","",time() - 3600*4);
				echo "<meta http-equiv=refresh content=\"0; url=".$_SERVER['REQUEST_URI']."stat.php\">";
			}
			if(isset($_POST['enter']))
			{
				$login = $_POST['Login'];
				$pass = $_POST['Pass'];
				$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
				if(mysql_num_rows($result) > 0)
				{
					$row = mysql_fetch_array($result);
					if(strlen($login) && strlen ($pass))
					{
						if($login === $row[user_name] && $pass === $row[user_pass])
						{
							unset($_SESSION['wrong_login']);
							setcookie("Login",$login,time() + 3600*4);
							echo "<meta http-equiv=refresh content='0;stat.php?login=$login'>";
						}
						else {
							$_SESSION['wrong_login'] = $login;
							echo "<center>Вы ввели неверный логин или пароль</center>";
						}
					}
				}
				else {
					$_SESSION['wrong_login'] = $login;
					echo "<center>Вы ввели неверный логин или пароль</center>";
				}
			}
			?>
				<form method="POST">
					<center><input id='nickname' name="Login" type="text" placeholder="Введите ваш ник" value="<?echo $_SESSION['wrong_login'];?>" /></center>
					<center><input id='password' name="Pass" type="password" placeholder="Введите пароль" /></center>	
					<center><input type="submit" name="enter" class="button button-1 button-1f" value = "Войти в аккаунт" /></center>
				</form>
	</div></center>
	</div>
	<!-- ucp end -->
	</div>
	<!-- footer start -->
    <div class="templatemo_footer">
    	<div class="container">
    	<div class="row">
        	<div class="col-md-9 col-sm-12" style="font-size: 12px; color: white;">Copyright © 2016. Все права защищены. | Специально для Ore RP.</div>
            <div class="col-md-3 col-sm-12 templatemo_rfooter">
            	  <a href="http://vk.com/ore_rp">
                 	<div class="hex_footer">
					<span class="fa fa-vk"></span>
					</div>
                  </a>
				 <a href="/how_game.html">
                	<div class="hex_footer">
					 <span class="fa fa-play"></span>
					</div>
                </a>
				<a href="/forum">
                	<div class="hex_footer">
					 <span class="fa fa-users"></span>
					</div>
                </a>
                <a href="/donate.html">
                	<div class="hex_footer">
					 <span class="fa fa-money"></span>
					</div>
                </a>
            </div>
        </div>
        </div>
    </div>
    <!-- footer end -->    
	<script>
	$('.gallery_more').click(function(){
		var $this = $(this);
		$this.toggleClass('gallery_more');
		if($this.hasClass('gallery_more')){
			$this.text('Load More');			
		} else {
			$this.text('Load Less');
		}
	});
    </script>
  </body>
</html>