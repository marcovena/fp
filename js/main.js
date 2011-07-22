$(document).ready( function() {
	$('.sub-menu').hide().delay(300).fadeIn(400);
	
	initStyleswitcher();
	
});

//create a toggle switcher that will toggle the site theme from dark to white
function initStyleSwitcher(){
  var styleSwitcher = '<div id="style-switcher" <ul><li><a id="css-red" href="#red">Red</a></li><li><a id="css-blue" href="#blue">Blue</a></li>' + 
                      ' <li><a id="css-green" href="#green">Green</a></li></ul></div>';
                      
       $('body').append(styleSwitcher);
       



}
