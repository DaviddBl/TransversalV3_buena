<div class="sidebar">
	<h2 class="sidebar-title">Categorías</h2>
	<ul class="sidebar-list">
		<?php
		// Array con los nombres de las categorías y sus enlaces correspondientes
		$sideRoutes = array(
			'Eventos' => '../event/list.php',
			'Mis Eventos' => '../user/listEventsPromotor.php',
			'Crear Evento' => '../user/createEvent.php',
		);

		// Generar la lista de enlaces utilizando el array
		foreach ($sideRoutes as $nombre => $enlace) {
			echo '<li><a href="' . $enlace . '">' . $nombre . '</a></li>';
		}
		?>
	</ul>
</div>