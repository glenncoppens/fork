{include:{$BACKEND_CORE_PATH}/layout/templates/head.tpl}
{include:{$BACKEND_CORE_PATH}/layout/templates/structure_start_module.tpl}

<div class="pageTitle">
	<h2>{$lblModuleSettings|ucfirst}: {$lblFacebook}</h2>
</div>

{form:settings}

	<div class="box">
		<div class="heading">
			<h3>{$lblBasicSettings|ucfirst}</h3>
		</div>
		<div class="options">
			Basic facebook settings e.g. the app id and app secret can be set in the &quot;general settings"&quot; section.
		</div>
	</div>

	{*
	<div class="fullwidthOptions">
		<div class="buttonHolderRight">
			<input id="save" class="inputButton button mainButton" type="submit" name="save" value="{$lblSave|ucfirst}" />
		</div>
	</div>
	*}
{/form:settings}

{include:{$BACKEND_CORE_PATH}/layout/templates/structure_end_module.tpl}
{include:{$BACKEND_CORE_PATH}/layout/templates/footer.tpl}