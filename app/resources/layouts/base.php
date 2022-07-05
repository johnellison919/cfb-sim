<?php
	/** @var string $htmlHead Head contents from the view file */
	/** @var string $htmlBody Body contents from the view file */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/style/main.css" rel="stylesheet">
		<script src="/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
		<?= $htmlHead ?>
	</head>
	<body>
		<?= $htmlBody ?>
	</body>
</html>
