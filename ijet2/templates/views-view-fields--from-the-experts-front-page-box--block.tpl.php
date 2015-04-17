<?php
//kpr($fields);
/**
 * @file
 * Default simple view template to all the fields as a row.
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
 
field_fte_headline (Object) stdClass
body (Object) stdClass
field_thumbnail_caption (Object) stdClass
field_video_thumbnail (Object) stdClass
field_pdf_thumbnail (Object) stdClass  
 */
?>
<div class="fp_fte_headline">
  <?php print $fields['field_fte_headline']->content; ?>
</div>

<div class="fp_fte_body">
  <?php print $fields['body']->content; ?>
</div>


<div class="fp_fte_thumbnail_wrapper">
  <?php 
  // if there is a pdf thumbnail, print that.  Even if there is a video thumbnail.  Arbitrary is how we roll.
  if(is_string($fields['field_pdf_thumbnail']->content)){
  	$fields['field_video_thumbnail']->content = $fields['field_pdf_thumbnail']->content;
  }
  print $fields['field_video_thumbnail']->content; 
  
  ?>
  <?php print $fields['field_thumbnail_caption']->content; ?>
</div>
