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
	$body = $fields['body']->content;
	$path = "http://perunoticias.net" . $fields['path']->content;
		
		
	/*$type = ($fields['type']->content == 'Noticia') ? 'comun' : 'destacado';*/
	$field_image = $fields['field_picture']->content;
	
	
	/*if($created_day == $now) :
		$created = "Hoy " . format_date($created, 'custom', 'g:i a');
	else :
		$created = format_date($created, 'custom', 'd F Y');
	endif;*/
		
?>
<!--h2>Noticias relacionadas</h2>
	<!--?php	
//Ubica el bloque Slideshow sobre la caja de comentarios FB
	if ($page){
    	print views_embed_view('slideshow', $display_id = 'block'); 
	}
    ?--> 


<div class="mundial">
	<h2><?php print $title; ?></h2>
    <!--div class="noticia-meta">
    	<!--?php print $created; ?> | <!--?php print $tax; ?>
    </div!-->
    <div class="mundial-content">
    	<div class="mundial-image">
        	<?php print $field_image; ?>
        </div>
        <div class="mundial-body">
        	<?php print $body; ?>
        </div>
    </div>
    <!-- Redes Sociales -->
    <!--div class="mundial-social">
    	<ul> <li class="social"><g:plusone href="<!?php print $path; ?>"></g:plusone></li>
        	<li class="social"><fb:like href="<!?php print $path; ?>" layout="button" action="like" show_faces="false" share="false"></fb:like></li>
            <li class="social"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<!?php print $path; ?>" data-count="horizontal" data-via="PeruNoticiass" data-lang="es">Tweet</a></li>
           
        </ul>        
    </div-->
</div>
