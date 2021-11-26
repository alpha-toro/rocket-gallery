<?php
/**
 * RocketGallery
 *
 * RocketGallery is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * RocketGallery is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * RocketGallery; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */
/**
 * Loads system settings into build
 *
 * @package rocketgallery
 * @subpackage build
 */

$chunks = array();

$chunks[1]= $modx->newObject('modChunk');
$chunks[1]->fromArray(array(
    'id' => 1,
    'name' => 'rg-item-tpl',
    'description' => 'Image template.',
    'snippet' => file_get_contents($sources['source_core'].'/elements/chunks/image.chunk.tpl'),
    'properties' => NULL
),'',true,true);

$chunks[2]= $modx->newObject('modChunk');
$chunks[2]->fromArray(array(
    'id' => 2,
    'name' => 'rg-set-tpl',
    'description' => 'Set template.',
    'snippet' => file_get_contents($sources['source_core'].'/elements/chunks/settpl.chunk.tpl'),
    'properties' => NULL
),'',true,true);

return $chunks;
