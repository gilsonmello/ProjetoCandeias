<?= $this->Html->script('gallery/jquery.chocolat.js') ?>
<?= $this->Html->script('gallery/modernizr.custom.97074.js') ?>
<?= $this->Html->script('gallery/jquery.hoverdir.js') ?>
<?= $this->Html->css('gallery/chocolat.css') ?>
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.gallery #imagem').Chocolat();
	});
</script>
<script type="text/javascript">
	$(function() {
		$(' #da-thumbs > li ').each( function(){
			$(this).hoverdir();
		});
	});
</script>

<!--gallery-starts-->
	<div class="gallery">
		<div class="container">
			<div class="gallery-top heading">
				<h2>Our Gallery</h2>
				<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas tristique orci ac sem. Duis ultricies pharetra</p>
			</div>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
				    <?php foreach($galerias as $galeria): ?>
                        <li>
                            <a id="imagem" href="<?php echo BASE.'/files/galerias/'.$galeria->nome_arquivo;?>" rel="title" class="b-link-stripe b-animate-go  thickbox">
                                <img src="<?php echo BASE.'/files/galerias/'.$galeria->nome_arquivo;?>" alt="" class="img-responsive">
                                <div>
                                    <h5>Education</h5>
                                    <span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
                                </div>
                            </a>
                        </li>
					<?php endforeach; ?>
					<div class="clearfix"> </div>
				</ul>
			</section>
			<?php if($this->Paginator->params()['pageCount'] > 1){?>
                <div class="paginator">
                    <ul class="pagination pagination-lg">
                    <?php ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                    </ul>
                    <p><?= $this->Paginator->counter() ?></p>
                </div>
            <?php }?>
        </div>
	</div>
<!--gallery-end-->
