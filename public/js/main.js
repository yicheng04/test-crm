$(window).load(function () {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});


function filterTable(search, table) {
	$(table + " tr:hidden").show();
	$.each(search, function() {
		if (search != 'all') {
			$(table + " tr:visible .indexColumn:not(:contains('" + this + "'))").parent().hide();
		} else {
			$(table).show();
		}
	});
}

$(document).ready(function() {

  equalheight = function(container){

  var currentTallest = 0,
       currentRowStart = 0,
       rowDivs = new Array(),
       $el,
       topPosition = 0;
   $(container).each(function() {
  
     $el = $(this);
     $($el).height('auto')
     topPostion = $el.position().top;
  
     if (currentRowStart != topPostion) {
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
       rowDivs.length = 0; // empty the array
       currentRowStart = topPostion;
       currentTallest = $el.height();
       rowDivs.push($el);
     } else {
       rowDivs.push($el);
       currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
    }
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
   });
  }
  
  $(window).load(function() {
    equalheight('.row-wrapper .equalheight');
  });
  
  
  $(window).resize(function(){
    equalheight('.row-wrapper .equalheight');
  });



  $('#responsive-menu-button').sidr({
    name: 'sidr-main',
    source: '#navigation',
    side: 'right'
  });
  
   
  jQuery('.map area').qtip({
      style: {
          classes: 'map-tool-tip'
      },
      show: {
        event: 'mouseenter'
      },
      hide: {
        event: 'mouseout',
        fixed: true
      },
      position: {
        my: 'bottom center',
        at: 'top center',
        target: '.map area',
        adjust: {
          mouse: false
        }
      },
      events: {
        show: function(event, api) {
          api.set({
            'content.text': api.elements.target.attr('title')
          });
        }
      }
  });
  
  
  
  var $UtilNav = $('.utility-nav li'),
        $MainNav = $('.sidr');    
    function navResize(){  
      var mob = window.innerWidth<768;
      $UtilNav.appendTo((mob?".sidr":".utility-nav")+' ul.sidr-class-menu');
      $MainNav[mob?"addClass":"removeClass"]('mobile-nav');
    }    
    navResize();
    $(window).resize(navResize); 
  
  
  //$(window).resize( function() {
  //  window.location.href = window.location.href; 
  //});
    
  

  /*=======	Accordion (Fill out a Quote)	========*/
	$(function() {
		$('.accordion').accordion({active: 0, collapsible: false, heightStyle: content});
	});
	
	/*==========	Tabs (Fill out a Quote) w/ Animation and Next/Previous buttons	=========*/
	$(".tabs").tabs({active: false, collapsible: true, hide: {effect: "slide", duration: 500}, show: {effect: "slide", duration: 500}});
	$('.tabs').tabs("option", "active", 0).tabs("option", "collapsible", false).fadeIn('fast');
	$(".nexttab").click(function(e) {
		e.preventDefault();
		curTab = $(".tabs").tabs('option', 'active');
		numTabs = $(".tabs li").length;
		nextTab = curTab + 1;
		if (nextTab < numTabs) {
			$(".tabs").tabs("option", "active", nextTab);
		}
	});
	$(".previoustab").click(function(e) {
		e.preventDefault();
		curTab = $(".tabs").tabs('option', 'active');
		nextTab = curTab - 1;
		if (nextTab >= 0) {
			$(".tabs").tabs("option", "active", nextTab);
		}
	});
	$("table.filter-table tr:has(td)").each(function() {
		var t = $(this).text().toLowerCase();
		$("<td class='indexColumn'></td>").hide().text(t).appendTo(this);
	});
	$("#filter-select").change(function() {
		var str = "";
		$("#filter-status option:selected").each(function() {
			str += $(this).text() + " ";
		});
		var search_term = $(this).val().toLowerCase().split(" ");
		filterTable(search_term, ".filter-table");
	});
	
});



function showmap(id, linkid) {
    var divid = document.getElementById(id);
    var toggleLink = document.getElementById(linkid);
    if (divid.style.display == 'none') {
        toggleLink.innerHTML = 'Hide Map';
        divid.style.display = 'block';
    }
    else {
        toggleLink.innerHTML = 'Show Map';
        divid.style.display = 'none';
    }
}