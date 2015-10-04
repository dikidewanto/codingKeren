<?php

$host = "localhost";
$user = "root";
$pass = "";
$db =  "waswatc1_new";

$link = new mysqli($host, $user, $pass, $db);

if(isset($dbh)){
    print_r("sukses");
}else{
    print_r("blank");
}



/*
try {
    foreach($dbh->query('SELECT * from diki_users') as $row) {
        print_r($row);
    }

    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

*/

$result = $link->query("SELECT * from diki_users");

while($row = $result->fetch_array(MYSQLI_ASSOC)){

 echo $row[0]." ".$row[1]." ".$row['user_pass']." ".$row[3]." ".$row[4];
   echo "<br />";
    
}

$dbh = null;
?>