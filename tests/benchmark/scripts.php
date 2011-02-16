<?php $time = time() - $_REQUEST['n']; ?><!doctype html>
<html>
	<head>
	</head>
	<body>
		<script>var start = (+new Date);</script>
		<?php for( $i = 0; $i < $_REQUEST['n']; $i++ ) : ?>
			<script src="../js/no-cache/s<?=( $time - $i )?>.js"></script>
		<?php endfor ?>
		<script>
			window.location.hash = (+new Date) - start;
		</script>
	</body>
</html>