// Owl script for index
	$(document).ready(function(){
 $('.owl-carousel').owlCarousel({
	  loop:true,
	  margin:10,
	  nav:true,
	  dots:true,
	  autoplay:true,
	  responsive:{
		  0:{
			  items:3
		  },
		  600:{
			  items:5
		  },
		  1000:{
			  items:6
		  }
	  }
	})

	});