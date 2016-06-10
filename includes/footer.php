<<<<<<< HEAD
<script src="js/jquery.min.js"></script>
<script>(function($){
$(document).ready(function(){

$('#cssmenu ul ul li:odd').addClass('odd');
$('#cssmenu ul ul li:even').addClass('even');
$('#cssmenu > ul > li > a').click(function() {
  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active');
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;
  }
});

});
})(jQuery);
</script>


<img src="images/CARF.png" alt="CARF Accredited logo" class="carf">

<footer>
<p class="statement">Red Rock is funded in part by the Oklahoma Department of Mental Health and Substance Abuse Services.</p>
<div class="social">
	<a href="https://www.facebook.com/Red-Rock-Behavioral-Health-Services-115349498488230/?fref=ts" target="_blank"><img src="images/facebook.png" alt="red rock bhs facebook page" class="social"></a>
	<a href="#" target="_blank"><img src="images/twitter.png" alt="red rock bhs twitter" class="social"></a>
	<a href="#" target="_blank"><img src="images/linkedin.png" alt="red rock linked in page" class="social"></a>
</div>

<div class="copyright">
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
		<p>Website design by <a href="http://www.speccreative.com" target="_blank" class="spec">Spec Creative</a></p>
</div>


</footer>
<script src="js/sticky.js"></script>

</body>
</html>
=======
<script src="js/jquery.min.js"></script>
<script>(function($){
$(document).ready(function(){

$('#cssmenu ul ul li:odd').addClass('odd');
$('#cssmenu ul ul li:even').addClass('even');
$('#cssmenu > ul > li > a').click(function() {
  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active');
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;
  }
});

});
})(jQuery);
</script>


<img src="images/CARF.png" alt="CARF Accredited logo" class="carf">

<footer role="contentinfo">
<p class="statement">Red Rock is funded in part by the Oklahoma Department of Mental Health and Substance Abuse Services.</p>
<div class="social">
	<a href="https://www.facebook.com/Red-Rock-Behavioral-Health-Services-115349498488230/?fref=ts" target="_blank"><img src="images/facebook.png" alt="red rock bhs facebook page" class="social"></a>
	<a href="#" target="_blank"><img src="images/twitter.png" alt="red rock bhs twitter" class="social"></a>
	<a href="#" target="_blank"><img src="images/linkedin.png" alt="red rock linked in page" class="social"></a>
</div>

<div class="copyright">
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
		<p>Website design by <a href="http://www.speccreative.com" target="_blank" class="spec">Spec Creative</a></p>
</div>


</footer>
<script src="js/sticky.js"></script>

</body>
</html>
>>>>>>> red-rock-BHS/master
