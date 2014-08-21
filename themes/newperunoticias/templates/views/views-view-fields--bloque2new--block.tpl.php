<?php
/**
 * @file views-view-fields.tpl.php
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
 */
 # 	print print_r(array_keys($fields), 1);
	$title = $fields['title']->content;
	/*$body = $fields['body']->content;*/
	/*$path = "http://perunoticias.net" . $fields['path']->content;*/
	/*$tax = $fields['field_vocabulary_1']->content;	*/
	/*$created_day = date("d m Y", strtotime($fields['created']->content));*/
	/*$created = strtotime($fields['created']->content);*/
	/*$type = ($fields['type']->content == 'Noticia') ? 'comun' : 'destacado';*/
	$field_image = $fields['field_picture']->content;
	
	$now = date("d m Y");
	
	/*if($created_day == $now) :
		$created = "Hoy " . format_date($created, 'custom', 'g:i a');
	else :
		$created = format_date($created, 'custom', 'd F Y');
	endif;*/
	
	$noimg = '<img src="/sites/default/files/noticia.jpg" alt="Per&uacute; Noticias" width="140" height="105" />';
	
	if ($field_image == '') :
		$field_image = sprintf('<a href="%s">%s</a>', $path, $noimg);
	endif;
?>

<div class="clear"></div>
<div class="">
    <div class="small-content-right">
    	<div class="image_content-right">
        	<?php print $field_image; ?>
        </div>        
        <div class="feature-text">
        	<div class="post-title"><h3 class="title"><?php print $title; ?></h3></div>
        	
        </div>
    
   </div>
</div>
