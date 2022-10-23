<?php
			if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
          'key' => 'group_6351bc2db1f4c',
          'title' => 'Featured Posts',
          'fields' => array(
            array(
              'key' => 'field_6351bc2e70839',
              'label' => 'Featured',
              'name' => 'featured',
              'aria-label' => '',
              'type' => 'true_false',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 0,
              'ui_on_text' => '',
              'ui_off_text' => '',
              'ui' => 0,
            ),
          ),
          'location' => array(
            array(
              array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
              ),
            ),
          ),
          'menu_order' => 0,
          'position' => 'side',
          'style' => 'default',
          'label_placement' => 'top',
          'instruction_placement' => 'label',
          'hide_on_screen' => '',
          'active' => true,
          'description' => '',
          'show_in_rest' => 0,
        ));
        
        endif;		