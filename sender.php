<?

function message_to_telegram($text, $file = null)
{
	$arr_chat = "381762556"; 
	if($arr_chat) {


		$arr_chat = explode(",",$arr_chat);
	    $ch = curl_init();
		
		for ($i = 0; $i<count($arr_chat); $i++) {
			$sendingArray = array(
				'chat_id' => trim($arr_chat[$i]),
				'text' => $text
			);

			$sendStr = 'https://api.telegram.org/bot' . TG_TOKEN . '/sendMessage';
			
			if (!empty($file))
			{
				$sendStr = 'https://api.telegram.org/bot' . TG_TOKEN . '/sendPhoto';
				$sendingArray["photo"] = curl_file_create($file);
				$sendingArray["caption"] = $text;
			
			}

			curl_setopt_array(
		        $ch,
		        array(
		            CURLOPT_URL => $sendStr,
		            CURLOPT_POST => TRUE,
		            CURLOPT_RETURNTRANSFER => TRUE,
		            CURLOPT_TIMEOUT => 10,
		            CURLOPT_POSTFIELDS => $sendingArray,
		        )
		    );
		    $output = curl_exec($ch);
		}
	}
	
	return $sendingArray;
}

// Универсальный отправщик
add_action('wp_ajax_newsendr', 'newsendr');
add_action('wp_ajax_nopriv_newsendr', 'newsendr');

function newsendr()
{
	if (empty($_REQUEST['nonce'])) {
		wp_die('0');
	}

	if (check_ajax_referer('NEHERTUTLAZIT', 'nonce', false)) {
       
		$send_adr = carbon_get_theme_option('as_email_send'); 
	
		$subj = "Сообщение с сайта Телевышка";
		$content = "<h2>Новое сообщение с сайта</h2>";
		$content_tg = "Новое сообщение с сайта\n\r";

		for ($i =0; $i < count($_REQUEST["fildname"]); $i++) {
			$content .= $_REQUEST["fildval"][$i].": <strong>".$_REQUEST[$_REQUEST["fildname"][$i]]."</strong><br/>";
			$content_tg .= $_REQUEST["fildval"][$i].": ".$_REQUEST[$_REQUEST["fildname"][$i]]."\n\r";
		}

		

		$headers = array(
			'From: Сайт Телевышка <noreply@ultrakresla.ru>',
			'content-type: text/html',
		);

		$fln = "";
		if (!empty($_FILES['chek'])){
			$fln = get_template_directory().'/download/'.$_FILES['chek']['name'];
			$movrez = move_uploaded_file($_FILES['chek']['tmp_name'], $fln);
		}

		$mar = message_to_telegram($content_tg, $fln);
		
		add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
		if (wp_mail($send_adr, $subj, $content, $headers, $fln))
		{
			wp_die(json_encode($mar));
		} else {
			wp_die("NO ОК", '', 403 );
		}

	} else {
		wp_die('НО-НО-НО!', '', 403);
	}
}

?>