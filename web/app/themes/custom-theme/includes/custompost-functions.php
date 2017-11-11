<?php 

/*

Creates a custom post type for creating and displaying articles

*/



add_action( 'init', 'create_article_post_type' );
function create_article_post_type()
{
// Articles post type
    register_post_type('article',
        array(
            'labels' => array(
                'name' => __('Articles'),
                'singular_name' => __('Article')
            ),
            'public' => true,
            'description' => 'Neurology case study articles',
            'menu_position' => 4,
            'menu_icon' => 'dashicons-media-document',
            'show_in_rest' => true,
            'supports' => [
                'thumbnail',
                'title',
//            'editor',
                'author',
//                'comments',
                'revisions'

            ],
            'taxonomies' => [
                'category',
                'post_tag'
            ],
            'hierarchical'       => false,
            'has_archive' => false
        )
    );
}

function create_tip_post_type(){

        register_post_type('neurotip',
        array(
            'labels' => array(
                'name' => __('Neurotips'),
                'singular_name' => __('Neurotip')
            ),
            'public' => true,
            'description' => 'Neurology Tips',
            'menu_position' => 5,
            'menu_icon' => 'dashicons-media-document',
            'show_in_rest' => true,
            'supports' => [
                'thumbnail',
                'title',
//            'editor',
                'author',
//                'comments',
                'revisions'

            ],
            'taxonomies' => [
                'category',
                'post_tag'
            ],
            'hierarchical'       => false,
            'has_archive' => false
        )
    );

}
add_action( 'init', 'create_tip_post_type' );



?>