<table>
	<thead>
		<tr>
		<th>Sorszám</th>
		<th>Faj</th>
		<th>Kép</th>
		<th>Leírás</th>
		<th width="15%">Ár </th>
		</tr>
	</thead>
	<tbody>		
<ul>
	<?php foreach($animals as $animal): ?>
	<tr>
		<td><?= $animal['id'] ?>.</td>
		<td><strong><?= $animal['name'] ?></strong></td>
		<td>
			<img src="<?= "Media/".$animal['picture'] ?>" height="250px" width="250px">
		</td>
		<td><?= $animal['description'] ?></td>
		<td><?= $animal['price'] = number_format($animal['price'], 0, ".", " ")?> Ft
		</td>
	</tr>
	<?php endforeach; ?>
</ul>
</tbody>
</table>
