<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
	<script src="//cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body class="has-background-black-ter">
	<section  class="hero is-fullheight">
	  <div class="hero-body">
	    <div class="container">

	    	<div id="home" class="splash-menu has-text-white-ter is-centered">
	    		<svg id="cross"></svg>
	    		<div class="has-text-centered">
	    			<p id="" class="is-size-3">Welcome</p>
	    		</div>
	    		<div class="has-text-centered">
	    			<p id="music" class="is-size-3"><a href="#">Music</a></p>
	    		</div>
	    		<div class="has-text-centered">
	    			<p id="code" class="is-size-3"><a href="code.php">Code</a></p>
	    		</div>
	    		<div class="has-text-centered">
	    			<p id="blog" class="is-size-3"><a href="blog.php">Blog</a></p>
	    		</div>
		    </div>

		  </div>
	  </div>
	</section>
	<script defer>
		$(document).ready(function(){
			$('#cross').attr('viewBox', '0 0 ' + $('#home').width() + ' ' + $('#home').width())
			var s = Snap("#cross");
			var line  = s.line(0,0, $('#home').width(), $('#home').width())
			var line2  = s.line(0,$('#home').width(), $('#home').width(), 0)

			line.attr({
				stroke: '#fff',
				strokeWidth: 3,
				strokeLinecal: 'round'
			})
			
			line2.attr({
				stroke: '#fff',
				strokeWidth: 3,
				strokeLinecal: 'round'
			})
			new Vivus('cross', {duration: 50}, );

			muse = s.polygon([
				0,0,
				($('#home').width() / 2),($('#home').width() / 2),
				0,$('#home').width()
			])
			muse.attr({
				fill: '#242424',
				'fill-opacity': 0
			});


			// muse.attr({ fill: "#000", stroke: "green", 'fill-opacity': 1 })

			function animateStart(){
				muse.animate({ 
					fill: "#000", 
					'fill-opacity': 1 
				}, 1000)
			}

			$('polygon').click(function(){
				animateStart()
				console.log('click')
			})




			$('#music').click(function(){
				// console.log(muse)
				$('polygon').trigger('click')
			})
			
		})
	</script>

</body>
</html>
