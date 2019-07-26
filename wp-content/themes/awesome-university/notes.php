<?php 

function samplefunction($name, $color){
	echo "this is $name , color $color";
}

samplefunction('Edcel','blue');
samplefunction('Estadola', 'green');
	

?>

<h1><?php bloginfo( 'name' ); ?></h1>
<p><?php bloginfo( 'description' );  ?></p>

<?php

	$names = array('Edcel','Estadola','Pogi');

	$counter = 1;

	while($counter < count($names)){
		echo "<li>$names[$counter]</li>";

		$counter++;
	}

 ?>
 <p>This my name is <?php  echo $names[0]; ?></p>