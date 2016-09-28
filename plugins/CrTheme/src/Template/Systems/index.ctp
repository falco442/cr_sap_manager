<table>
	<thead>
		<tr>
			<th>Nome</th>
		</tr>
	</thead>

	<tbody>
	<?php foreach($systems as $s): ?>
		<tr>
			<td><?= $s['name']; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>