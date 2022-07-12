<?php


echo"<h2>Home.php</h2>";
echo"<h2>Home ".$data[0]."</h2>";

if(isset($data)){
    $i=0;
 for( $i=0;$i<=2;$i++){
 
    echo"myname is".$data[$i]."<br>";
 }


}