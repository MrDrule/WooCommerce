// Remove decimals from product weight (convert to integer)
add_filter( 'woocommerce_format_weight', 'custom_format_weight', 90, 2 );
function custom_format_weight( $weight_string, $weight ){

    $weight_string  = number_format($weight, 3, ',', '');

    if ( ! is_null( $weight_string ) ) {
        $weight_string .= ' ' . get_option( 'woocommerce_weight_unit' );
    } else {
        $weight_string = __( 'N/A', 'woocommerce' );
    }

    return $weight_string;
}