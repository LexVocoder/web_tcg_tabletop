/*
Copyright (C) 2011 Alex Hankins.
Licensed under the Open Software License version 3.0
*/


//web_tcg_tabletop__new_game = new Object();


$(document).ready(function(){

	var game_type_selector = $("#game_type_selector");
	game_type_selector.attr('value', 'default');
	var play_button = $("#play_button");

	play_button.attr('disabled', true);
	$("#opponents_panel").hide();

	//web_tcg_tabletop__new_game.game_type_selector_onchange = function() {
	game_type_selector.change(function () {
		//var optValue = game_type_selector.options[game_type_selector.selectedIndex].value;
	
		var selectedValue = game_type_selector.attr('value');
		var challenge_button=$("#challenge_button");
		
		if (selectedValue == "find_an_opponent") {
			play_button.hide();
			$("#opponents_panel").show('normal');
			challenge_button.show();
			challenge_button.attr('disabled', false);

		}
		else if (selectedValue == "solitaire") {
			// solitaire
			challenge_button.hide();
			challenge_button.attr('disabled', true);
			$("#opponents_panel").hide('normal');
			play_button.show();
			play_button.attr('disabled', false);
		}
		else {
			challenge_button.hide();
			challenge_button.attr('disabled', true);
			$("#opponents_panel").hide('normal');
			play_button.show();
			play_button.attr('disabled', true);
		}
	});
	
	
	//web_tcg_tabletop__new_game.play_button_onclick = function() {
	play_button.click(function () {
		
		if (!play_button.attr('disabled')) {
			var form = this.form;
			form.submit();
		}
	});

});
