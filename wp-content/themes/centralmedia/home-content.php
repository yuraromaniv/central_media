<!--home-content-->

<div style="height: 58px;"></div>
<div class="row slider-section">
	<!--slider-->
	<div class="col l8 s12 m12">
		<div class="carousel carousel-slider center" data-indicators="true">
			<div class="carousel-fixed-item center">
				<a class="btn waves-effect slider-button white-text darken-text-2">Перейти</a>
			</div>
			<div class="carousel-item slide-1 white-text" href="#one!">
				<h2 class="slider-sign-main">ТОП-5 Новин</h2>
				<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="carousel-item slide-2 white-text" href="#two!">
				<h2 class="slider-sign-main">ТОП-5 Новин</h2>
				<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="carousel-item slide-1 white-text" href="#three!">
				<h2 class="slider-sign-main">ТОП-5 Новин</h2>
				<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="carousel-item slide-2 white-text" href="#four!">
				<h2 class="slider-sign-main">ТОП-5 Новин</h2>
				<p class="white-text slider-sign-small container">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
		</div>
	</div>

	<!--Blogs-->
	<div class="col l4 s12 m12">
		<div class="blogs">
			<span class="blog-sign">БЛОГИ </span>
			<div class="blog-block row">
				<div class="blogger-photo col l3 s1 center" >
					<img src="<?php bloginfo('template_url') ?>/img/users/user.png" alt="user">
				</div> 
				<div class="blogger-article col l9 s11">
					<div class="blogger-name">Yura Romaniv</div>
					<div class="blogger-speach">У нас новенький! Сервісний центр МВС почав роботу в ВС почав роботу в Бахмуті Донецької області</div>
				</div>
			</div>
			<div class="blog-block row">
				<div class="blogger-photo col l3 center" >
					<img src="<?php bloginfo('template_url') ?>/img/users/user.png" alt="user">
				</div> 
				<div class="blogger-article col l9">
					<div class="blogger-name">Yura Romaniv</div>
					<div class="blogger-speach">Половина пятого. У Порошенко – экватор срока на посту.</div>
				</div>
			</div>
			<div class="blog-block row">
				<div class="blogger-photo col l3 center" ><img src="<?php bloginfo('template_url') ?>/img/users/user.png" alt="user"></div>
				<div class="blogger-article col l9">
					<div class="blogger-name">Yura Romaniv</div>
					<div class="blogger-speach">Джерело нового життя або як запхнути ЛНР/ДНР в українське правове поле.</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--news-->
