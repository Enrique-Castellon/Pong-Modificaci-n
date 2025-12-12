<?php 

    $jugadores = $_GET['players'];
    $control = $_GET['controller'];
    $velocidad = $_GET['speed'];
    $playerOne = $_GET['name1'];
    $playerTwo = $_GET['name2'];

    if($jugadores==1){
        header("Location: pong.html");
        
    }else{
        header("Location: pong2.html");
        
    }
exit();

?>