<?php
function dashboard_widget_function() {
     $rss = fetch_feed( "https://sites.akdigitalegesellschaft.de/feed/" );
 
     if ( is_wp_error($rss) ) {
          if ( is_admin() || current_user_can('manage_options') ) {
               echo '<p>';
               printf(__('<strong>RSS Fehler</strong>: %s'), $rss->get_error_message());
               echo '</p>';
          }
     return;
}
 
if ( !$rss->get_item_quantity() ) {
     echo '<p>Offenbar gibt es nichts Neues…</p>';
     $rss->__destruct();
     unset($rss);
     return;
}
 
echo "<ul>\n";
 
if ( !isset($items) )
     $items = 5;
 
     foreach ( $rss->get_items(0, $items) as $item ) {
          $publisher = '';
          $site_link = '';
          $link = '';
          $content = '';
          $date = '';
          $link = esc_url( strip_tags( $item->get_link() ) );
		  $title = esc_html( $item->get_title() );
          $content = $item->get_content();
          $content = wp_html_excerpt($content, 250) . '…';
 
         echo "<li><a class='rsswidget' href='$link' target='_blank'>$title</a>\n<div class='rssSummary'>$content</div>\n";
}
 
echo "</ul>\n";
$rss->__destruct();
unset($rss);
}

function add_dashboard_widget() {
     wp_add_dashboard_widget('SPD_dashboard_widget', 'Neues aus dem Netzwerk', 'dashboard_widget_function');
}

add_action('wp_dashboard_setup', 'add_dashboard_widget');
