<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- font google -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700;800;900;1000&display=swap"
		rel="stylesheet" />
	<!-- font awesome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
		integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- my css -->
	<link rel="stylesheet" href="css/style.css" />
	<!-- tailwind -->
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- daisy UI -->
	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.3/dist/full.css" rel="stylesheet" type="text/css" />
	<title>Cours 1</title>
</head>

<body>
	<!-- header -->
	<header class="px-48 py-7 bg-blue-900 flex text-white justify-between">
		<!-- div logo -->
		<div class="mr-80">
			<a href="index.php" class=" uppercase text-5xl font-extrabold">Logo</a>
		</div>
		<!-- end div logo -->
		<!-- navigation -->
<?php include('partials/_nav.php') ?>
		<!-- end navigation -->
	</header>