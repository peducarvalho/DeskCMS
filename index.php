<?php
require 'inc/sys.php';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php $page_Head = file_get_contents('https://domain.com/inc/plugins_top.php'); echo $page_Head; ?>
</head>
<body>


<?php $page_Foot = file_get_contents('https://domain.com/inc/plugins_foot.php'); echo $page_Foot; ?>
</body>
</html>
