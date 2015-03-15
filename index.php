<!DOCTYPE html>
<html lang="en-US">





<?php

$kw_per_hp = 0.745699872;
$lb_per_kg = 2.20462;

if(isset($_POST['create']))
{
	if($_POST['pwr_unit'] = 1){
		$pwr_hp = $_POST['power'];
		$pwr_kw = $_POST['power'] * $kw_per_hp;
	}
	if($_POST['pwr_unit'] = 2){
		$pwr_hp = $_POST['power'] / $kw_per_hp;
		$pwr_kw = $_POST['power'];
	}else{
		
	}
	
	if($_POST['mass_unit'] = 1){
		$mass_kg = $_POST['mass'];
		$mass_lb = $_POST['mass'] * $lb_per_kg;
	}
	if($_POST['mass_unit'] = 2){
		$mass_kg = $_POST['mass'] / $lb_per_kg;
		$mass_lb = $_POST['mass'];
	}else{
		
	}

}
?>


<div align="center">
	Power to Weight Ratio Calculator
	<form method="post" action="<?php $_PHP_SELF ?>">
	
	<table id="form_table">
		<tr>
			<td>
				<tr>
					<td>Power</td>
				</tr>
				<tr>
					<td>
						<input name="power" type="number" id="power" size="12" maxlength="12" min="0" required>
					</td>
					<td>
						hp
						<input name="pwr_unit" type="radio" id="pwr_unit" value="1" checked>
						kW
						<input name="pwr_unit" type="radio" id="pwr_unit" value="2">
					</td>
				</tr>
				
				<tr>
					<td>Mass</td>
				</tr>
				<tr>
					<td>
						<input name="mass" type="number" id="mass" size="12" maxlength="12" min="0" required>
					</td>
					<td>
						kg
						<input name="mass_unit" type="radio" id="mass_unit" value="1" checked>
						lb
						<input name="mass_unit" type="radio" id="mass_unit" value="2">
					</td>
				</tr>
				<tr>
					<td>
						<input name="create" type="submit" id="create" value="Calculate">
					</td>
				</tr>
			</td>
			
			<td>
				
			</td>
		</tr>
	</table>
	
	</form>
</div>