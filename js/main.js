$(document).ready( function() {
	$('.sub-menu').hide().delay(300).fadeIn(400);
	
	
	//enable theme switcher
	var loc = window.location;
	console.log(loc);
	var enableString = "toggle=1"
	if(loc.search.indexOf(enableString)!=-1){
	   initStyleSwitcher();
	}
});

//create a toggle switcher that will toggle the site theme from dark to white
function initStyleSwitcher(){
  var styleSwitcher = '<div id="style-switcher" class="not-selectable"><ul><li id="light-style-switch" class="shadow">Light</li><li id="dark-style-switch" class="shadow">Dark</li></ul></div>';
                      
       $('body').append(styleSwitcher);
 
        $('#dark-style-switch').click(function(){
            
            $("link[rel=stylesheet]").attr({href : "css/all-black.css"});
            //$('a.home-logo').css('background-image', 'url(../images/logo-dark.png)');
            
        });
        
        $('#light-style-switch').click(function(){
            
            $("link[rel=stylesheet]").attr({href : "css/all.css"});
            
        });
}
