<?php

class YahooStocks
{

	private $yahooURL = "http://finance.yahoo.com/d/quotes.csv?s=";
	
	public function getStock($tickers)
	{
		//$url = sprintf($this->yahooURL . "%s&f=sb2yqr1p2p1", $tickers);	//sl1c1
		$url = sprintf($this->yahooURL . "%s&f=nl1p2", $tickers);	//sl1c1
		return readfile($url);
	}

}

$yahooStocks = new YahooStocks();
print $yahooStocks->getStock($_GET['tickers']);

?>