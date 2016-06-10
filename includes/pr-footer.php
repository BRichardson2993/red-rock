<<<<<<< HEAD
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>


<script>
	$(document).ready(function () {
		$("#owl-demo").owlCarousel({
			slideSpeed: 800,
			paginationSpeed: 800,
			singleItem: true,
			autoPlay: 7000,
			stopOnHover: true,
		});
	});
	$('.owl-carousel').owlCarousel({
		items: 1,
		margin: 10,
		autoHeight: true
	});
</script>

<img src="images/CARF.png" alt="CARF Accredited logo" class="carf">

<footer role="contentinfo" id="PRfooter">
    <p class="statement">Red Rock is funded in part by the Oklahoma Department of Mental Health and Substance Abuse Services.</p>

	<a href="https://www.facebook.com/Red-Rock-Behavioral-Health-Services-115349498488230/?fref=ts" target="_blank"><img src="images/facebook.png" alt="red rock bhs facebook page" class="social"></a>
	<a href="#" target="_blank"><img src="images/twitter.png" alt="red rock bhs twitter" class="social"></a>
	<a href="#" target="_blank"><img src="images/linkedin.png" alt="red rock linked in page" class="social"></a>








		<p>&copy;
		<?php
		$startYear = 2016;
		$thisYear = date('Y');
		if ($startYear == $thisYear) {
			echo $startYear;
		} else {
			echo "{$startYear}&ndash;{$thisYear}";
		}
	?>
		Red Rock Behavioral Health Services</p>
		<p>Website design by Spec Creative</p>

	<a href="#" class="go-top">Back to Top</a>

</footer>

</body>

</html>
=======
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>


<script>
	$(document).ready(function () {
		$("#owl-demo").owlCarousel({
			slideSpeed: 800,
			paginationSpeed: 800,
			singleItem: true,
			autoPlay: 7000,
			stopOnHover: true,
		});
	});
	$('.owl-carousel').owlCarousel({
		items: 1,
		margin: 10,
		autoHeight: true
	});
</script>

<img src="images/CARF.png" alt="CARF Accredited logo" class="carf">

<footer role="contentinfo" id="PRfooter">
    <p class="statement">Red Rock is funded in part by the Oklahoma Department of Mental Health and Substance Abuse Services.</p>

	<a href="https://www.facebook.com/Red-Rock-Behavioral-Health-Services-115349498488230/?fref=ts" target="_blank"><img src="images/facebook.png" alt="red rock bhs facebook page" class="social"></a>
	<a href="#" target="_blank"><img src="images/twitter.png" alt="red rock bhs twitter" class="social"></a>
	<a href="#" target="_blank"><img src="images/linkedin.png" alt="red rock linked in page" class="social"></a>








		<p>&copy;
		<?php
		$startYear = 2016;
		$thisYear = date('Y');
		if ($startYear == $thisYear) {
			echo $startYear;
		} else {
			echo "{$startYear}&ndash;{$thisYear}";
		}
	?>
		Red Rock Behavioral Health Services</p>
		<p>Website design by Spec Creative</p>

	<a href="#" class="go-top">Back to Top</a>

</footer>

</body>

</html>
>>>>>>> red-rock-BHS/master
