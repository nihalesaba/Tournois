<?php

class Url {

	public static function redirect($url = null, $fullpath = false){

		
		if($fullpath == false){
			header('location: '.DIR.$url);
			exit;
		} else {
			header('location: '.$url);
			exit;
		}
		
	}

	public static function get_template_path(){
	    return DIR.'app/templates/'.Session::get('template').'/';
	} 
	public static function get_template_path2(){
	    return TEMPROOT.'templates/'.Session::get('template').'/';
	} 


	public static function getRelativePath($from, $to)
{
    // some compatibility fixes for Windows paths
    $from = is_dir($from) ? rtrim($from, '\/') . '/' : $from;
    $to   = is_dir($to)   ? rtrim($to, '\/') . '/'   : $to;
    $from = str_replace('\\', '/', $from);
    $to   = str_replace('\\', '/', $to);

    $from     = explode('/', $from);
    $to       = explode('/', $to);
    $relPath  = $to;

    foreach($from as $depth => $dir) {
        // find first non-matching dir
        if($dir === $to[$depth]) {
            // ignore this directory
            array_shift($relPath);
        } else {
            // get number of remaining dirs to $from
            $remaining = count($from) - $depth;
            if($remaining > 1) {
                // add traversals up to first matching dir
                $padLength = (count($relPath) + $remaining - 1) * -1;
                $relPath = array_pad($relPath, $padLength, '..');
                break;
            } else {
                $relPath[0] = './' . $relPath[0];
            }
        }
    }
    return implode('/', $relPath);
}

 public static function gotoresources()
 {

    return self::getRelativePath($_SERVER["REQUEST_URI"],self::get_template_path2());
 }
  public static function gotolink($to)
 {

    return self::getRelativePath($_SERVER["REQUEST_URI"],TEMPLINK.$to);
 }

}