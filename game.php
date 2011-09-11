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
		
		<title>Web TCG Tabletop</title> <!-- dsixl later uses title for latest log entry -->
		<link href="<?php echo $style_uri; ?>" rel="stylesheet" />
	</head>
	<body>
		<div class="player_metadata" id="opponent_metadata">
			<span class="player_label" id="opponent_label">Loading opponent...</span>
			<span class="zone_summary" id="opponent_hand_summary"></span>
			<span class="zone_summary" id="opponent_deck_summary"></span>
			<span class="zone_summary" id="opponent_discard_summary"></span>
			<!-- Add other tags here, like hit points -->
		</div>
		
		<div class="territory" id="opponent_territory">
			<img id="opponent_territory_menu" class="context_menu" src="<?php echo $context_menu_image_uri; ?>" />
		</div>
		
		<div class="menu" id="menu">
			<!-- 
			<span class="phase_button">start</span>
			<span class="phase_button">maintenance</span>
			<span class="phase_button">draw</span>
			<span class="phase_button">turn end</span>
			-->
		</div>
		
		<div class="territory" id="my_territory">
			<img id="my_territory_menu" class="context_menu" src="<?php echo $context_menu_image_uri; ?>" />
		</div>

		<hr />

		<div class="hand" id="my_hand">
			<img id="my_hand_menu" class="context_menu" src="<?php echo $context_menu_image_uri; ?>" />
		</div>
		
		<div class="player_metadata" id="my_metadata">
			<span class="player_label" id="my_label">Loading...</span>
			<span class="zone_summary" id="my_hand_summary"></span>
			<span class="zone_summary" id="my_deck_summary"></span>
			<span class="zone_summary" id="my_discard_summary"></span>
			<!-- Add other tags here, like hit points -->
		</div>
		
		<div class="log" id="log">
		  <textarea class="log" id="log_textarea">Loading log...</textarea> <br />
		  <img id="chat_menu" class="context_menu" src="<?php echo $context_menu_image_uri; ?>" 
		   /><input class="chat_message" id="chat_message" type="text" 
		   /><span id="send_chat" class="send_button">send</span>
		</div>


		<?php /* TODO: display_attribution_footer(); */ ?>

	</body>
</html>
