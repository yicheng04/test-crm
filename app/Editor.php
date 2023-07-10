<?php
class Editor {
	
	public static function get( $filename='' ) {
		if ( $filename != '' ) {
			return file_get_contents( app_path() . '/views/editor/files/_' . $filename . '.php' );	
			//return dirname(__FILE__);
		} else {
			return '<p>Default body text.</p>';			
		}

	}
	
	public static function put( $filename, $body ) {
		return file_put_contents( app_path() . '/views/editor/files/_' . $filename . '.php', $body );
	}
	
}
