<?php
	// Check if submitted contact form
	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$mailFrom = $_POST['mail'];
		$message = $_POST['message'];

		// For parameters of mail();
		$mailTo = "admin@mattnewyen.com";
		$headers .= "From: ".$name." ".$mailFrom."\r\n";
		$headers .= "Reply-To: ".$name." ".$mailFrom."\r\n";
		$headers .= "Return-Path: ".$mailFrom."\r\n";
		$headers .= "MIME-Version: 1.0"."\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
		$headers .= "X-Priority: 3"."\r\n";
		$headers .= "X-Mailer: PHP".phpversion()."\r\n";
		$text = "<p>".$message."</p>"; 

		mail($mailTo, $subject, $text, $headers);
		header("Location: index.php?mailsent");
	}

?>