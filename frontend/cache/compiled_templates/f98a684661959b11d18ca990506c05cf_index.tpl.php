<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>



<?php if(!isset($this->variables['faqCategories']) || count($this->variables['faqCategories']) == 0 || $this->variables['faqCategories'] == '' || $this->variables['faqCategories'] === false): ?>
	<div id="faqIndex">
		<section class="mod">
			<div class="inner">
				<div class="bd content">
					<p><?php if(array_key_exists('msgFaqNoItems', (array) $this->variables)) { echo $this->variables['msgFaqNoItems']; } else { ?>{$msgFaqNoItems}<?php } ?></p>
				</div>
			</div>
		</section>
	</div>
<?php endif; ?>

<?php
					if(isset($this->variables['faqCategories']) && count($this->variables['faqCategories']) != 0 && $this->variables['faqCategories'] != '' && $this->variables['faqCategories'] !== false)
					{
						?>
	<section id="faqIndex" class="mod">
		<div class="inner">
        	<?php
					if(isset($this->variables['allowMultipleCategories']) && count($this->variables['allowMultipleCategories']) != 0 && $this->variables['allowMultipleCategories'] != '' && $this->variables['allowMultipleCategories'] !== false)
					{
						?>
			<div class="hd">
				<ul>
					<?php
					if(!isset($this->variables['faqCategories']))
					{
						?>{iteration:faqCategories}<?php
						$this->variables['faqCategories'] = array();
						$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['fail'] = true;
					}
				if(isset(${'faqCategories'})) $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['old'] = ${'faqCategories'};
				$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['iteration'] = $this->variables['faqCategories'];
				$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['i'] = 1;
				$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['count'] = count($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['iteration']);
				foreach((array) $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['iteration'] as ${'faqCategories'})
				{
					if(!isset(${'faqCategories'}['first']) && $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['i'] == 1) ${'faqCategories'}['first'] = true;
					if(!isset(${'faqCategories'}['last']) && $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['i'] == $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['count']) ${'faqCategories'}['last'] = true;
					if(isset(${'faqCategories'}['formElements']) && is_array(${'faqCategories'}['formElements']))
					{
						foreach(${'faqCategories'}['formElements'] as $name => $object)
						{
							${'faqCategories'}[$name] = $object->parse();
							${'faqCategories'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
						<li><a href="#<?php if(array_key_exists('url', (array) ${'faqCategories'})) { echo ${'faqCategories'}['url']; } else { ?>{$faqCategories->url}<?php } ?>" title="<?php if(array_key_exists('title', (array) ${'faqCategories'})) { echo ${'faqCategories'}['title']; } else { ?>{$faqCategories->title}<?php } ?>"><?php if(array_key_exists('title', (array) ${'faqCategories'})) { echo ${'faqCategories'}['title']; } else { ?>{$faqCategories->title}<?php } ?></a></li>
					<?php
					$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['i']++;
				}
					if(isset($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['fail']) && $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['fail'] == true)
					{
						?>{/iteration:faqCategories}<?php
					}
				if(isset($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['old'])) ${'faqCategories'} = $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']['old'];
				else unset($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_2']);
				?>
				</ul>
			</div>
        	<?php } ?>
			<div class="bd">
				<?php
					if(!isset($this->variables['faqCategories']))
					{
						?>{iteration:faqCategories}<?php
						$this->variables['faqCategories'] = array();
						$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['fail'] = true;
					}
				if(isset(${'faqCategories'})) $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['old'] = ${'faqCategories'};
				$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['iteration'] = $this->variables['faqCategories'];
				$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['i'] = 1;
				$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['count'] = count($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['iteration']);
				foreach((array) $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['iteration'] as ${'faqCategories'})
				{
					if(!isset(${'faqCategories'}['first']) && $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['i'] == 1) ${'faqCategories'}['first'] = true;
					if(!isset(${'faqCategories'}['last']) && $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['i'] == $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['count']) ${'faqCategories'}['last'] = true;
					if(isset(${'faqCategories'}['formElements']) && is_array(${'faqCategories'}['formElements']))
					{
						foreach(${'faqCategories'}['formElements'] as $name => $object)
						{
							${'faqCategories'}[$name] = $object->parse();
							${'faqCategories'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
					<section class="mod">
						<div class="inner">
                        	<?php
					if(isset($this->variables['allowMultipleCategories']) && count($this->variables['allowMultipleCategories']) != 0 && $this->variables['allowMultipleCategories'] != '' && $this->variables['allowMultipleCategories'] !== false)
					{
						?>
							<header class="hd">
								<h3 id="<?php if(array_key_exists('url', (array) ${'faqCategories'})) { echo ${'faqCategories'}['url']; } else { ?>{$faqCategories->url}<?php } ?>"><a href="<?php if(array_key_exists('full_url', (array) ${'faqCategories'})) { echo ${'faqCategories'}['full_url']; } else { ?>{$faqCategories->full_url}<?php } ?>" title="<?php if(array_key_exists('title', (array) ${'faqCategories'})) { echo ${'faqCategories'}['title']; } else { ?>{$faqCategories->title}<?php } ?>"><?php if(array_key_exists('title', (array) ${'faqCategories'})) { echo ${'faqCategories'}['title']; } else { ?>{$faqCategories->title}<?php } ?></a></h3>
							</header>
                            <?php } ?>

							<div class="bd content">
								<ul>
									<?php
					if(!isset(${'faqCategories'}['questions']))
					{
						?>{iteration:faqCategories->questions}<?php
						${'faqCategories'}['questions'] = array();
						$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['fail'] = true;
					}
				if(isset(${'faqCategories'}['questions'])) $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['old'] = ${'faqCategories'}['questions'];
				$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['iteration'] = ${'faqCategories'}['questions'];
				$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['i'] = 1;
				$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['count'] = count($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['iteration']);
				foreach((array) $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['iteration'] as ${'faqCategories'}['questions'])
				{
					if(!isset(${'faqCategories'}['questions']['first']) && $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['i'] == 1) ${'faqCategories'}['questions']['first'] = true;
					if(!isset(${'faqCategories'}['questions']['last']) && $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['i'] == $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['count']) ${'faqCategories'}['questions']['last'] = true;
					if(isset(${'faqCategories'}['questions']['formElements']) && is_array(${'faqCategories'}['questions']['formElements']))
					{
						foreach(${'faqCategories'}['questions']['formElements'] as $name => $object)
						{
							${'faqCategories'}['questions'][$name] = $object->parse();
							${'faqCategories'}['questions'][$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
										<li><a href="<?php if(isset(${'faqCategories'}['questions']) && array_key_exists('full_url', (array) ${'faqCategories'}['questions'])) { echo ${'faqCategories'}['questions']['full_url']; } else { ?>{$faqCategories->questions.full_url}<?php } ?>"><?php if(isset(${'faqCategories'}['questions']) && array_key_exists('question', (array) ${'faqCategories'}['questions'])) { echo ${'faqCategories'}['questions']['question']; } else { ?>{$faqCategories->questions.question}<?php } ?></a></li>
									<?php
					$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['i']++;
				}
					if(isset($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['fail']) && $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['fail'] == true)
					{
						?>{/iteration:faqCategories->questions}<?php
					}
				if(isset($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['old'])) ${'faqCategories'}['questions'] = $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']['old'];
				else unset($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_3']['questions']);
				?>
								</ul>
							</div>
						</div>
					</section>
				<?php
					$this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['i']++;
				}
					if(isset($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['fail']) && $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['fail'] == true)
					{
						?>{/iteration:faqCategories}<?php
					}
				if(isset($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['old'])) ${'faqCategories'} = $this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']['old'];
				else unset($this->iterations['f98a684661959b11d18ca990506c05cf_index.tpl.php_1']);
				?>
			</div>
		</div>
	</section>
<?php } ?>