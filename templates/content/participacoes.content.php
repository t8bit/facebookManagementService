<table class="table" cellspacing="0">
	<thead>
		<tr>
		<th>Perfil</th>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Localidade</th>
		<th>Data de nascimento</th>
		<th>Resposta</th>
		<th>Data de participação</th>
		<th>Ip</th>
		<th>Votos</th>
		<th>Vencedor</th>
		<th>Publico</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($data as $parti): ?>
	<tr>
		<td><?php echo $parti->perfil; ?></td>
		<td><?php echo $parti->nome; ?></td>
		<td><?php echo $parti->email; ?></td>
		<td><?php echo $parti->localidade; ?></td>
		<td><?php echo $parti->data_nascimento; ?></td>
		<td><?php echo $parti->resposta; ?></td>
		<td><?php echo $parti->data_participacao; ?></td>
		<td><?php echo $parti->ip; ?></td>
		<td><?php echo $parti->votos; ?></td>
		<td><?php echo $parti->vencedor; ?></td>
		<td><?php echo $parti->publico; ?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
