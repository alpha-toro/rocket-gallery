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
 *
 * @package rocketgallery
 */
/**
 * Publish an Item
 *
 * @package rocketgallery
 * @subpackage processors
 */
class RocketGalleryItemUnpublishProcessor extends modObjectUpdateProcessor {
    public $classKey = 'RocketGalleryItem';
    public $languageTopic = array('rocketgallery:default');
    public $objectType = 'rocketgallery.rocketgallery';

    public function beforeSave() {
        $this->object->set('published', 0);

        return true;
    }
}

return 'RocketGalleryItemUnpublishProcessor';
