<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

        $myLastname = "cabiati";
        $myAge = 22;
        $gender = "Mr";

        echo "Dans un an j'aurais ".($myAge+1);

        echo "<br>";

        if ($myAge === 18){
            echo "tout juste majeur";
        }elseif($myAge > 18){
            echo "Majeur";
        }else{
            echo "Mineur";
        }

        echo "<br>";

        switch($gender){
            case "Mr":
                echo "Monsieur";
                break;
            case "Mme":
                echo "Madame";
                break;
            default:
                echo "Autre";
                break;
        }

        $majeur = true;

        echo "<br>";

        if($majeur){
            echo "Vous êtes majeur";
        }else{
            echo "Vous êtes mineur";
        }

        echo "<br>";
        
        echo "Vous êtes ".( ($majeur)?"majeur":"mineur" );

        echo "<br>";

        do{
            echo "test <br>";
        }while($myAge<18);

        $array = ["Pierre", "Paul", "Jack"];

        foreach($array as $key=>$value){
            echo $key."<br>";
            echo $value."<br>";
        }

        $school = [
            [
                ["Sylvain", "Cabiati"],
                ["Sylvain", "Cabiati"]
            ]
        ];

        $student = ["firstname"=>"marc", "lastname"=>"pierre", 16, 14];

        echo $student["firstname"]." ".$student["lastname"]. " a une moyenne de 15";
        
        echo "<br>";

        $word = "Test";

        showWord($word);

        echo $word;

        function showWord(&$word){
            $word = "Test3";
            echo $word;
        }

        $array = ["Pierre", "Paul", "Jack"];

        sort($array);

        echo "<pre>";
        print_r($array);
        echo "</pre>";


    ?>

</body>
</html>