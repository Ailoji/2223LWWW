<?php

function gravar_log()
{
    # code...
// Obtiene la dirección IP del visitante
$ip_address = $_SERVER['REMOTE_ADDR'];

// Obtiene el sistema operativo del visitante
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$os_platform = "Unknown OS Platform";
$os_array = array(
  '/windows nt 10/i'      =>  'Windows 10',
  '/windows nt 6.3/i'     =>  'Windows 8.1',
  '/windows nt 6.2/i'     =>  'Windows 8',
  '/windows nt 6.1/i'     =>  'Windows 7',
  '/windows nt 6.0/i'     =>  'Windows Vista',
  '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
  '/windows nt 5.1/i'     =>  'Windows XP',
  '/windows xp/i'         =>  'Windows XP',
  '/windows nt 5.0/i'     =>  'Windows 2000',
  '/windows me/i'         =>  'Windows ME',
  '/win98/i'              =>  'Windows 98',
  '/win95/i'              =>  'Windows 95',
  '/win16/i'              =>  'Windows 3.11',
  '/macintosh|mac os x/i' =>  'Mac OS X',
  '/mac_powerpc/i'        =>  'Mac OS 9',
  '/linux/i'              =>  'Linux',
  '/ubuntu/i'             =>  'Ubuntu',
  '/iphone/i'             =>  'iPhone',
  '/ipod/i'               =>  'iPod',
  '/ipad/i'               =>  'iPad',
  '/android/i'            =>  'Android',
  '/blackberry/i'         =>  'BlackBerry',
  '/webos/i'              =>  'Mobile'
);
foreach ($os_array as $regex => $value) {
  if (preg_match($regex, $user_agent)) {
    $os_platform = $value;
  }
}

// Obtiene el navegador del visitante
$browser = "Unknown Browser";
$browser_array = array(
  '/msie/i'      => 'Internet Explorer',
  '/firefox/i'   => 'Firefox',
  '/safari/i'    => 'Safari',
  '/chrome/i'    => 'Chrome',
  '/edge/i'      => 'Edge',
  '/opera/i'     => 'Opera',
  '/netscape/i'  => 'Netscape',
  '/maxthon/i'   => 'Maxthon',
  '/konqueror/i' => 'Konqueror',
  '/mobile/i'    => 'Handheld Browser'
);
foreach ($browser_array as $regex => $value) {
  if (preg_match($regex, $user_agent)) {
    $browser = $value;
  }
}

// Obtiene el país del visitante
$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip_address));    
$country = $ip_data->geoplugin_countryName;
$lat = $ip_data->geoplugin_latitude;
$lon = $ip_data->geoplugin_longitude;

// Abre el archivo de registro
$log_file = fopen("access.log", "a");

// Agrega una línea con la información del registro
$log_line = date("Y-m-d H:i:s") . " | " . $ip_address . " | " . $os_platform . " | " . $browser . " | " . $country . " | " . $lat . " | " . $lon . "\n";
fwrite($log_file, $log_line);

// Cierra el archivo de registro
fclose($log_file);

// Agrega una fila a la tabla HTML con la información del registro
echo $log_line;


}
