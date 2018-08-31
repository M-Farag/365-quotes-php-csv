<?php
/*
Main Class 

please note :
1- the CSV file must be comma separated (,) and each line must End with (;).
2- Feel free to edit the all.CSV file and add all of your 366 New Quotes.
3- don't change any thing specially the CSV file Location.

---------------------------------------------------------------------------
RISS.WORK all copy rights reserved 2018

please Don't Remove

Github/RissWork
Email : info@riss.work

*/

class Quote{
	
	//properties
		private $_quote,$_allQuotes;
		private static $_instance = null;
	
	//Constructor
		private function __construct(){
			//Day Count
			$dayCount = date(z);
			
			if($this->readCsvAndGetQuote($dayCount)){
				return $this->getQuote();
			}else{
				echo 'Error Cannot open the .CSV File';
			}
		}
	
	
	
	
	
	//Methods
	
	//get Instance
	public function getInstance(){
			if(!isset(self::$_instance)){
				self::$_instance = new Quote();
			}
			return self::$_instance;
		}//end of get Instance
	
	
	
	
	//get daily Quote	
	public function getQuote(){
			return $this->_quote;
		}//end of get Quote
	
	
	
	
	//Read CSV
	private function readCsvAndGetQuote($dayCount = 1 ){
		
		if(($handel = fopen("csv/all.csv" , "r")) !== false){
			$this->_allQuotes = fgetcsv($handel,1000000,';');
			$this->_quote = explode(',',$this->_allQuotes[$dayCount]);
			return true;
		}
		return false;
		
	}//end of read CSV
	
	
	
}//end of Class