<?php
	// Contenido del sidebar
	echo '<h2>Categorías</h2>';
	echo '<ul>';

	// Array con los nombres de las categorías y sus enlaces correspondientes
	$categorias = array(
		'Categoría 1' => '#',
		'Categoría 2' => '#',
		'Categoría 3' => '#'
	);

	// Generar la lista de enlaces utilizando el array
	foreach ($categorias as $nombre => $enlace) {
		echo '<li><a href="' . $enlace . '">' . $nombre . '</a></li>';
	}

	echo '</ul>';
?>