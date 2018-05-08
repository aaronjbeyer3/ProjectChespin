<?php # CONNECT TO MySQL DATABASE.

if (!($dbc = @mysqli_connect ( 'localhost', 'chip', 'password', 'chespin' )))
         die("cannot connect to db");
else {
    //print ("<p>you are connected to DB");
}

?>
