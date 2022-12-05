<?php
	require_once 'user.php';

	$users = [];
	$users[] = new User('Momo', 'Momo' 11);
	$users[] = new User('Nono', 'Nono', 22);
	$users[] = new User('Mono', 'Mono', 33);

	foreach ($users as $user) {
		$x->show();
	}
?>
