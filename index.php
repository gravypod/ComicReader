<?php
	define("STORY_DIR", "stories");

	function get_images($story)
	{
		$images = array();
		foreach (array("jpg", "png", "webp") as $extension)
		{
			$images = array_merge($images, glob("$story/*.$extension"));
		}
		return $images;
	}

	if (isset($_REQUEST["story"]))
	{
		$story = $_REQUEST["story"];
		$path = STORY_DIR . "/" . basename($story);

		$pages = array();

		if (file_exists($path))
			$pages = get_images($path);

		die(json_encode($pages));
	}

	if (isset($_REQUEST["list"]))
	{
		die(json_encode(array_map(basename, glob(STORY_DIR . "/*", GLOB_ONLYDIR))));
	}

?>

<html>
	<head>
		<title>Comic Book Reader</title>
	</head>
	<body>
		<div id="image-area" class="is-hidden fill-screen">
			<img class="make-it-fit" id="display"></img>
		</div>
		<div id="comic-modal">
			<div class="modal-content">
				<span id="comic-modal-close" class="button-close"></span>
				<h3>Search Library</h3>
				<span><input type="text" id="comic-modal-search"></span>
				<li id="comic-modal-list"></li>
			</div>
		</div>
	</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="comic.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="theme.css"></link>
</html>
