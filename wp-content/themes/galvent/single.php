<?php

if (in_category('2') or in_category('3')  or in_category('4')) {
	get_template_part('single-content');
} 
else {
	get_template_part('single-default.php');
}

  
?>