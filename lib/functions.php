<?php

/**
 * Start the head section of the page
 */
function startHeader(){
    $string = "<!DOCTYPE html>\n<html>\n<head>\n";
    echo $string;
}
/**
 * Include a stylesheet from the css folder
 */
function includeStyle($filename){
    global $area;
    $path = "../".$area."/css/".$filename;
    includeExternalStyle($path);
}
/**
 * Include a vendors stylesheet from the vendors css folder
 */
function vendorStyle($filename){
    global $area;
    $path = "../".$area."/vendors/".$filename;
    includeExternalStyle($path);
}
/**
 * Include an external stylesheet from another domain
 */
function includeExternalStyle($location){
    $string = "<link rel='stylesheet' type='text/css' href='".$location."' />\n";
    echo $string;
}
/**
 * Inlcude a javascript file from the js folder
 */
function includeScript($filename){
    global $area;
    $path = "../".$area."/js/".$filename;
    includeExternalScript($path);
}

/**
 * Inlcude a vendors javascript file from the vendors js folder
 */
function vendorScript($filename){
    global $area;
    $path = "../".$area."/vendors/".$filename;
    includeExternalScript($path);
}
/**
 * Inlcude an external javascript
 */
function includeExternalScript($location){
    $string = "<script src='".$location."'></script>\n";
    echo $string;
}
/**
 * Set title of the page
 */
function setTitle($title){
    echo "<title>".$title."</title>\n";
}
/**
 * End the head section of the page
 */
function endHeader(){
    echo "</head>\n";
}
/**
 * Start footer
 */
function startFooter(){
    echo "\n<footer class='app-footer'>\n
    <div>\n
      <a href='https://coreui.io/pro/'>CoreUI Pro</a>\n
      <span>© 2018 creativeLabs.</span>\n
    </div>\n
    <div class='ml-auto'>\n
      <span>Powered by</span>\n
      <a href='https://coreui.io/pro/'>CoreUI Pro</a>\n
    </div>\n
  </footer>";
}
/**
 * Get footer
 */
function endFooter(){
    echo "\n<script>
		$('#ui-view').ajaxLoad();
		$(document).ajaxComplete(function() {
		  Pace.restart()
		});
		</script>";
    echo "\n</body>\n</html>";
}


?>