<div class="wrap">
<h2>Formstack</h2>

<p>
The <a href="http://www.formstack.com" target="_blank">Formstack</a> Plugin uses the Formstack API to get a listing of your forms. An API key is required for this plugin to work.
You can create an API key in your <a href="https://www.formstack.com/admin/apiKey/main" target="_blank">account settings</a>.
<p>
<form method="post" action="options.php">
    
    <?php settings_fields('formstack_plugin'); ?>

    <table class="form-table">
        <tr valign="top">
        <th scope="row" style="width:50px;">API Key</th>
        <td><input type="text" name="formstack_api_key" style="width:300px;" value="<?php echo get_option('formstack_api_key'); ?>" /></td>
        </tr>
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>

