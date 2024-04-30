<?php

    $link=mysqli_connect("localhost","root","","") or die("Error");

    mysqli_select_db($link,"TiendaJDTM");
    
    $result = mysqli_query($link,"SELECT * FROM Clientes");

    while( $row = mysqli_fetch_row($result))
    {
        echo "$row[0] ";
        echo "$row[1] ";
        echo "$row[2] ";//cada row va a mostrar atributos
        echo "$row[3] ";
        echo "$row[4] ";
        echo "<Hr>";
    }

    mysqli_close($link);

?>