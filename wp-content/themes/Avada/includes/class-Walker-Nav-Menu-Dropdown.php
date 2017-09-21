/ Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Dont duplicate me!
if ( ! class_exists( 'Walker_Nav_Menu_Dropdown' ) ) {


class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu{

    // don't output children opening tag (`<ul>`)
    public function start_lvl(&$output, $depth){}

    // don't output children closing tag    
    public function end_lvl(&$output, $depth){}

    public function start_el(&$output, $item, $depth, $args){

      // add spacing to the title based on the current depth
      $item->title = str_repeat("&nbsp;", $depth * 4) . $item->title;

      // call the prototype and replace the <li> tag
      // from the generated markup...
      parent::start_el(&$output, $item, $depth, $args);
      $output = str_replace('<li', '<option', $output);
    }

    // replace closing </li> with the closing option tag
    public function end_el(&$output, $item, $depth){
      $output .= "</option>\n";
    }
}
}
