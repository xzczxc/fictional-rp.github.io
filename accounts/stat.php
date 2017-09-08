<?session_start();?>
<!DOCTYPE html>
  <head>
	<meta http-equiv="content-type" content="text/html; charset=utf8">
	<link rel="icon" type="image/png" href="/favicon.png" />
	<noscript><meta http-equiv="refresh" content="0; URL=/nojs.php"></noscript>
	<?require_once "config.php";?>
    <meta name="keywords" content="samp, gta, gta online, gta sa, samp-rp, diamond-rp, advance-rp, ore-rp" />
	<meta name="description" content="Начать играть в GTA San Andreas по сети">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
	<link href='//fonts.googleapis.com/css?family=Comfortaa:400,700,300&subset=latin,cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/templatemo_misc.css" rel="stylesheet">
    <link href="/css/templatemo_style.css" rel="stylesheet">
	<link href="/css/diamond.css" rel="stylesheet">
	<link href="/css/animate.css" rel="stylesheet">
	<script src="/js/jquery.js"></script>
    <script src="/js/jquery-1.10.2.min.js"></script> 
	<script src="/js/jquery.lightbox.js"></script>
	<script src="/js/templatemo_custom.js"></script>
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
	<script src="http://diamondrp.ru/js/jquery.knob.js"></script>
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
    <!-- ucp main start -->
	<?
			if(isset($_POST['exit']))
			{
				setcookie("Login","",time() - 3600*4);
				echo "<meta http-equiv=refresh content='0;accounts/'>";
			}
			$login = $_COOKIE['Login'];
			$getlogin = $_GET['login'];
			if($getlogin != $login)
			{
				exit ("<meta http-equiv=refresh content='0;stat.php?login=$login'>");
			}

			echo "<title>Ore RolePlay | Кабинет - $login</title>";
		?>
		<div id='content' class='main_width'>
		<style>
		#content {
		width:1014px;
		padding:43px;
		background:#e7e7e7
		}
		.main_width {
		width:1100px;
		margin:0 auto;
		}
		.user_server {
		height:120px
		}

		p.user_info_title {
		font-size:20px;
		font-weight:700;
		text-transform:uppercase;
		color:#2e2e2e
		}
		
		.user_p_table {
		display:table-rowl;
		width:100%
		}

		.user_p_left {
		display:table-cell;
		width:310px;
		padding-right:42px;
		vertical-align:top
		}

		.user_p_right {
		width:100%;
		display:table-cell;
		vertical-align:top
		}
		
		.user_p_right > div {
		background:#fff;
		width:620px;
		padding:10px;
		margin-bottom:10px;
		}
		
		.user_p_left > div {
		width:290px;
		background:#fff;
		padding:20px;
		margin-bottom:20px
		}

		
		
		.short_info table {
		width:100%;
		border-spacing:10px 4px
		}

		.short_info table tr td,.short_info table tr th {
		width:33.3%
		}

		.short_info table tr th {
		padding-bottom:12px;
		border-bottom:1px solid #ddd;
		text-align:left;
		font-size:14px;
		color:#727272
		}

		.short_info table tr td {
		font-size:30px;
		color:#00a3b6
		}
		
		
		ul.left {
		float:left
		}

		ul.right {
		float:right
		}
		
		h2 {
		font-size:20px;
		font-weight:700;
		text-transform:uppercase;
		color:#2e2e2e;
		margin-bottom:20px
		}
		
		.left {
		float:left
		}

		.right {
		float:right
		}

		BODY {
		font-family:'Comfortaa',Arial;
		font-size:15px;
		color:#252525;
		letter-spacing:1px
		}
		</style>
		<div class='user_p_table'>
		<div class='user_p_left'>
			<a class='orange_button'>Ваш ник: <?echo"$login"?></a>
			<div class='bank'>
			<?
						$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
						$row = mysql_fetch_array($result);
						$skin = $row[user_skin];
						echo "<center><img src='img/skin/$skin.png'/></center>";
			?>
			</div>
			<div class='user_server'>
			<img src='img/server/s1.png'/>
			<p class='user_info_title'>Играет на сервере</p>
			</div>
		</div>
		<div class='user_p_right'>
			<div class='short_info'>
				<table>
				<tr>
				<th>Статус аккаунта</th>
				<th>Последний IP</th>
				</tr>
				<tr>
				<td>
				<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$status = $row[user_status];
					if ($row[user_status] == 0) echo "Активен";
					if ($row[user_status] == 1) echo "Забанен";
				?>
				</td>				
				<td>
				<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$lip = $row[user_lip];
					echo "$lip";
				?>
				</td>
				</tr>
				</table>
			</div>
			<div class='user_stats'>
				<h2>Статистика персонажа</h2>
				<ul class='left'>
					<li>Уровень<span>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$level = $row[user_level];
					echo "$level";
					?>
					</span>
					<li>Наличные деньги<span>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$money = $row[user_money];
					echo "$$money";
					?>
					</span>
					<li>Номер дома<span>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$house = $row[user_house];
					if ($row[user_house] == 999) echo "отсутствует";
					if ($row[user_house] < 999) echo "$house";
					?>
					</span>
					<li>Организация<span>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$fraction = $row[user_fraction];
					if ($row[user_fraction] > 0) echo "$fraction";
					if ($row[user_fraction] == 0) echo "отсутствует";
					?>
					</span>
					<li>Номер бизнеса<span>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$bussiness = $row[user_biz];
					if ($row[user_biz] > 0) echo "$bussiness";
					if ($row[user_biz] == 0) echo "отсутствует";
					?>
					</span>
				</ul>
				<ul class='right'>
					<li>Банковский счет<span>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$bank = $row[user_bank];
					echo "$$bank";
					?>
					</span>
					<li>Ранг в организации<span>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$rank = $row[user_rank];
					if ($row[user_rank] > 0) echo "$rank";
					if ($row[user_rank] == 0) echo "отсутствует";
					?>
					</span>
					<li>Номер телефона<span>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$phone = $row[user_phone];
					if ($row[user_phone] == 0) echo "отсутствует";
					if ($row[user_phone] > 1) echo "$phone";
					?>
					</span>
					<li>Донат счет<span>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$donate = $row[user_donate];
					echo "$donate руб.";
					?>
					</span>
					<li>Предупреждения<span>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$warnc = $row[user_warnc];
					if ($row[user_warnc] > 0) echo "$warnc/3";
					if ($row[user_warnc] == 0) echo "отсутствует";
					?>
					</span>
				</ul>
			</div>
			<style>
