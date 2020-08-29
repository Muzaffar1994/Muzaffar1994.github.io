<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['input_2454']) && strlen($_POST['input_2454']) == 0 || empty($_POST['input_1900']) && strlen($_POST['input_1900']) == 0 || empty($_POST['input_249']) && strlen($_POST['input_249']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$name = $_POST['name'];
	$name = $_POST['name'];
	$name = $_POST['name'];
	$select_2941 = $_POST['select_2941'];
	$input_1029 = $_POST['input_1029'];
	$input_1262 = $_POST['input_1262'];
	$input_1029 = $_POST['input_1029'];
	$input_1262 = $_POST['input_1262'];
	$input_2898 = $_POST['input_2898'];
	$input_2454 = $_POST['input_2454'];
	$input_1900 = $_POST['input_1900'];
	$input_249 = $_POST['input_249'];
	$input_1029 = $_POST['input_1029'];
	$input_1262 = $_POST['input_1262'];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nName: $name \nName: $name \nName: $name \nSelect_2941: $select_2941 \nInput_1029: $input_1029 \nInput_1262: $input_1262 \nInput_1029: $input_1029 \nInput_1262: $input_1262 \nInput_2898: $input_2898 \nInput_2454: $input_2454 \nInput_1900: $input_1900 \nInput_249: $input_249 \nInput_1029: $input_1029 \nInput_1262: $input_1262 \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $name";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>