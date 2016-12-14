<?php
require get_template_directory() . '/theme-optionen.php';

//佈景主題主要程式碼
register_nav_menus(
array(
'primary-menu' => __( '主選單' )
)
);

//wordpress隱藏上方的工具列
add_filter('show_admin_bar', '__return_false');

//佈景主題支援特色背景

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-header' );
}


// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

//佈景主題支援客製page
function my_post_template($template) {
   if ( !is_single() ) return $template;
   global $wp_query;
   $c_template = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
   return empty( $c_template ) ? $template : $c_template;
}
 
add_filter( 'template_include', 'my_post_template' );
 
function register_posts_templates() {
   add_post_type_support( 'post', 'page-attributes' );
}
 
add_action( 'init', 'register_posts_templates' );

//佈景主題自訂頁碼
function wp_pagenavi() {
global $wp_query;
$max = $wp_query->max_num_pages;
if ( !$current = get_query_var('paged') ) $current = 1;
$args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
$args['total'] = $max;
$args['current'] = $current;
$args['prev_text'] = '<< 上一頁';
$args['next_text'] = '下一頁 >>';
if ( $max > 1 ){ 
echo '<div class="wp-pagenavi">' . paginate_links($args) . '</div>';}
}

//佈景主題自訂顯示留言
function displaycomments($comment, $args, $depth){
$GLOBALS['comment'] = $comment;
?>
<div class="comment-list-box">
<div class="comment-author">
<?php echo get_avatar( $comment, 40 ); ?>
</div>
<div class="comment-fn">
<?php printf(__('<span class="fn">%s</span>'), get_comment_author_link()) ?>　
<?php printf(edit_comment_link()) ?>
</div>
</div>
<?php if ($comment->comment_approved == '0') : ?>
<em class="comment-approved">你的留言正在審核中...</em>
<?php endif;?>
<?php comment_text() ?>
<?php
}

