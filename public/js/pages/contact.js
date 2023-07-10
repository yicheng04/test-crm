$( function() {

var reason_select = $("select[name='reason']");
var comments_label = $("label[for='comments']");

reason_select.on('change', function() {
	var selected_option = $(this).find(":selected");
	var comments_text = "Comments";

	switch(selected_option.index()) {
		case 0: 
		case 1: comments_text = 'Your comments/questions about ' + selected_option.text(); break;
		case 2: comments_text = 'Describe your general question'; break;
		default: break;
	}
	comments_label.text( comments_text )
}).trigger('change');


});