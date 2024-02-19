<?php

function woo_course_slider_product()
{

    $args = array(
        'post_status'   => 'publish',
        'post_type'     => 'product',
        'orderby'        => 'meta_value_num',
        'meta_key'       => '_price',
        'order'         =>  'ASC',
        'posts_per_page' => 4,
        'tax_query' => [array(
            'taxonomy' => 'product_visibility',
            'field'    => 'name',
            'terms'    => 'featured',
        )]

    );

    $products = new WP_Query($args);

    while ($products->have_posts()) {
        $products->the_post();
?>
        <div class="swiper-slide">

            <div class="swiperRec__img-wrp">
                <?php woocommerce_template_loop_product_thumbnail()?>
            </div>
            <h3 class="swiperRec__goods-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
            <div class="swiperRec__prices-wrp">
                <span class="swiperRec__goods-price"><?php woocommerce_template_loop_price()?></span>
            </div>
            <?php woocommerce_template_loop_add_to_cart()?>
        </div>
<?php

    }

    wp_reset_postdata(); // ВАЖНО вернуть global $post обратно
}
