<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./config.php');
require_once('./functions.php');
$cip = get_ip();
if( check_ip_match($cip, $file) === false ) {
?>
<html>
<body>
<form action="post.php" method="get">
Your IP is: <input type="text" name="ip" value="<?php echo $cip ?>">
<input type="submit">
</form>
</body>
</html>
<?php } else { ?>
<html>
<body>
	<p>Your IP `<?php echo $cip ?>` is already in the system.</p>
</body>
</html>
<?php } ?>
