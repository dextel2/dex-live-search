<?php
Class Connection{
var $databaseHost;
var $databaseUsername;
var $databasePassword;
var $databaseName;

var $query,$result,$conn,$rows;


function setVariables($databaseHost,$databaseUsername,$databasePassword,$databaseName){
    $this->databaseHost=$databaseHost;
    $this->databaseUsername=$databaseUsername;
    $this->databasePassword=$databasePassword;
    $this->databaseName=$databaseName;
}

function playingWithDatabase(){
	$this->conn = new PDO("mysql:host=$this->databaseHost;dbname=$this->databaseName;", $this->databaseUsername, $this->databasePassword);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Connect
    try{
    	$this->result = $this->conn->prepare("SELECT * FROM live");
    	$this->result->execute();
    	$this->rows = $this->result->fetch(PDO::FETCH_NUM);
    }
    catch (Exception $e){
    	return "Failure";
    }
    return $this->rows;
}


}
?>