<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>
<div id="instagramIndex">
	<?php
					if(!isset($this->variables['instagramPhotos']))
					{
						?>{iteration:instagramPhotos}<?php
						$this->variables['instagramPhotos'] = array();
						$this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['fail'] = true;
					}
				if(isset(${'instagramPhotos'})) $this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['old'] = ${'instagramPhotos'};
				$this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['iteration'] = $this->variables['instagramPhotos'];
				$this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['i'] = 1;
				$this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['count'] = count($this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['iteration']);
				foreach((array) $this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['iteration'] as ${'instagramPhotos'})
				{
					if(!isset(${'instagramPhotos'}['first']) && $this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['i'] == 1) ${'instagramPhotos'}['first'] = true;
					if(!isset(${'instagramPhotos'}['last']) && $this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['i'] == $this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['count']) ${'instagramPhotos'}['last'] = true;
					if(isset(${'instagramPhotos'}['formElements']) && is_array(${'instagramPhotos'}['formElements']))
					{
						foreach(${'instagramPhotos'}['formElements'] as $name => $object)
						{
							${'instagramPhotos'}[$name] = $object->parse();
							${'instagramPhotos'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
		<article>
			<?php if(array_key_exists('image', (array) ${'instagramPhotos'})) { echo ${'instagramPhotos'}['image']; } else { ?>{$instagramPhotos->image}<?php } ?>
		</article>
	<?php
					$this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['i']++;
				}
					if(isset($this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['fail']) && $this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['fail'] == true)
					{
						?>{/iteration:instagramPhotos}<?php
					}
				if(isset($this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['old'])) ${'instagramPhotos'} = $this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']['old'];
				else unset($this->iterations['b55eae598430dbbc17523023dca5dbc7_index.tpl.php_1']);
				?>
</div>