<div class="row content">
	<div class="col l6 s12 m6 news-block ">
		<div class="news-sign center">ОСТАННІ НОВИНИ</div>
		
		<?php 
			 $args = array(
                'post_type' => 'news',
                'publish' => true,
                'paged' => get_query_var('paged')
            );
            query_posts($args);
            if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>
		<div class="article"> 
			<div class="article-title">
				<a href="<?php the_permalink(); ?>" class="hover-link"><i class="fa fa-bar-chart" aria-hidden="true"></i>
					<?php the_title(); ?>
				</a>
			</div>
		</div>
        <?php endwhile; ?>
		<?php endif; ?>
		
		<div class="article"> 
			<div class="article-title">
				<a href="#" class="hover-link"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
					Путін заявив, що Росія сильніша за будь-якого агресора
				</a>
			</div>
		</div>
		<div class="article"> 
			<div class="article-title">
				<a href="#" class="hover-link red-text "><em>фото</em>ДЕПУТАТ У ДНІПРІ ПОПАВСЯ НА ХАБАРІ</a>
			</div>
		</div>
		<div class="article"> 
			<div class="article-title">
				<a href="#" class="hover-link"><em>фото</em>В Росії цензура не пропустила три книги для Сущенка</a>
			</div>
		</div>
		
	</div>
	<!--Videos-->
	<div class="col l3 s12 m6 center video-block">
		<div class="news-sign-video center">ВІДЕО</div>
		<div class="video-list row">
			<div class="youtube col l6">
				<img width="80%" src="<?php bloginfo('template_url'); ?>/img/logo/youtube-icon.png" alt="альтернативный текст" />
				<div class="center">Наш канал YouTube</div>
			</div>
			<div class="youtube col l6">
				<img  width="80%" src="<?php bloginfo('template_url'); ?>/img/logo/youtube-icon.png" alt="альтернативный текст" />
				<div class="center">Наш онлайн канал YouTube</div>
			</div>
		</div>
		<div class="top-video">Топ-5 Відео</div>
		<div class="row video-padding">
			<div class="youtube-top-video col l4">
				<img width="80%" src="http://img.pravda.com/images/doc/7/3/73b1291-kononenko-nasalik-690-_185x114.jpg" alt="альтернативный текст" />
			</div>
			<div class="video-text col l8">Brexit БПП: енергетична команда президента кинулася врозтіч</div>
		</div>
		<div class="row video-padding">
			<div class="youtube-top-video col l4">
				<div class="img-mask"> </div>
				<img  width="80%" src="http://img.pravda.com/images/doc/6/1/61c4289-contrabanda-470_185x114.jpg" alt="альтернативный текст" />
			</div>
			<div class="video-text col l8">Чому депутати надали 100% гарантію депозитам Приватбанку</div>
		</div>
		<div class="row video-padding">
			<div class="youtube-top-video col l4">
				<img width="80%" src="http://img.pravda.com/images/doc/7/e/7e08eea-485-zubko_185x114.jpg" alt="альтернативный текст" />
			</div>
			<div class="video-text col l8">Нічний ярмарок. Що депутати виторгували в бюджеті на наступний рік</div>
		</div>
		<div class="row video-padding">
			<div class="youtube-top-video col l4">
				<img width="80%" src="http://img.pravda.com/images/doc/5/e/5e4556f-690-11-kolomojskiy-dubilet_185x114.jpg" alt="альтернативный текст" />
			</div>
			<div class="video-text col l8">Аудит зовнішньої політики України. Що думають посли?</div>
		</div>
		<div class="row video-padding">
			<div class="youtube-top-video col l4">
				<img width="80%" src="http://img.pravda.com/images/doc/1/b/1b5a270-grojsman-690-11_185x114.jpg" alt="альтернативный текст" />
			</div>
			<div class="video-text col l8">Як зробити хорошу школу? Висновки дослідження PISA</div>
		</div>
	</div>

	<!--state-->
	<div class="col l3 s12 m6 center state-block">
		<div class="state-list">
			<div class="state-sign center">СТАТТІ</div>
			<div class="blogs">
				<?php 
					$args = array(
		                'post_type' => 'articles',
		                'posts_per_page' => 3,
		                'publish' => true,
		                'orderby'     => 'date',
		                'order'       => 'DESC',
		                'paged' => get_query_var('paged')
		            );
		            $firstArticle = false;
		            $myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
					if ($firstArticle == false) {
					?>
						<div class="row main-state">
							<div class="col s12 m12 l12">
								<img src="http://biz.liga.net/upload/iblock/02e/02e83ce1773cad95ffc980897775d6e4.jpg" width="100%" alt="">
								<span class="state-first-name"><?php the_title(); ?></span><br>
								<span><?php the_excerpt(); ?></span>
							</div>
						</div>
					<?php
						} /* end if */
						else{
					?>
					<div class="row other-state">
						<div class="col s12 m12 l12">
							<?php 
								$size = 'thumbnail';
								$attr = 'class=state-other-float';
								the_post_thumbnail( array(125, 102), $attr ); 
							?>
							<div class="state-other-name"><?php the_title(); ?></div>
							<div class="state-other-text"><?php the_excerpt(); ?></div>
						</div>
					</div>

					<?php
						} /* end else */
					?> 

					
				<?php
					$firstArticle = true;
					} /* end foreach */
					wp_reset_postdata();
		        ?>
				
			</div>
		</div>
	</div>
</div>
<br>
<!--polling-->
<div class="row polling">
				<div class="col l4 s12 m6 asking-block">
					<h5 class="asking">Опитування</h5>
				</div>
				<!--partners news-->
				<div class="col l4 s12 m6 news-partners-block">
					<h5 class="partners-news center">Новини партнерів</h5>
					<div class="article"> 
				<div class="article-title">
					<a href="#" class="hover-link"><i class="fa fa-bar-chart" aria-hidden="true"></i>
						Активісти на авто з єврономерами перекрили центр Києва</a>
					</div>
				</div>
				<div class="article"> 
					<div class="article-title">
						<a href="#" class="hover-link"><i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
							Путін заявив, що Росія сильніша за будь-якого агресора</a>
						</div>

					</div>
					<div class="article"> 
						<div class="article-title">
							<a href="#" class="hover-link red-text "><em>фото</em>ДЕПУТАТ У ДНІПРІ ПОПАВСЯ НА ХАБАРІ</a>
						</div>

					</div>
				</div>
				<!--advertising-->
				<div class="col l4 s12 m6 center reklama">
					<img src="<?php bloginfo('template_url'); ?>/img/logo/logo_kodeks.png" width="40%">
				</div>
			</div>
