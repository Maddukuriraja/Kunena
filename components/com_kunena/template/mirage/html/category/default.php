<?php
/**
 * Kunena Component
 * @package Kunena.Template.Default20
 * @subpackage Category
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

$this->displaySection($this->category);
if (!$this->category->isSection()) {
	$this->displayTemplateFile('category', 'default', 'actions');
	$this->displayTemplateFile('category', 'default', 'list');
}