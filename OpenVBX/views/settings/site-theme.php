<h3>Theme</h3>

<form name="vbx-settings" action="<?php echo site_url('settings/site') ?>#theme" method="POST" class="vbx-settings-form vbx-form">

	<fieldset class="vbx-input-container">
		<label for="site-theme" class="field-label">Choose a theme
			<?php
				$params = array(
					'name' => 'site[theme]',
					'id' => 'site-theme',
					'class' => 'medium'
				);
				echo t_form_dropdown($params, $available_themes, $theme);
			?>
		</label>
	</fieldset>
	
	<fieldset class="vbx-input-container">
		<label for="site-gravatars" class="field-label">Gravatars</label>
		<label for="gravatars-on" class="field-label-inline">Gravatars ON
			<?php 
				$radio = array(
					'id' => 'gravatars-on',
					'name' => 'site[gravatars]',
				);
				echo form_radio($radio, '1', ($gravatars['value'] == 1)); 
			?>
		</label>
		<label for="gravatars-off" class="field-label-inline">Gravatars OFF
			<?php
				$radio = array_merge(array(
						'id' => 'gravatars-off'
					), $radio);
				echo form_radio($radio, '0', ($gravatars['value'] == 0));
			?>
		</label>
		<p class="instruction"><br />Visit <a href="http://gravatar.com" onclick="window.open(this.href); return false;">Gravatar</a> for more information.</p>
	</fieldset>

	<button class="submit-button" type="submit"><span>Update</span></button>

</form>