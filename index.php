<!DOCTYPE html>
<html lang="en-US">





<?php

$kw_per_hp = 0.74569987;
$lb_per_kg = 2.20462;

$hp_ton = 0;
$kw_ton = 0;
	
$hp_kg = 0;
$kw_kg = 0;

$kg_hp = 0;
$kg_kw = 0;

if(isset($_POST['create']))
{
	if($_POST['pwr_unit'] == 1){
		$pwr_hp = $_POST['power'];
		$pwr_kw = $_POST['power'] * $kw_per_hp;
	}
	if($_POST['pwr_unit'] == 2){
		$pwr_hp = $_POST['power'] / $kw_per_hp;
		$pwr_kw = $_POST['power'];
	}
	
	if($_POST['mass_unit'] == 1){
		$mass_kg = $_POST['mass'];
		$mass_lb = $_POST['mass'] * $lb_per_kg;
	}
	if($_POST['mass_unit'] == 2){
		$mass_kg = $_POST['mass'] / $lb_per_kg;
		$mass_lb = $_POST['mass'];
	}

	$hp_ton = $pwr_hp / ($mass_kg / 1000);
	$kw_ton = $pwr_kw / ($mass_kg / 1000);
	
	$hp_kg = $pwr_hp / $mass_kg;
	$kw_kg = $pwr_kw / $mass_kg;

	$kg_hp = $mass_kg / $pwr_hp;
	$kg_kw = $mass_kg / $pwr_kw;	

	$lb_jp = $mass_lb / $pwr_hp;	
	
	echo $_POST['mass_unit'];
	echo $_POST['pwr_unit'];

}
?>


<div align="center">
	Power to Weight Ratio Calculator
	<form method="post" action="<?php $_PHP_SELF ?>">
	
	<table id="form_table">
		<tr>
			<tr><td><?=$hp_ton?></td> <td>hp/ton</td></tr>
			<tr><td><?=$kw_ton?></td> <td>kW/ton</td></tr>
			<tr><td><?=$hp_kg?></td> <td>hp/kg</td></tr>
			<tr><td><?=$kw_kg?></td> <td>kW/kg</td></tr>
			<tr><td><?=$kg_hp?></td> <td>kg/hp</td></tr>
			<tr><td><?=$kg_kw?></td> <td>kg/kW</td></tr>
			<tr><td><?=$lb_hp?></td> <td>lb/hp</td></tr>

			<td>
				<tr>
					<td>Power</td>
				</tr>
				<tr>
					<td>
						<input name="power" type="number" id="power" size="8" maxlength="12" min="0" required>
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
						<input name="mass" type="number" id="mass" size="8" maxlength="12" min="0" required>
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
		</tr>
	</table>
	
	</form>
</div>