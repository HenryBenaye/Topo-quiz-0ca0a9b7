<?php
    $lijst = array ("Japan"=>"Tokyo", "Mexico"=> "Mexico City", "USA"=> "Washington D.C.", "India" => "New Dehli", "China" => "Peking");
    
    foreach($lijst as $land => $stad){
        echo("Welke hoofdstad heeft $land?").PHP_EOL;
        $antwoord = readline("");
        if($antwoord == $stad){
            echo("correct!!").PHP_EOL;
            $goed = true;
        }
        else{
            echo("Helaas, $antwoord is niet de hoofdstad van $land.").PHP_EOL;
            echo("Het correcte antwoord is $stad.").PHP_EOL;
        }
        if($goed === true){
            ++$goedeAntwoord;

        }
        else{
            ++$foutAntwoord;
        }
        
        
        
        
    }
    echo("Je hebt $goedeAntwoord van de 10 goed!!");


   
    
    

    
?>