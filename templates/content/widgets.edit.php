<style>
.w700{width:700px;border:1px solid #CCCCCC;}
</style>
<form method='post' action=''>
	<table border=0>
	<tr>
		<td>name:</td>
		<td><input type='text' name='name' class='w700'/></td>
	</tr>
	<tr>
		<td>oauth_secret</td>
		<td><input type='text' name='oauth_secret' class='w700'/></td>
	</tr>
	<tr>
		<td>oauth_key</td>
		<td><input type='text' name='oauth_key' class='w700'/></td>
	</tr>
	<tr>
		<td>Service</td>
		<td>
			<select name='service'>
				<option name='service' value="passatempo">passatempo</option>
				<option name='service' value="jogo">jogo</option>
				<option name='service' value="pagina">pagina</option>
				<option name='service' value="galeria">galeria</option>
			</select>
		</td>
	</tr>
	<input type='hidden' value='create' name='funcao'/>
	</table>
	<input type='submit' value='Criar'/>
</form>
