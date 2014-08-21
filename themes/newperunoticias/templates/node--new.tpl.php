<?php
 global $base_root;
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
  	<div class="submitted">
	  <?php print format_date($created, 'custom', 'd F Y'); ?>  | <a href="<?php print ($teaser) ? $base_root . $node_url : ""; ?>#comments"><fb:comments-count href=<?php print $base_root . $node_url; ?>></fb:comments-count> comentarios</a>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>


  <?php if(!$teaser) : ?>
	<?php if (block_get_blocks_by_region('adbottom')): ?>
    <div id="adbottom">
        <?php print render(block_get_blocks_by_region('adbottom')); ?>
    </div>
    <?php endif; ?>
    <?php if(!$teaser) : ?>
	<div class="clear"></div>
    <div class="node-socials">
	<ul>
        <li class="node-social">
        <g:plusone size="medium" href="<?php print $base_root . $node_url; ?>"></g:plusone>
        </li>
        <li class="node-social">
        <fb:like href="<?php print $base_root . $node_url; ?>" send="false" layout="button_count" width="100" show_faces="false"></fb:like>
        </li>
        <li class="node-social">
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php print $base_root . $node_url; ?>" data-count="horizontal" data-via="PeruNoticiass" data-lang="es">Tweet</a>
        </li>
	</ul>
    </div>

    <?php endif; ?>
    <h2>Noticias relacionadas</h2>
	<?php	
//Ubica el bloque Slideshow sobre la caja de comentarios FB
	if ($page){
    	print views_embed_view('slideshow', $display_id = 'block'); 
	}
    ?>
  <div id="comments">
  	<h2 class="title"><img src="http://media.perunoticias.net/pictures/biblioteca/peru-tu-que-opinas.png" /></h2>
    <fb:comments href="<?php print $base_root . $node_url; ?>" num_posts="5" width="560"></fb:comments>
  </div>
  <?php /*?><div id="author">
                <div id="avatar"><img src="http://cusconoticias.pe/sites/default/files/claudiacusconoticias.png" alt="Claudia Loayza" /></div>
                <div id="bio">
                        <h2><a href="http://cusconoticias.pe/claudia-iracema-loayza-lucero?rel=author" rel="author">Claudia Loayza</a></h2>
                        <p>Es una estudiante de Comunicaci&oacute;n de la Universidad Nacional de San Antonio Abad del Cusco.
                        Trabaja como redactora para las revistas online <a href="http://cusconoticias.pe">Cusco Noticias</a> y <a href="http://perunoticias.net">Per&uacute; Noticias</a>.
                        Le interesa la fotograf&iacute;a, los temas de relaciones humanas, industriales y de desarrollo.</p>
                </div>
        </div><?php */?>
  <?php endif; ?>

</div><!-- /.node -->
