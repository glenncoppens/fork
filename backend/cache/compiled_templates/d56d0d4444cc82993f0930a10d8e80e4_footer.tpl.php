<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>
	<?php
				ob_start();
				?><?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/messaging.tpl<?php
				$include = eval('return \'' . str_replace('\'', '\\\'', ob_get_clean()) .'\';');
				if($this->getForceCompile()) $this->compile('C:\wamp\www\figure8\figure8\backend\core\layout\templates', $include);
				$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\core\layout\templates');
				if($return === false && $this->compile('C:\wamp\www\figure8\figure8\backend\core\layout\templates', $include))
				{
					$return = @include $this->getCompileDirectory() .'/' . $this->getCompileName($include, 'C:\wamp\www\figure8\figure8\backend\core\layout\templates');
				}
if($return === false)
				{
					?>{include:<?php if(array_key_exists('BACKEND_CORE_PATH', (array) $this->variables)) { echo $this->variables['BACKEND_CORE_PATH']; } else { ?>{$BACKEND_CORE_PATH}<?php } ?>/layout/templates/messaging.tpl}<?php
				}
?>

	<div id="ajaxSpinner" style="position: fixed; top: 10px; right: 10px; display: none;">
		<img src="/backend/core/layout/images/spinner.gif" width="16" height="16" alt="loading" />
	</div>
</body>
</html>