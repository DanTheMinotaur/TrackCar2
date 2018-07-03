<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title><?=$page_title?> - <?=$page_description?></title>
    <meta name="description" content="<?=$page_description?>">
    <meta name="author" content="Daniel Devine">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
</head>

<?php if(isset($background_colour)): ?>
<body class="<?=$background_colour?>">
<?php else: ?>
<body>
<?php endif; ?>
<main>
	<nav class="green darken-1">
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo right">Track Car V2</a>
			<ul class="left hide-on-med-and-down">
				<li><a href="sass.html">API</a></li>
			</ul>
		</div>
	</nav>
