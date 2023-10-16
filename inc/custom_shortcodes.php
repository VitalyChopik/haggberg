<?php


/*
 *  CONTAINER SHORTCODE
 */

if (!function_exists('container_shortcode')) {

	function container_shortcode($atts, $content = null)
	{

		extract(shortcode_atts(
			array(
				'class' => ''
			),
			$atts
		));

		$class_arr = explode(' ', $class);

		$initial_class = (in_array('fluid', $class_arr)) ? 'container-fluid' : 'container';
		$output = '<div class="' . $initial_class . ' ' . $class . '">' . do_shortcode($content) . '</div>';

		return $output;
	}

	add_shortcode('container', 'container_shortcode');
}



/********************************/


/*
 *  H1 SHORTCODE
 */

if (!function_exists('h1_shortcode')) {

	function h1_shortcode($atts, $content = null)
	{

		extract(shortcode_atts(
			array(
				'class' => ''
			),
			$atts
		));
		$output = '<h1 class="' . $class . '">' . do_shortcode($content) . '</h1>';

		return $output;
	}

	add_shortcode('h1', 'h1_shortcode');
}


/***************************************************/

/*
 *  COLUMN SHORTCODE
 */

if (!function_exists('bs_column_column_shortcode')) {

	function bs_column_column_shortcode($atts, $content = null)
	{

		extract(shortcode_atts(
			array(
				'class' => ''
			),
			$atts
		));

		$output = '<div class="' . $class . '">' . do_shortcode($content) . '</div>';
		return $output;
	}

	add_shortcode('bs_column', 'bs_column_column_shortcode');
}

/***************************************************/

/*
 *  COLUMN  inner SHORTCODE
 */

if (!function_exists('column_inner_shortcode')) {

	function column_inner_shortcode($atts, $content = null)
	{

		extract(shortcode_atts(
			array(
				'class' => ''
			),
			$atts
		));

		$output = '<div class="' . $class . '">' . do_shortcode($content) . '</div>';
		return $output;
	}

	add_shortcode('bs_column_inner', 'column_inner_shortcode');
}

/***************************************************/

/*
 *  ROW SHORTCODE
 */
if (!function_exists('row_shortcode')) {

	function row_shortcode($atts, $content = null)
	{
		extract(shortcode_atts(
			array(
				'class' => ''
			),
			$atts
		));

		$output = '<div class="row ' . $class . '">' . do_shortcode($content) . '</div>';

		return $output;
	}

	add_shortcode('row', 'row_shortcode');
}

/***************************************************/

/*
 *  ROW inner SHORTCODE
 */
if (!function_exists('row_inner_shortcode')) {

	function row_inner_shortcode($atts, $content = null)
	{
		extract(shortcode_atts(
			array(
				'class' => ''
			),
			$atts
		));

		$output = '<div class="row ' . $class . '">' . do_shortcode($content) . '</div>';

		return $output;
	}

	add_shortcode('row_inner', 'row_inner_shortcode');
}

/***************************************************/

/*
 *  BR SHORTCODE
 */
if (!function_exists('br_shortcode')) {

	function br_shortcode($atts, $content = null)
	{
		extract(shortcode_atts(
			array(
				'class' => ''
			),
			$atts
		));

		$output = '<br class="custom-br ' . $class . '">';

		return $output;
	}

	add_shortcode('br', 'br_shortcode');
}

/***************************************************/

/*
 *  hr SHORTCODE
 */
if (!function_exists('hr_shortcode')) {

	function hr_shortcode($atts, $content = null)
	{
		return '<hr>';
	}

	add_shortcode('hr', 'hr_shortcode');
}

/***************************************************/

/*
 *  Strong SHORTCODE
 */
if (!function_exists('strong_shortcode')) {

	function strong_shortcode($atts, $content = null)
	{
		return '<strong>' . do_shortcode($content) . '</strong>';
	}

	add_shortcode('b', 'strong_shortcode');
}

/***************************************************/

/*
 *  SPACER SHORTCODE
 */

if (!function_exists('spacer_big_shortcode')) {

	function spacer_big_shortcode($atts)
	{
		$output = '<div class="spacer_big"></div>';
		return $output;
	}

	add_shortcode('spacer_big', 'spacer_big_shortcode');
}

/***************************************************/

/*
 *  SPACER SMALL SHORTCODE
 */

if (!function_exists('spacer_small_shortcode')) {

	function spacer_small_shortcode($atts)
	{
		$output = '<div class="spacer_small"></div>';
		return $output;
	}

	add_shortcode('spacer_small', 'spacer_small_shortcode');
}

/***************************************************/

/*
 *  SPACER SUPER SMALL SHORTCODE
 */

if (!function_exists('spacer_super_small_shortcode')) {

	function spacer_super_small_shortcode($atts)
	{
		$output = '<div class="spacer_super_small"></div>';
		return $output;
	}

	add_shortcode('spacer_super_small', 'spacer_super_small_shortcode');
}
/***************************************************/

/*
 *  SPACER big SHORTCODE
 */

if (!function_exists('spacer_big_shortcode')) {

	function spacer_big_shortcode($atts)
	{
		$output = '<div class="spacer_big"></div>';
		return $output;
	}

	add_shortcode('spacer_big', 'spacer_big_shortcode');
}

/***************************************************/

/*
 *  JUST LINK SHORTCODE
 */

if (!function_exists('link_wrapper_shortcode')) {

	function link_wrapper_shortcode($atts, $content = null)
	{

		extract(shortcode_atts(
			array(
				'class' => '',
			),
			$atts
		));

		return '<div class="link-wrapper">' . $content . '</div>';
	}

	add_shortcode('link', 'link_wrapper_shortcode');
}
