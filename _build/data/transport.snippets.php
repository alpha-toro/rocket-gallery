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
 * Add snippets to build
 *
 * @package rocketgallery
 * @subpackage build
 */
$snippets   = array();
$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
    'id'          => 0,
    'name'        => 'RocketGallery',
    'description' => 'Displays Galleries.',
    'snippet'     => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.rocketgallery.php'),
), '', true, true);
$properties = include $sources['build'].'properties/properties.rocketgallery.php';
$snippets[0]->setProperties($properties);
unset($properties);

$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id'          => 1,
    'name'        => 'RocketGallerySets',
    'description' => 'Displays Rocket Gallery sets.',
    'snippet'     => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.rocketgallerysets.php'),
), '', true, true);
unset($properties);

return $snippets;
