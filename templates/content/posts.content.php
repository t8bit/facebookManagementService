<table class="table" cellspacing="0">
	<thead>
		<tr>
		<th>Id</th>
		<th>Data</th>
		<th>Texto</th>
		<th>Imagem</th>
		<th>Link</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($data as $user): ?>
	<tr>
		<td><?php echo $posts->id; ?></td>
		<td><?php echo $posts->data; ?></td>
		<td><?php echo $posts->texto; ?></td>
		<td><?php echo $posts->imagem; ?></td>
		<td><?php echo $posts->link; ?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>

