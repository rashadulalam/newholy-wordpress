jQuery(document).ready(function() {
    jQuery('#newsbox-item').marquee({
      //duration in milliseconds of the marquee
	duration: 5000,
	//gap in pixels between the tickers
	gap: 100,
	//time in milliseconds before the marquee will start animating
	delayBeforeStart: 0,
	//'left' or 'right'
	direction: 'left',
	//true or false - should the marquee be duplicated to show an effect of continues flow
	pauseOnHover: true,
	});
	

});


// news box
var interval; 

function startTicker() {
    $('#news-outer .news-item:first-child').slideUp(function() {
        $(this).appendTo('#news-outer').slideDown();
    })
}

function stopTicker() {
    clearInterval(interval);
}

$(document).ready(function() {
    interval = setInterval(startTicker, 2000);
    $('#news-outer').hover(function() {
        stopTicker()
    }, function() {
        interval = setInterval(startTicker, 2000);
    });
})
