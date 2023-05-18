<?php 

/**
 * Definisce post type per i Lavori
 */

 add_action( 'init', 'register_lavori_post_type' );
 function register_lavori_post_type() {
 
     /** lavori **/
     $labels = array(
         'name'          => _x( 'Lavori', 'Post Type General Name', 'federico_toldo' ),
         'singular_name' => _x( 'Lavoro', 'Post Type Singular Name', 'federico_toldo' ),
         'add_new'       => _x( 'Aggiungi un File', 'Post Type Singular Name', 'federico_toldo' ),
         'add_new_item'  => _x( 'Aggiungi un File', 'Post Type Singular Name', 'federico_toldo' ),
         'edit_item'      => _x( 'Modifica il File', 'Post Type Singular Name', 'federico_toldo' ),
         'view_item'      => _x( 'Visualizza il File', 'Post Type Singular Name', 'federico_toldo' ),
     );
     $args   = array(
         'label'         => __( 'lavori', 'federico_toldo' ),
         'labels'        => $labels,
         'description'   => 'Una sezione per gestire i lavori che poi vengono stampati in Home page',
         'public'        => true,
         'menu_position' => 5,
         'menu_icon'     => 'dashicons-sticky',
         'supports'      => array('title', 'thumbnail', 'excerpt'),
         'register_meta_box_cb' => 'link_lavori_meta_box'
     );
     register_post_type( 'lavori', $args );

    function link_lavori_meta_box() {

        add_meta_box(
            'link-lavori',
            __( 'Link Lavori', 'sitepoint' ),
            'link_lavori_meta_box_callback'
        );
    
    }
    function link_lavori_meta_box_callback( $post ) {

        // Add a nonce field so we can check for it later.
        wp_nonce_field( 'link_lavori_nonce', 'link_lavori_nonce' );
    
        $value = get_post_meta( $post->ID, '_link_lavori', true );
    
        echo '<textarea style="width:100%" id="link_lavori" name="link_lavori">' . esc_attr( $value ) . '</textarea>';
    }
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id
 */
function save_link_lavori_meta_box_data( $post_id ) {

    // Check if our nonce is set.
    if ( ! isset( $_POST['link_lavori_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST['link_lavori_nonce'], 'link_lavori_nonce' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }

    }
    else {

        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    /* OK, it's safe for us to save the data now. */

    // Make sure that it is set.
    if ( ! isset( $_POST['link_lavori'] ) ) {
        return;
    }

    // Sanitize user input.
    $my_data = sanitize_text_field( $_POST['link_lavori'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, '_link_lavori', $my_data );
}

add_action( 'save_post', 'save_link_lavori_meta_box_data' );
