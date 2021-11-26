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
 * Create an Item
 *
 * @package rocketgallery
 * @subpackage processors
 */
 class RocketGalleryItemCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'RocketGalleryItem';
    public $languageTopic = array('rocketgallery:default');
    public $objectType = 'rocketgallery.rocketgallery';

    public function beforeSave() {
        $this->setRank();
        $this->setPublished();

        return parent::beforeSave();
    }

    /**
     * Set initial publish status based on set top-level
     */
    private function setPublished() {
        // Check if set is currently mark as unpublished
        $set = $this->modx->getObject('RocketGallerySet', $this->getProperty('set'));
        if ($set->get('published') == false) {
            $this->object->set('published', false);
        }
    }

    /**
     * New Gallery Sets get added to the end of the list
     *
     * return void
     */
    private function setRank() {
        $count = $this->modx->getCount($this->classKey, [
            'set' => $this->getProperty('set', false)
        ]);
        $this->object->set('rank', $count);
    }
 }

 return 'RocketGalleryItemCreateProcessor';
