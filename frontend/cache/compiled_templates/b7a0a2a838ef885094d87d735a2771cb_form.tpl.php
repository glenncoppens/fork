<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>
<div id="headerSearch">
	<h4><?php if(array_key_exists('lblSearch', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblSearch']); } else { ?>{$lblSearch|ucfirst}<?php } ?></h4>

	<?php
					if(isset($this->forms['search']))
					{
						?><form accept-charset="UTF-8" action="<?php echo $this->forms['search']->getAction(); ?>" method="<?php echo $this->forms['search']->getMethod(); ?>"<?php echo $this->forms['search']->getParametersHTML(); ?>>
						<?php echo $this->forms['search']->getField('form')->parse();
						if($this->forms['search']->getUseToken())
						{
							?><input type="hidden" name="form_token" id="<?php echo $this->forms['search']->getField('form_token')->getAttribute('id'); ?>" value="<?php echo htmlspecialchars($this->forms['search']->getField('form_token')->getValue()); ?>" />
						<?php } ?>
		<div class="oneLiner">
			<p><?php if(array_key_exists('txtQWidget', (array) $this->variables)) { echo $this->variables['txtQWidget']; } else { ?>{$txtQWidget}<?php } ?></p>
			<p><input id="submit" class="inputSubmit" type="submit" name="submit" value="<?php if(array_key_exists('lblSearch', (array) $this->variables)) { echo SpoonFilter::ucfirst($this->variables['lblSearch']); } else { ?>{$lblSearch|ucfirst}<?php } ?>" /></p>
		</div>
	</form>
				<?php } ?>
</div>