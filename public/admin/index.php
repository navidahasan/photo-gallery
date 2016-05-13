<?php
require_once('../../includes/functions.php');
require_once('../../includes/session.php');
if(!$session->is_logged_in()) { redirect_to('login.php'); }

?>

<? // php include_layout_template('admin-header.php'); ?>
<?php include '../layout/admin-header.php'; ?>
		<h2>Menu</h2>		
	</div>
		
<?php // include_layout_template('admin-footer.php'); ?>
<?php include '../layout/admin-footer.php'; ?>