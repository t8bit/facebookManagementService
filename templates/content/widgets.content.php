<table class="table" cellspacing="0">
	<thead>
		<tr>
		<th>Id</th>
		<th>nome</th>
		<th>oauth_secret</th>
		<th>oauth_id</th>
		<th>link</th>
		<th>service</th>
		<th>Config</th>
		<th>Install</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($data as $parti): ?>
	<tr>
		<td><?php echo $parti->id; ?></td>
		<td><?php echo $parti->name; ?></td>
		<td><?php echo substr($parti->oauth_secret,0,15).'...'; ?></td>
		<td><?php echo $parti->oauth_id; ?></td>
		<td><?php echo $_SERVER["SERVER_NAME"]."/FMS".$parti->link; ?></td>
		<td><?php echo $parti->service; ?></td>
		<td><?php echo "config"; ?></td>
		<?php $link="https://www.facebook.com/dialog/pagetab?app_id=".$parti->oauth_id."&next=http://".$_SERVER['SERVER_NAME']."/FMS".$parti->link; ?>
		<td><?php echo "<a href='".$link."'>Install</a>"; ?></td>
		<td>
			<form method='post'>
				<input type='hidden' value='delete' name='funcao'/>
				<input type='hidden' value='<?=$parti->id;?>' name='id'/>
				<input type='submit' value='Apagar'/>
			</form>
		</td> 
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>

