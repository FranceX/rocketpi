<div align="center">
	<h1>Rocket Launch Control</h1>
	<table border="1px" rules=none>
		<tr>
			<?php
			
				$status = 0;
				//$armed = 0;
				//check motor status if possible;
				if (1){
					$status = 1;
				}

				//Arm
				if (isset($_POST["isArmed"]) && ($_POST["isArmed"]=="Arm")){
			?>
			<td>
				<div align="center">
					<form name="arm" action="arm_device.php" method="post">
						<input type="submit" value="Disarm" name="isArmed">
					</form>
					<form name="arm" action="launch.php">
						<input type="submit" value="Start Launch Sequence" name="launch">
					</form>
				</div>
			</td>
			<td>
				<img src="imgs/launchArmed.jpg"/>
			</td>
			<?php
				}
				else{
			?>
			<td>
				<div align="center">
					<form name="arm" action="arm_device.php" method="post">
						<input type="submit" value="Arm" name="isArmed">
					</form>
					<form name="arm" action="launch.php">
						<input type="submit" value="Start Launch Sequence" name="launch" disabled>
					</form>
				</div>
			</td>
			<td>
				<img src="imgs/launchDisarmed.jpg"/>
			</td>
			<?php
				}
			?>

</div>