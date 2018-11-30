<?php

if ( ! class_exists( 'creatrendstheme' ) ) {

    Class creatrendstheme{

    }
}


function create_proyecto_cpt() {

    $labels = array(
        'name' => __( 'Proyectos', 'Post Type General Name', 'textdomain' ),
        'singular_name' => __( 'Proyecto', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => __( 'Proyectos', 'textdomain' ),
        'name_admin_bar' => __( 'Proyecto', 'textdomain' ),
        'archives' => __( 'Proyecto Archives', 'textdomain' ),
        'attributes' => __( 'Proyecto Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Proyecto:', 'textdomain' ),
        'all_items' => __( 'All Proyectos', 'textdomain' ),
        'add_new_item' => __( 'Add New Proyecto', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Proyecto', 'textdomain' ),
        'edit_item' => __( 'Edit Proyecto', 'textdomain' ),
        'update_item' => __( 'Update Proyecto', 'textdomain' ),
        'view_item' => __( 'View Proyecto', 'textdomain' ),
        'view_items' => __( 'View Proyectos', 'textdomain' ),
        'search_items' => __( 'Search Proyecto', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Proyecto', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Proyecto', 'textdomain' ),
        'items_list' => __( 'Proyectos list', 'textdomain' ),
        'items_list_navigation' => __( 'Proyectos list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Proyectos list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Proyecto', 'textdomain' ),
        'description' => __( '', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-home',
        'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'custom-fields', ),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'proyecto', $args );

}
add_action( 'init', 'create_proyecto_cpt', 0 );
// Register Taxonomy cpt_proyectos
// Taxonomy Key: cptproyectos
// Register Taxonomy Proyectos
// Taxonomy Key: proyectos
function create_proyectos_tax() {

    $labels = array(
        'name'              => _x( 'Proyectos', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Proyectos', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Proyectos', 'textdomain' ),
        'all_items'         => __( 'All Proyectos', 'textdomain' ),
        'parent_item'       => __( 'Parent Proyectos', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Proyectos:', 'textdomain' ),
        'edit_item'         => __( 'Edit Proyectos', 'textdomain' ),
        'update_item'       => __( 'Update Proyectos', 'textdomain' ),
        'add_new_item'      => __( 'Add New Proyectos', 'textdomain' ),
        'new_item_name'     => __( 'New Proyectos Name', 'textdomain' ),
        'menu_name'         => __( 'Proyectos', 'textdomain' ),
    );
    $args = array(
        'labels' => $labels,
        'description' => __( '', 'textdomain' ),
        'hierarchical' => true,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_rest' => false,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => false,
    );
    register_taxonomy( 'proyectos', array('proyecto', ), $args );

}
add_action( 'init', 'create_proyectos_tax' );


// Register Custom Post Type Servicio
// Post Type Key: servicio
function create_servicio_cpt() {

    $labels = array(
        'name' => __( 'Servicios', 'Post Type General Name', 'textdomain' ),
        'singular_name' => __( 'Servicio', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => __( 'Servicios', 'textdomain' ),
        'name_admin_bar' => __( 'Servicio', 'textdomain' ),
        'archives' => __( 'Servicio Archives', 'textdomain' ),
        'attributes' => __( 'Servicio Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Servicio:', 'textdomain' ),
        'all_items' => __( 'All Servicios', 'textdomain' ),
        'add_new_item' => __( 'Add New Servicio', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Servicio', 'textdomain' ),
        'edit_item' => __( 'Edit Servicio', 'textdomain' ),
        'update_item' => __( 'Update Servicio', 'textdomain' ),
        'view_item' => __( 'View Servicio', 'textdomain' ),
        'view_items' => __( 'View Servicios', 'textdomain' ),
        'search_items' => __( 'Search Servicio', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Servicio', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Servicio', 'textdomain' ),
        'items_list' => __( 'Servicios list', 'textdomain' ),
        'items_list_navigation' => __( 'Servicios list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Servicios list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Servicio', 'textdomain' ),
        'description' => __( 'Servicios ', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-post',
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'post-formats', 'custom-fields', ),
        'taxonomies' => array(),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type( 'servicio', $args );

}
add_action( 'init', 'create_servicio_cpt', 0 );

/***/
// Custom Post types for Feature project on home page 
       add_action('init', 'create_feature');
         function create_feature() {
           $feature_args = array(
              'labels' => array(
               'name' => __( 'Feature Project' ),
               'singular_name' => __( 'Feature Project' ),
               'add_new' => __( 'Add New Feature Project' ),
               'add_new_item' => __( 'Add New Feature Project' ),
               'edit_item' => __( 'Edit Feature Project' ),
               'new_item' => __( 'Add New Feature Project' ),
               'view_item' => __( 'View Feature Project' ),
               'search_items' => __( 'Search Feature Project' ),
               'not_found' => __( 'No feature project found' ),
               'not_found_in_trash' => __( 'No feature project found in trash' )
             ),
           'public' => true,
           'show_ui' => true,
           'capability_type' => 'post',
           'hierarchical' => false,
           'rewrite' => true,
           'menu_position' => 20,
           'supports' => array('title', 'editor', 'thumbnail')
         );
      register_post_type('feature',$feature_args);
    }
    add_filter("manage_feature_edit_columns", "feature_edit_columns");

    function feature_edit_columns($feature_columns){
       $feature_columns = array(
          "cb" => "<input type=\"checkbox\" />",
          "title" => "Title",
       );
      return $feature_columns;
    }
    
    
    //Add Meta Boxes
    //http://wp.tutsplus.com/tutorials/plugins/how-to-create-custom-wordpress-writemeta-boxes/

    add_action( 'add_meta_boxes', 'cd_meta_box_add' );
    function cd_meta_box_add()
    {
        add_meta_box( 'my-meta-box-id', 'Link to Project', 'cd_meta_box_cb', 'feature', 'normal', 'high' );
    }

    function cd_meta_box_cb( $post )
    {
        $url = get_post_meta($post->ID, 'url', true);
        wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' ); ?>

        <p>
            <label for="url">Project url</label>
            <input type="text" name="url" id="url" value="<?php echo $url; ?>" style="width:350px" />
        </p>

        <?php   
    }
    
    add_action( 'save_post', 'cd_meta_box_save' );
    function cd_meta_box_save( $post_id )
    {
        // Bail if we're doing an auto save
        if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

        // if our nonce isn't there, or we can't verify it, bail
        if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

        // if our current user can't edit this post, bail
        if( !current_user_can( 'edit_post' ) ) return;

        // now we can actually save the data
        $allowed = array( 
            'a' => array( // on allow a tags
                'href' => array() // and those anchors can only have href attribute
            )
        );

        // Probably a good idea to make sure your data is set
        if( isset( $_POST['url'] ) )
            update_post_meta( $post_id, 'url', wp_kses( $_POST['url'], $allowed ) );
    }


add_action('wp_insert_post', 'set_default_slidermeta');

function set_default_slidermeta($post_ID){
    add_post_meta($post_ID, 'slider-url', 'http://', true);
    return $post_ID;
}

function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Movies', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Movies', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
        'all_items'           => __( 'All Movies', 'twentythirteen' ),
        'view_item'           => __( 'View Movie', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
        'update_item'         => __( 'Update Movie', 'twentythirteen' ),
        'search_items'        => __( 'Search Movie', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'movies', 'twentythirteen' ),
        'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'movies', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );
/* Stop Adding Functions Below this Line */
class imagenesMetabox {
    private $screen = array(
        'servicio',
    );
    private $meta_fields = array(
        array(
            'label' => 'Video',
            'id' => 'youtube_video',
            'type' => 'text',
        ),
        array(
            'label' => 'Imagen',
            'id' => 'imagen_55319',
            'type' => 'media',
        ),
        array(
            'label' => 'Destacado',
            'id' => 'destacado_57757',
            'default' => '0',
            'type' => 'checkbox',
        ),
    );
    public function __construct() {
        add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
        add_action( 'admin_footer', array( $this, 'media_fields' ) );
        add_action( 'save_post', array( $this, 'save_fields' ) );
    }
    public function add_meta_boxes() {
        foreach ( $this->screen as $single_screen ) {
            add_meta_box(
                'imagenes',
                __( 'Imagenes ', 'textdomain' ),
                array( $this, 'meta_box_callback' ),
                $single_screen,
                'normal',
                'default'
            );
        }
    }
    public function meta_box_callback( $post ) {

        wp_nonce_field( 'imagenes_data', 'imagenes_nonce' );
        $this->field_generator( $post );
    }
    public function media_fields() {
        ?><script>
            jQuery(document).ready(function($){
                if ( typeof wp.media !== 'undefined' ) {
                    var _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;
                    $('.imagenes-media').click(function(e) {
                        var send_attachment_bkp = wp.media.editor.send.attachment;
                        var button = $(this);
                        var id = button.attr('id').replace('_button', '');
                        _custom_media = true;
                            wp.media.editor.send.attachment = function(props, attachment){
                            if ( _custom_media ) {
                                $('input#'+id).val(attachment.url);
                            } else {
                                return _orig_send_attachment.apply( this, [props, attachment] );
                            };
                        }
                        wp.media.editor.open(button);
                        return false;
                    });
                    $('.add_media').on('click', function(){
                        _custom_media = false;
                    });
                }
            });
        </script><?php
    }
    public function field_generator( $post ) {
        $output = '';
        foreach ( $this->meta_fields as $meta_field ) {
            $label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
            $meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
            if ( empty( $meta_value ) ) {
                $meta_value = $meta_field['default']; }
            switch ( $meta_field['type'] ) {
                case 'media':
                    $input = sprintf(
                        '<input style="width: 80%%" id="%s" name="%s" type="text" value="%s"> <input style="width: 19%%" class="button imagenes-media" id="%s_button" name="%s_button" type="button" value="Upload" />',
                        $meta_field['id'],
                        $meta_field['id'],
                        $meta_value,
                        $meta_field['id'],
                        $meta_field['id']
                    );
                    echo getFeaturedVideo( $post->ID, 260, 120);
                    break;
                case 'checkbox':
                    $input = sprintf(
                        '<input %s id=" % s" name="% s" type="checkbox" value="1">',
                        $meta_value === '1' ? 'checked' : '',
                        $meta_field['id'],
                        $meta_field['id']
                        );
                    break;
                default:
                    $input = sprintf(
                        '<input %s id="%s" name="%s" type="%s" value="%s">',
                        $meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
                        $meta_field['id'],
                        $meta_field['id'],
                        $meta_field['type'],
                        $meta_value
                    );
            }
            $output .= $this->format_rows( $label, $input );
        }
        echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
    }
    public function format_rows( $label, $input ) {
        return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
    }
    public function save_fields( $post_id ) {
        if ( ! isset( $_POST['imagenes_nonce'] ) )
            return $post_id;
        $nonce = $_POST['imagenes_nonce'];
        if ( !wp_verify_nonce( $nonce, 'imagenes_data' ) )
            return $post_id;
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
            return $post_id;
        foreach ( $this->meta_fields as $meta_field ) {
            if ( isset( $_POST[ $meta_field['id'] ] ) ) {
                switch ( $meta_field['type'] ) {
                    case 'email':
                        $_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
                        break;
                    case 'text':
                        $_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
                        break;
                }
                update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
            } else if ( $meta_field['type'] === 'checkbox' ) {
                update_post_meta( $post_id, $meta_field['id'], '0' );
            }
        }
    }
}
if (class_exists('imagenesMetabox')) {
    new imagenesMetabox;
};

function getFeaturedVideo($post_id, $width = 680, $height = 360) {
    $featuredVideoURL = get_post_meta($post_id, 'youtube_video', true);
 
    preg_match('%(?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $featuredVideoURL, $youTubeMatch);
 
    if ($youTubeMatch[1])
        return '<iframe width="'.$width.'" height="'.$height.'" src="http://ww'.
               'w.youtube.com/embed/'.$youTubeMatch[1].'?rel=0&showinfo=0&cont'.
               'rols=0&autoplay=0&modestbranding=1" frameborder="0" allowfulls'.
               'creen ></iframe>';
    else
        return null;
}


add_action( 'init', 'create_slider_posttype' );
function create_slider_posttype() {
    $args = array(
      'public' => false,
      'show_ui' => true,
      'menu_icon' => 'dashicons-images-alt',
      'capability_type' => 'page',
      'rewrite' => array( 'slider-loc', 'post_tag' ),
      'label'  => 'Simple slides',
      'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes')
    );
    register_post_type( 'slider', $args );
}

add_action( 'init', 'create_slider_location_tax' );
function create_slider_location_tax() {
    register_taxonomy(
        'slider-loc',
        'slider',
        array(
            'label' => 'Slider location',
            'public' => false,
            'show_ui' => true,
            'show_admin_column' => true,
            'rewrite' => false
        )
    );
}
?>