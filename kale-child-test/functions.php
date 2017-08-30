<?php

if ( ! function_exists ( 'woocommerce_template_loop_product_title' ) ){
    function woocommerce_template_loop_product_title() {
		
        if( strcasecmp(get_the_title(),"The Mender Massage Oil") ==0 ) {
            echo '<h2 class="woocommerce-loop-product__title"> The Mender </h2>';
            echo '<h3> Massage Oil </h3>';
        } else if( strcasecmp(get_the_title(),"The Dexter Hair Oil") ==0 ) {
            echo '<h2 class="woocommerce-loop-product__title"> The Dexter </h2>';
            echo '<h3> Hair Oil </h3>';
        } else {
            echo '<h2 class="woocommerce-loop-product__title">' . get_the_title() . '</h2>';
        }
	}
}
?>