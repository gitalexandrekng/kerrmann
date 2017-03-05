<?php
function occasions_posts_type(){
  $labels_occasions_post_type_array = array(
            'name'                  =>  __('Occasions', 'kerrmann'),
            'singular_name'         =>  __('Occasions', 'kerrmann'),
            'add_new'               =>  __('Ajouter un véhicule', 'kerrmann'),
            'add_new_item'          =>  __('Ajouter un véhicule', 'kerrmann'),
            'edit_item'             =>  __('Editer la fiche du véhicule', 'kerrmann'),
            'new_item'              =>  __('Nouveau véhicule', 'kerrmann'),
            'view_item'             =>  __('Visualiser la fiche du véhicule', 'kerrmann'),
            'search_items'          =>  __('Rechercher un véhicule', 'kerrmann'),
            'not_found'             =>  __('Aucun véhicule', 'kerrmann'),
            'not_found_in_trash'    =>  __('Aucun véhicule dans la corbeille', 'kerrmann'),
            'parent_item_colon'     =>  __('--', 'kerrmann'),
            'menu_name'             =>  __('Occasions', 'kerrmann')
        );
        $supports_occasions_post_type_array = array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'comments',
            'revisions'
        );
        $rewrite_occasions_post_type_array = array(
            'slug'          =>  _x('occasions', 'Pour les collections', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_occasions_post_type_array = array(
            'labels'                =>  $labels_occasions_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'kerrmann'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  'dashicons-dashboard',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_occasions_post_type_array,
            'rewrite'               =>  $rewrite_occasions_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        register_post_type('occasions', $args_occasions_post_type_array);

      }

      add_action('init','occasions_posts_type', 1);
