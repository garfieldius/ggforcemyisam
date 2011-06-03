<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Georg Grossberger (georg@grossberger.at)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Extend the SQL parser, to use MyISAM when a non standard table
 * is given
 *
 * @package TYPO3
 * @subpackage ggforcemyisam
 * @author Georg Grossberger <georg@grossberger.at>
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU GPL v3
 */
class ux_t3lib_install extends t3lib_install {

	/**
	 * Overwrite a set 'InnoDB' value with 'MyISAM'
	 * Parent method does the actual work
	 * 
	 * @see t3lib_install::getFieldDefinitions_fileContent
	 * @param string $fileContent
	 * @return array
	 */
	public function getFieldDefinitions_fileContent($fileContent) {		
		$result = parent::getFieldDefinitions_fileContent($fileContent);
		foreach ($result as &$table) {
			if (!empty($table['extra']['ENGINE'])) {
				$table['extra']['ENGINE'] = 'MyISAM';
			}
		}
		return $result;
	}
}
