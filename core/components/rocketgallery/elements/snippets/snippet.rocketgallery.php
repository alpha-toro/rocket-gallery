<?php
/**
 * The base RocketGallery snippet.
 *
 * @package rocketgallery
 */
$RocketGallery = $modx->getService(
    'rocketgallery',
    'RocketGallery',
    $modx->getOption('rocketgallery.core_path', null, $modx->getOption('core_path').'components/rocketgallery/').'model/rocketgallery/',
    $scriptProperties
);
if (!($RocketGallery instanceof RocketGallery)) return 'No RocketGallery Service';

$set                = $modx->getOption('set', $scriptProperties, null);
$sets               = $modx->getOption('sets', $scriptProperties, null);
$tpl                = $modx->getOption('tpl', $scriptProperties, 'rg-item-tpl');
$setTpl             = $modx->getOption('setTpl', $scriptProperties, null);
$sortBy             = $modx->getOption('sortBy', $scriptProperties, 'rank');
$sortDir            = $modx->getOption('sortDir', $scriptProperties, 'ASC');
$limit              = $modx->getOption('limit', $scriptProperties, null);
$limitImages        = $modx->getOption('limitImages', $scriptProperties, null);
$showUnpublished    = $modx->getOption('showUnpublished', $scriptProperties, false);
$showMenu           = $modx->getOption('showMenu', $scriptProperties, false);
$outputSeparator    = $modx->getOption('outputSeparator', $scriptProperties, "\n");
$setOutputSeparator = $modx->getOption('setOutputSeparator', $scriptProperties, "\n");

/* build query */
$c = $modx->newQuery('RocketGallerySet');

if (!empty($set)) {
    $c->where(array(
        'id' => $set,
    ));
} else if (!empty($sets)) {
    $c->where(array(
        'id:IN' => explode(',', $sets),
    ));
    $c->sortby('id','ASC');
} else {
    $c->sortby('id','ASC');
}
if (!$showUnpublished) {
    $c->where(array(
        'published' => true
    ));
}
if (!empty($limit)) $c->limit($limit);

// Get collection of FAQ sets based on query
$sets = $modx->getCollection('RocketGallerySet', $c);

// Loop through found FAQ sets and build the output
$list = array();
foreach ($sets as $set) {
    // Empty array to hold output from current set
    $setList  = array();
    $setArray = $set->toArray();

    // Loop through items and set output to array
    $ci = $modx->newQuery('RocketGalleryItem');

    // Hide unpublished items
    if (!$showUnpublished) {
        $ci->where(array('published' => true));
    }

    $ci->sortby($modx->quote($sortBy), $sortDir);
    if (!empty($limitImages)) $ci->limit($limitImages);

    foreach ($set->getMany('Item', $ci) as $item) {
        $itemArray = $item->toArray();
        $setList[] = $RocketGallery->getChunk($tpl, $itemArray);
    }

    // If no set template is defined, don't output set data
    if (!empty($setTpl)) {
        $setArray = array_merge($setArray, ['count' => count($setList)]);
        $setHeading = $RocketGallery->getChunk($setTpl, $setArray);
    }

    // Collect output from this FAQ set.
    if (isset($setHeading)) {
        $list[] = $setHeading . "\n" . implode($outputSeparator, $setList);
    } else {
        $list[] = implode($outputSeparator, $setList);

    }
}

// Build output
$output        = implode($setOutputSeparator, $list);
$toPlaceholder = $modx->getOption('toPlaceholder', $scriptProperties, false);
if (!empty($toPlaceholder)) {
    // If using a placeholder, output nothing and set output to specified placeholder
    $modx->setPlaceholder($toPlaceholder, $output);
    return '';
}

// By default just return output
return $output;
