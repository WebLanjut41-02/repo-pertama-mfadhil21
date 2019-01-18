<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="tinggi"><br>
		<input type="text" name="berat"><br>
		<input type="radio" name="jk" value="laki-laki" checked>laki-laki<br>
		<input type="radio" name="jk" value="perempuan">perempuan<br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>

<?php  
 $tinggi=0;
 $berat=0;
 $bbi;
	if (isset($_POST['submit'])){
		$tinggi =$_POST['tinggi']/100;
		$berat  =$_POST['berat'];

		if ($this->jk==laki-laki){
			function bmi ($berat, $tinggi){
			$bmi = $berat /($tinggi*$tinggi);
			return $bmi;
			}
				if ($bmi <=18){
					$hasil="kurus";
				} else if ($bmi > 18 and $bmi <=25){
					$hasil="normal";
				} else if ($bmi > 25 and $bmi <=27){
					$hasil="kegemukan";
				} else if ($bmi > 27){
					$hasil="obesitas";
				}	
			}
		else if ($this->jk==perempuan){
			function bmi ($berat, $tinggi){
			$bmi = $berat /($tinggi*$tinggi);
			return $bmi;
			}
				if ($bmi <=17){
					$hasil="kurus";
				} else if ($bmi > 17 and $bmi <=23){
					$hasil="normal";
				} else if ($bmi > 23 and $bmi <=27){
					$hasil="kegemukan";
				} else if ($bmi > 27){
					$hasil="obesitas";
				}	
			}
		}
		
	echo "hasil anda ".bmi($berat, $tinggi). " dan anda termasuk :";
	echo "$hasil";
?>