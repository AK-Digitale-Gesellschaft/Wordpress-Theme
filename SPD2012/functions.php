<?php

// Blöcke mit den SPD-News
include_once('functions/initTheme.php');

// Angepasste Kommentare
include_once('functions/comments.php');

// Angepasste Kategorien
include_once('functions/categories.php');

// pa_insert('Seitentitel') - Shortcode, mit dem man Seiten in anderen Seiten inkludieren kann.
include_once('functions/shortcodePageInsert.php');

// Blöcke mit den SPD-News
include_once('functions/SPDNews.php');

// News von sites.akdigitalegesellschaft.de im Dashboard einbinden
include_once('functions/RSSDashboardWidget.php');

// "Neuer Termin"-Link in der AdminBar
include_once('functions/addNewLinkForEventList.php');

// Weitere Einstellungen
add_filter( 'd4p_is_bbpress', '__return_true' );
