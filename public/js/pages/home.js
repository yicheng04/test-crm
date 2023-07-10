$(function(){

/**
 * Update jump menu options based on selection
 */
var jump_menu = {
	"Fruit" : ["Apple", "Pear", "Orange"],
	"Vegetables" : ["Carrots", "Celery", "Cabbage"],
	"Meat" : ["Beef", "Chicken", "Pork"]
};

// find the two select menus
var $select_role = $(".user-jump").find("select:eq(0)");
var $select_option = $(".user-jump").find("select:eq(1)");

// hide the default options
$select_role.empty();
$select_option.empty();

// add options for role select
$.each(jump_menu, function(key, value) {
  $select_role.append($("<option></option>")
     .attr("value", key).text(key));
});

// update other select options depending on the role
$select_role.on('change', function() {
	var options = jump_menu[this.value];

	$select_option.empty();

	$.each(options, function(key, value) {
	  $select_option.append($("<option></option>")
	     .attr("value", value).text(value));
	});
}).trigger('change');

/** end jump menu **/


/**
 * Facebook feed plugin
 */
$('.social-feed-container').socialfeed({
    facebook:{
        accounts: ['!Sleeplesssoftware'], 
        limit: 3,                                   
        access_token: '' 
    },

    // GENERAL SETTINGS
    length:400,
    show_media: true,
    template_html:
		'<div class="fb-entry"> \
		<p class="fb-text"> \
			<i class="fa fa-{{=it.social_network}}"></i> &nbsp; {{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a> \
		</p> \
		<p> \
            <span>{{=it.time_ago}}</span>  \
        </p> \
		</div>'

    });

});