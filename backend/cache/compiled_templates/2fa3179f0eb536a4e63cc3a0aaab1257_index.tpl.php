<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>
<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/head.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/head.tpl}<?php
				}
?>
<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/structure_start_module.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/structure_start_module.tpl}<?php
				}
?>

<div class="pageTitle">
	<h2><?php if(array_key_exists('lblTranslations', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblTranslations']); } else { ?>{$lblTranslations|ucfirst}<?php } ?></h2>
		<div class="buttonHolderRight">
			<?php
					if(isset($this->variables['showLocaleAdd']) && count($this->variables['showLocaleAdd']) != 0 && $this->variables['showLocaleAdd'] != '' && $this->variables['showLocaleAdd'] !== false)
					{
						?><a href="<?php if(array_key_exists('var', (array) $this->variables)) { echo BackendTemplateModifiers::getURL($this->variables['var'], 'add'); } else { ?>{$var|geturl:'add'}<?php } ?><?php if(array_key_exists('filter', (array) $this->variables)) { echo $this->variables['filter']; } else { ?>{$filter}<?php } ?>" class="button icon iconAdd"><span><?php if(array_key_exists('lblAdd', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblAdd']); } else { ?>{$lblAdd|ucfirst}<?php } ?></span></a><?php } ?>
			<?php
					if(isset($this->variables['showLocaleExport']) && count($this->variables['showLocaleExport']) != 0 && $this->variables['showLocaleExport'] != '' && $this->variables['showLocaleExport'] !== false)
					{
						?><a href="<?php if(array_key_exists('var', (array) $this->variables)) { echo BackendTemplateModifiers::getURL($this->variables['var'], 'export'); } else { ?>{$var|geturl:'export'}<?php } ?><?php if(array_key_exists('filter', (array) $this->variables)) { echo $this->variables['filter']; } else { ?>{$filter}<?php } ?>" class="button icon iconExport"><span><?php if(array_key_exists('lblExport', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblExport']); } else { ?>{$lblExport|ucfirst}<?php } ?></span></a><?php } ?>
			<?php
					if(isset($this->variables['showLocaleImport']) && count($this->variables['showLocaleImport']) != 0 && $this->variables['showLocaleImport'] != '' && $this->variables['showLocaleImport'] !== false)
					{
						?><a href="<?php if(array_key_exists('var', (array) $this->variables)) { echo BackendTemplateModifiers::getURL($this->variables['var'], 'import'); } else { ?>{$var|geturl:'import'}<?php } ?><?php if(array_key_exists('filter', (array) $this->variables)) { echo $this->variables['filter']; } else { ?>{$filter}<?php } ?>" class="button icon iconImport"><span><?php if(array_key_exists('lblImport', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblImport']); } else { ?>{$lblImport|ucfirst}<?php } ?></span></a><?php } ?>
		</div>
</div>

<div class="dataGridHolder">
	<?php
					if(isset($this->forms['filter']))
					{
						?><form accept-charset="UTF-8" action="<?php echo $this->forms['filter']->getAction(); ?>" method="<?php echo $this->forms['filter']->getMethod(); ?>"<?php echo $this->forms['filter']->getParametersHTML(); ?>>
						<?php echo $this->forms['filter']->getField('form')->parse();
						if($this->forms['filter']->getUseToken())
						{
							?><input type="hidden" name="form_token" id="<?php echo $this->forms['filter']->getField('form_token')->getAttribute('id'); ?>" value="<?php echo htmlspecialchars($this->forms['filter']->getField('form_token')->getValue()); ?>" />
						<?php } ?>
		<div class="dataFilter">
			<table>
				<tbody>
					<tr>
						<td>
							<div class="options">
								<p>
									<label for="application"><?php if(array_key_exists('lblApplication', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblApplication']); } else { ?>{$lblApplication|ucfirst}<?php } ?></label>
									<?php if(array_key_exists('ddmApplication', (array) $this->variables)) { echo $this->variables['ddmApplication']; } else { ?>{$ddmApplication}<?php } ?> <?php if(array_key_exists('ddmApplicationError', (array) $this->variables)) { echo $this->variables['ddmApplicationError']; } else { ?>{$ddmApplicationError}<?php } ?>
								</p>
								<p>
									<label for="module"><?php if(array_key_exists('lblModule', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblModule']); } else { ?>{$lblModule|ucfirst}<?php } ?></label>
									<?php if(array_key_exists('ddmModule', (array) $this->variables)) { echo $this->variables['ddmModule']; } else { ?>{$ddmModule}<?php } ?> <?php if(array_key_exists('ddmModuleError', (array) $this->variables)) { echo $this->variables['ddmModuleError']; } else { ?>{$ddmModuleError}<?php } ?>
								</p>
							</div>
						</td>
						<td>
							<div class="options">
								<label><?php if(array_key_exists('lblTypes', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblTypes']); } else { ?>{$lblTypes|ucfirst}<?php } ?></label>
								<?php
					if(isset($this->variables['type']) && count($this->variables['type']) != 0 && $this->variables['type'] != '' && $this->variables['type'] !== false)
					{
						?>
									<ul>
										<?php
					if(!isset($this->variables['type']))
					{
						?>{iteration:type}<?php
						$this->variables['type'] = array();
						$this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['fail'] = true;
					}
				if(isset(${'type'})) $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['old'] = ${'type'};
				$this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['iteration'] = $this->variables['type'];
				$this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['i'] = 1;
				$this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['count'] = count($this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['iteration']);
				foreach((array) $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['iteration'] as ${'type'})
				{
					if(!isset(${'type'}['first']) && $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['i'] == 1) ${'type'}['first'] = true;
					if(!isset(${'type'}['last']) && $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['i'] == $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['count']) ${'type'}['last'] = true;
					if(isset(${'type'}['formElements']) && is_array(${'type'}['formElements']))
					{
						foreach(${'type'}['formElements'] as $name => $object)
						{
							${'type'}[$name] = $object->parse();
							${'type'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?><li><?php if(array_key_exists('chkType', (array) ${'type'})) { echo ${'type'}['chkType']; } else { ?>{$type->chkType}<?php } ?> <label for="<?php if(array_key_exists('id', (array) ${'type'})) { echo ${'type'}['id']; } else { ?>{$type->id}<?php } ?>"><?php if(array_key_exists('label', (array) ${'type'})) { echo SpoonFilter::ucfirst(${'type'}['label']); } else { ?>{$type->label|ucfirst}<?php } ?></label></li><?php
					$this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['i']++;
				}
					if(isset($this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['fail']) && $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['fail'] == true)
					{
						?>{/iteration:type}<?php
					}
				if(isset($this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['old'])) ${'type'} = $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']['old'];
				else unset($this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_1']);
				?>
									</ul>
								<?php } ?>
							</div>
						</td>
						<td>
							<div class="options">
								<label><?php if(array_key_exists('lblLanguages', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblLanguages']); } else { ?>{$lblLanguages|ucfirst}<?php } ?></label>
								<?php
					if(isset($this->variables['language']) && count($this->variables['language']) != 0 && $this->variables['language'] != '' && $this->variables['language'] !== false)
					{
						?>
									<ul>
										<?php
					if(!isset($this->variables['language']))
					{
						?>{iteration:language}<?php
						$this->variables['language'] = array();
						$this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['fail'] = true;
					}
				if(isset(${'language'})) $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['old'] = ${'language'};
				$this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['iteration'] = $this->variables['language'];
				$this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['i'] = 1;
				$this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['count'] = count($this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['iteration']);
				foreach((array) $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['iteration'] as ${'language'})
				{
					if(!isset(${'language'}['first']) && $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['i'] == 1) ${'language'}['first'] = true;
					if(!isset(${'language'}['last']) && $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['i'] == $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['count']) ${'language'}['last'] = true;
					if(isset(${'language'}['formElements']) && is_array(${'language'}['formElements']))
					{
						foreach(${'language'}['formElements'] as $name => $object)
						{
							${'language'}[$name] = $object->parse();
							${'language'}[$name .'Error'] = (is_callable(array($object, 'getErrors')) && $object->getErrors() != '') ? '<span class="formError">' . $object->getErrors() .'</span>' : '';
						}
					} ?><li><?php if(array_key_exists('chkLanguage', (array) ${'language'})) { echo ${'language'}['chkLanguage']; } else { ?>{$language->chkLanguage}<?php } ?> <label for="<?php if(array_key_exists('id', (array) ${'language'})) { echo ${'language'}['id']; } else { ?>{$language->id}<?php } ?>"><?php if(array_key_exists('label', (array) ${'language'})) { echo SpoonFilter::ucfirst(${'language'}['label']); } else { ?>{$language->label|ucfirst}<?php } ?></label></li><?php
					$this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['i']++;
				}
					if(isset($this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['fail']) && $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['fail'] == true)
					{
						?>{/iteration:language}<?php
					}
				if(isset($this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['old'])) ${'language'} = $this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']['old'];
				else unset($this->iterations['2fa3179f0eb536a4e63cc3a0aaab1257_index.tpl.php_2']);
				?>
									</ul>
								<?php } ?>
							</div>
						</td>
						<td>
							<div class="options">
								<div class="oneLiner">
									<p>
										<label for="name"><?php if(array_key_exists('lblReferenceCode', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblReferenceCode']); } else { ?>{$lblReferenceCode|ucfirst}<?php } ?></label>
									</p>
									<p>
										<abbr class="help">(?)</abbr>
										<span class="tooltip" style="display: none;">
											<?php if(array_key_exists('msgHelpName', (array) $this->variables)) { echo $this->variables['msgHelpName']; } else { ?>{$msgHelpName}<?php } ?>
										</span>
									</p>
								</div>
								<?php if(array_key_exists('txtName', (array) $this->variables)) { echo $this->variables['txtName']; } else { ?>{$txtName}<?php } ?> <?php if(array_key_exists('txtNameError', (array) $this->variables)) { echo $this->variables['txtNameError']; } else { ?>{$txtNameError}<?php } ?>

								<div class="oneLiner">
									<p>
										<label for="value"><?php if(array_key_exists('lblValue', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblValue']); } else { ?>{$lblValue|ucfirst}<?php } ?></label>
									</p>
									<p>
										<abbr class="help">(?)</abbr>
										<span class="tooltip" style="display: none;">
											<?php if(array_key_exists('msgHelpValue', (array) $this->variables)) { echo $this->variables['msgHelpValue']; } else { ?>{$msgHelpValue}<?php } ?>
										</span>
									</p>
								</div>
								<?php if(array_key_exists('txtValue', (array) $this->variables)) { echo $this->variables['txtValue']; } else { ?>{$txtValue}<?php } ?> <?php if(array_key_exists('txtValueError', (array) $this->variables)) { echo $this->variables['txtValueError']; } else { ?>{$txtValueError}<?php } ?>

							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="99">
							<div class="options">
								<div class="buttonHolder">
									<input id="search" class="inputButton button mainButton" type="submit" name="search" value="<?php if(array_key_exists('lblUpdateFilter', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblUpdateFilter']); } else { ?>{$lblUpdateFilter|ucfirst}<?php } ?>" />
								</div>
							</div>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</form>
				<?php } ?>


	<?php
					if(isset($this->variables['dgLabels']) && count($this->variables['dgLabels']) != 0 && $this->variables['dgLabels'] != '' && $this->variables['dgLabels'] !== false)
					{
						?>
	<div class="dataGridHolder">
		<div class="tableHeading">
			<h3><?php if(array_key_exists('lblLabels', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblLabels']); } else { ?>{$lblLabels|ucfirst}<?php } ?></h3>
		</div>
		<?php if(array_key_exists('dgLabels', (array) $this->variables)) { echo $this->variables['dgLabels']; } else { ?>{$dgLabels}<?php } ?>
	</div>
	<?php } ?>

	<?php
					if(isset($this->variables['dgMessages']) && count($this->variables['dgMessages']) != 0 && $this->variables['dgMessages'] != '' && $this->variables['dgMessages'] !== false)
					{
						?>
	<div class="dataGridHolder">
		<div class="tableHeading">
			<h3><?php if(array_key_exists('lblMessages', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblMessages']); } else { ?>{$lblMessages|ucfirst}<?php } ?></h3>
		</div>
		<?php if(array_key_exists('dgMessages', (array) $this->variables)) { echo $this->variables['dgMessages']; } else { ?>{$dgMessages}<?php } ?>
	</div>
	<?php } ?>

	<?php
					if(isset($this->variables['dgErrors']) && count($this->variables['dgErrors']) != 0 && $this->variables['dgErrors'] != '' && $this->variables['dgErrors'] !== false)
					{
						?>
	<div class="dataGridHolder">
		<div class="tableHeading">
			<h3><?php if(array_key_exists('lblErrors', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblErrors']); } else { ?>{$lblErrors|ucfirst}<?php } ?></h3>
		</div>
		<?php if(array_key_exists('dgErrors', (array) $this->variables)) { echo $this->variables['dgErrors']; } else { ?>{$dgErrors}<?php } ?>
	</div>
	<?php } ?>

	<?php
					if(isset($this->variables['dgActions']) && count($this->variables['dgActions']) != 0 && $this->variables['dgActions'] != '' && $this->variables['dgActions'] !== false)
					{
						?>
	<div class="dataGridHolder">
		<div class="tableHeading oneLiner">
			<h3><?php if(array_key_exists('lblActions', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblActions']); } else { ?>{$lblActions|ucfirst}<?php } ?> </h3>
				<abbr class="help">(?)</abbr>
				<span class="tooltip" style="display: none;">
					<?php if(array_key_exists('msgHelpActionValue', (array) $this->variables)) { echo $this->variables['msgHelpActionValue']; } else { ?>{$msgHelpActionValue}<?php } ?>
				</span>
		</div>
		<?php if(array_key_exists('dgActions', (array) $this->variables)) { echo $this->variables['dgActions']; } else { ?>{$dgActions}<?php } ?>
	</div>
	<?php } ?>

	<?php
					if(isset($this->variables['noItems']) && count($this->variables['noItems']) != 0 && $this->variables['noItems'] != '' && $this->variables['noItems'] !== false)
					{
						?>
		<p><?php if(array_key_exists('msgNoItemsFilter', (array) $this->variables) && array_key_exists('addURL', (array) $this->variables)) { echo sprintf($this->variables['msgNoItemsFilter'], $this->variables['addURL']); } else { ?>{$msgNoItemsFilter|sprintf:<?php if(array_key_exists('addURL', (array) $this->variables)) { echo $this->variables['addURL']; } else { ?>{$addURL}<?php } ?>}<?php } ?></p>
	<?php } ?>
</div>

<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/structure_end_module.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/structure_end_module.tpl}<?php
				}
?>
<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/footer.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\locale\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/footer.tpl}<?php
				}
?>
