

<?php $args_comments = array(
'label_submit'   => __('post comment')
);?>
<?php
$args = array(
    // 'walker'            => null,
    'max_depth'         => '2',
    // 'style'             => 'ul',
    // 'callback'          => null,
    // 'end-callback'      => null,
    // 'type'              => 'all',
    'reply_text'        => 'Reply To Comment',
    // 'page'              => '',
    // 'per_page'          => '',
    // 'avatar_size'       => 32,
    // 'reverse_top_level' => null,
    // 'reverse_children'  => '',
    // 'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
    // 'short_ping'        => false,   // @since 3.6
    // 'echo'              => true     // boolean, default is true
); ?>


<?php wp_list_comments($args_comments); ?>

<?php comment_form( $args_comments); ?>


<!-- 
    <div class="comment_area clearfix">
    <h5 class="title">3 Comments</h5>
    <ol>

    <li class="single_comment_area">

    <div class="comment-content d-flex">

    <div class="comment-author">
    <img src="../img/bg-img/26.jpg" alt="author">
    </div>

    <div class="comment-meta">
    <a href="#" class="post-author">Tom Hardy / <span>28 Sep 2018 at 10:00 am</span></a>
    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sitdown ameto, consectetur, adipisci velit, sed quiata non numqua eius modi tempor incidunt ut labore.</p>
    <a href="#" class="comment-reply">Reply</a>
    </div>
    </div>
    <ol class="children">
    <li class="single_comment_area">

    <div class="comment-content d-flex">

    <div class="comment-author">
    <img src="img/bg-img/27.jpg" alt="author">
    </div>

    <div class="comment-meta">
    <a href="#" class="post-author">Samantha Harvey / <span>28 Sep 2018 at 10:30 am</span></a>
    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sitdown ameto, consectetur, adipisci velit, sed quiata non numqua eius modi tempor incidunt ut labore.</p>
    <a href="#" class="comment-reply">Reply</a>
    </div>
    </div>
    </li>
    </ol>
    </li>

    <li class="single_comment_area">

    <div class="comment-content d-flex">

    <div class="comment-author">
    <img src="img/bg-img/28.jpg" alt="author">
    </div>

    <div class="comment-meta">
    <a href="#" class="post-author">Jonny Evans / <span>28 Sep 2018 at 11:00 am</span></a>
    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sitdown ameto, consectetur, adipisci velit, sed quiata non numqua eius modi tempor incidunt ut labore.</p>
    <a href="#" class="comment-reply">Reply</a>
    </div>
    </div>
    </li>
    </ol>
    </div> -->