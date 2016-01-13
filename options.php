<div class="wrap">
	<h2>Google Analytics Universal</h2>
	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
		<?php settings_fields('googleanalyticsuniversal'); ?>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">Web Property ID:</th>
				<td>
					<input type="text" name="web_property_id" value="<?php echo get_option('web_property_id'); ?>" />
				</td>
			</tr>
		</table>
		<input type="hidden" name="action" value="update" />
		<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>
	</form>
</div>
