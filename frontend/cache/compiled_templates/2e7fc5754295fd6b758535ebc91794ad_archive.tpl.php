<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>


<?php
				ob_start();
				?><?php if(array_key_exists('LANGUAGE', (array) $this->variables)) { echo $this->variables['LANGUAGE']; } else { ?>{$LANGUAGE}<?php } ?>_blogWidgetArchiveCache<?php
				$cache = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if(!$this->isCached($cache))
				{
					ob_start();
				?>
	<?php
					if(isset($this->variables['widgetBlogArchive']) && count($this->variables['widgetBlogArchive']) != 0 && $this->variables['widgetBlogArchive'] != '' && $this->variables['widgetBlogArchive'] !== false)
					{
						?>
		<section id="blogArchiveWidget" class="mod">
			<div class="inner">
				<header class="hd">
					<h3><?php if(array_key_exists('lblArchive', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblArchive']); } else { ?>{$lblArchive|ucfirst}<?php } ?></h3>
				</header>
				<div class="bd content">
					<ul>
						<?php
					if(!isset($this->variables['widgetBlogArchive']))
					{
						?>{iteration:widgetBlogArchive}<?php
						$this->variables['widgetBlogArchive'] = array();
						$this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['fail'] = true;
					}
				if(isset(${'widgetBlogArchive'})) $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['old'] = ${'widgetBlogArchive'};
				$this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['iteration'] = $this->variables['widgetBlogArchive'];
				$this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['i'] = 1;
				$this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['count'] = count($this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['iteration']);
				foreach((array) $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['iteration'] as ${'widgetBlogArchive'})
				{
					if(!isset(${'widgetBlogArchive'}['first']) && $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['i'] == 1) ${'widgetBlogArchive'}['first'] = true;
					if(!isset(${'widgetBlogArchive'}['last']) && $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['i'] == $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['count']) ${'widgetBlogArchive'}['last'] = true;
					if(isset(${'widgetBlogArchive'}['formElements']) && is_array(${'widgetBlogArchive'}['formElements']))
					{
						foreach(${'widgetBlogArchive'}['formElements'] as $name => $object)
						{
							${'widgetBlogArchive'}[$name] = $object->parse();
							${'widgetBlogArchive'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
							<li>
								<?php
					if(isset(${'widgetBlogArchive'}['url']) && count(${'widgetBlogArchive'}['url']) != 0 && ${'widgetBlogArchive'}['url'] != '' && ${'widgetBlogArchive'}['url'] !== false)
					{
						?><a href="<?php if(array_key_exists('url', (array) ${'widgetBlogArchive'})) { echo ${'widgetBlogArchive'}['url']; } else { ?>{$widgetBlogArchive->url}<?php } ?>"><?php } ?>
									<?php if(array_key_exists('label', (array) ${'widgetBlogArchive'})) { echo ${'widgetBlogArchive'}['label']; } else { ?>{$widgetBlogArchive->label}<?php } ?>
									<?php
					if(isset(${'widgetBlogArchive'}['url']) && count(${'widgetBlogArchive'}['url']) != 0 && ${'widgetBlogArchive'}['url'] != '' && ${'widgetBlogArchive'}['url'] !== false)
					{
						?>(<?php if(array_key_exists('total', (array) ${'widgetBlogArchive'})) { echo ${'widgetBlogArchive'}['total']; } else { ?>{$widgetBlogArchive->total}<?php } ?>)<?php } ?>
								<?php
					if(isset(${'widgetBlogArchive'}['url']) && count(${'widgetBlogArchive'}['url']) != 0 && ${'widgetBlogArchive'}['url'] != '' && ${'widgetBlogArchive'}['url'] !== false)
					{
						?></a><?php } ?>

								<?php
					if(isset(${'widgetBlogArchive'}['months']) && count(${'widgetBlogArchive'}['months']) != 0 && ${'widgetBlogArchive'}['months'] != '' && ${'widgetBlogArchive'}['months'] !== false)
					{
						?>
									<ul>
										<?php
					if(!isset(${'widgetBlogArchive'}['months']))
					{
						?>{iteration:widgetBlogArchive->months}<?php
						${'widgetBlogArchive'}['months'] = array();
						$this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['fail'] = true;
					}
				if(isset(${'widgetBlogArchive'}['months'])) $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['old'] = ${'widgetBlogArchive'}['months'];
				$this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['iteration'] = ${'widgetBlogArchive'}['months'];
				$this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['i'] = 1;
				$this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['count'] = count($this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['iteration']);
				foreach((array) $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['iteration'] as ${'widgetBlogArchive'}['months'])
				{
					if(!isset(${'widgetBlogArchive'}['months']['first']) && $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['i'] == 1) ${'widgetBlogArchive'}['months']['first'] = true;
					if(!isset(${'widgetBlogArchive'}['months']['last']) && $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['i'] == $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['count']) ${'widgetBlogArchive'}['months']['last'] = true;
					if(isset(${'widgetBlogArchive'}['months']['formElements']) && is_array(${'widgetBlogArchive'}['months']['formElements']))
					{
						foreach(${'widgetBlogArchive'}['months']['formElements'] as $name => $object)
						{
							${'widgetBlogArchive'}['months'][$name] = $object->parse();
							${'widgetBlogArchive'}['months'][$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
											<li>
												<?php
					if(isset(${'widgetBlogArchive'}['months']['url']) && count(${'widgetBlogArchive'}['months']['url']) != 0 && ${'widgetBlogArchive'}['months']['url'] != '' && ${'widgetBlogArchive'}['months']['url'] !== false)
					{
						?><a href="<?php if(isset(${'widgetBlogArchive'}['months']) && array_key_exists('url', (array) ${'widgetBlogArchive'}['months'])) { echo ${'widgetBlogArchive'}['months']['url']; } else { ?>{$widgetBlogArchive->months.url}<?php } ?>"><?php } ?>
													<?php if(isset(${'widgetBlogArchive'}['months']) && array_key_exists('label', (array) ${'widgetBlogArchive'}['months']) && array_key_exists('LANGUAGE', (array) $this->variables)) { echo SpoonTemplateModifiers::date(${'widgetBlogArchive'}['months']['label'], 'F', $this->variables['LANGUAGE']); } else { ?>{$widgetBlogArchive->months.label|date:'F':<?php if(array_key_exists('LANGUAGE', (array) $this->variables)) { echo $this->variables['LANGUAGE']; } else { ?>{$LANGUAGE}<?php } ?>}<?php } ?>
													<?php
					if(isset(${'widgetBlogArchive'}['months']['url']) && count(${'widgetBlogArchive'}['months']['url']) != 0 && ${'widgetBlogArchive'}['months']['url'] != '' && ${'widgetBlogArchive'}['months']['url'] !== false)
					{
						?>(<?php if(isset(${'widgetBlogArchive'}['months']) && array_key_exists('total', (array) ${'widgetBlogArchive'}['months'])) { echo ${'widgetBlogArchive'}['months']['total']; } else { ?>{$widgetBlogArchive->months.total}<?php } ?>)<?php } ?>
												<?php
					if(isset(${'widgetBlogArchive'}['months']['url']) && count(${'widgetBlogArchive'}['months']['url']) != 0 && ${'widgetBlogArchive'}['months']['url'] != '' && ${'widgetBlogArchive'}['months']['url'] !== false)
					{
						?></a><?php } ?>
											</li>
										<?php
					$this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['i']++;
				}
					if(isset($this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['fail']) && $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['fail'] == true)
					{
						?>{/iteration:widgetBlogArchive->months}<?php
					}
				if(isset($this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['old'])) ${'widgetBlogArchive'}['months'] = $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']['old'];
				else unset($this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_2']['months']);
				?>
									</ul>
								<?php } ?>
							</li>
						<?php
					$this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['i']++;
				}
					if(isset($this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['fail']) && $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['fail'] == true)
					{
						?>{/iteration:widgetBlogArchive}<?php
					}
				if(isset($this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['old'])) ${'widgetBlogArchive'} = $this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']['old'];
				else unset($this->iterations['2e7fc5754295fd6b758535ebc91794ad_archive.tpl.php_1']);
				?>
					</ul>
				</div>
			</div>
		</section>
	<?php } ?>
<?php
					SpoonFile::setContent($this->cacheDirectory .'/' . $cache .'_cache.tpl', ob_get_clean());
				}
				require $this->cacheDirectory .'/' . $cache .'_cache.tpl';
				?>