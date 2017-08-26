<?php get_header(); ?>
	
	<div id="content">

		<div id="inner-content" class="cf">

			<main id="main" class="m-all t-all d-all cf " role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<section id="last-comics" class="entry-content cf parallax">
						<div class="wrap">
							<h2 class="page-title">adicionadas pelo admin</h2>
							<div class="m-all t-all d-all center">
								<ul class="box-last-comic animated fadeInUp">
									<?php
										$args = array( 
										'post_type' => 'post',
										'category_name' => 'new-comic',
										'order' => DESC
									);
									$query = new WP_Query( $args );
									while( $query->have_posts() ) :
									$query->the_post();
										echo '<li class="box-white d-1of3 m-all t-all">';
											the_post_thumbnail('thumb-slider');
										echo '</li>';

										endwhile;
									?>
								</ul>
							</div>
						</div>
					</section>
					<section id="comics">
						<div class="wrap">
							<div class="text-left">
								<h2 class="page-title"><span>Q</span>uadrinhos</h2>
								<?php
									$requisicao = wp_remote_get('http://gateway.marvel.com/v1/public/comics? ts=1&apikey=082dedc949218c63743f5dd4a41b25c5&hash=4c897eaf22cfc4a317fa3cabc3a00fc4', [
										'headers'=>[
											'Access-Control-Allow-Credentials'=>'localhost:8000',
											'Accept'=>'application/json'
										]
									]);
									echo '<pre>';
									$corpo = wp_remote_retrieve_body($requisicao);
									$conteudo = json_decode($corpo);
									$dados = $conteudo->data;
									$quadrinhos = $dados->results;
									$limit = 0;

									foreach($quadrinhos as $quadrinho){
										$teste_thumb = $quadrinho->thumbnail->path.".".$quadrinho->thumbnail->extension;
										if($quadrinho->description != false)
										{
											echo '<a href="" class="m-all t-1of2 d-1of5 box-comic">';
												echo '<img src="'.$teste_thumb.'" class="img-all">' ;
												echo "<h3>$quadrinho->title</h3>";
												/*echo "<p>$quadrinho->description</p>";*/
												/*echo "<span>$quadrinho->isbn</span>";*/
											echo '</a>';
											$limit++;
										}
										if($limit == 5){
											break;
										}
									}
								?>
								
							</div>
						</div>
					</section>
				<?php endwhile; endif; ?>
			</main>
		</div>
	</div>

<?php get_footer(); ?>
