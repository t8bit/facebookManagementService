<pre>
<?php
print_r($user_profile);
print_r($user_id);
?>
</pre>
<table class="table" cellspacing="0">
	<thead>
		<tr>
		<th>Id</th>
		<th>Email</th>
		<th>oauth_uid</th>
		<th>oauth_provider</th>
		<th>username</th>
		<th>facebook_oauth_token</th>
		<th>facebook_oauth_token_secret</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($data as $user): ?>
	<tr>
		<td><?php echo $user->id; ?></td>
		<td><?php echo $user->email; ?></td>
		<td><?php echo $user->oauth_uid; ?></td>
		<td><?php echo $user->oauth_provider; ?></td>
		<td><?php echo $user->username; ?></td>
		<td><?php echo $user->facebook_oauth_token; ?></td>
		<td><?php echo $user->facebook_oauth_token_secret; ?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>

