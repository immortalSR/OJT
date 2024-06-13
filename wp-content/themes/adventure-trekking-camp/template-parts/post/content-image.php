<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Adventure Trekking Camp
 * @since 1.0
 */
?>
<div id="Category-section" class="entry-content">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="postbox smallpostimage p-3 wow zoomInDown">
			<?php $blog_archive_ordering = get_theme_mod('archieve_post_order', array('title', 'image', 'meta','btn'));
			foreach ($blog_archive_ordering as $post_data_order) :
				if ('title' === $post_data_order) :?>
				    <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
				<?php elseif ('image' === $post_data_order) :?>
			        <?php
					// Get the post content
					$post_content = apply_filters('the_content', get_the_content());

					// Create a DOMDocument to parse the HTML content
					$dom = new DOMDocument();
					@$dom->loadHTML($post_content);

					// Find and display the first image in the post content
					$images = $dom->getElementsByTagName('img');

					if ($images->length > 0) {
					    $first_image = $images->item(0);
					    $image_url = $first_image->getAttribute('src');
					    
					    if (!empty($image_url)) {
					        echo '<img src="' . esc_url($image_url) . '">';
					    }
					}
				?>	
				<?php elseif ('meta' === $post_data_order) :?>
				    <div class="date-box mb-2 text-center">
						<?php if( get_option('adventure_trekking_camp_date',false) != 'off'){ ?>
							<span class="mr-2"><i class="<?php echo esc_attr(get_theme_mod('adventure_trekking_camp_date_icon','far fa-calendar-alt')); ?> mr-2"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
						<?php } ?>
						<?php if( get_option('adventure_trekking_camp_admin',false) != 'off'){ ?>
							<span class="entry-author mr-2"><i class="<?php echo esc_attr(get_theme_mod('adventure_trekking_camp_author_icon','fas fa-user')); ?> mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
						<?php }?>
						<?php if( get_option('adventure_trekking_camp_comment',false) != 'off'){ ?>
							<span class="entry-comments mr-2"><i class="<?php echo esc_attr(get_theme_mod('adventure_trekking_camp_comment_icon','fas fa-comments')); ?> mr-2"></i> <?php comments_number( __('0 Comments','adventure-trekking-camp'), __('0 Comments','adventure-trekking-camp'), __('% Comments','adventure-trekking-camp')); ?></span>
						<?php }?>
						<?php if( get_option('adventure_trekking_camp_tag',false) != 'off'){ ?>
							<span class="tags"><i class="<?php echo esc_attr(get_theme_mod('adventure_trekking_camp_tag_icon','fas fa-tags')); ?> mr-2"></i> <?php adventure_trekking_camp_display_post_tag_count(); ?></span>
						<?php }?>
					</div>
				<?php elseif ('btn' === $post_data_order) :?>
				    <div class="link-more mb-2 text-center">
						<a class="more-link" href="<?php echo esc_url( get_permalink() );?>"><?php echo esc_html(get_theme_mod('adventure_trekking_camp_read_more_text',__('Read More','adventure-trekking-camp'))); ?></a>
			  		</div>
				<?php endif;
			endforeach;
			?>       
		  	<div class="clearfix"></div>
		</div>
	</div>
</div>