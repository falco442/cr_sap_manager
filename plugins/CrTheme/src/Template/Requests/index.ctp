
<table>
	<thead>
		<tr>
			<th>Utente</th>
			<th>Codice CR</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($requests as $req): ?>
		<tr>
			<td><?= $req['user']['username']; ?></td>
			<td><?= $req['code'] ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>