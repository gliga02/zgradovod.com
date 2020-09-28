<?php 

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$mailFrom = $_POST['mail'];
		$paket = $_POST['subject'];


		$mailTo = "zgradovod@gmail.com";
		$txt = "
			<html>
			<head>
			<title>Nova poruka</title>
			<style>	
				* {
					font-size:20px;
					color:#333;
				}

				td {
					padding:20px;
				}
			</style>
			</head>
			<body>
			<p>Nova poruka</p>
			<table>
			<tr>
			<th>Ime</th>
			<th>Mejl</th>
			<th>Paket</th>
			</tr>
			<tr>
			<td>" . $name . "</td>
			<td>" . $mailFrom . "</td>
			<td>" . $paket . "</td>
			</tr>
			</table>
			</body>
			</html>

		";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		mail($mailTo, $paket, $txt, $headers);
		header("Location: /");
	}

 ?>