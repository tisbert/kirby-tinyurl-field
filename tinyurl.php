<?php
class TinyurlField extends TextField{
	static public $assets = array(
		'js' => array(
			'clipboard.min.js',
			'tinyurl.js'
		),
		'css' => array(
			'style.css',
		)
	 );
	public function __construct() {
		$this->type  = 'tinyurl';
    $this->icon  = 'clipboard';
		$this->readonly = true;
	}
	public function input() {
		$tinyurl = parent::input();
		$tinyurl->data('field', $this->name());
		$tinyurl->attr('value', $this->page->tinyurl());
		$tinyurl->attr('data-clipboard-text', $this->page->tinyurl());
		$tinyurl->addClass('input-with-copybtn');
		return $tinyurl;
	}
}
