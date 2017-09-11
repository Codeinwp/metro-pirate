<?php
/**
 * Class Ti_Notify
 */
class Ti_Notify extends WP_Customize_Section {

	/**
	 * The type of customize section being rendered.
	 *
	 * @since  1.0.4
	 * @access public
	 * @var    string
	 */
	public $type = 'ti-notify';

	public $text = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.4
	 * @access public
	 * @return void
	 */
	public function json() {
		$json = parent::json();
		$json['text'] = $this->text;
		return $json;
	}
	/**
	 * Outputs the structure for the customizer control
	 *
	 * @since  1.0.4
	 * @access public
	 * @return void
	 */
	protected function render_template() { ?>
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
			<h3 class="accordion-section-title">
				<span class="section-title">
                    <# if( data.text.length > 0 ){ #>
                        {{{ data.text }}}
                    <# } #>
                </span>
			</h3>
		</li>
		<?php
	}
}
?>