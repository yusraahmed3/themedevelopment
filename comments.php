<?php 

    if(post_password_required()){
        return;
    }
    ?>

    <section>
        <?php if(have_comments()):?>
            <h2 class="py-3"><?php $number =  get_comments_number();
                if( $number === 1){
                    printf(
                        _x(
                            'One comment on &ldquo; %s &rdquo;',
                            'comments title',
                        ),
                        get_the_title()
                    );
                }else{
                    printf(
                        _nx(
                            '%1$s comment on &ldquo; %2$s &rdquo;',
                            '%1$s comments on &ldquo; %2$s &rdquo;',
                            $number,
                            'comments title' 
                        ),
                        number_format_i18n($number),
                        get_the_title()
                    );
                }
            ?></h2>
            <ol>
                <?php wp_list_comments(array(
                    'style' => 'ol',
                    'avatar_size'=> 70
                )); ?>
            </ol>
            <?php endif; ?>

            <?php 
                the_comments_navigation();
            if(!comments_open()) :  ?>
                <p><?php esc_html_e('Comments are closed for this post'); ?></p>
    </section>
    <?php endif; ?>
<?php
    $args = array(
        'title_reply' => '<div class="py-3">Comment</div>',
        'comment_field' => '<div class="form-group">
            <label for="comment"> Comment *</label>
            <br/>
            <textarea id="comment" name="comment" class="form-control"></textarea>
        </div> ',
        'submit_button'=> '<button type="submit" class="btn btn-primary">Submit</button>',
        'fields'=> apply_filters('comment_form_default_fields', array(
            'author' => '<div class="form-group">
            <label for="author">Your Name *</label>
            <inpput id="author" name="author" type="text" class="form-control">
            </div>',
            'email' => '<div class="form-group">
            <label for="email">Your Email *</label>
            <inpput id="email" name="email" type="text" class="form-control">
            </div>',

        ))

    );
    comment_form($args);
?>