<?php



session_start();

if(isset($_SESSION['username'])){
echo "Welcome ". $_SESSION['username'];

echo "<br> your selected category is " . $_SESSION['favcat'];
echo "<br>";
}
else{
    echo "<br>Place Login again";
}

















?>