<?php



function SPD2012_admin_menu() {
    $page = add_theme_page( 'Einstellungen', 'Einstellungen', 'edit_theme_options', 'SPD2012_theme_options', 'SPD2012_theme_options' );
}
add_action( 'admin_menu', 'SPD2012_admin_menu' );


function SPD2012_admin_init() {
    register_setting( 'SPD2012-theme-options', 'SPD2012-theme-options' );
    add_settings_section( 'section_general', 'Layout', 'SPD2012_section_general', 'SPD2012-theme-options' );
    add_settings_field( 'scheme', 'Farbschema', 'SPD2012_setting_color', 'SPD2012-theme-options', 'section_general' );
}
add_action( 'admin_init', 'SPD2012_admin_init' );

function SPD2012_section_general() {
    _e( 'Hier kannst Du verschiedene Elemente des Layouts anpassen. Bitte mach Deine Seite nicht allzu hässlich. ;-)' );
}

function SPD2012_theme_options() {
    ?>
    <div class="wrap">
        <div id="icon-themes" class="icon32" ><br></div>
        <h2>Layout Optionen</h2>

        <form method="post" action="options.php">
            <?php wp_nonce_field( 'update-options' ); ?>
            <?php settings_fields( 'SPD2012-theme-options' ); ?>
            <?php do_settings_sections( 'SPD2012-theme-options' ); ?>
            <p class="submit">
                <input name="Submit" type="submit" class="button-primary" value="Änderungen übernehmen" />
            </p >
        </form>
    </div>
    <?php
}

function SPD2012_setting_color() {
    $options = get_option( 'SPD2012-theme-options' );
    ?>
  <select name="SPD2012-theme-options[scheme]">
    <option<?php if (esc_attr( $options['scheme'] )=="Klassisch") echo(' selected') ?>>Klassisch</option>
    <option<?php if (esc_attr( $options['scheme'] )=="Neutral") echo(' selected') ?>>Neutral</option>
  </select>
    <?php
}

function SPD2012_adding_styles() {
$options = get_option( 'SPD2012-theme-options' );
switch (esc_attr( $options['scheme'] )) {
    case "Klassisch":
        wp_register_style('SPD2012_stylesheet', get_stylesheet_directory_uri() . '/Klassisch.css');
        break;
    case "Neutral":
        wp_register_style('SPD2012_stylesheet', get_stylesheet_directory_uri() . '/Neutral.css');
        break;
		default:
        wp_register_style('SPD2012_stylesheet', get_stylesheet_directory_uri() . '/Klassisch.css');
}
	
	wp_enqueue_style('SPD2012_stylesheet');
}
	add_action( 'wp_enqueue_scripts', 'SPD2012_adding_styles' ); 

