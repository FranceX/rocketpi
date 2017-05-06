<div align="Center">
	<img src="imgs/rocketTakeOff.jpeg"/>
	<h1>Launching!</h1>
	<?php
	
		error_reporting(E_ALL);
		ini_set('display_errors', 1);

		//Launch Code
		echo "<h4>Shell Log</h4>";
		echo "<div style='border:solid 1px; background-color: lightgray; box-shadow: 1px 1px 5px #888888; width: 50%; height: 200px; overflow-y: scroll; overflow-x: hidden;'>";
        echo "<br/>";		
		$out = array();
        exec("sudo /home/pi/rocket_launch.sh", $out);
        foreach($out as $line) {
            echo $line;
            echo "<br/>";
        }
        echo "<br/>";
        echo "</div>";
        echo "<br/>";
        
	?>
	<form action="arm_device.php">
		<input type="submit" value="Go back to launch control room.">
	</form>
</div>
