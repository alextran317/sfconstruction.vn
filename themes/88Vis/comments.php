<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'twentysixteen' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'Có %1$s bình luận cho sản phẩm &ldquo;%2$s&rdquo;',
							'Có %1$s bình luận cho sản phẩm &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'twentysixteen'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentysixteen' ); ?></p>
	<?php endif; ?>

	<?php
		comment_form( array(
			'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h4>',
		) );
	?>

</div><!-- .comments-area -->
<style type="text/css">
.form-submit input{ background: rgba(0, 0, 0, 0.85);color: #fff; padding: 5px 10px; border: none; }
.form-submit input:hover{ background: #101010; }

.says{ display: none; }
.comment-respond,
.entry-pings,
.entry-comments {
    color: #444;
    padding: 20px 45px 40px 45px;
    border: 1px solid #ccc;
    overflow: hidden;
    background: #fff;
    -webkit-box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
    box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
    border-left: 4px solid #444;
}
.entry-comments h3{
    font-size: 30px;
    margin-bottom: 30px;
}
.comment-respond h3,
.entry-pings h3{
	font-size: 20px;
	margin-bottom: 30px;
}
.comment-respond {
	padding-bottom: 5%;
	margin: 20px 1px 20px 1px;
        border-left: none !important;
}
.comment-header {
	color: #adaeb3;
	font-size: 14px;
	margin-bottom: 20px;
}
.comment-header cite a {
	border: none;
	font-style: normal;
	font-size: 16px;
	font-weight: bold;
}
.comment-header .comment-meta a {
	border: none;
	color: #adaeb3;
}
li.comment {
	background-color: #fff;
	border-right: none;
}
.comment-content {
	clear: both;
	overflow: hidden;
}
.comment-list li {
	font-size: 14px;
	padding: 20px 30px 20px 50px;
}
.comment-list .children {
	margin-top: 40px;
	border: 1px solid #ccc;
}
.comment-list li li {
	background-color: #f5f5f6;
}
.comment-list li li li {
	background-color: #fff;
}
.comment-respond input[type="email"],
.comment-respond input[type="text"],
.comment-respond input[type="url"],textarea {
	width: 60%;
	padding: 6px;
}
.comment-respond label {
	display: block;
	margin-right: 12px;
}
.entry-comments .comment-author {
	margin-bottom: 0;
	position: relative;
}
.entry-comments .comment-author img {
	border-radius: 50%;
	border: 5px solid #fff;
	left: -80px;
	top: -5px;
	position: absolute;
	width: 60px;
}
.entry-pings .reply {
	display: none;
}
.bypostauthor {
}
.form-allowed-tags {
	background-color: #f5f5f5;
	font-size: 16px;
	padding: 24px;
}
.comment-reply-link{
    cursor: pointer;
    background-color: #444;
    border: none;
    border-radius: 3px;
    color: #fff;
    font-size: 12px;
    font-weight: 300;
    letter-spacing: 1px;
    padding: 4px 10px 4px;
    text-transform: uppercase;
    width: auto;
}
.comment-reply-link:hover{
    color: #fff;
}
.comment-notes{
    display:none;   
}
</style>