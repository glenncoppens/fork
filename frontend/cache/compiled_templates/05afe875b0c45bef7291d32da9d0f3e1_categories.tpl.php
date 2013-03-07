<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>


<?php
					if(isset($this->variables['widgetBlogCategories']) && count($this->variables['widgetBlogCategories']) != 0 && $this->variables['widgetBlogCategories'] != '' && $this->variables['widgetBlogCategories'] !== false)
					{
						?>
	<section id="blogCategoriesWidget" class="mod">
		<div class="inner">
			<header class="hd">
				<h3><?php if(array_key_exists('lblCategories', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblCategories']); } else { ?>{$lblCategories|ucfirst}<?php } ?></h3>
			</header>
			<div class="bd content">
				<ul>
					<?php
					if(!isset($this->variables['widgetBlogCategories']))
					{
						?>{iteration:widgetBlogCategories}<?php
						$this->variables['widgetBlogCategories'] = array();
						$this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['fail'] = true;
					}
				if(isset(${'widgetBlogCategories'})) $this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['old'] = ${'widgetBlogCategories'};
				$this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['iteration'] = $this->variables['widgetBlogCategories'];
				$this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['i'] = 1;
				$this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['count'] = count($this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['iteration']);
				foreach((array) $this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['iteration'] as ${'widgetBlogCategories'})
				{
					if(!isset(${'widgetBlogCategories'}['first']) && $this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['i'] == 1) ${'widgetBlogCategories'}['first'] = true;
					if(!isset(${'widgetBlogCategories'}['last']) && $this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['i'] == $this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['count']) ${'widgetBlogCategories'}['last'] = true;
					if(isset(${'widgetBlogCategories'}['formElements']) && is_array(${'widgetBlogCategories'}['formElements']))
					{
						foreach(${'widgetBlogCategories'}['formElements'] as $name => $object)
						{
							${'widgetBlogCategories'}[$name] = $object->parse();
							${'widgetBlogCategories'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
						<li>
							<a href="<?php if(array_key_exists('url', (array) ${'widgetBlogCategories'})) { echo ${'widgetBlogCategories'}['url']; } else { ?>{$widgetBlogCategories->url}<?php } ?>">
								<?php if(array_key_exists('label', (array) ${'widgetBlogCategories'})) { echo ${'widgetBlogCategories'}['label']; } else { ?>{$widgetBlogCategories->label}<?php } ?>&nbsp;(<?php if(array_key_exists('total', (array) ${'widgetBlogCategories'})) { echo ${'widgetBlogCategories'}['total']; } else { ?>{$widgetBlogCategories->total}<?php } ?>)
							</a>
						</li>
					<?php
					$this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['i']++;
				}
					if(isset($this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['fail']) && $this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['fail'] == true)
					{
						?>{/iteration:widgetBlogCategories}<?php
					}
				if(isset($this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['old'])) ${'widgetBlogCategories'} = $this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']['old'];
				else unset($this->iterations['05afe875b0c45bef7291d32da9d0f3e1_categories.tpl.php_1']);
				?>
				</ul>
			</div>
		</div>
	</section>
<?php } ?>