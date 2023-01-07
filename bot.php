<?php 

//include "index.php";
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[ 1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
$yellow2="\033[1;33m";


//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$resu="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

$Color_Off="\033[0m";      
$Black="\033[0;30m";      
$Red= "\033[0;31m";         
$Green="\033[0;32m";      
$Yellow="\033[0;33m";       
$Blue="\033[0;34m";         
$Purple="\033[0;35m";      
$Cyan="\033[0;36m";       
$White="\033[0;37m";       
$IYellow="\033[0;93m";      
$IRed="\033[0;91m";         
$BIRed="\033[1;91m";   
$On_Cyan="\033[46m";
$BIWhite="\033[1;97m";     
$BIBlue="\033[1;94m";      
$BICyan="\033[1;96m";       
$BIBlack="\033[1;90m";     
$BBlack="\033[1;30m";
$IBlack="\033[0;90m";  
$On_White="\033[47m";     
$BIBlue="\033[1;94m";
$BIWhite="\033[1;97m";     
$On_IRed="\033[0;101m";
$On_Red="\033[41m";   
$On_Blue="\033[44m";
$On_Green="\033[42m";  
$IGreen="\033[0;92m";   
$IYellow="\033[0;93m";
$Icyan="\033[0;96m";
$Ijo="\033[1;92m"; 
//red to yellow shade ↓

$r3="\033[01;38;5;196m";
$r2="\033[01;38;5;202m";
$r1="\033[01;38;5;208m";
$ry="\033[01;38;5;214m";
$y1="\033[01;38;5;220m";
$y2="\033[01;38;5;226m";
$y3="\033[01;38;5;228m";
/* END COLOR */
$biru="\033[1;34m";
$kuning="\033[1;33m";
$merah="\033[1;31m";
$putih="\033[1;37m";
$hijau="\033[1;32m";
$cyan="\033[1;36m";
$ungu="\033[1;35m";
$dark="\033[1;30m";
$abu = "\033[0;90m";
$abu1 = "\033[1;90m";
$merah1 = "\033[1;91m";
$end = "\033[0m";
$blockabu = "\033[100m";
$blockmerah = "\033[101m";
$blockstabilo = "\033[102m";
$blockkuning = "\033[103m";
$blockbiru = "\033[104m";
$blockpink = "\033[105m";
$blockcyan = "\033[106m";
$blockputih = "\033[107m";
$termux = $r3."♥";
$hh = $green2."💚";
$kh = $y2."💛";
$uh = $purple2."💜";
system("clear");
$hari = date("l");
$tanggal = date("d M Y");
$jam = date("H:i:s");
$dot = "\033[104m\033[1;32m•\033[0m";
function col($str,$color){
if($color==5){$color=['rw','ry','rt','rg','rr','rp1','rp2'][array_rand(['h','k','b','u','m'])];}
	$war=array('rw'=>" \033[107m\033[1;31m",'rt'=>" \033[106m\033[1;31m",'ht'=>" \033[0;30m",'p3'=>"\033[1;37m",'p'=>" \033[1;37m",'a'=>" \033[1;30m",'m'=>" \033[1;31m",'h'=>" \033[1;32m",'k'=>" \033[1;33m",'b'=>" \033[1;34m",'u'=>" \033[1;35m",'c'=>" \033[1;36m",'rr'=>" \033[101m\033[1;37m",'rg'=>" \033[102m\033[1;34m",'ry'=>" \033[103m\033[1;30m",'rp1'=>" \033[104m\033[1;37m",'rp2'=>" \033[105m\033[1;37m");
return $war[$color].$str."\033[0m";}
function res($A,$B){echo an(col($A,$B));}
function n(){echo"\n";}
function n2(){n().n();}
function r(){echo"\r                                      \r";}


system('rm -rf bot.php.bak');
function get($url){
$ua = array();
$ua[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
//curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
sleep(1);}
function post($url, $ua, $data){
$ch = curl_init();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//curl_setopt($ch, CURLOPT_COOKIEJAR, "./cookie/cookie.txt");
//curl_setopt($ch, CURLOPT_COOKIEFILE, "./cookie/cookie.txt");
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}

function slow($arr){
  $char = str_split($arr);
  foreach($char as $an){
    echo $an;
    usleep(2000);
  }
}

function fast($arr){
  $char = str_split($arr);
  foreach($char as $an){
    echo $an;
    usleep(500);
  }
}

$title = $biru."[ ".$merah."Create By Woylha : Insta -> kacong_214 $biru]$end";

$banner = $biru."
    __  __       _ _   _   _____       $tanggal      
   |  \/  |     | | | (_) |  __ \        
   | \  / |_   _| | |_ _  | |  | | _____      ___ __  
   | |\/| | | | | | __| | | |  | |/ _ \ \ /\ / / '_ \ 
   | |  | | |_| | | |_| | | |__| | (_) \ V  V /| | | |
   |_|  |_|\__,_|_|\__|_| |_____/ \___/ \_/\_/ |_| |_|                                                   
       $title                          
";

slow ($banner);
an:
slow(str_repeat("\033[1;97m─",63))."\n";
echo"\n";
slow(" [1] Lacak Ip \n");
slow(" [2] Cek Card Provider \n");
slow(" [3] Download TikTok-Mp4 \n");
slow(" [4] Download YouTube-Mp4 \n");
slow(" [5] Download Facebook-Mp4 \n");
slow(" [6] Download Insta-Mp4 \n");
slow(" [7] Download Twitter-Mp4 \n");
slow(" [8] Check Name Free-Fire \n");
slow(" [9] Check Name Mobile-Legend \n");
slow(" [10] Check Name AOV \n");


slow(str_repeat("\033[1;97m─",63))."\n";

echo"\n";
$pilih = readline(" Input Number :$Ijo ");
slow(str_repeat("\033[1;97m─",63))."\n";


// Check Adreess Ip

if ($pilih == "1") {
$int = readline($BIWhite."\n Input Ip : ".$Ijo);
slow(str_repeat("\033[1;97m─",63));
echo "\n";
$url = get("https://api.gifan.id/geolocation/?ip=$int");
$urll = get("https://api.gifan.id/getFlag/new/?ip=$int");

$jsonn = json_decode($urll);
//print_r($jsonn);
$json = json_decode($url);


$status = $json->status;
$country = $json->country;
$code = $json->countryCode;
$region = $json->region;
$regionName = $json->regionName;
$city = $json->city;
$zip = $json->zip;
$lat = $json->lat;
$lon = $json->lon;
$timezone = $json->timezone;
$gcodeDial = $jsonn->gcodeDial;
$gcodeTime = $jsonn->gcodeTime;
$isp = $json->isp;
$org = $json->org;
$as = $json->as;
$query = $json->query;

if ($json->status == "success") {

slow ($merah."  Status $BIWhite:$Ijo $status \n");
slow ($merah."  Country $BIWhite:$Ijo $country \n");
slow ($merah."  CountryCode $BIWhite:$Ijo $code \n");
slow ($merah."  Region $BIWhite:$Ijo $region \n");
slow ($merah."  RegionName $BIWhite:$Ijo $regionName \n");
slow ($merah."  City $BIWhite:$Ijo $city \n");
slow ($merah."  Zip $BIWhite:$Ijo $zip \n");
slow ($merah."  Lat $BIWhite:$biru $lat \n");
slow ($merah."  Lon $BIWhite:$biru $lon \n");
slow ($merah."  TimeZone $BIWhite:$Ijo $timezone \n");
slow ($merah."  CodeDial $BIWhite:$Ijo $gcodeDial \n");
slow ($merah."  Time $BIWhite:$Ijo $gcodeTime \n");
slow ($merah."  Isp $BIWhite:$Ijo $isp \n");
slow ($merah."  Org $BIWhite:$Ijo $org \n");
slow ($merah."  As $BIWhite:$Ijo $as \n");
slow ($merah."  Query $BIWhite:$Ijo $query $end \n");
goto an;
} else {
echo "\n Error \n";
}
}

// Check Provider

if ($pilih == "2") {
$int = readline($BIWhite."\n Input Number ".$biru."[".$Ijo." 08xxx ".$biru." ] ".$BIWhite.": ".$Ijo);
slow(str_repeat("\033[1;97m─",63));
echo "\n";
$url = get("https://api.gifan.id/checkPhone/?phone=$int");

$json = json_decode($url);
//print_r($json);
$operator = $json->operator;
$phone = $json->phone;
$rws = $json->result->status;
//print_r($rws);

if ($json->result->status !== "0") {

slow ($merah."  Operator $BIWhite:$Ijo $operator \n");
slow ($merah."  Phone $BIWhite:$Ijo $phone \n");
//slow ($merah."  CountryCode $BIWhite:$Ijo $code \n");

goto an;
} else {
echo "\n Error \n";
}
}

// Tiktok-Mp4

if ($pilih == "3") {
$int = readline($BIWhite."\n Input Url_Vidio_Tiktok : ".$Ijo);
slow(str_repeat("\033[1;97m─",63));
echo "\n";
$url = get("https://api.gifan.id/downloader/tt/?url=$int");
$json = json_decode($url);
if ($json->status == "true") {
$title = explode('"',explode('"title": "',$url)[1])[0];
$durasi = explode('"',explode('"duration": "',$url)[1])[0];
slow ($merah." Title $BIWhite: $Ijo".$title.$end."\n");
slow ($merah." Durasi $BIWhite:$biru $durasi".$end."\n");
$vd_url = explode('"',explode('"video_url": "',$url)[1])[0];
slow(str_repeat("\033[1;97m─",63));
slow ("\n Prosess Download, Tunggu Beberapa Detik 🗿\n");
$down = get($vd_url);
$file = file_put_contents("Downloader_Woylha.mp4",$down);
slow (" Berhasil Download Vidio \n");
goto an;

   } 
}


// YouTube-Mp4

if ($pilih == "4") {
$int = readline($BIWhite."\n Input Url_vidio_id ".$biru." [".$Ijo." bODVRsxvB8A ".$biru."] ".$BIWhite.": ".$Ijo);
echo$end;
slow(str_repeat("\033[1;97m─",63));
echo "\n";
$url = get("https://api.gifan.id/downloader/ytmp4/?url=https://www.youtube.com/watch?v=$int");
$json = json_decode($url);
if ($json->status == "true") {
$title = explode('"',explode('"title": "',$url)[1])[0];
$durasi = explode('"',explode('"duration": "',$url)[1])[0];
slow ($merah." Title $BIWhite: $Ijo ".$title.$end."\n");
slow ($merah." Duration :$biru $durasi".$end."\n");
$vd_url = explode('"',explode('"video_url": "',$url)[1])[0];
slow(str_repeat("\033[1;97m─",63));
slow ("\n prosess download, tunggu beberapa detik 🗿\n");
$down = get($vd_url);
$file = file_put_contents("downloader_woylha.mp4",$down);
slow (" Berhasil Download Vidio \n");
goto an;
   } 
}


// Facebook-Mp4

if ($pilih == "5") {
$int = readline($BIWhite."\n Input Url_Vidio_Facebook : ".$Ijo);
slow(str_repeat("\033[1;97m─",63));
echo "\n";
$url = get("https://api.gifan.id/downloader/fb/?url=$int");
$json = json_decode($url);
if ($json->status == "true") {
$title = explode('"',explode('"title": "',$url)[1])[0];
$durasi = explode('"',explode('"duration": "',$url)[1])[0];
slow ($merah." Title $BIWhite: $Ijo ".$title.$end."\n");
slow ($merah." Durasi :$biru $durasi".$end."\n");
$vd_url = explode('"',explode('"video_url": "',$url)[1])[0];
slow(str_repeat("\033[1;97m─",63));
slow ("\n Prosess Download, Tunggu Beberapa Detik 🗿\n");
$down = get($vd_url);
$file = file_put_contents("Downloader_Woylha.mp4",$down);
slow (" Berhasil Download Vidio \n");
goto an;
   } 
}


// Instagram-Mp4

if ($pilih == "6") {
$int = readline($BIWhite."\n Input Url_Vidio_Instagram : ".$Ijo);
slow(str_repeat("\033[1;97m─",63));
echo "\n";
$url = get("https://api.gifan.id/downloader/ig/?url=$int");
$json = json_decode($url);
if ($json->status == "true") {
$title = explode('"',explode('"title": "',$url)[1])[0];
//$durasi = explode('"',explode('"duration": "',$url)[1])[0];
slow ($merah." Title $BIWhite: $Ijo ".$title.$end."\n");
slow ($merah." Durasi :$biru null".$end."\n");
$vd_url = explode('"',explode('"video_url": "',$url)[1])[0];
slow(str_repeat("\033[1;97m─",63));
slow ("\n Prosess Download, Tunggu Beberapa Detik 🗿\n");
$down = get($vd_url);
$file = file_put_contents("Downloader_Woylha.mp4",$down);
slow (" Berhasil Download Vidio \n");
goto an;
}
} 

// Twiter-Mp4

if ($pilih == "7" ) {

$int = readline($BIWhite."\n Input Url_Vidio_Twiter : ".$Ijo);
slow(str_repeat("\033[1;97m─",63));
echo "\n";
$url = get("https://api.gifan.id/downloader/tw/?url=$int");
$json = json_decode($url);
if ($json->status == "true") {
$title = explode('"',explode('"title": "',$url)[1])[0];
$quality = explode('"',explode('"video_quality": "',$url)[1])[0];
$vd_url = explode('"',explode('"video_url": "',$url)[1])[0];
slow ($merah." Title $BIWhite: $Ijo ".$title.$end."\n");
slow ($merah." Quality $BIWhite: $Ijo ".$quality.$end."\n");
slow (" Prosess Download, Tunggu Beberapa Detik 🗿\n");
$down = get($vd_url);
$file = file_put_contents("Downloader_Woylha.mp4",$down);
slow (" Berhasil Download Vidio \n");
} else {
echo"Erorr";
}
}


if ($pilih == "8") {
// Free-Fire
$int=readline("\n Input Id Free-Fire :$Ijo ");
slow(str_repeat("\033[1;97m─",63));
echo "\n";
$url = get("https://api.gifan.id/trueID/freeFire/?id=$int");
slow ($merah." Name ".$BIWhite.": ".$Ijo."$url \n $end");
goto an;
}

if ($pilih == "9") {
// Free-Fire
$id=readline("\n Input Id Mobile-Legend :$Ijo ");
$srv=readline("\n".$BIWhite." Input Server Mobile-Legend :$Ijo ");
slow(str_repeat("\033[1;97m─",63));
echo "\n";
$url = get("https://api.gifan.id/trueID/mobileLegends/?id=$id.$srv");
slow ($merah." Name ".$BIWhite.": ".$Ijo."$url \n $end");
goto an;
} 

if ($pilih == "10") {
// Free-Fire
$int=readline("\n Input Id AOV :$Ijo ");
slow(str_repeat("\033[1;97m─",63));
echo "\n";
$url = get("https://api.gifan.id/trueID/aov/?id=$int");
slow ($merah." Name ".$BIWhite.": ".$Ijo."$url \n $end");
goto an;
}


//https://api.gifan.id/trueID/freeFire/?id=244169057
// id-ml
/*
$int=readline(" Input Id : ");
$srv=readline(" Input Server : ");
$url = get("https://api.gifan.id/trueID/mobileLegends/?id=$int.$srv");

// TikTok-mp4

$int=readline(" Input Url Vidio : ");
$url = url("https://api.gifan.id/downloader/tt/?url=".$int."");
$tt = explode('"',explode('"title": "',$url)[1])[0];
$vd_url = explode('"',explode('"video_url": "',$url)[1])[0];
//$type = ".mp4";
//$data = 
system("xdg-open ".$vd_url."");
$down = get($vd_url);
$file = file_put_contents("lagu.mp4",$down);

echo$tt;
echo"\n";
echo$down;
echo"\n";
*/

//"video_url": "
//$json = json_decode($url);

//$title = $json->data->src[0];
//$tt = $title->src[0];
//var_dump($title);



?>