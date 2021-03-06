<?php
/**
 * Created by PhpStorm.
 * User: weskempferjr
 * Date: 3/24/18
 * Time: 9:53 AM
 */

class Category_Dropdown_Generator {


	public function get_child_categories( $parent, $depth, $id = 'cat', $none_selected = 'Select one' ) {

		$dropdown =  wp_dropdown_categories( array(
			'hide_empty' => 0,
			'child_of' => $parent,
			'hierarchical' => true,
			'depth' => $depth,
			'echo' => 0,
			'id' => $id,
			'show_option_none' => $none_selected
		) );

		return $dropdown ;

	}

}