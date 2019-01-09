<?php 
function greetings($name,$dayNumber) {
	switch ($dayNumber) {
		case '1':
		case '2':
		case '3':
		case '4':
		case '5':
			echo "Привет, $name! <br> Хорошего рабочего дня!";
			break;
		case '6':
		case '7':
			echo "Привет, $name! <br> Приятных выходных!";
			break;
		
		default:
			echo "Привет, $name!";
			break;
	}
	
}
greetings("Ксения",3);
 ?>
