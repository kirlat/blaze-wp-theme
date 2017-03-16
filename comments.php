<?php
namespace Blaze;
function blaze_comment_delete_link( $text = '' ) {
    $id = get_comment_ID();
    if ( current_user_can('editor') || current_user_can('administrator') ) {
        echo '<a class="comment-delete" href="' . admin_url( "comment.php?action=cdc&c=$id" ) . '">' . $text . '</a>';
    }
}

function blaze_comment_spam_link( $text = '' ) {
    $id = get_comment_ID();
    if ( current_user_can('editor') || current_user_can('administrator') ) {
        echo '<a class="comment-spam" title="" href="' . admin_url( "comment.php?action=cdc&dt=spam&c=$id" ) . '">' . $text . '</a>';
    }
}

function blaze_comment_permalink( $text = 'Permalink' ) {
    echo '<a class="comment-permalink" href="' . esc_url( get_comment_link( get_comment_ID() ) ) . '">' . $text . '</a>';
}

function blaze_one_comment( $comment, $args, $depth ) {
    $GLOBALS["comment"] = $comment;
    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    <article>
        <header>
            <?php if ( $args["avatar_size"] != 0 ) {
                echo get_avatar( $comment, $args["avatar_size"] );
            }
            ?>
            <span class="comment-author">
                    <?php comment_author_link(); ?>
                </span>
            <?php blaze_comment_permalink(); ?>
            <time class="comment-date" pubdate datetime="<?php echo get_comment_time( 'c' ); ?>"><?php
                echo get_comment_date() . ' &mdash; ' . get_comment_time();
                ?></time>
            <?php edit_comment_link( __( "Edit", 'blaze_theme' ) ); ?>
            <?php blaze_comment_delete_link( __( "Delete", 'blaze_theme' ) ); ?>
            <?php blaze_comment_spam_link( __( "Spam", 'blaze_theme' ) ); ?>


        </header>
        <div>
            <?php comment_text() ?>
            <?php if ( $comment->comment_approved == "0" ) : ?>
                <p class="comment-awaiting-moderation">
                    <?php _e( "Your comment is awaiting moderation.", 'blaze_theme' ); ?>
                </p>
            <?php endif; ?>
        </div>
        <footer>
            <?php echo comment_reply_link( array(
                "reply_text" => __( "Reply", 'blaze_theme' ),
                "depth"      => $depth,
                "max_depth"  => $args["max_depth"]
            ) ); ?>
        </footer>
    </article>
    <?php
}
?>

<?php if ( post_password_required() ) : ?>
    <div id="comments">
        <p class="nopassword"><?php _e("This post is password protected. Enter the password to view comments.", 'blaze_theme'); ?></p>
    </div><!-- #comments -->
    <?php return;
endif; ?>

<?php /* If there are no comments yet AND the comments are closed, don't display
anything at all */
if ( have_comments() OR comments_open() ) : ?>
    <div id="comments">

        <?php if ( have_comments() ) : ?>
            <h2 id="comments-title">
                <?php comments_number( __("No comments yet", 'blaze_theme'), __("1 comment", 'blaze_theme'), __("% comments", 'blaze_theme') ); ?>
            </h2>

            <?php $paginateCommentsLinks = paginate_comments_links( "echo=0" );
            if ( $paginateCommentsLinks != "" ) {
                ?>
                <div class="commentnav" id="commentnav1">
                    <?php echo $paginateCommentsLinks; ?>
                </div>
            <?php } ?>

            <ul class="commentlist">
                <?php wp_list_comments( array(
                        "avatar_size" => 50,
                        "reply_text"  => __("Reply", 'blaze_theme'),
                        "login_text"  => __("Login to Reply", 'blaze_theme'),
                        "callback"    => "\Blaze\blaze_one_comment",
                        "type"        => "all"
                ) ); ?>
            </ul>

            <?php $paginateCommentsLinks = paginate_comments_links( "echo=0" );
            if ( $paginateCommentsLinks != "" ) {
                ?>
                <div class="commentnav" id="commentnav1">
                    <?php echo $paginateCommentsLinks; ?>
                </div>
            <?php } ?>

        <?php endif; // End 'have_comments' ?>

        <?php /* 'comments closed' only displayed if there are existing comments,
        but comments are now closed */
        if ( ! comments_open() ) :  ?>

            <p class="nocomments"></p>

        <?php else: // Comments are open, display form: ?>

            <?php global $aria_req, $post_id, $required_text; // These values aren't available else:

            // author, email and url fields are set in a separate variable first:
            $fields = array(
                    'author' => '<p><input class="text author" id="comment-author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' tabindex="1" />'
                            . '&nbsp;&nbsp;<label for="author">'.__("Author", 'blaze_theme').( $req ? __("(required)", 'blaze_theme') : '' ) . '</label></p>',
                    'email'  => '<p><input class="text email" id="comment-email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . '  tabindex="2" />' .
                            '&nbsp;&nbsp;<label for="email"><strong>'.__("Email", 'blaze_theme').'</strong>' . ( $req ? __("(will not be published)(required)", 'blaze_theme') : '' ) . '</label></p>',
                    'url'    => '<p><input class="text url" id="comment-url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"  tabindex="3" />' .
                            '&nbsp;&nbsp;<label for="url">'.__("Website", 'blaze_theme').'</label></p>'
            );

            // The rest is set here:
            $current_user = wp_get_current_user();
            $user_identity = $current_user->display_name;
            $logged_out_text = sprintf(__("You must be <a href='%s'>logged in</a> to post a comment.", 'blaze_theme'), "#");
            $logged_in_text = sprintf(__("Logged in as <a href='%s'>%s</a>. <a href='%s' title='Log out of this account'>Log out?</a>", 'blaze_theme'), "#", "", "#");
            $comment_form_settings = array(
                    'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
                    'comment_field'        => '<p><textarea name="comment" id="comment-form" rows="10" cols="60" tabindex="4"></textarea></p>',
                    'comment_notes_before' => '<p class="thesetags">'.__("You can use these HTML tags:", 'blaze_theme').'</p><p class="xhtml-tags"><code>' . allowed_tags() . '</code></p>',
                    'comment_notes_after'  => __(" ", 'blaze_theme'),
                    'id_form'              => 'commentform',
                    'id_submit'            => 'submit',
                    'title_reply'          => __("Leave a Reply", 'blaze_theme'),
                    'title_reply_to'       => __("Leave a Reply to %s", 'blaze_theme'),
                    'cancel_reply_link'    => __("Cancel Reply", 'blaze_theme'),
                    'label_submit'         => __("Post Comment", 'blaze_theme')
            );

            comment_form( $comment_form_settings ); ?>
        <?php endif; // End 'comments open, display form ?>

    </div><!-- #comments -->
<?php endif; // End 'if have comments' OR 'comments open' ?>