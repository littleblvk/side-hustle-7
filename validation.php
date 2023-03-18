<?php 
$age = 18;
if($age <= 17){
    echo"underage";
}
elseif($age >= 18){
    echo "adult"; 
    echo "<br>";
}else{
    echo"adult"; 
    
}

$pvc = "yes.";
if($pvc = "yes"){
    echo"true";
    echo"<br>";
}
elseif($pvc = "no"){
    echo "false";
}else{
    echo"true";
}

$voterward = 020  ;
if($voterward = "020"){
    echo"true";
    echo"<br>";
}
elseif($voterward != "020"){
    echo "false";
}else{
    echo"true" ;
}
if($age >= 18 && $pvc =="yes" && $voterward == 020){
    echo" voter is eligible to vote ";
}
elseif( $age < 18 && $pvc== "false" && $voterward != 020){
    echo" voter is not eligible";
}else{ echo "voter is not eligible";
}
?>