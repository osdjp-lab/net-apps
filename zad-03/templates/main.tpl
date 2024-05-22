<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{$page_title|default:"Tytuł domyślny"}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{$app_url}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$app_url}/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>{$page_title|default:"Tytuł domyślny"}</h1>
						<p>{$page_description|default:'Opis domyślny'}</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">{$page_title|default:"Tytuł domyślny"}</a>
					</header>

				<!-- Main -->
                    <div id="main">
                        {block name=content} Domyślna treść zawartości .... {/block}
                    </div>

				<!-- Copyright -->
					<div id="copyright">
                        <ul><li>&copy; {$author}</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
            <script src="{$app_url}/assets/js/jquery.min.js"></script>
			<script src="{$app_url}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{$app_url}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{$app_url}/assets/js/browser.min.js"></script>
			<script src="{$app_url}/assets/js/breakpoints.min.js"></script>
			<script src="{$app_url}/assets/js/util.js"></script>
			<script src="{$app_url}/assets/js/main.js"></script>

	</body>
</html>
