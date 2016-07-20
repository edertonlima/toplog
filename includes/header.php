<?php $url = 'http://localhost/di20/toplog'; ?>

<session class="top-menu">
	<div class="header-menu">
		<div class="container">
			<a href="javascript:" class="menu-mobile"><span><em>X</em></span></a>
			<h1>
				<a href="<?php echo $url; ?>"><img src="<?php echo $url; ?>/assets/images/toplog.png" alt="Toplog"></a>
			</h1>
		</div>
	</div>
	<nav class="nav">
		<ul class="menu">
			<div class="container">
				<li><a href="<?php echo $url; ?>/institucional" title="INSTITUCIONAL">INSTITUCIONAL</a></li>
				<li><a href="<?php echo $url; ?>/servicos" title="SERVIÇOS">SERVIÇOS</a></li>
				<li><span class="submenu">PRODUTOS</span>
					<ul class="submenu">
						<li><a href="<?php echo $url; ?>/exportacao" title="EXPORTAÇÃO">EXPORTAÇÃO</a></li>
						<li><a href="<?php echo $url; ?>/importacao" title="IMPORTAÇÃO">IMPORTAÇÃO</a></li>
					</ul>
				</li>
				<li><a href="<?php echo $url; ?>/contato" title="CONTATO">CONTATO</a></li>
			</div>
		</ul>
	</nav>
</session>