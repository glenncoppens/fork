<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>
<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/head.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates');
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
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/structure_start_module.tpl}<?php
				}
?>

<div class="pageTitle">
	<h2><?php if(array_key_exists('lblSearch', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblSearch']); } else { ?>{$lblSearch|ucfirst}<?php } ?>: <?php if(array_key_exists('lblStatistics', (array) $this->variables)) { echo $this->variables['lblStatistics']; } else { ?>{$lblStatistics}<?php } ?></h2>
</div>

<?php
					if(isset($this->variables['dataGrid']) && count($this->variables['dataGrid']) != 0 && $this->variables['dataGrid'] != '' && $this->variables['dataGrid'] !== false)
					{
						?>
<div class="dataGridHolder">
	<div class="tableHeading">
		<h3><?php if(array_key_exists('lblStatistics', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblStatistics']); } else { ?>{$lblStatistics|ucfirst}<?php } ?></h3>
	</div>
	<?php if(array_key_exists('dataGrid', (array) $this->variables)) { echo $this->variables['dataGrid']; } else { ?>{$dataGrid}<?php } ?>
</div>
<?php } ?>

<?php if(!isset($this->variables['dataGrid']) || count($this->variables['dataGrid']) == 0 || $this->variables['dataGrid'] == '' || $this->variables['dataGrid'] === false): ?><p><?php if(array_key_exists('msgNoStatistics', (array) $this->variables)) { echo $this->variables['msgNoStatistics']; } else { ?>{$msgNoStatistics}<?php } ?></p><?php endif; ?>

<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/structure_end_module.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates');
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
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\modules\search\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/footer.tpl}<?php
				}
?>