//佈景主題sidebar註冊
if ( function_exists('register_sidebar') ){
	

register_sidebar(array(
'name' => '首頁Featured Wrapper',
'id' => 'news_left',
'description' => '顯示於首頁Featured Wrapper左側的選單。',
'before_widget' => '<section>',
'after_widget' => '</section>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));

register_sidebar(array(
'name' => '文章左側側邊攔',
'id' => 'sidebarleft',
'description' => '顯示於文章左方。',
'before_widget' => '<section>',
'after_widget' => '</section>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));

register_sidebar(array(
'name' => 'Footer左側選單',
'id' => 'footerleft',
'description' => '顯示於頁面Footer左側的選單。',
'before_widget' => '<section>',
'after_widget' => '</section>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));

register_sidebar(array(
'name' => 'Footer中間選單',
'id' => 'footercenter',
'description' => '顯示於頁面Footer中間的選單。',
'before_widget' => '<section>',
'after_widget' => '</section>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));

register_sidebar(array(
'name' => 'Footer右側選單',
'id' => 'footerright',
'description' => '顯示於頁面Footer右側的選單。',
'before_widget' => '<section>',
'after_widget' => '</section>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));

}

//佈景主題客製回應表單
function my_comment_form_defaults( $defaults ) {
	$post_id = get_the_ID();
	$user = wp_get_current_user();
	$user_identity = $user->exists() ? $user->display_name : '';
    $defaults['logged_in_as'] = '<p class="logged-in-as">' . sprintf( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', get_edit_user_link(), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'my_comment_form_defaults' );

function modify_read_more_link() {
return '';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

function my_add_next_page_button( $buttons, $id ){
 
    if ( 'content' != $id )
        return $buttons;
 
    array_splice( $buttons, 13, 0, 'wp_page' );
 
    return $buttons;
}
add_filter( 'mce_buttons', 'my_add_next_page_button', 1, 2 ); 

function my_wp_link_page( $i ) {
	global $wp_rewrite;
	$post = get_post();
	$query_args = array();

	if ( 1 == $i ) {
		$url = get_permalink();
	} else {
		if ( '' == get_option('permalink_structure') || in_array($post->post_status, array('draft', 'pending')) )
			$url = add_query_arg( 'page', $i, get_permalink() );
		elseif ( 'page' == get_option('show_on_front') && get_option('page_on_front') == $post->ID )
			$url = trailingslashit(get_permalink()) . user_trailingslashit("$wp_rewrite->pagination_base/" . $i, 'single_paged');
		else
			$url = trailingslashit(get_permalink()) . user_trailingslashit($i, 'single_paged');
	}

	if ( is_preview() ) {

		if ( ( 'draft' !== $post->post_status ) && isset( $_GET['preview_id'], $_GET['preview_nonce'] ) ) {
			$query_args['preview_id'] = wp_unslash( $_GET['preview_id'] );
			$query_args['preview_nonce'] = wp_unslash( $_GET['preview_nonce'] );
		}

		$url = get_preview_post_link( $post, $query_args, $url );
	}

	return  'href="' . esc_url( $url ) . '">';
}
add_filter( '_wp_link_page', 'my_wp_link_page' ); 

function custom_wp_link_pages( $args = '' ) {
	$defaults = array(
		'before' => '<div class="wp-pagenavi">',
		'after' => '</div>',
		'text_before' => '',
		'text_after' => '',
		'next_or_number' => 'number',
		'nextpagelink' => __( 'Next page' ),
		'previouspagelink' => __( 'Previous page' ),
		'pagelink' => '%',
		'echo' => 1
	);

	$r = wp_parse_args( $args, $defaults );
	$r = apply_filters( 'wp_link_pages_args', $r );
	extract( $r, EXTR_SKIP );

	global $page, $numpages, $multipage, $more, $pagenow;

	$output = '';
	if ( $multipage ) {
		if ( 'number' == $next_or_number ) {
			$output .= $before;
			for ( $i = 1; $i < ( $numpages + 1 ); $i = $i + 1 ) {
				$j = str_replace( '%', $i, $pagelink );
				$output .= ' ';
				if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
					$output .= '<a class="page-numbers" ' . my_wp_link_page( $i );
				else
					$output .= '<a class="page-numbers current">';

				$output .= $text_before . $j . $text_after;
				if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
					$output .= '</a></a>';
				else
					$output .= '</a>';
			}
			$output .= $after;
		} else {
			if ( $more ) {
				$output .= $before;
				$i = $page - 1;
				if ( $i && $more ) {
					$output .= my_wp_link_page( $i );
					$output .= $text_before . $previouspagelink . $text_after . '</a>';
				}
				$i = $page + 1;
				if ( $i <= $numpages && $more ) {
					$output .= my_wp_link_page( $i );
					$output .= $text_before . $nextpagelink . $text_after . '</a>';
				}
				$output .= $after;
			}
		}
	}

	if ( $echo )
		echo $output;

	return $output;
}
add_filter( 'wp_link_pages', 'custom_wp_link_pages'); 


//siderbar相關文章
function get_siderbar_similar_post($post_id){
	global $post;
	$tags = wp_get_post_tags($post_id);
   
    if ($tags) {
	$tag_ids = array();
	
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
			$args=array(
				'tag__in' => $tag_ids,
				'post__not_in' => array($post->ID),
				'post_type' => 'any',
				'posts_per_page'=>10, // Number of related posts to display.
				'caller_get_posts'=>1
			);
 
	$my_query = new wp_query( $args );
 
        if( $my_query->have_posts() ) :    while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<li>
				<?php if ( has_post_thumbnail() ) : ?> <a href="<?php the_permalink(); ?>" class="image left"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'image' ) ); ?><?php endif;?></a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p style="font-size:12px;"><?php echo(get_the_excerpt()); ?></p>
			</li>
        <?php endwhile;    endif; wp_reset_query();
        }
    }
	

//讓媒體庫也有獨立分類
function ludou_create_media_category() {
  $args = array(
    'label' => '媒體分類',
    'hierarchical' => true,
    'show_admin_column' => true,
    'show_ui'      => true,
    'query_var'    => true,
    'rewrite'      => true,
  );

  register_taxonomy( 'attachment_category', 'attachment', $args );
}

add_action( 'init', 'ludou_create_media_category' );
	
//佈景主題後臺功能
if ( ! function_exists( 'of_get_option' ) ) :
function of_get_option( $name, $default = false ) {

  $option_name = '';
  // Get option settings from database
  $options = get_option( 'momentum' );

  // Return specific option
  if ( isset( $options[$name] ) ) {
    return $options[$name];
  }

  return $default;
}
endif;

function my_content_manipulator($content){
    if( is_ssl() ){
        $content = str_replace('http://dadumt.honghuafund.org/wp-content/uploads', 'https://dadumt.honghuafund.org/wp-content/uploads', $content);
    }
    return $content;
}
add_filter('the_content', 'my_content_manipulator');

?>