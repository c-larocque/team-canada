<?php

	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function submitMessage($name, $email, $subject, $message, $direct) {
		$to = "BoardofDirectors@TeamCanada1972.ca";
		$subj = "Message from customer submitted via TeamCanada1972.ca";
		$extra = "Reply-To: ".$email;
		$msg = "Name: ".$name."\n\nEmail: ".$email."\n\nSubject: ".$subject."\n\nComments: ".$message;

		//Cannot test this locally
		//mail($to,$subj,$msg,$extra);

		$direct = $direct."?name={$name}";
		redirect_to($direct);
	}

?>
