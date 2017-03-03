<?php
class View
{
	protected $var = array();
	protected $_controller;
	protected $_action;
	protected $dir;

	public function __construct($dir, $extname)
	{
		$dir = rtrim($dir, '\\/');
		$this->dir = $dir;
		$extname = ltrim($extname, '.');
		$this->extname = $extname;
	}

	public function render()
	{

	}
}