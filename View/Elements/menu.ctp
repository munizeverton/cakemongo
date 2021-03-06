<?php ?>
<div class='menu'>
	<ul>
		<li><a href=''>Cadastros</a>
			<ul class='col2'>
				<li><a href=''>Sistema</a>
					<ul class='col3'>
						<?php echo $this->Html->getLinkLI('/acessos/listar','Acessos'); ?>
						<?php echo $this->Html->getLinkLI('/agenda/listar','Agenda'); ?>
						<?php echo $this->Html->getLinkLI('/avisos/listar','Avisos'); ?>
						<?php echo $this->Html->getLinkLI('/cidades/listar','Cidades'); ?>
						<?php echo $this->Html->getLinkLI('/perfis/listar','Perfis'); ?>
						<?php echo $this->Html->getLinkLI('/urls/listar','Permissões'); ?>
						<?php echo $this->Html->getLinkLI('/usuarios/listar','Usuários'); ?>
						<?php if (!Configure::read('login0800')) echo $this->Html->getLinkLI('/usuarios/meus_dados','Meus dados'); ?>

					</ul>
				</li>
			</ul>
		</li>
		<li><a href=''>Relatórios</a>
			<ul class='col2'>
				<li><a href=''>Listas</a>
					<ul class='col3'>
						<?php echo $this->Html->getLinkLI('/relatorios/rel001','Total de Cidades por Estado'); ?>
						<?php echo $this->Html->getLinkLI('/relatorios/rel002','Total de Acessos por Usuário'); ?>
						<?php echo $this->Html->getLinkLI('/relatorios/rel003','Total de Usuários por Sexo'); ?>
						<?php echo $this->Html->getLinkLI('/relatorios/rel004','Total de Usuários por Perfil'); ?>
					</ul>
				</li>
			</ul>
		</li>

		<li><a href=''>Ferramentas</a>
			<ul class='col2'>
				<?php echo $this->Html->getLinkLI('/ferramentas/limpar_cache','Limpar o cache'); ?>
				<?php echo $this->Html->getLinkLI('/ferramentas/importar_csv','Importar CSV'); ?>
				<?php echo $this->Html->getLinkLI('/ferramentas/popular','Popular Coleção'); ?>
			</ul>
		</li>
		<li><a href=''>Ajuda</a>
			<ul class='col2'>
				<?php echo $this->Html->getLinkLI('/ajuda/sobre_mim','Sobre Mim'); ?>
				<?php echo $this->Html->getLinkLI('/ajuda/sobre','Sobre o '.Configure::read('sistema')); ?>
			</ul>
		</li>
		<?php if (!Configure::read('teste')) : ?>
		<li><a href='<?= $this->base ?>/usuarios/sair'>Sair</a></li>
		<?php endif ?>
	</ul>
	<?php ?>
</div>
