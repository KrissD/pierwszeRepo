<?php

if(isset($_GET['liczba1']) && isset($_GET['liczba2']) && 
   isset($_GET['dzialanie'])){
	
	$liczba1 = $_GET['liczba1'];
	$liczba2 = $_GET['liczba2'];
	$dzialanie = $_GET['dzialanie'];
	
	if(is_numeric($liczba1) && is_numeric($liczba2)){
		
		if($dzialanie == '+'){
			$wynik = $liczba1 + $liczba2;
		}else if($dzialanie == '-'){
			$wynik = $liczba1 - $liczba2;
		}
		else if($dzialanie == '*'){
			$wynik = $liczba1 * $liczba2;
		}
		else if($dzialanie == '/'){
			if($liczba2 != 0){
				$wynik = $liczba1 / $liczba2;
			} else {
				die("Nie dziel przez 0!");
			}
		} else {
			die("Nie znam takiego dzialania!");
		}
		
		echo $liczba1;
		echo $dzialanie;
		echo $liczba2;
		echo " = ";
		echo $wynik;
		
	} else {
		echo "Podaj dwie wartosci liczbowe!";
	}
	
} else {
	echo "Zle wywolanie!";
}