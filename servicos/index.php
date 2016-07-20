
<?php include '../includes/head.php'; ?>

<header class="header">
	<?php include '../includes/header.php'; ?>
	<?php include '../includes/slide-servicos.php'; ?>
</header>

<session class="box-conteudo servico">
	<div class="container">
		<div class="row" id="importacao">
			<div class="col-md-5 col-md-offset-1 img-middle center">
				<img src="<?php echo $url; ?>/assets/images/ico-servicos-1.png" alt="IMPORTAÇÃO POR CONTA E ORDEM">
			</div>
			<div class="col-md-6">
				<h2 class="destaque">IMPORTAÇÃO POR CONTA E ORDEM</h2>
				<p>Operação regulamentada pela RFB, na qual, a TOP LOG, através de contrato previamente firmado, figura como importador vinculado ao adquirente, ou seja, o cliente. Nesta modalidade, ambos precisam estar devidamente habilitados no SISCOMEX (Sistema Integrado de Comércio Exterior) leva-se em consideração a capacidade financeira e o limite do adquirente. A TOPLOG pode reduzir os custos finais de importação pelo estado de Santa catarina por meio de seu Regime especial no estado.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 col-md-offset-1 img-middle center">
				<img src="<?php echo $url; ?>/assets/images/ico-servicos-2.png" alt="CONTROLE DE QUALIDADE">
			</div>
			<div class="col-md-6">
				<h2 class="destaque">CONTROLE DE QUALIDADE</h2>
				<p>Por meio da top log, o importador tem a opção de unir lotes menores e consolidar no mesmo embarque  visando a redução do custo do frete e das despesas de destino.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 col-md-offset-1 img-middle center">
				<img src="<?php echo $url; ?>/assets/images/ico-servicos-3.png" alt="COMPRAS CONSOLIDADAS">
			</div>
			<div class="col-md-6">
				<h2 class="destaque">COMPRAS CONSOLIDADAS</h2>
				<p>Por meio da top log, o importador tem a opção de unir lotes menores e consolidar no mesmo embarque  visando a redução do custo do frete e das despesas de destino.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 col-md-offset-1 img-middle center">
				<img src="<?php echo $url; ?>/assets/images/ico-servicos-4.png" alt="COMPRAS CONSOLIDADAS">
			</div>
			<div class="col-md-6">
				<h2 class="destaque">DESENVOLVIMENTO E GESTÃO DE MARCAS PRÓPRIAS</h2>
				<p>Possuímos vasta experiência no desenvolvimento de projetos de marca própria, como criação de layout modernos, manuais, normatização da embalagem, códigos de barra, apoio para cadastramento no cliente e padronização para o PDV. Para que o produto chegue no Brasil pronto para a comercialização.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 col-md-offset-1 img-middle center">
				<img src="<?php echo $url; ?>/assets/images/ico-servicos-5.png" alt="PROSPECÇÃO DE FORNECEDORES">
			</div>
			<div class="col-md-6">
				<h2 class="destaque">PROSPECÇÃO DE FORNECEDORES</h2>
				<p>Temos uma estrutura na China para desenvolvimento de fornecedores para os mais variados segmentos, com mais de 4.000 itens cadastrados é possível buscar um produto de maneira rápida e competitiva.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 col-md-offset-1 img-middle center">
				<img src="<?php echo $url; ?>/assets/images/ico-servicos-6.png" alt="GERENCIAMENTO DE LOGÍSTICA">
			</div>
			<div class="col-md-6">
				<h2 class="destaque">GERENCIAMENTO DE LOGÍSTICA</h2>
				<p>Acompanhamento de todo o trâmite de importação do embarque a descarga no cliente, gerenciando toda a cadeia logística e de despacho aduaneiro.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-5 col-md-offset-1 img-middle center">
				<img src="<?php echo $url; ?>/assets/images/ico-servicos-7.png" alt="COMPRAS NA CHINA">
			</div>
			<div class="col-md-6">
				<h2 class="destaque">COMPRAS NA CHINA</h2>
				<p>Com mais de 10 anos de experiência em compras na China, acompanhamos e orientamos clientes na mais variadas feiras na china como canton fair, Yiwu Market, entre outros. Com equipe brasileira e chinesa buscamos sempre o melhor negócio para o cliente.</p>
			</div>
		</div>
	</div>
</session>

<?php include '../includes/footer.php'; ?>

<script type="text/javascript">
	$(document).ready(function(){
		$('.img-middle').each(function(){
			$(this).css('line-height',$(this).parent().height()+'px');
		});
	})
</script>