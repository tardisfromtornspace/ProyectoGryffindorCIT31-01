<?php

   $con = mysqli_connect('localhost', 'cliente', '<2Uy4}>sed:`2(@Y', 'Counter_database');


$x = $_POST['x'];

   $sql = "UPDATE numero SET valor = valor + 1 where id = 0";
   $con->query($sql);
   $sql2 = "SELECT valor FROM numero WHERE id = 0";
   $result = $con->query($sql2);
   $valor = "try again";

   if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$valor = $row['valor'];
}

echo $valor;
?>