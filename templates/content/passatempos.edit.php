
<script>
$(function() {
	$( ".datepicker" ).datetimepicker();
});

tinyMCE.init({
	mode : "textareas"
});
		

$(document).ready(function() {
	$('#upload').attr('src','index.php?route=galeria&noheader');
	
	$('#images_loading').hide();
	$('#add_imagem').click(function() {
		//scroll-bar position:
		var height = $(window).height();
		var width = $(window).width();
		var scrollTop=$(window).scrollTop()

		var topmais=(height-500)/2;
		var leftmais=(width-800)/2;		
		$('#images_loading').css('top',scrollTop+topmais);
		$('#images_loading').css('left',leftmais);
				
		$('#images_loading').attr('src','index.php?route=galeria&noheader');
		$('#images_loading').show();
		return false;	
	});
	
	$(".imagem").live("click", function(){
		src=$(this).attr('src');
		$('#fotografia').html("<img src='"+src+"' width='150px' height='150px' alt='imagem_passatempo'/>");
		$('#images_loading').hide();
		$('#add_imagem2').val(src);
	});
	
	
	<?php if($passa->tipo!='multiplas'): ?>
		$('.multiplas').hide();
	<?php endif; ?>
	<?php if($passa->imagem!=''): ?>
	$('#fotografia').html("<img src='<?php echo $passa->imagem; ?>' width='150px' height='150px' alt='imagem_passatempo'/>");
	$('#add_imagem2').val('<?php echo $passa->imagem; ?>');
	<?php endif; ?>
	$('#tipo').change(function() {
		tipoValor=$('#tipo').val();
			
		if(tipoValor=='multiplas')
		{
			$('.multiplas').show();
		}
		else
		{
			$('.multiplas').hide();
		}
	});
	
	
	
});
</script>
<style>
	.w700
	{
		border:1px solid #CCCCCC;
		width:100%;
	}
	
</style>
<div id='head3'>
	<div id='appname'><b>Adicionar Passatempo</b></div>
	<div id='insert'></div>
