

<?php get_header();?>
<button class="CreateKit"><a href="#">Créez votre propre kit </a></button>
    <!-- On ajoutera peut-être un p la pour faire un petit sous-titre de blabla ;) -->
</header>
<!-- Header home -->
	<div class="home">
		<span class="slogan"><?php bloginfo('description'); ?></span>	
	</div>

	<!-- Content of the home page -->
	<div class="block-enviro">
	<ul class="choices">
		<li class="enviro">	
			<a href="#">
				<div class="content" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/mer.png);">
					<div class="overlay">
						<p class="situation">MER</p>
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/icone-mer.png" alt="Picto mer">
					</div>
				</div>
			</a>
		</li><!--
		--><li class="enviro">	
			<a href="#">
				<div class="content" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/jungle.png)">
					<div class="overlay">
					<p class="situation">JUNGLE</p>
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/icone-jungle.png" alt="Picto jungle">
					</div>
				</div>
			</a>
		</li><!--
		--><li class="enviro">	
			<a href="#">
				<div class="content" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/montagne.png)">
					<div class="overlay">
					<p class="situation">MONTAGNE</p>
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/icone-montagne.png" alt="Picto montagne">	
					</div>
				</div>
			</a>
		</li><!--
		--><li class="enviro">	
			<a href="#">
				<div class="content" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/ile-deserte.png)">
					<div class="overlay">
					<p class="situation">ILE DESERTE</p>
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/icone-mer.png" alt="Picto mer">	
					</div>
				</div>
			</a>
		</li><!--
		--><li class="enviro">	
			<a href="#">
				<div class="content" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/desert.png)">
					<div class="overlay">
					<p class="situation">DESERT</p>
					<img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/icone-ile.png" alt="Picto ile deserte">
						
					
				</div>
			</a>
		</li>
	</ul>
	</div>
<?php get_footer(); ?>
	