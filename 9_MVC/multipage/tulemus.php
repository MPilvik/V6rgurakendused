<?php
	require_once('head.html');
?>
	<h3>Valiku tulemus</h3>
	
	<p>
	<?php if(!empty($_GET)){
		echo "Tänan! Sinu vastus on salvestatud.";
	} else {
		echo "Palun vali mõni pilt!";
	}
	?>
	</p>

<?php
	require_once('foot.html');
?>