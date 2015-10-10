<?php
$options = get_option( 'column_no_options' );


if (in_array($options['layout'], array(1,11,111,22))) {
register_sidebar(array(
		'name' => 'RSS1',
		'id' => 'RSS1',
		'description' => '',
		'class' => '',
		'before_widget' => '',
		'after_widget' => ''
));
}
if (in_array($options['layout'], array(11,111,22))) {
register_sidebar(array(
		'name' => 'RSS2',
		'id' => 'RSS2',
		'description' => '',
		'class' => '',
		'before_widget' => '',
		'after_widget' => ''
));
}
if (in_array($options['layout'], array(111,22))) {
register_sidebar(array(
		'name' => 'RSS3',
		'id' => 'RSS3',
		'description' => '',
		'class' => '',
		'before_widget' => '',
		'after_widget' => ''
));
}
if (in_array($options['layout'], array(22))) {
register_sidebar(array(
		'name' => 'RSS4',
		'id' => 'RSS4',
		'description' => '',
		'class' => '',
		'before_widget' => '',
		'after_widget' => ''
));
}


add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' ); 

function theme_options_init(){
 register_setting( 'column_no', 'column_no_options');
} 

function theme_options_add_page() {
 add_theme_page( __( 'Theme Einstellungen', 'SPD2012' ), __( 'Einstellungen', 'SPD2012' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
} 

function theme_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; ?>

<div>
<?php echo "<h2>". __( 'Layout Einstellungen', 'SPD2012' ) . "</h2>"; ?>
<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div>
<p><strong><?php _e( 'Einstellungen gespeichert', 'SPD2012' ); ?></strong></p></div>
<?php endif; ?> 

<form method="post" action="options.php">
<?php settings_fields( 'column_no' ); ?>  

<?php $options = get_option( 'column_no_options' ); ?> 


<hr>
<h3>Externe News</h3>
<p>Hier kannst Du einstellen, wie viele Felder am Ende der Seite vorgesehen sein sollen für externe News.</p>
<table>
	<tr>
    <td><input type="radio" name="column_no_options[layout]" value="0" <?php checked( $options['layout'], 0 ); ?>></td>
    <td>Aus</td>
  </tr>
  <tr>
    <td><input type="radio" name="column_no_options[layout]" value="1" <?php checked( $options['layout'], 1 ); ?>></td>
    <td>Eine Spalte</td>
  </tr>
  <tr>
    <td><input type="radio" name="column_no_options[layout]" value="11" <?php checked( $options['layout'], 11 ); ?>></td>
    <td>Zwei Spalten</td>
  </tr>
  <tr>
    <td><input type="radio" name="column_no_options[layout]" value="111" <?php checked( $options['layout'], 111 ); ?>></td>
    <td>Drei Spalten</td>
  </tr>
  <tr>
    <td><input type="radio" name="column_no_options[layout]" value="22" <?php checked( $options['layout'], 22 ); ?>></td>
    <td>2 Spalten jeweils in 2 Zeilen</td>
  </tr>
</table>

<hr>
<p>
<input type="submit" value="<?php _e( 'Aktualisieren', 'SPD2012' ); ?>" />
</p>
</form>
</div>
<?php } 
