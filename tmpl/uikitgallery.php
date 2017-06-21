<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Fields.Uikitgallery
 *
 * @copyright   Copyright (C) 2017 JUGN.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
if (!$field->value || $field->value == '-1') {
    return;
}
// get the folder name in images directory
$path = $field->value;
$class = $fieldParams->get('image_class');

// read the .jpg from the selected directory
jimport('joomla.filesystem.folder');
$filter = '.\.jpg$';
$images = JFolder::files('images/' . $path);
?>

<div class="<?php echo $class; ?>">
    <?php foreach ($images as $image) : ?>
        <div>
            <?php $img = JHtml::_('image', 'images/' . $path . '/' . $image, $image, array('title' => $image), false); ?>

            <?php echo JHtml::_('link', 'images/' . $path . '/' . $image, $img, array('data-uk-lightbox' => '{group:\'my-group\'}', 'title' => $image)); ?>
        </div>
    <?php endforeach; ?>
</div>
