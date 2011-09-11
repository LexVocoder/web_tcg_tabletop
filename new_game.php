<html>
	<!-- 
	Copyright (C) 2011 Alex Hankins.
	Licensed under the Open Software License version 3.0
	-->

	<head>
		<?php $style = "dsixl"; ?>

		<?php
			$context_menu_image_uri = "menu_" . $style . ".png";
			$style_uri = $style . ".css"; 
		?>
		
		<title>Start New Game - Web TCG Tabletop</title>
		<link href="<?php echo $style_uri; ?>" rel="stylesheet" />
		
		<script type="text/javascript" src="web_tcg_tabletop.js"></script>
		<script type="text/javascript" src="new_game.js"></script>
	</head>
	<body>
		<h1>Welcome to Web TCG Tabletop</h1>
		<p>Please select the type of game you would like to play.</p>
		<form method="GET" action="setup_game.php">
			<select class="game_type_selector" id="game_type_selector" 
			 name="game_type_selector" 
			 onchange='web_tcg_tabletop__new_game.game_type_selector_onchange();'>
				<option selected="selected" value="Solitaire">Solitaire</option>
				<option value="Find an opponent">Find an opponent...</option>
			</select>
			
			<div id="opponents"></div>
			
			<input id="play_button" type="button" value="Play now >" 
			 onclick='web_tcg_tabletop__new_game.play_button_onclick();' />
		</form>
		
		
		<?php /* TODO: display_attribution_footer(); */ ?>

	</body>
</html>
