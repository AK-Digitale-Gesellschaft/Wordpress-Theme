<?php

/**
 * Create a shortcode to insert content of a page of specified ID
 *
 * @param    array        attributes of shortcode
 * @return     string        $output        Content of page specified, if no page id specified output = null
 */
function SPD2012_insertPage($atts, $content = null)
{
  // Default output if no pageid given
  $output = NULL;
  // extract atts and assign to array
  extract(shortcode_atts(array(
    "page" => '' // default value could be placed here
  ), $atts));
  // if a page id is specified, then run query
  if (!empty($page)) {
    $pageContent = new WP_query();
    $pageContent->query(array(
      'pagename' => $page
    ));
    while ($pageContent->have_posts()):
      $pageContent->the_post();
    // assign the content to $output
      $output = get_the_content();
    endwhile;
  }
  return $output;
}
add_shortcode('pa_insert', 'SPD2012_insertPage');
