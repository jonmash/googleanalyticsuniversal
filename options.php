<div class="wrap">
	<h2>Google Analytics Universal</h2>
	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
		<?php settings_fields('googleanalyticsuniversal'); ?>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">Analytics Tracking ID:</th>
				<td>
					<input type="text" name="web_property_id" value="<?php echo get_option('web_property_id'); ?>" />
					<p class="description">Enter your Google Analytics Tracking ID for this website (e.g UA-12345678-9)</p>
				</td>
			</tr>
		</table>
		<input type="hidden" name="action" value="update" />
		<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>
	</form>
</div>