.guns_stat {
margin:0 -20px;
text-align:center
}

.guns_stat > div {
display:inline-block;
width:100px;
text-align:center;
border-left:1px solid #ddd;
position:relative;
height:100px;
padding:10px 0
}

.guns_stat > div > .gun_ico {
width:100px;
text-align:center;
position:absolute
}

.guns_stat > div > .gun_ico > i {
display:inline-block;
width:37px;
height:37px;
background:url(http://ore-rp.ru/accounts/img/sprite_guns.png) no-repeat 0 0;
margin-top:11px
}

.sdpistol i {
background-position:0 0!important
}

.deagle i {
background-position:-108px 0!important
}

.shoutgun i {
background-position:-217px 0!important
}

.mp i {
background-position:-325px 0!important
}

.ak i {
background-position:-432px 0!important
}

.mfour i {
background-position:-542px 0!important
}

.procent {
font-size:10px;
font-weight:700;
text-transform:uppercase;
color:#2e2e2e;
display:block;
text-align:center;
margin-bottom:12px;
transition:all .4s easy-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out
}

.guns_stat div:hover .procent {
transform:scale(2,2)
}

input {
border:solid 2px #999;
height:50px;
line-height:48px;
-webkit-border-radius:4px;
-moz-border-radius:4px;
border-radius:4px;
background:#fff;
display:inline-block;
-webkit-appearance:none;
font-size:18px;
color:#006773;
padding:0 20px;
margin-top:20px;
background-color:#fff;
transition:all .4s easy-in-out;
-webkit-transition:all .4s ease-in-out;
-moz-transition:all .4s ease-in-out;
-webkit-box-shadow:0 0 0 #00a3b6;
-moz-box-shadow:0 0 0 #00a3b6;
box-shadow:0 0 0 #00a3b6;
font-family:Arial
}

input:hover {
border:solid 2px #00a3b6
}

input:focus {
border:solid 2px #00a3b6;
-webkit-box-shadow:0 0 15px 1px rgba(0,163,182,.6);
-moz-box-shadow:0 0 15px 1px rgba(0,163,182,.6);
box-shadow:0 0 15px 1px rgba(0,163,182,.6)
}
</style>
			<div class='gun_ability'>
				<h2>Навыки владения оружием</h2>
				<div class='guns_stat'>
					<div class='sdpistol'>
					<div class='procent'>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$sdpistol = $row[user_sdpistol];
					echo "$sdpistol%";
					?></div>
						<div class='gun_ico'><i></i></div>
						<input class="knob" data-fgColor="#525252" data-displayInput=false data-thickness=".2" data-readOnly=true value="<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$sdpistol = $row[user_sdpistol];
					echo "$sdpistol";
					?>" data-width="64">
					</div>
					<div class='deagle'>
					<div class='procent'><?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$deagle = $row[user_deagle];
					echo "$deagle%";
					?></div>
						<div class='gun_ico'><i></i></div>
						<input class="knob" data-fgColor="#525252" data-displayInput=false data-thickness=".2" data-readOnly=true value="<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$deagle = $row[user_deagle];
					echo "$deagle";
					?>" data-width="64">
					</div>
					<div class='shoutgun'>
					<div class='procent'><?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$shoutgun = $row[user_shoutgun];
					echo "$shoutgun%";
					?></div>
						<div class='gun_ico'><i></i></div>
						<input class="knob" data-fgColor="#525252" data-displayInput=false data-thickness=".2" data-readOnly=true value="<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$shoutgun = $row[user_shoutgun];
					echo "$shoutgun";
					?>" data-width="64">
					</div>
					<div class='mp'>
					<div class='procent'>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$mp = $row[user_mp];
					echo "$mp%";
					?></div>
						<div class='gun_ico'><i></i></div>
						<input class="knob" data-fgColor="#525252" data-displayInput=false data-thickness=".2" data-readOnly=true value="<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$mp = $row[user_mp];
					echo "$mp";
					?>" data-width="64">
					</div>
					<div class='ak'>
					<div class='procent'>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$ak = $row[user_ak];
					echo "$ak%";
					?></div>
						<div class='gun_ico'><i></i></div>
						<input class="knob" data-fgColor="#525252" data-displayInput=false data-thickness=".2" data-readOnly=true value="<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$ak = $row[user_ak];
					echo "$ak";
					?>" data-width="64">
					</div>
					<div class='mfour'>
					<div class='procent'>
					<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$mfour = $row[user_mfour];
					echo "$mfour%";
					?></div>
						<div class='gun_ico'><i></i></div>
						<input class="knob" data-fgColor="#525252" data-displayInput=false data-thickness=".2" data-readOnly=true value="<?
					$result = mysql_query("SELECT * FROM ".user_table." WHERE ".user_name." = '$login'");
					$row = mysql_fetch_array($result);
					$mfour = $row[user_mfour];
					echo "$mfour";
					?>" data-width="64">
					</div>
				</div>
			</div>
			<center><a href='/?actdo=logout' class='toexit'>&nbsp; &nbsp; &nbsp; Выход из личного кабинета</a></center>
		</div>
	  </div>
	</div>
	<!-- ucp main end -->
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