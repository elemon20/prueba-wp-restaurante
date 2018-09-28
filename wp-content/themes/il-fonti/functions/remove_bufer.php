<?php 

//dasactiva bufer de salida
	remove_action ('shutdown', 'wp_ob_end_flush_all', 1);

?>