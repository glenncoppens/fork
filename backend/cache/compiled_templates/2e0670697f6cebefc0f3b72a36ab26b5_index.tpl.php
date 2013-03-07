<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>
<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/head.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/head.tpl}<?php
				}
?>
<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_MODULES_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_MODULES_PATH']; } else { ?>{$BACKEND_MODULES_PATH}<?php } ?>/pages/layout/templates/structure_start.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_MODULES_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_MODULES_PATH']; } else { ?>{$BACKEND_MODULES_PATH}<?php } ?>/pages/layout/templates/structure_start.tpl}<?php
				}
?>


<div class="pageTitle">
	<h2>
		<?php
					if(isset($this->variables['dgDrafts']) && count($this->variables['dgDrafts']) != 0 && $this->variables['dgDrafts'] != '' && $this->variables['dgDrafts'] !== false)
					{
						?><?php if(array_key_exists('lblDrafts', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblDrafts']); } else { ?>{$lblDrafts|ucfirst}<?php } ?><?php } ?>
		<?php if(!isset($this->variables['dgDrafts']) || count($this->variables['dgDrafts']) == 0 || $this->variables['dgDrafts'] == '' || $this->variables['dgDrafts'] === false): ?><?php if(array_key_exists('lblRecentlyEdited', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblRecentlyEdited']); } else { ?>{$lblRecentlyEdited|ucfirst}<?php } ?><?php endif; ?>
	</h2>

    <?php
					if(isset($this->variables['showPagesAdd']) && count($this->variables['showPagesAdd']) != 0 && $this->variables['showPagesAdd'] != '' && $this->variables['showPagesAdd'] !== false)
					{
						?>
	<div class="buttonHolderRight">
		<a href="<?php if(array_key_exists('var', (array) $this->variables)) { echo BackendTemplateModifiers::getURL($this->variables['var'], 'add'); } else { ?>{$var|geturl:'add'}<?php } ?>" class="button icon iconAdd">
			<span><?php if(array_key_exists('lblAdd', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblAdd']); } else { ?>{$lblAdd|ucfirst}<?php } ?></span>
		</a>
	</div>
    <?php } ?>
</div>

<?php
					if(isset($this->variables['dgDrafts']) && count($this->variables['dgDrafts']) != 0 && $this->variables['dgDrafts'] != '' && $this->variables['dgDrafts'] !== false)
					{
						?>
	<div class="dataGridHolder <?php if(!isset($this->variables['dgDrafts']) || count($this->variables['dgDrafts']) == 0 || $this->variables['dgDrafts'] == '' || $this->variables['dgDrafts'] === false): ?>dataGridHolderNoDataGrid<?php endif; ?>">
		<?php if(array_key_exists('dgDrafts', (array) $this->variables)) { echo $this->variables['dgDrafts']; } else { ?>{$dgDrafts}<?php } ?>
	</div>

	<div class="pageTitle">
		<h2>
			<?php if(array_key_exists('lblRecentlyEdited', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblRecentlyEdited']); } else { ?>{$lblRecentlyEdited|ucfirst}<?php } ?>
		</h2>

		<?php
					if(isset($this->variables['showPagesAdd']) && count($this->variables['showPagesAdd']) != 0 && $this->variables['showPagesAdd'] != '' && $this->variables['showPagesAdd'] !== false)
					{
						?>
		<div class="buttonHolderRight">
			<a href="<?php if(array_key_exists('var', (array) $this->variables)) { echo BackendTemplateModifiers::getURL($this->variables['var'], 'add'); } else { ?>{$var|geturl:'add'}<?php } ?>" class="button icon iconAdd">
				<span><?php if(array_key_exists('lblAdd', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblAdd']); } else { ?>{$lblAdd|ucfirst}<?php } ?></span>
			</a>
		</div>
		<?php } ?>
	</div>

<?php } ?>


<div class="dataGridHolder <?php if(!isset($this->variables['dgRecentlyEdited']) || count($this->variables['dgRecentlyEdited']) == 0 || $this->variables['dgRecentlyEdited'] == '' || $this->variables['dgRecentlyEdited'] === false): ?>dataGridHolderNoDataGrid<?php endif; ?>">
	<?php
					if(isset($this->variables['dgRecentlyEdited']) && count($this->variables['dgRecentlyEdited']) != 0 && $this->variables['dgRecentlyEdited'] != '' && $this->variables['dgRecentlyEdited'] !== false)
					{
						?><?php if(array_key_exists('dgRecentlyEdited', (array) $this->variables)) { echo $this->variables['dgRecentlyEdited']; } else { ?>{$dgRecentlyEdited}<?php } ?><?php } ?>
	<?php if(!isset($this->variables['dgRecentlyEdited']) || count($this->variables['dgRecentlyEdited']) == 0 || $this->variables['dgRecentlyEdited'] == '' || $this->variables['dgRecentlyEdited'] === false): ?><p><?php if(array_key_exists('msgNoItems', (array) $this->variables)) { echo $this->variables['msgNoItems']; } else { ?>{$msgNoItems}<?php } ?></p><?php endif; ?>
</div>

<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_MODULES_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_MODULES_PATH']; } else { ?>{$BACKEND_MODULES_PATH}<?php } ?>/pages/layout/templates/structure_end.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_MODULES_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_MODULES_PATH']; } else { ?>{$BACKEND_MODULES_PATH}<?php } ?>/pages/layout/templates/structure_end.tpl}<?php
				}
?>
<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/footer.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\pages\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/footer.tpl}<?php
				}
?>