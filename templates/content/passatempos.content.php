<table class="table" cellspacing="0">
	<thead>
		<tr> 
			<th>Acções</th>
			<th>ID</th>
			<th>Título</th>
			<th>Link</th>
			<th>Estado</th>
			<th>Data de início</th>
			<th>Data de final</th>
			<th>Dias</th>
			<th>Participações</th>
			<th>Imagem</th>
		</tr> 
	</thead>
	
	<tbody>
		<?php foreach($passatempos as $passa): ?>
		<tr>
			<td style='padding-left:10px;'>
				<a href=''><img src='images/people.png' alt='people' width='20px' height='20px' class='people'/></a>
				<?php if($passa->activo==0): ?>
				<img src='images/red_dot.gif' alt='red_dot' class='dot'/>
				<?php else: ?>
				<img src='images/green_dot.gif' alt='green_dot' class='dot'/>
				<?php endif; ?>
			</td>
			<td><?php echo $passa->id; ?></td>
			<td><a href='<?php echo "?route=passatempos&id=".$passa->id; ?>'><?php echo $passa->titulo; ?></a></td>
			<td><a href='<?php echo "index.php?route=passatempos&id=".$passa->id."/view"; ?>'>Ver</a></td>
			<td><?php echo $passa->estado; ?></td>
			<td><?php echo date("m/d/Y H:i",$passa->data_inicial); ?></td>
			<td><?php echo date("m/d/Y H:i",$passa->data_final); ?></td>
			<td><?php echo (int) (($passa->data_final-$passa->data_inicial)/86400); ?> dias</td>
			<td><a href='?route=participacoes&id=<?php echo $passa->id; ?>'><?php echo $passa->participacoes; ?></a></td>
			<td><img src='<?php echo $passa->imagem; ?>' alt='image' width='150px' height='150px'/></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

