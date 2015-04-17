<?php
/**
 * @file
 * overrides row template for front page slideshow 
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div id="slider" style="background-image:url(<?php print $fields['field_fp_slider_image']->content;?>)">


  <div id="heroprev"><img src="/sites/default/files/mock/images/hero_nav_prev.png" width="68" height="331" alt=""/></div>
  <div id="overlaytext">
    <h1><?php print $fields['field_fp_slider_headline']->content;?></h1>
    <p><?php print $fields['field_fp_slider_subhead']->content;?></p>
    <?php print $fields['field_fp_slider_more_link']->content;?></div>
    <div id="slideroverlay"></div>
  <div id="heronext"><img src="/sites/default/files/mock/images/hero_nav_next.png" width="68" height="330" alt=""/></div>
</div>