<?php

class metar{
	private $metar;
	function getMetar($station){
		$hostAddress = "weather.noaa.gov"
		$filePath = "/pub/data/observations/metar/stations/".strtoupper($station).".TXT";
		$socket = 80;
		$hostNameHeader = "";
		$connectionTimeOut = 5;
		$dataReadTimeOut = 5;
		
		$rawData = "";
		
		$fp = @fsockopen($hostAddress,$socket,$errNo,$errString,$connectionTimeOut);
	}
	
}

?>