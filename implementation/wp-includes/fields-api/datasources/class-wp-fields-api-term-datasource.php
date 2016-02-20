<?php
/**
 * @package    WordPress
 * @subpackage Fields_API
 */

/**
 * Fields API Term Datasource class.
 *
 * @see WP_Fields_API_Datasource
 */
class WP_Fields_API_Term_Datasource extends WP_Fields_API_Datasource {

	/**
	 * {@inheritdoc}
	 */
	public $type = 'term';

	/**
	 * {@inheritdoc}
	 */
	public $hierarchical = true;

	/**
	 * {@inheritdoc}
	 */
	public $hierarchical_fields = array(
		'id'            => 'term_id',
		'parent'        => 'parent',
		'title'         => 'name',
		'default_title' => '',
	);

	/**
	 * {@inheritdoc}
	 */
	public function setup_data( $args ) {

		$data = array();

		// get_terms with $args
		// format key=>value

		return $data;

	}

}