</div>
<div id ='main'>
<form action="" method="post">
	<table border='0'>
		<tr>
			<td class='name_'></td>
			<td class='left'><input type="checkbox" name="activo" value="1" <?php if($passa->activo==1){echo 'checked';} ?> />Activo</br></td>
		</tr>
		<tr>
			<td class='name_'><b>Titulo:</b></td>
			<td class='left'><input class='w700' type='text' name='titulo' value='<?php echo $passa->titulo; ?>'/></br></td>
		</tr>
		<tr>
			<td class='name_'><b>Resumo para HP:</b></td>
			<td class='left'><center><textarea name='resumo' style='width:99%;'><?php echo $passa->resumo; ?></textarea></center></br></td>
		</tr>
		<tr>
			<td class='name_'><b>Data inicial:</b></td>
			<td class='left' style='text-align:left;'><input type='text' style='border:1px solid grey;' class='datepicker' name='data_inicial' value='<?php echo date("m/d/Y H:i",$passa->data_inicial); ?>'/></br></td>
		</tr>
		<tr>
			<td class='name_'><b>Data final:</b></td>
			<td class='left' style='text-align:left;'><input type='text' style='border:1px solid grey;' class='datepicker' name='data_final' value='<?php echo date("m/d/Y H:i",$passa->data_final); ?>'/></br></td>
		</tr>	
		<tr>
			<td class='name_'><b>Parametrização:</b></td>
			<td class='left'>
				<table border='0' style='text-align:left;'>
					<tr>
						<td style='border:0px solid black'><input type='checkbox' name='param1' value='1' <?php if($passa->param1==1){echo 'checked';} ?>/><span class='f10'>Apenas para fãs</span></td>
						<td style='border:0px solid black'><input type='checkbox' name='param2' value='1' <?php if($passa->param2==1){echo 'checked';} ?>/><span class='f10'>As participações recebidas são publicadas automaticamente na galeria sem aprovação prévia</span></td>
					</tr>
					<tr>
						<td style='border:0px solid black'><input type='checkbox' name='param3' value='1' <?php if($passa->param3==1){echo 'checked';} ?>/><span class='f10'>Votação</span></td>
						<td style='border:0px solid black'><input type='checkbox' name='param4' value='1' <?php if($passa->param4==1){echo 'checked';} ?>/><span class='f10'>Pedir informações de contacto</span></td>
					</tr> 
				</table>
			</td>
		</tr>
		<tr>
			<td class='name_'><b>Mecânica de votação:</b></td>
			<td class='left'  style='text-align:left;'	>
				<select name='mec'>
					<?php
					switch($passa->mec)
					{
						case '1voto1':
							echo "<option value='1voto1'>Um voto por cada participação</option>
								<option value='1voto1dia'>Um voto por cada dia por cada utilizador</option>
								<option value='nr_fixo'>Número fixo de votos disponiveis</option>";
						break;
						case '1voto1dia':
							echo "<option value='1voto1dia'>Um voto por cada dia por cada utilizador</option>
								<option value='nr_fixo'>Número fixo de votos disponiveis</option>
								<option value='1voto1'>Um voto por cada participação</option>";
						break;
						case 'nr_fixo':
							echo "<option value='nr_fixo'>Número fixo de votos disponiveis</option>
								<option value='1voto1'>Um voto por cada participação</option>
								<option value='1voto1dia'>Um voto por cada dia por cada utilizador</option>";
						break;
						default:
							echo "<option value='select'>Selecione...</option>
								<option value='1voto1'>Um voto por cada participação</option>
								<option value='1voto1dia'>Um voto por cada dia por cada utilizador</option>
								<option value='nr_fixo'>Número fixo de votos disponiveis</option>";
						break;
					}
					
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class='name_'><b>Descrição:</b></td>
			<td class='left' style='text-align:center;'><textarea name='descricao' style='width:100%;'><?php echo $passa->descricao; ?></textarea></td>
		</tr>
		<tr>
			<td class='name_' ><b>Tipo:</b></td>
			<td class='left' style='text-align:left;'>
				<select name='tipo' id='tipo'>
					<?php switch($passa->tipo)
					{
						case 'texto':
							echo "<option value='texto'>Texto</option>
								<option value='multiplas'>Multiplas</option>
								<option value='imagem'>Imagem</option>
								<option value='link_video'>Link video</option>
								<option value='imagem_video'>Imagem ou link video</option>";
						break;
						case 'multiplas':
							echo "<option value='multiplas'>Multiplas</option>
								<option value='imagem'>Imagem</option>
								<option value='link_video'>Link video</option>
								<option value='imagem_video'>Imagem ou link video</option>
								<option value='texto'>Texto</option>";
						break;
						case 'imagem':
							echo "<option value='imagem'>Imagem</option>
								<option value='link_video'>Link video</option>
								<option value='imagem_video'>Imagem ou link video</option>
								<option value='texto'>Texto</option>
								<option value='multiplas'>Multiplas</option";
						break;
						case 'link_video':
							echo "<option value='link_video'>Link video</option>
								<option value='imagem_video'>Imagem ou link video</option>
								<option value='texto'>Texto</option>
								<option value='multiplas'>Multiplas</option>
								<option value='imagem'>Imagem</option>";
						break;
						case 'imagem_video':
							echo "<option value='imagem_video'>Imagem ou link video</option>
									<option value='texto'>Texto</option>
									<option value='multiplas'>Multiplas</option>
									<option value='imagem'>Imagem</option>
									<option value='link_video'>Link video</option>";
						break;
						default:
							echo "<option value='texto'>Texto</option>
								<option value='multiplas'>Multiplas</option>
								<option value='imagem'>Imagem</option>
								<option value='link_video'>Link video</option>
								<option value='imagem_video'>Imagem ou link video</option>";
						break;
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class='name_'><b>Desafio:</b></td>
			<td class='left'><textarea name='desafio' style='width:100%;'><?php echo $passa->desafio; ?></textarea></td>
		</tr>
		<!--multiplas-->
			<tr class='multiplas'>
				<td>Resposta 1:</td>
				<td><input class='w700' type='text' name='resposta1' value='<?php echo $passa->r1; ?>'/></td>
			</tr>
			<tr class='multiplas'>
				<td>Resposta 2:</td>
				<td><input class='w700' type='text' name='resposta2' value='<?php echo $passa->r2; ?>'/></td>
			</tr>
			<tr class='multiplas'>
				<td>Resposta 3:</td>
				<td><input class='w700' type='text' name='resposta3' value='<?php echo $passa->r3; ?>'/></td>
			</tr>
			<tr class='multiplas'>
				<td>Resposta 4:</td>
				<td><input class='w700' type='text' name='resposta4' value='<?php echo $passa->r4; ?>'/></td>
			</tr>
			<tr class='multiplas'>
				<td>Resposta 5:</td>
				<td><input class='w700' type='text' name='resposta5' value='<?php echo $passa->r5; ?>'/></td>
			</tr>
			<tr class='multiplas'>
				<td>Resposta 6:</td>
				<td><input class='w700' type='text' name='resposta6' value='<?php echo $passa->r6; ?>'/></td>
			</tr>
		<!--/multiplas-->
		<tr>
			<td class='name_'><b>Mínimo de recomendações</b></td>
			<td class='left'><input class='w700' type='text' name='minimo' value='<?php echo $passa->minimo; ?>'/></td>
		</tr>
		<tr>
			<td class='name_'><b>Max de participações</b></td>
			<td class='left'><input class='w700' type='text' name='max_participacoes' value='<?php echo $passa->max_participacoes; ?>'</td>
		</tr>
		<tr>
			<td class='name_'><b>Regulamento</b></td>
			<td class='left'><textarea name='regulamento' style='width:100%;'><?php echo $passa->regulamento; ?></textarea></td>
		</tr>
		
		<tr>
			<td class='name_'><b>Agradecimento</b></td>
			<td class='left'><textarea name='agradecimento' style='width:100%';><?php echo $passa->agradecimentos; ?></textarea></td>
		</tr>
		<tr>
			<td class='name_'><b>Vencedores</b></td>
			<td class='left'><textarea name='vencedores' style='width:100%;'><?php echo $passa->vencedores; ?></textarea></td>
		</tr>
		<tr>
			<td class='name_'><b>Inicio da publicação de vencedores</b></td>
			<td class='left' style='text-align:left;'><input type='text' name='inicio' class='datepicker' value='<?php echo  date("m/d/Y H:i",$passa->inicio); ?>'/></td>
		</tr>
		<tr>
			<td class='name_'><b>Activar frase viral</b></td>
			<td class='left' style='text-align:left;'><input type="checkbox" name="viral" value="1" <?php if($passa->viral==1){echo 'checked';} ?></td>
		</tr>
		<tr>
			<td class='name_'><b>Frase Viral</b></td>
			<td class='left' style='text-align:left;'><input type='text' class='w700' name='fraseViral' value='<?php echo $passa->fraseViral;?>'/></td>
		</tr>
		<tr>
			<td class='name_'><input type='checkbox' value='1' name='mostraImg' <?php if($passa->mostrar_imagem){echo 'checked';} ?>/> Mostrar imagem na página de detalhe do passatempo</td>
			<td class='left'></td>
		</tr>
		<tr>
			<td class='name_'><b>Imagem:</b></td>
			<td class='left' style='text-align:left;'>
				<div id='fotografia'></div>
				<input type='text' value='' name='imagem' id='add_imagem2'/>
				<input type="submit" id='add_imagem' name="submit" value="Adicionar imagem" />
			</td>
		</tr>
	</table>
	<input type='hidden' value='<?php if(isset($_GET['add'])){echo 'insert';}else{echo 'update';} ?>' name='funcao'/>
	<input type='hidden' value='<?php echo $_GET['id']; ?>' name='id'/>
	<input type="submit" value="Inserir" />
</form>
<div id='images_loading' style='position:absolute;border:1px solid black;background-color:grey;width:800px;height:500px'>
	<div id='show_images'>
		<?php foreach($galery as $pic): ?>
		<div style='float:left;padding:10px;'><img class='imagem' src='galeria/<?php echo $pic->imagem; ?>' width='150px' height='150px' alt='imagem'/></div>
		<?php endforeach; ?>
	</div>
</div>
