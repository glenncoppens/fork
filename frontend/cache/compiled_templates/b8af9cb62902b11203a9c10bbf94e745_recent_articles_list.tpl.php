<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>


<?php
					if(isset($this->variables['widgetBlogRecentArticlesList']) && count($this->variables['widgetBlogRecentArticlesList']) != 0 && $this->variables['widgetBlogRecentArticlesList'] != '' && $this->variables['widgetBlogRecentArticlesList'] !== false)
					{
						?>
	<section id="blogRecentArticlesListWidget" class="mod">
		<div class="inner">
			<header class="hd">
				<h3><?php if(array_key_exists('lblRecentArticles', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblRecentArticles']); } else { ?>{$lblRecentArticles|ucfirst}<?php } ?></h3>
			</header>
			<div class="bd content">
				<ul>
					<?php
					if(!isset($this->variables['widgetBlogRecentArticlesList']))
					{
						?>{iteration:widgetBlogRecentArticlesList}<?php
						$this->variables['widgetBlogRecentArticlesList'] = array();
						$this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['fail'] = true;
					}
				if(isset(${'widgetBlogRecentArticlesList'})) $this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['old'] = ${'widgetBlogRecentArticlesList'};
				$this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['iteration'] = $this->variables['widgetBlogRecentArticlesList'];
				$this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['i'] = 1;
				$this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['count'] = count($this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['iteration']);
				foreach((array) $this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['iteration'] as ${'widgetBlogRecentArticlesList'})
				{
					if(!isset(${'widgetBlogRecentArticlesList'}['first']) && $this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['i'] == 1) ${'widgetBlogRecentArticlesList'}['first'] = true;
					if(!isset(${'widgetBlogRecentArticlesList'}['last']) && $this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['i'] == $this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['count']) ${'widgetBlogRecentArticlesList'}['last'] = true;
					if(isset(${'widgetBlogRecentArticlesList'}['formElements']) && is_array(${'widgetBlogRecentArticlesList'}['formElements']))
					{
						foreach(${'widgetBlogRecentArticlesList'}['formElements'] as $name => $object)
						{
							${'widgetBlogRecentArticlesList'}[$name] = $object->parse();
							${'widgetBlogRecentArticlesList'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
						<li><a href="<?php if(array_key_exists('full_url', (array) ${'widgetBlogRecentArticlesList'})) { echo ${'widgetBlogRecentArticlesList'}['full_url']; } else { ?>{$widgetBlogRecentArticlesList->full_url}<?php } ?>" title="<?php if(array_key_exists('title', (array) ${'widgetBlogRecentArticlesList'})) { echo ${'widgetBlogRecentArticlesList'}['title']; } else { ?>{$widgetBlogRecentArticlesList->title}<?php } ?>"><?php if(array_key_exists('title', (array) ${'widgetBlogRecentArticlesList'})) { echo ${'widgetBlogRecentArticlesList'}['title']; } else { ?>{$widgetBlogRecentArticlesList->title}<?php } ?></a></li>
					<?php
					$this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['i']++;
				}
					if(isset($this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['fail']) && $this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['fail'] == true)
					{
						?>{/iteration:widgetBlogRecentArticlesList}<?php
					}
				if(isset($this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['old'])) ${'widgetBlogRecentArticlesList'} = $this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']['old'];
				else unset($this->iterations['b8af9cb62902b11203a9c10bbf94e745_recent_articles_list.tpl.php_1']);
				?>
				</ul>
			</div>
			<footer class="ft">
				<p>
					<a href="<?php if(array_key_exists('var', (array) $this->variables)) { echo FrontendTemplateModifiers::getURLForBlock($this->variables['var'], 'blog'); } else { ?>{$var|geturlforblock:'blog'}<?php } ?>"><?php if(array_key_exists('lblBlogArchive', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblBlogArchive']); } else { ?>{$lblBlogArchive|ucfirst}<?php } ?></a>
					<a id="RSSfeed" href="<?php if(array_key_exists('var', (array) $this->variables)) { echo FrontendTemplateModifiers::getURLForBlock($this->variables['var'], 'blog', 'rss'); } else { ?>{$var|geturlforblock:'blog':'rss'}<?php } ?>"><?php if(array_key_exists('lblSubscribeToTheRSSFeed', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblSubscribeToTheRSSFeed']); } else { ?>{$lblSubscribeToTheRSSFeed|ucfirst}<?php } ?></a>
				</p>
			</footer>
		</div>
	</section>
<?php } ?>