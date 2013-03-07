<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>
<?php $includes = array();
				ob_start();
				?>core/layout/templates/head.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				ob_start();
				?>C:\wamp\www\figure8\figure8/frontend/themes/triton/core/layout/templates/head.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				ob_start();
				?>C:\wamp\www\figure8\figure8/frontend/core/layout/templates/head.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				foreach($includes as $include) if(@file_exists($include) && is_file($include)) break;
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates');
				}
if($return === false)
				{
					?>{include:core/layout/templates/head.tpl}<?php
				}
?>

<body class="<?php if(array_key_exists('LANGUAGE', (array) $this->variables)) { echo $this->variables['LANGUAGE']; } else { ?>{$LANGUAGE}<?php } ?>" itemscope itemtype="http://schema.org/WebPage">
	<div id="topWrapper">
		<header id="header">
			<div class="container">

				
				<div id="logo">
					<h2><a href="/"><?php if(array_key_exists('siteTitle', (array) $this->variables)) { echo $this->variables['siteTitle']; } else { ?>{$siteTitle}<?php } ?></a></h2>
				</div>

				
				<div id="skip">
					<p><a href="#main"><?php if(array_key_exists('lblSkipToContent', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblSkipToContent']); } else { ?>{$lblSkipToContent|ucfirst}<?php } ?></a></p>
				</div>

				
				<nav id="headerNavigation">
					<h4><?php if(array_key_exists('lblMainNavigation', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblMainNavigation']); } else { ?>{$lblMainNavigation|ucfirst}<?php } ?></h4>
					<?php if(array_key_exists('var', (array) $this->variables)) { echo FrontendTemplateModifiers::getNavigation($this->variables['var'], 'page', 0, 1); } else { ?>{$var|getnavigation:'page':0:1}<?php } ?>
				</nav>

				
				<nav id="headerLanguage">
					<h4><?php if(array_key_exists('lblLanguage', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblLanguage']); } else { ?>{$lblLanguage|ucfirst}<?php } ?></h4>
					<?php $includes = array();
				ob_start();
				?>core/layout/templates/languages.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				ob_start();
				?>C:\wamp\www\figure8\figure8/frontend/themes/triton/core/layout/templates/languages.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				ob_start();
				?>C:\wamp\www\figure8\figure8/frontend/core/layout/templates/languages.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				foreach($includes as $include) if(@file_exists($include) && is_file($include)) break;
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates');
				}
if($return === false)
				{
					?>{include:core/layout/templates/languages.tpl}<?php
				}
?>
				</nav>

				
				<?php
					if(!isset($this->variables['positionTop']))
					{
						?>{iteration:positionTop}<?php
						$this->variables['positionTop'] = array();
						$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['fail'] = true;
					}
				if(isset(${'positionTop'})) $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['old'] = ${'positionTop'};
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['iteration'] = $this->variables['positionTop'];
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['i'] = 1;
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['count'] = count($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['iteration']);
				foreach((array) $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['iteration'] as ${'positionTop'})
				{
					if(!isset(${'positionTop'}['first']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['i'] == 1) ${'positionTop'}['first'] = true;
					if(!isset(${'positionTop'}['last']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['i'] == $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['count']) ${'positionTop'}['last'] = true;
					if(isset(${'positionTop'}['formElements']) && is_array(${'positionTop'}['formElements']))
					{
						foreach(${'positionTop'}['formElements'] as $name => $object)
						{
							${'positionTop'}[$name] = $object->parse();
							${'positionTop'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
					<?php if(array_key_exists('blockContent', (array) ${'positionTop'})) { echo ${'positionTop'}['blockContent']; } else { ?>{$positionTop->blockContent}<?php } ?>
				<?php
					$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['i']++;
				}
					if(isset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['fail']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['fail'] == true)
					{
						?>{/iteration:positionTop}<?php
					}
				if(isset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['old'])) ${'positionTop'} = $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']['old'];
				else unset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_1']);
				?>

				
				<div id="breadcrumb">
					<h4><?php if(array_key_exists('lblBreadcrumb', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblBreadcrumb']); } else { ?>{$lblBreadcrumb|ucfirst}<?php } ?></h4>
					<?php $includes = array();
				ob_start();
				?>core/layout/templates/breadcrumb.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				ob_start();
				?>C:\wamp\www\figure8\figure8/frontend/themes/triton/core/layout/templates/breadcrumb.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				ob_start();
				?>C:\wamp\www\figure8\figure8/frontend/core/layout/templates/breadcrumb.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				foreach($includes as $include) if(@file_exists($include) && is_file($include)) break;
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates');
				}
if($return === false)
				{
					?>{include:core/layout/templates/breadcrumb.tpl}<?php
				}
?>
				</div>

				
				<?php
					if(!isset($this->variables['positionAdvertisement']))
					{
						?>{iteration:positionAdvertisement}<?php
						$this->variables['positionAdvertisement'] = array();
						$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['fail'] = true;
					}
				if(isset(${'positionAdvertisement'})) $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['old'] = ${'positionAdvertisement'};
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['iteration'] = $this->variables['positionAdvertisement'];
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['i'] = 1;
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['count'] = count($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['iteration']);
				foreach((array) $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['iteration'] as ${'positionAdvertisement'})
				{
					if(!isset(${'positionAdvertisement'}['first']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['i'] == 1) ${'positionAdvertisement'}['first'] = true;
					if(!isset(${'positionAdvertisement'}['last']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['i'] == $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['count']) ${'positionAdvertisement'}['last'] = true;
					if(isset(${'positionAdvertisement'}['formElements']) && is_array(${'positionAdvertisement'}['formElements']))
					{
						foreach(${'positionAdvertisement'}['formElements'] as $name => $object)
						{
							${'positionAdvertisement'}[$name] = $object->parse();
							${'positionAdvertisement'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
					<?php
					if(isset(${'positionAdvertisement'}['blockIsHTML']) && count(${'positionAdvertisement'}['blockIsHTML']) != 0 && ${'positionAdvertisement'}['blockIsHTML'] != '' && ${'positionAdvertisement'}['blockIsHTML'] !== false)
					{
						?>
						<div id="headerAd">
							<?php if(array_key_exists('blockContent', (array) ${'positionAdvertisement'})) { echo ${'positionAdvertisement'}['blockContent']; } else { ?>{$positionAdvertisement->blockContent}<?php } ?>
						</div>
					<?php } ?>
					<?php if(!isset(${'positionAdvertisement'}['blockIsHTML']) || count(${'positionAdvertisement'}['blockIsHTML']) == 0 || ${'positionAdvertisement'}['blockIsHTML'] == '' || ${'positionAdvertisement'}['blockIsHTML'] === false): ?>
						<?php if(array_key_exists('blockContent', (array) ${'positionAdvertisement'})) { echo ${'positionAdvertisement'}['blockContent']; } else { ?>{$positionAdvertisement->blockContent}<?php } ?>
					<?php endif; ?>
				<?php
					$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['i']++;
				}
					if(isset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['fail']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['fail'] == true)
					{
						?>{/iteration:positionAdvertisement}<?php
					}
				if(isset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['old'])) ${'positionAdvertisement'} = $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']['old'];
				else unset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_2']);
				?>
			</div>

		</header>
		<div id="main">
			<div class="container">

				
				<div class="col col-3">

					
					<nav class="sideNavigation">
						<h4><?php if(array_key_exists('lblSubnavigation', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblSubnavigation']); } else { ?>{$lblSubnavigation|ucfirst}<?php } ?></h4>
						<?php if(array_key_exists('var', (array) $this->variables) && isset($this->variables['page']) && array_key_exists('id', (array) $this->variables['page'])) { echo FrontendTemplateModifiers::getSubNavigation($this->variables['var'], 'page', $this->variables['page']['id'], 2); } else { ?>{$var|getsubnavigation:'page':<?php if(isset($this->variables['page']) && array_key_exists('id', (array) $this->variables['page'])) { echo $this->variables['page']['id']; } else { ?>{$page.id}<?php } ?>:2}<?php } ?>
					</nav>

					
					<?php
					if(!isset($this->variables['positionLeft']))
					{
						?>{iteration:positionLeft}<?php
						$this->variables['positionLeft'] = array();
						$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['fail'] = true;
					}
				if(isset(${'positionLeft'})) $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['old'] = ${'positionLeft'};
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['iteration'] = $this->variables['positionLeft'];
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['i'] = 1;
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['count'] = count($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['iteration']);
				foreach((array) $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['iteration'] as ${'positionLeft'})
				{
					if(!isset(${'positionLeft'}['first']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['i'] == 1) ${'positionLeft'}['first'] = true;
					if(!isset(${'positionLeft'}['last']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['i'] == $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['count']) ${'positionLeft'}['last'] = true;
					if(isset(${'positionLeft'}['formElements']) && is_array(${'positionLeft'}['formElements']))
					{
						foreach(${'positionLeft'}['formElements'] as $name => $object)
						{
							${'positionLeft'}[$name] = $object->parse();
							${'positionLeft'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
						<?php
					if(isset(${'positionLeft'}['blockIsHTML']) && count(${'positionLeft'}['blockIsHTML']) != 0 && ${'positionLeft'}['blockIsHTML'] != '' && ${'positionLeft'}['blockIsHTML'] !== false)
					{
						?>
							<section class="mod">
								<div class="inner">
									<div class="bd content">
										<?php if(array_key_exists('blockContent', (array) ${'positionLeft'})) { echo ${'positionLeft'}['blockContent']; } else { ?>{$positionLeft->blockContent}<?php } ?>
									</div>
								</div>
							</section>
						<?php } ?>
						<?php if(!isset(${'positionLeft'}['blockIsHTML']) || count(${'positionLeft'}['blockIsHTML']) == 0 || ${'positionLeft'}['blockIsHTML'] == '' || ${'positionLeft'}['blockIsHTML'] === false): ?>
							<?php if(array_key_exists('blockContent', (array) ${'positionLeft'})) { echo ${'positionLeft'}['blockContent']; } else { ?>{$positionLeft->blockContent}<?php } ?>
						<?php endif; ?>
					<?php
					$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['i']++;
				}
					if(isset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['fail']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['fail'] == true)
					{
						?>{/iteration:positionLeft}<?php
					}
				if(isset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['old'])) ${'positionLeft'} = $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']['old'];
				else unset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_3']);
				?>

				</div>

				
				<div class="col col-9 lastCol">

					
					<?php if(!isset($this->variables['hideContentTitle']) || count($this->variables['hideContentTitle']) == 0 || $this->variables['hideContentTitle'] == '' || $this->variables['hideContentTitle'] === false): ?>
						<header class="mainTitle">
							<h1><?php if(isset($this->variables['page']) && array_key_exists('title', (array) $this->variables['page'])) { echo $this->variables['page']['title']; } else { ?>{$page.title}<?php } ?></h1>
						</header>
					<?php endif; ?>

					
					<?php
					if(!isset($this->variables['positionMain']))
					{
						?>{iteration:positionMain}<?php
						$this->variables['positionMain'] = array();
						$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['fail'] = true;
					}
				if(isset(${'positionMain'})) $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['old'] = ${'positionMain'};
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['iteration'] = $this->variables['positionMain'];
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['i'] = 1;
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['count'] = count($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['iteration']);
				foreach((array) $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['iteration'] as ${'positionMain'})
				{
					if(!isset(${'positionMain'}['first']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['i'] == 1) ${'positionMain'}['first'] = true;
					if(!isset(${'positionMain'}['last']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['i'] == $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['count']) ${'positionMain'}['last'] = true;
					if(isset(${'positionMain'}['formElements']) && is_array(${'positionMain'}['formElements']))
					{
						foreach(${'positionMain'}['formElements'] as $name => $object)
						{
							${'positionMain'}[$name] = $object->parse();
							${'positionMain'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
						<?php
					if(isset(${'positionMain'}['blockIsHTML']) && count(${'positionMain'}['blockIsHTML']) != 0 && ${'positionMain'}['blockIsHTML'] != '' && ${'positionMain'}['blockIsHTML'] !== false)
					{
						?>
							<section class="mod">
								<div class="inner">
									<div class="bd content">
										<?php if(array_key_exists('blockContent', (array) ${'positionMain'})) { echo ${'positionMain'}['blockContent']; } else { ?>{$positionMain->blockContent}<?php } ?>
									</div>
								</div>
							</section>
						<?php } ?>
						<?php if(!isset(${'positionMain'}['blockIsHTML']) || count(${'positionMain'}['blockIsHTML']) == 0 || ${'positionMain'}['blockIsHTML'] == '' || ${'positionMain'}['blockIsHTML'] === false): ?>
							<?php if(array_key_exists('blockContent', (array) ${'positionMain'})) { echo ${'positionMain'}['blockContent']; } else { ?>{$positionMain->blockContent}<?php } ?>
						<?php endif; ?>
					<?php
					$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['i']++;
				}
					if(isset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['fail']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['fail'] == true)
					{
						?>{/iteration:positionMain}<?php
					}
				if(isset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['old'])) ${'positionMain'} = $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']['old'];
				else unset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_4']);
				?>

				</div>
			</div>
		</div>
		<noscript>
			<div class="message notice">
				<h4><?php if(array_key_exists('lblEnableJavascript', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblEnableJavascript']); } else { ?>{$lblEnableJavascript|ucfirst}<?php } ?></h4>
				<p><?php if(array_key_exists('msgEnableJavascript', (array) $this->variables)) { echo $this->variables['msgEnableJavascript']; } else { ?>{$msgEnableJavascript}<?php } ?></p>
			</div>
		</noscript>
	</div>
	<div id="bottomWrapper">
		<?php $includes = array();
				ob_start();
				?>core/layout/templates/footer.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				ob_start();
				?>C:\wamp\www\figure8\figure8/frontend/themes/triton/core/layout/templates/footer.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				ob_start();
				?>C:\wamp\www\figure8\figure8/frontend/core/layout/templates/footer.tpl<?php
				$includes[] = str_replace('//', '/', eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';'));
				foreach($includes as $include) if(@file_exists($include) && is_file($include)) break;
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\frontend\themes\triton\core\layout\templates');
				}
if($return === false)
				{
					?>{include:core/layout/templates/footer.tpl}<?php
				}
?>
	</div>

	
	<?php
					if(!isset($this->variables['jsFiles']))
					{
						?>{iteration:jsFiles}<?php
						$this->variables['jsFiles'] = array();
						$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['fail'] = true;
					}
				if(isset(${'jsFiles'})) $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['old'] = ${'jsFiles'};
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['iteration'] = $this->variables['jsFiles'];
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['i'] = 1;
				$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['count'] = count($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['iteration']);
				foreach((array) $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['iteration'] as ${'jsFiles'})
				{
					if(!isset(${'jsFiles'}['first']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['i'] == 1) ${'jsFiles'}['first'] = true;
					if(!isset(${'jsFiles'}['last']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['i'] == $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['count']) ${'jsFiles'}['last'] = true;
					if(isset(${'jsFiles'}['formElements']) && is_array(${'jsFiles'}['formElements']))
					{
						foreach(${'jsFiles'}['formElements'] as $name => $object)
						{
							${'jsFiles'}[$name] = $object->parse();
							${'jsFiles'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?>
		<script src="<?php if(array_key_exists('file', (array) ${'jsFiles'})) { echo ${'jsFiles'}['file']; } else { ?>{$jsFiles->file}<?php } ?>"></script>
	<?php
					$this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['i']++;
				}
					if(isset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['fail']) && $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['fail'] == true)
					{
						?>{/iteration:jsFiles}<?php
					}
				if(isset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['old'])) ${'jsFiles'} = $this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']['old'];
				else unset($this->iterations['458786d7405dee7eff4b48bf7c385bdc_default.tpl.php_5']);
				?>

	<script src="/frontend/core/js/jquery/jquery.cookielaw.js"></script>

	
	<script src="<?php if(array_key_exists('THEME_URL', (array) $this->variables)) { echo $this->variables['THEME_URL']; } else { ?>{$THEME_URL}<?php } ?>/core/js/triton.js"></script>

	
	<?php if(array_key_exists('siteHTMLFooter', (array) $this->variables)) { echo $this->variables['siteHTMLFooter']; } else { ?>{$siteHTMLFooter}<?php } ?>
</body>
</html>