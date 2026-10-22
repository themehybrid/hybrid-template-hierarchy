<?php

/**
 * Hierarchy\Component against a real WordPress.
 *
 * The component is constructed directly: the hierarchy builders need neither
 * the container nor the app, only WordPress query state.
 */

use Hybrid\Template\Hierarchy\Component;

// WooCommerce is not installed here; templateHierarchy() only asks
// is_woocommerce(), so a stand-in driven by a global is enough.
if ( ! function_exists( 'is_woocommerce' ) ) {
    function is_woocommerce(): bool {
        return ! empty( $GLOBALS['qa_is_woocommerce'] );
    }
}

beforeEach( function () {
    $GLOBALS['qa_is_woocommerce'] = false;
    $GLOBALS['wp_query']          = new WP_Query();
} );

it( 'builds a slug, taxonomy and default template for a queried term', function () {
    // The test database outlives a run, so reuse the term an earlier run made.
    $term                                   = get_term( ( term_exists( 'Shoes', 'category' ) ?: wp_insert_term( 'Shoes', 'category' ) )['term_id'] );
    $GLOBALS['wp_query']->queried_object    = $term;
    $GLOBALS['wp_query']->queried_object_id = $term->term_id;

    expect( ( new Component() )->taxonomy( [ 'category.php' ] ) )
        ->toBe( [ 'taxonomy-category-shoes.php', 'taxonomy-category.php', 'taxonomy.php' ] );
} );

it( 'leaves the hierarchy alone when there is no queried post or term', function () {
    $component = new Component();

    expect( $component->single( [ 'single.php' ] ) )->toBe( [ 'single.php' ] )
        ->and( $component->taxonomy( [ 'category.php' ] ) )->toBe( [ 'category.php' ] );
} );
