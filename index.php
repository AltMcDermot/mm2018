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
	    		<svg id="cross" viewBox=""></svg>
	    		<div class="has-text-centered">
	    			<p class="is-size-3">Welcome</p>
	    		</div>
	    		<div class="has-text-centered">
	    			<p class="is-size-3">Music</p>
	    		</div>
	    		<div class="has-text-centered">
	    			<p class="is-size-3">Code</p>
	    		</div>
	    		<div class="has-text-centered">
	    			<p class="is-size-3">Blog</p>
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
		})
	</script>

</body>
</html>
