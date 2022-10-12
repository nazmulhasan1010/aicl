
<?php
    $url   = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $actual_link   = str_replace("/public","",$url);
	echo "<script>
		location.replace('$actual_link');
	</script>";
?>