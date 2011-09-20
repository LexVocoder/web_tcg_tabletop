<?php 
	require_once('authentication.php'); 
	require_once('authorization.php');
	require_once('web_tcg_tabletop_footer.php');

	$userID = authentication\authenticateHTTP($_COOKIE, $_GET, $_POST, $_SERVER, $_SESSION);

	if (!$userID || !authorization\authorized()) {
		// auth functions have already responded.
		exit(0);
	}

?>

<html>
	<!-- 
	Copyright (C) 2011 Alex Hankins.
	Licensed under the Open Software License version 3.0
	-->

	<head>
		<?php
			$style = "dsixl";

			$context_menu_image_uri = "menu_" . $style . ".png";
			$style_uri = $style . ".css"; 
		?>
		
		<title>Start New Game - Web TCG Tabletop</title>
		<link href="<?php echo $style_uri; ?>" rel="stylesheet" />
		
		<script type="text/javascript" src="jquery-1.6.4.js"></script>
		<script type="text/javascript" src="web_tcg_tabletop.js"></script>
		<script type="text/javascript" src="new_game.js"></script>
	</head>
	<body>
		<h1>Welcome to Web TCG Tabletop</h1>
		<p>Please select the type of game you would like to play.</p>
		<form method="GET" action="setup_game.php">
			<select class="game_type_selector" id="game_type_selector" 
			 name="game_type_selector">
			 
				<option selected="selected" value="default">Select one</option>
				<option value="solitaire">Solitaire</option>
				<option value="find_an_opponent">Find an opponent</option>

			</select><br />
			
			<div class="not_displayed" id="opponents_panel">
				<br />
				<!-- colored list of user IDs, fetched via Ajax -->
				<!-- an opponent's color changes if shi selects current
					user as opponent -->
				<!-- APE would be nice here, but we'll make do with a 
					server-driven event queue of some kind. -->
				<!-- Use dummy values for now -->
				<table class="opponents_table">
					<tr>
						<td>
							<div class="non_challenger"><input type="radio" name="challengee" value="AmericanMaid">AmericanMaid</input></div>
							<div class="non_challenger"><input type="radio" name="challengee" value="Arthur">Arthur</input></div>
							<div class="challenger"><input type="radio" name="challengee" value="Thwakazog">Thwakazog (challenging you!)</input></div>
							<div class="challenger"><input type="radio" name="challengee" value="TheTerror">TheTerror (challenging you!)</input></div>
							<div class="non_challenger"><input type="radio" name="challengee" value="TheTick">TheTick</input></div>
						</td>
					</tr>
				</table>
				<br />
			</div>
			
			<input id="play_button" type="button" value="Play now >" />
			<input id="challenge_button" class="not_displayed" type="button" value="Challenge" />
		</form>
		
		
		<?php web_tcg_tabletop\display_attribution_footer(); ?>

	</body>
</html>
