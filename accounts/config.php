<?
		$Mysql_Host = "localhost";
		$Mysql_User = "u0114943_default";
		$Mysql_DB = "u0114943_default";
		$Mysql_pass = "SSim6SSQ";
		
		$connect = @mysql_connect($Mysql_Host,$Mysql_User,$Mysql_pass);
		if(!$connect)
		{
			echo "Error1 connection to MYSQL | WAIT...";
			exit;
		}
		else
		{
			mysql_select_db($Mysql_DB,$connect);
			mysql_set_charset('utf8',$connect);
		}
		define("user_table","accounts");
		define("user_name","name");
		define("user_pass","password");
		define("user_skin","skin");
		define("user_money","money");
		define("user_level","level");
		define("user_exp","exp");
		define("user_number","Phone");
		define("user_zakon","Zakon");
		define("user_donate","adonate");
		define("user_wanted","Wanted");
		define("user_bank","Bank");
		define("user_house","House");
		define("user_fraction","member");
		define("user_biz","Bussiness");
		define("user_warnc","warn");
		define("user_rank","rang");
		define("user_status","ban");
		define("user_lip","Lip");
		define("user_sdpistol", "SDPISTOL");
		define("user_deagle", "DEAGLE");
		define("user_shoutgun", "SHOTGUN");
		define("user_mp", "MP5");
		define("user_ak", "AK47");
		define("user_mfour", "M4A1");
?>