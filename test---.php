<?php 
require('dbconnect.php');
require('dbshowuser.php');

    while($user = mysqli_fetch_array($result_user)) {

        $birthday = $user["user_birthday"];
		// echo $user_birthday;
		// $birthday = new DateTime($user_birthday);
		// $to   = new DateTime('today');
		// echo $birthday->diff($to)->y;

		// echo date_diff(date_create('1970-02-01'), date_create('today'))->y;


		function age($birthday) {
	        $birthday = strtotime($birthday);
	        $now = time();
	        $age = 0;
	        while ($now >= ($birthday = strtotime("+1 YEAR", $birthday))) {
	            $age++;
        }
        return $age;
    }

  }


// $from = new DateTime('1992-02-01');
// $to   = new DateTime('today');
// echo $from->diff($to)->y;


?>