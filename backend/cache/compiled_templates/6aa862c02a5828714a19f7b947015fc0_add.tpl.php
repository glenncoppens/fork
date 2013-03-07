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

<?php
					if(isset($this->forms['add']))
					{
						?><form accept-charset="UTF-8" action="<?php echo $this->forms['add']->getAction(); ?>" method="<?php echo $this->forms['add']->getMethod(); ?>"<?php echo $this->forms['add']->getParametersHTML(); ?>>
						<?php echo $this->forms['add']->getField('form')->parse();
						if($this->forms['add']->getUseToken())
						{
							?><input type="hidden" name="form_token" id="<?php echo $this->forms['add']->getField('form_token')->getAttribute('id'); ?>" value="<?php echo htmlspecialchars($this->forms['add']->getField('form_token')->getValue()); ?>" />
						<?php } ?>
	<div class="box">
		<div class="heading">
			<h3><?php if(array_key_exists('lblTranslations', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblTranslations']); } else { ?>{$lblTranslations|ucfirst}<?php } ?>: <?php if(array_key_exists('lblAdd', (array) $this->variables)) { echo $this->variables['lblAdd']; } else { ?>{$lblAdd}<?php } ?></h3>
		</div>
		<div class="options">
			<div class="horizontal">
				<p>
					<label for="name"><?php if(array_key_exists('lblReferenceCode', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblReferenceCode']); } else { ?>{$lblReferenceCode|ucfirst}<?php } ?><abbr title="<?php if(array_key_exists('lblRequiredField', (array) $this->variables)) { echo $this->variables['lblRequiredField']; } else { ?>{$lblRequiredField}<?php } ?>">*</abbr></label>
					<?php if(array_key_exists('txtName', (array) $this->variables)) { echo $this->variables['txtName']; } else { ?>{$txtName}<?php } ?> <?php if(array_key_exists('txtNameError', (array) $this->variables)) { echo $this->variables['txtNameError']; } else { ?>{$txtNameError}<?php } ?>
					<span class="helpTxt"><?php if(array_key_exists('msgHelpAddName', (array) $this->variables)) { echo $this->variables['msgHelpAddName']; } else { ?>{$msgHelpAddName}<?php } ?></span>
				</p>
				<p>
					<label for="value"><?php if(array_key_exists('lblTranslation', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblTranslation']); } else { ?>{$lblTranslation|ucfirst}<?php } ?><abbr title="<?php if(array_key_exists('lblRequiredField', (array) $this->variables)) { echo $this->variables['lblRequiredField']; } else { ?>{$lblRequiredField}<?php } ?>">*</abbr></label>
					<?php if(array_key_exists('txtValue', (array) $this->variables)) { echo $this->variables['txtValue']; } else { ?>{$txtValue}<?php } ?> <?php if(array_key_exists('txtValueError', (array) $this->variables)) { echo $this->variables['txtValueError']; } else { ?>{$txtValueError}<?php } ?>
					<span class="helpTxt"><?php if(array_key_exists('msgHelpAddValue', (array) $this->variables)) { echo $this->variables['msgHelpAddValue']; } else { ?>{$msgHelpAddValue}<?php } ?></span>
				</p>
				<p>
					<label for="language"><?php if(array_key_exists('lblLanguage', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblLanguage']); } else { ?>{$lblLanguage|ucfirst}<?php } ?></label>
					<?php if(array_key_exists('ddmLanguage', (array) $this->variables)) { echo $this->variables['ddmLanguage']; } else { ?>{$ddmLanguage}<?php } ?> <?php if(array_key_exists('ddmLanguageError', (array) $this->variables)) { echo $this->variables['ddmLanguageError']; } else { ?>{$ddmLanguageError}<?php } ?>
				</p>
				<p>
					<label for="application"><?php if(array_key_exists('lblApplication', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblApplication']); } else { ?>{$lblApplication|ucfirst}<?php } ?></label>
					<?php if(array_key_exists('ddmApplication', (array) $this->variables)) { echo $this->variables['ddmApplication']; } else { ?>{$ddmApplication}<?php } ?> <?php if(array_key_exists('ddmApplicationError', (array) $this->variables)) { echo $this->variables['ddmApplicationError']; } else { ?>{$ddmApplicationError}<?php } ?>
				</p>
				<p>
					<label for="module"><?php if(array_key_exists('lblModule', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblModule']); } else { ?>{$lblModule|ucfirst}<?php } ?></label>
					<?php if(array_key_exists('ddmModule', (array) $this->variables)) { echo $this->variables['ddmModule']; } else { ?>{$ddmModule}<?php } ?> <?php if(array_key_exists('ddmModuleError', (array) $this->variables)) { echo $this->variables['ddmModuleError']; } else { ?>{$ddmModuleError}<?php } ?>
				</p>
				<p>
					<label for="type"><?php if(array_key_exists('lblType', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblType']); } else { ?>{$lblType|ucfirst}<?php } ?></label>
					<?php if(array_key_exists('ddmType', (array) $this->variables)) { echo $this->variables['ddmType']; } else { ?>{$ddmType}<?php } ?> <?php if(array_key_exists('ddmTypeError', (array) $this->variables)) { echo $this->variables['ddmTypeError']; } else { ?>{$ddmTypeError}<?php } ?>
				</p>
			</div>
		</div>

		<div class="fullwidthOptions">
			<div class="buttonHolderRight">
				<input id="addButton" class="inputButton button mainButton" type="submit" name="add" value="<?php if(array_key_exists('lblAdd', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblAdd']); } else { ?>{$lblAdd|ucfirst}<?php } ?>" />
			</div>
		</div>
	</div>
</form>
				<?php } ?>

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