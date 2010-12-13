<?php

/**
 * Metar class - retreives and formats a Metar for use
 */
class Metar{
    
	private $metar;
    
	function get($station){
		$hostAddress = "weather.noaa.gov";
		$filePath = "/pub/data/observations/metar/stations/" . strtoupper($station) . ".TXT";
		$socket = 80;
		$hostNameHeader = "";
		$connectionTimeOut = 5;
		$dataReadTimeOut = 5;
		
		
		$fp = @fsockopen($hostAddress,$socket,$errNo,$errString,$connectionTimeOut);
        
        $str = $fp ? fgets($fp) : "Station not found";
        
        return $str;
        
	}
	
}

$jerez = new Metar;

echo $jerez->get("lejr");


?>