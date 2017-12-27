<?php
    include 'db.php';
    if(isset($_POST['search'])){
         $ConnectionObject = new Connection();
         $ConnectionObject->setVariables("localhost","root","","livesearch");
         $ConnectionObject->playingWithDatabase();
        while($ConnectionObject->playingWithDatabase()){
            
        }
    }