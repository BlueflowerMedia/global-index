var path = window.location.pathname;
var page = path.split("/")
var pageName = page[page.length - 2];

// photo slider

function play() {
	setInterval(function() {
		var next = $(".slideshow .active").removeClass("active").next(".slider-image");
		if (!next.length) {
			next = $(".slideshow .slider-image:first");
		}
		next.addClass("active");
	}, 3500);
}

play();