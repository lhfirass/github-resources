<?php
	equipo_enovathemes_global_variables();
 	$blog_single_social         = (isset($GLOBALS['equipo_enovathemes']['blog-single-social']) && $GLOBALS['equipo_enovathemes']['blog-single-social'] == 1) ? "true" : "false";
 	$blog_authorbox             = (isset($GLOBALS['equipo_enovathemes']['blog-authorbox']) && $GLOBALS['equipo_enovathemes']['blog-authorbox'] == 1) ? "true" : "false";
	$blog_single_sidebar        = (isset($GLOBALS['equipo_enovathemes']['blog-single-sidebar']) && $GLOBALS['equipo_enovathemes']['blog-single-sidebar']) ? $GLOBALS['equipo_enovathemes']['blog-single-sidebar'] : "none";

	if (is_active_sidebar('blog-single-widgets') && $blog_single_sidebar == "none" && !defined('ENOVATHEMES_ADDONS')) {
		$blog_single_sidebar = 'right';
	}

?>

<div id="single-post-page" class="single-post-page social-links-<?php echo esc_attr($blog_single_social); ?>">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<?php

					$post_format   = get_post_format(get_the_ID());
			        $link_url      = get_post_meta( get_the_ID(), 'enovathemes_addons_link', true );
			        $status_author = get_post_meta( get_the_ID(), 'enovathemes_addons_status', true );
			        $quote_author  = get_post_meta( get_the_ID(), 'enovathemes_addons_quote', true );
			        $audio         = get_post_meta( get_the_ID(), 'enovathemes_addons_audio', true );
			        $audio_embed   = get_post_meta( get_the_ID(), 'enovathemes_addons_audio_embed', true );
			        $video         = get_post_meta( get_the_ID(), 'enovathemes_addons_video', true );
			        $video_embed   = get_post_meta( get_the_ID(), 'enovathemes_addons_video_embed', true );
			        $gallery       = get_post_meta( get_the_ID(), 'enovathemes_addons_gallery', true );
			        $disable_image = get_post_meta( get_the_ID(), 'enovathemes_addons_disable_image', true );

					$media_output = "";
                    $body_output  = "";
                    $title_output = "";
                    $meta_output  = "";

					if ('' != get_the_category_list()){
						$meta_output .='<div class="post-meta et-clearfix">';
							$meta_output .='<div class="post-category">'.get_the_category_list(esc_html__( ', ', 'equipo' )).'</div>';
						$meta_output .='</div>';
					}

                    $title_output .='<div class="post-title-section">';
				        $title_output .= '<div class="post-date-inline-single"><span>'.get_the_date().'</span></div>';
						if ( '' != the_title_attribute( 'echo=0' ) ){
							$title_output .='<h1 class="post-title entry-title">';
								$title_output .=get_the_title();
							$title_output .='</h1>';
						}
					$title_output .='</div>';

					if ($post_format == "0" || $post_format == 'chat'){
						if ($disable_image != "on") {
	                        if (has_post_thumbnail()){

	                            $media_output .='<div class="post-image overlay-hover post-media">';
	                            	if (!empty($meta_output)) {
	                            		$media_output .= $meta_output;
	                            	}
	                                $media_output .='<div class="image-container image-container-single">';
	                                	$media_output .=equipo_enovathemes_build_post_media('full','full',false);
	                                $media_output .='</div>';
	                            $media_output .='</div>';
	                        }
                        }
                    } elseif($post_format == "gallery") {
                    	if ($disable_image != "on") {
	                        if (!empty($gallery)) {
	                            $media_output .='<div class="post-gallery post-media overlay-hover ">';
	                            	if (!empty($meta_output)) {
	                            		$media_output .= $meta_output;
	                            	}
	                                $media_output .='<ul class="slides tns-slider tns-gallery tns-subpixel tns-calc tns-horizontal">';
	                                    foreach ($gallery as $image => $url){
	                                        $media_output .='<li >';
	                                            $media_output .='<div class="image-container image-container-single">';
	                                                $media_output .=equipo_enovathemes_build_post_media('full','full',$image);
	                                            $media_output .='</div>';
	                                        $media_output .='</li>';
	                                    }
	                                $media_output .='</ul>';
	                            $media_output .='</div>';

	                        } else {

	                            if (has_post_thumbnail()){
	                                $media_output .='<div class="post-image overlay-hover post-media">';
	                                	if (!empty($meta_output)) {
		                            		$media_output .= $meta_output;
		                            	}
	                                    $media_output .='<div class="image-container image-container-single">';
	                                    	$media_output .=equipo_enovathemes_build_post_media('full','full',false);
	                                    $media_output .='</div>';
	                                $media_output .='</div>';
	                            }

	                        }
                        }
                    } elseif($post_format == "video") {
                    	$media_output .='<div class="post-video post-media">';
	                        if (has_post_thumbnail()){

	                            $link_class[] = 'video-btn';

	                            $attributes   = array();
	                            $attributes[] = 'href="#"';
	                            $attributes[] = 'class="'.implode(" ", $link_class).'"';

	                            $media_output .='<div class="image-container image-container-single">';

	                            	if (!empty($meta_output)) {
	                            		$media_output .= $meta_output;
	                            	}

	                                $media_output .= equipo_enovathemes_build_post_media('full','full',false);

	                                $media_output .='<a '.implode(" ", $attributes).'>';
	                                    $media_output .='<svg viewBox="0 0 512 512">';
	                                        $media_output .='<path class="back" d="M512,256c0,141.38-114.62,256-256,256S0,397.38,0,256,114.62,0,256,0,512,114.62,512,256Z" />';
	                                        $media_output .='<path class="play" d="M346.89,261.61,205.11,350c-4.76,3-11.11-.24-11.11-5.61V167.62c0-5.37,6.35-8.57,11.11-5.61l141.78,88.38A6.61,6.61,0,0,1,346.89,261.61Z"/>';
	                                    $media_output .='</svg>';
	                                $media_output .='</a>';
	                                
	                            $media_output .='</div>';
	                        }

	                        if(!empty($video_embed) && empty($video)) {

	                            $video_embed = str_replace('watch?v=', 'embed/', $video_embed);
	                            $video_embed = str_replace('//vimeo.com/', '//player.vimeo.com/video/', $video_embed);

	                            $media_output .='<iframe allowfullscreen="allowfullscreen" allow="autoplay" frameBorder="0" src="'.$video_embed.'" class="iframevideo video-element"></iframe>';

	                        } elseif(!empty($video)) {

	                            $media_output .='<video poster="'.EQUIPO_ENOVATHEMES_IMAGES.'/transparent.png'.'" id="video-'.get_the_ID().'" class="lazy video-element" playsinline controls>';

	                                if (!empty($video)) {
	                                    $media_output .='<source data-src="'.$video.'" type="video/mp4">';
	                                }
	                                
	                            $media_output .='</video>';

	                        }
                        $media_output .='</div>';
                    } elseif($post_format == "audio"){

                    	if (has_post_thumbnail()){
                            $media_output .='<div class="post-image overlay-hover post-media">';
                            	if (!empty($meta_output)) {
                            		$media_output .= $meta_output;
                            	}
                                $media_output .='<div class="image-container image-container-single">';
                                	$media_output .=equipo_enovathemes_build_post_media('full','full',false);
                                $media_output .='</div>';
                            $media_output .='</div>';
                        }
                    	
                        $media_output .='<div class="post-audio post-media">';
		                    if(!empty($audio_embed) && empty($audio)) {
		                        $media_output .= '<iframe allowfullscreen="allowfullscreen" frameBorder="0" src="'.$audio_embed.'" class="iframeaudio"></iframe>';
		                    } elseif (!empty($audio)) {
		                        $media_output .='<audio id="audio-'.get_the_ID().'" controls>';
		                            $media_output .='<source src="'.$audio.'" type="audio/mp3">';
		                        $media_output .='</audio>';
		                    }
		                $media_output .='</div>';
                    }

                    $body_output .='<div class="post-body et-clearfix">';

	                    $body_output .='<div class="post-body-inner">';

	                    	$body_output .='<div class="post-content et-clearfix">';

	                    		if ($post_format == "link") {
				                    $body_output .='<a class="post-link" href="'.esc_url($link_url).'" target="_blank" >'.the_title_attribute( 'echo=0' ).'</a>';
				                } else {

			                        if ( '' != get_the_content() ){

			                        	$content = apply_filters( 'the_content', get_the_content() );
			                        	$content = str_replace( ']]>', ']]&gt;', $content );

		                                $body_output .= $content; 
		                                $defaults = array(
		                                    'before'           => '<div id="page-links">',
		                                    'after'            => '</div>',
		                                    'link_before'      => '',
		                                    'link_after'       => '',
		                                    'next_or_number'   => 'next',
		                                    'separator'        => ' ',
		                                    'nextpagelink'     => esc_html__( 'Continue reading', 'equipo' ),
		                                    'previouspagelink' => esc_html__( 'Go back' , 'equipo'),
		                                    'pagelink'         => '%',
		                                    'echo'             => 0
		                                );
		                                $body_output .= wp_link_pages($defaults);
			                            
			                        }

			                        if (!empty($quote_author)){
			                            $body_output .= '<div class="post-quote-author">'.esc_attr($quote_author).'</div>';
			                        }

			                        if (!empty($status_author)){
			                            $body_output .= '<div class="post-status-author">'.esc_attr($status_author).'</div>';
			                        }

		                        }

							$body_output .='</div>';

							$body_output .='<div class="post-bottom et-clearfix">';

								if (has_tag()) {
									$body_output .='<div class="post-tags-single">'.esc_html__("Tags:", 'equipo').' '.get_the_tag_list( '', ' ', '' ).'</div>';
								}

								if (function_exists('enovathemes_addons_post_social_share') && $blog_single_social == "true"){
									$body_output .= enovathemes_addons_post_social_share('post');
								}

							$body_output .='</div>';

						$body_output .='</div>';

					$body_output .='</div>';

				?>

				<div class="post-inner et-clearfix">

					<?php echo equipo_enovathemes_output_html($media_output); ?>
					<?php echo equipo_enovathemes_output_html($title_output); ?>
					<?php echo equipo_enovathemes_output_html($body_output); ?>

					<?php if ($blog_authorbox == "true"): ?>
						<?php if ('' != get_the_author_meta("description")): ?>
							<div class="post-author-box">
								<?php if ('' != get_avatar(get_the_author_meta('email'), '72')): ?>
									<div class="post-author-gavatar">
										<?php echo get_avatar(get_the_author_meta('email'), '72'); ?>
									</div>
								<?php endif ?>
								<div class="post-author-info">
									<h4 class="post-author-title"><a href="<?php echo get_author_posts_url( get_the_author_meta("ID") ); ?>"><?php echo get_the_author_meta("display_name"); ?></a></h4>
									<div class="post-author-description"><?php echo get_the_author_meta("description"); ?></div>
								</div>
							</div>
						<?php endif ?>
					<?php endif ?>

					<?php get_sidebar('after-single'); ?>

					<div class="post-comments-section">
						<?php comments_template(); ?>
					</div>

				</div>

			</article>

		<?php endwhile; ?>

	<?php else : ?>
		<?php equipo_enovathemes_not_found('post'); ?>
	<?php endif; ?>
</div>