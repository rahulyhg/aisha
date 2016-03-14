<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_archive
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_articles_archive
 *
 * @package     Joomla.Site
 * @subpackage  mod_articles_archive
 * @since       1.5
 */
class ModFooterHelper
{
    public function showFooter()
    {
?>
<footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>
<?php
    }
}
