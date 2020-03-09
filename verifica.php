<?php


$base = $_GET['txtBase'];
$expoente=$_GET['txtExpoente'];
$resultado=1;

if($expoente<0){
    for($i=-1;$i>=$expoente;$i--){
        $resultado=$resultado*$base;
    
    }
    echo("O resultado é: 1/".$resultado);
}

else if($expoente==0){
    echo("O resultado é: 1");
}

else{


for($i=1;$i<=$expoente;$i++){
    $resultado=$resultado*$base;

}
echo("O resultado é: ".$resultado);
}

?>