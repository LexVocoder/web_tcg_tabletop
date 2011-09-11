/*
Copyright (C) 2011 Alex Hankins.
Licensed under the Open Software License version 3.0
*/

web_tcg_tabletop__new_game = new Object();

web_tcg_tabletop__new_game.game_type_selector_onchange = function() {
	var game_type_selector = document.getElementById("game_type_selector");
	var optValue = game_type_selector.options[game_type_selector.selectedIndex].value;

	var play_button = document.getElementById("play_button");
	
	if (optValue == "Find an opponent") {
		play_button.disabled = true;
	}
	else {
		play_button.disabled = false;
	}
};

web_tcg_tabletop__new_game.play_button_onclick = function() {
	var button = document.getElementById("play_button");
	
	alert("button is " + button);
	
	if (!button.disabled) {
		button.form.submit();
	}
};
