<footer>
	<div id="footercontainer" class="shadowed">
        <a href="/pages/terms-and-conditions" alt="GitHub">Terms &amp; Conditions</a> |
        <a href="https://github.com/catlinman/hivecom.net" alt="GitHub">Site source code</a>
		<br>
		<?php include(TEMPLATES_PATH . "/module/queryinfo.php");?>
		<br>
		<a href="https://catlinman.com/" alt="Catlinman website">&copy Catlinman 2013 - <?php echo date("Y"); ?></a>
    </div>
</footer>
<script>
    smoothScroll.init({
        speed: 1000,
        easing: 'easeInOutCubic',
        updateURL: true,
        offset: 0,
        callbackBefore: function(toggle, anchor){},
        callbackAfter: function(toggle, anchor){}
    });
</script>