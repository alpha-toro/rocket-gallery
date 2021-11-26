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
 * Properties for the rocketgallery snippet.
 *
 * @package rocketgallery
 * @subpackage build
 */
$properties = array(
    array(
        'name'    => 'tpl',
        'desc'    => 'prop_rocketgallery.tpl_desc',
        'type'    => 'textfield',
        'options' => '',
        'value'   => 'rg-item-tpl',
        'lexicon' => 'rocketgallery:properties',
    ),
    array(
        'name'    => 'setTpl',
        'desc'    => 'prop_rocketgallery.tpl_desc',
        'type'    => 'textfield',
        'options' => '',
        'value'   => 'rg-set-tpl',
        'lexicon' => 'rocketgallery:properties',
    ),
    array(
        'name'    => 'sortBy',
        'desc'    => 'prop_rocketgallery.sortby_desc',
        'type'    => 'textfield',
        'options' => '',
        'value'   => 'rank',
        'lexicon' => 'rocketgallery:properties',
    ),
    array(
        'name'    => 'sortDir',
        'desc'    => 'prop_rocketgallery.sortdir_desc',
        'type'    => 'textfield',
        'options' => '',
        'value'   => 'ASC',
        'lexicon' => 'rocketgallery:properties',
    ),
    array(
        'name'    => 'outputSeparator',
        'desc'    => 'prop_rocketgallery.outputseparator_desc',
        'type'    => 'textfield',
        'options' => '',
        'value'   => "\n",
        'lexicon' => 'rocketgallery:properties',
    ),
    array(
        'name'    => 'toPlaceholder',
        'desc'    => 'prop_rocketgallery.toplaceholder_desc',
        'type'    => 'combo-boolean',
        'options' => '',
        'value'   => false,
        'lexicon' => 'rocketgallery:properties',
    ),
);

return $properties;
