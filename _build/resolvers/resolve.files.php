
<?php
/**
 * RocketGallery
 *
 * rocketgallery is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * rocketgallery is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * rocketgallery; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */
/**
 * Resolve files. Mostly for removing files that get removed from the package.
 *
 * @package rocketgallery
 * @subpackage build
 */
if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $removedFiles = [
                'components/rocketgallery/controllers/mgr/header.php',
                'components/rocketgallery/controllers/mgr/set.php',
                'components/rocketgallery/processors/mgr/item/create.php',
                'components/rocketgallery/processors/mgr/item/getlist.php',
                'components/rocketgallery/processors/mgr/item/publish.php',
                'components/rocketgallery/processors/mgr/item/remove.php',
                'components/rocketgallery/processors/mgr/item/sort.php',
                'components/rocketgallery/processors/mgr/item/unpublish.php',
                'components/rocketgallery/processors/mgr/item/update.php',
                'components/rocketgallery/processors/mgr/set/getlist.php',
                'components/rocketgallery/processors/mgr/set/publish.php',
                'components/rocketgallery/processors/mgr/set/remove.php',
                'components/rocketgallery/processors/mgr/set/sort.php',
                'components/rocketgallery/processors/mgr/set/unpublish.php',
            ];

            foreach ($removedFiles as $file) {
                $file = str_replace('/', DIRECTORY_SEPARATOR, $file);
                if (file_exists(MODX_CORE_PATH . $file)) {
                    if (is_dir(MODX_CORE_PATH . $file)) {
                        rmdir(MODX_CORE_PATH . $file);
                    } else {
                        unlink(MODX_CORE_PATH . $file);
                    }
                }
            }

        break;

        case xPDOTransport::ACTION_UNINSTALL:
        break;
    }
}
return true;
