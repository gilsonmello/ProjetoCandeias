<?= $this->Html->script('gallery/jquery.chocolat.js') ?>
<?= $this->Html->script('gallery/modernizr.custom.97074.js') ?>
<?= $this->Html->script('gallery/jquery.hoverdir.js') ?>
<?= $this->Html->css('gallery/chocolat.css') ?>
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.gallery a').Chocolat();
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
					<li>
						<a href="img/g1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo BASE;?>/img/g1.jpg" alt="" class="img-responsive">
							<div>
								<h5>Education</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="img/g2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo BASE;?>/img/g2.jpg" alt="">
							<div>
								<h5>Education</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="img/g3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo BASE;?>/img/g3.jpg" alt="">
							<div>
								<h5>Education</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="img/g4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="<?php echo BASE;?>/img/g4.jpg" alt="">
							<div>
								<h5>Education</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>	
						<a href="img/g5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="img/g5.jpg" alt="">
							<div>
								<h5>Education</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="img/g6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="img/g6.jpg" alt="">
							<div>
								<h5>Education</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="img/g7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="img/g7.jpg" alt="">
							<div>
								<h5>Education</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="img/g8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="img/g8.jpg" alt="">
							<div>
								<h5>Education</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<li>
						<a href="img/g9.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="img/g9.jpg" alt="">
							<div>
								<h5>Education</h5>
								<span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
							</div>
						</a>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</section>
				
		
        </div>
	</div>
<!--gallery-end-->
