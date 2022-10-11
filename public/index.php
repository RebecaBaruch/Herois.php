<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">    
    <title>Herois</title>
</head>
<body>
    
    <?php

        $universo = "Marvel";
        $heroi = "Homem Aranha";
        $repeat = 5;
        $i = 0;

        if($universo=="Marvel"){
            for($i; $i<=$repeat; $i++){
                switch($heroi){

                    case "Homem Aranha":
                        echo "<img src='img/homem-aranha.jpeg' width='700px'>"."<br>";
                        break;
                    
                    case "Homem de Ferro":
                        echo "<img src='img/homem-de-ferro.jpg' width='700px'>"."<br>";
                        break;

                    case "Hulk":
                        echo "<img src='img/hulk.webp' width='700px'>"."<br>";
                        break;
                    
                    case "Thor":
                        echo "<img src='img/thor.webp' width='700px'>"."<br>";
                        break;
                    
                    case "Viúva Negra":
                        echo "<img src='img/viuva-negra.webp' width='700px'>"."<br>";
                        break;

                }
            }
        }else if($universo=="Dc"){
            for($i; $i<=$repeat; $i++){
                switch($heroi){

                    case "Batman":
                        echo "<img src='img/batman.jpg' width='700px'>"."<br>";
                        break;
                        
                    case "Superman":
                        echo "<img src='img/superman.jpg' width='700px'>"."<br>";
                        break;
    
                    case "Robin":
                        echo "<img src='img/robin.jpg' width='700px'>"."<br>";
                        break;
                        
                    case "Flash":
                        echo "<img src='img/flash.png' width='700px'>"."<br>";
                        break;
                        
                    case "Mulher Maravilha":
                        echo "<img src='img/mulher-maravilha.webp' width='700px'>"."<br>";
                        break;
    
                }
            }
            echo "escolhe um universo decente!!!!";
        }

    ?>
</body>
</html>