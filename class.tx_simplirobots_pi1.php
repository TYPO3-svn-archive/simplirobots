<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Michael Reuber <michael.reuber@gmx.de>
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
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

require_once(PATH_tslib.'class.tslib_pibase.php');


/**
 * Plugin '' for the 'simplirobots' extension.
 *
 * @author    Michael Reuber <michael.reuber@gmx.de>
 * @package    TYPO3
 * @subpackage    tx_simplirobots
 */
class tx_simplirobots_pi1 extends tslib_pibase {
    var $prefixId      = 'tx_simplirobots_pi1';        // Same as class name
    var $scriptRelPath = 'pi1/class.tx_simplirobots_pi1.php';    // Path to this script relative to the extension dir.
    var $extKey        = 'simplirobots';    // The extension key.
    var $pi_checkCHash = true;

    /**
     * The main method of the PlugIn
     *
     * @param    string        $content: The PlugIn content
     * @param    array        $conf: The PlugIn configuration
     * @return    The content that is displayed on the website
     */
    function main($content, $conf) {
        $this->conf = $conf;
        $this->pi_setPiVarDefaults();
        $this->pi_loadLL();


        $content='User-Agent: *
';
        if($this->conf['allow']) {
          $content.='Allow: /
';
        }
        if($this->conf['disallow.']['t3lib']) {
          $content.='Disallow: /t3lib/
';
        }
        if($this->conf['disallow.']['typo3']) {
          $content.='Disallow: /typo3/
';
        }
        if($this->conf['disallow.']['typo3conf']) {
          $content.='Disallow: /typo3conf/
';
        }
        if($this->conf['disallow.']['typo3temp']) {
          $content.='Disallow: /typo3temp/
';
        }
        if($this->conf['disallow.']['fileadmin']) {
          $content.='Disallow: /fileadmin/
';
        }
        if($this->conf['disallow.']['additional']) {
          foreach(t3lib_div::trimExplode(',', $this->conf['disallow.']['additional'], 1) as $value) {
              if (t3lib_div::validPathStr($value)) { // correct path
              $content.=  'Disallow: /' . $value . '
';
              }
            // incorrect path: do nothing
          }
        }
        if($this->conf['sitemap']) {
          if($this->conf['domain']) {
            $domain = 'http://' . $this->conf['domain'];
          }
          else
          {
            $domain = t3lib_div::getIndpEnv('TYPO3_REQUEST_HOST');
          }
          foreach(t3lib_div::trimExplode(',', $this->conf['sitemap'], 1) as $value) {
              $content.=  'Sitemap: ' . $domain . '/' . $value . '
';
          }
        }
        return $content;
    }
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/simplirobots/pi1/class.tx_simplirobots_pi1.php'])    {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/simplirobots/pi1/class.tx_simplirobots_pi1.php']);
}

?>
