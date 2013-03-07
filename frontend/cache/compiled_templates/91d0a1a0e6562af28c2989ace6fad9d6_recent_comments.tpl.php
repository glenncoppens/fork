<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>


<?php
					if(isset($this->variables['widgetBlogRecentComments']) && count($this->variables['widgetBlogRecentComments']) != 0 && $this->variables['widgetBlogRecentComments'] != '' && $this->variables['widgetBlogRecentComments'] !== false)
					{
						?>
	<section id="blogRecentCommentsWidget" class="mod">
		<div class="inner">
			<header class="hd">
				<h3><?php if(array_key_exists('lblRecentComments', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblRecentComments']); } else { ?>{$lblRecentComments|ucfirst}<?php } ?></h3>
			</header>
			<div class="bd content">
				<ul>
					<?php
					if(!isset($this->variables['widgetBlogRecentComments']))
					{
						?>{iteration:widgetBlogRecentComments}<?php
						$this->variables['widgetBlogRecentComments'] = array();
						$this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['fail'] = true;
					}
				if(isset(${'widgetBlogRecentComments'})) $this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['old'] = ${'widgetBlogRecentComments'};
				$this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['iteration'] = $this->variables['widgetBlogRecentComments'];
				$this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['i'] = 1;
				$this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['count'] = count($this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['iteration']);
				foreach((array) $this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['iteration'] as ${'widgetBlogRecentComments'})
				{
					if(!isset(${'widgetBlogRecentComments'}['first']) && $this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['i'] == 1) ${'widgetBlogRecentComments'}['first'] = true;
					if(!isset(${'widgetBlogRecentComments'}['last']) && $this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['i'] == $this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['count']) ${'widgetBlogRecentComments'}['last'] = true;
					if(isset(${'widgetBlogRecentComments'}['formElements']) && is_array(${'widgetBlogRecentComments'}['formElements']))
					{
						foreach(${'widgetBlogRecentComments'}['formElements'] as $name => $object)
						{
							${'widgetBlogRecentComments'}[$name] = $object->parse();
							${'widgetBlogRecentComments'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
						<li>
							<?php
					if(isset(${'widgetBlogRecentComments'}['website']) && count(${'widgetBlogRecentComments'}['website']) != 0 && ${'widgetBlogRecentComments'}['website'] != '' && ${'widgetBlogRecentComments'}['website'] !== false)
					{
						?><a href="<?php if(array_key_exists('website', (array) ${'widgetBlogRecentComments'})) { echo ${'widgetBlogRecentComments'}['website']; } else { ?>{$widgetBlogRecentComments->website}<?php } ?>" rel="nofollow"><?php } ?>
								<?php if(array_key_exists('author', (array) ${'widgetBlogRecentComments'})) { echo ${'widgetBlogRecentComments'}['author']; } else { ?>{$widgetBlogRecentComments->author}<?php } ?>
							<?php
					if(isset(${'widgetBlogRecentComments'}['website']) && count(${'widgetBlogRecentComments'}['website']) != 0 && ${'widgetBlogRecentComments'}['website'] != '' && ${'widgetBlogRecentComments'}['website'] !== false)
					{
						?></a><?php } ?>
							<?php if(array_key_exists('lblCommentedOn', (array) $this->variables)) { echo $this->variables['lblCommentedOn']; } else { ?>{$lblCommentedOn}<?php } ?> <a href="<?php if(array_key_exists('full_url', (array) ${'widgetBlogRecentComments'})) { echo ${'widgetBlogRecentComments'}['full_url']; } else { ?>{$widgetBlogRecentComments->full_url}<?php } ?>"><?php if(array_key_exists('post_title', (array) ${'widgetBlogRecentComments'})) { echo ${'widgetBlogRecentComments'}['post_title']; } else { ?>{$widgetBlogRecentComments->post_title}<?php } ?></a>
						</li>
					<?php
					$this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['i']++;
				}
					if(isset($this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['fail']) && $this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['fail'] == true)
					{
						?>{/iteration:widgetBlogRecentComments}<?php
					}
				if(isset($this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['old'])) ${'widgetBlogRecentComments'} = $this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']['old'];
				else unset($this->iterations['91d0a1a0e6562af28c2989ace6fad9d6_recent_comments.tpl.php_1']);
				?>
				</ul>
			</div>
		</div>
	</section>
<?php } ?>