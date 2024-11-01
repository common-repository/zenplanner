<?
if ($_POST['formAction'] == "saveSettings"){
	//Form data sent
	$userKey = $_POST['userKey'];
	update_option('userKey', $userKey);
?>
	<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
<?
}
?>
<div class="wrap">
	<p><img src="../wp-content/plugins/zenPlannerFrame/zenplanner-logo-240x40.png" style="display:block" width="240"></p>
	<h2>Zen Planner Plugin v0.2</h2>
	<p>Please enter the address of your Zen Planner member website in the box below.</xp>
	<xp>Once this is turned on, you'll be able to embed data from your Zen Planner database into this blog.</xp>
		Please <a href="http://help.zenplanner.com/entries/21129457" target="_blank">visit the Zen Planner help website</a> for instructions on how to use this plugin.
</p>

	<form name="zenSettings" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<input type="hidden" name="formAction" value="saveSettings">
		<p>
			<b>Zen Planner Website Address</b><br>
			https://
			<input type="text" value="<? print get_option("userKey"); ?>" name="userKey">.zenplanner.com
		</p>

		<p class="submit">
			<input name="submit" type="submit" value="Save Changes">
		</p>
	</form>

	<p>
	</p>
</div>
