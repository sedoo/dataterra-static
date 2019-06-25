<?php
/**
 * Get browser language, given an array of avalaible languages.
 * 
 * @param  [array]   $availableLanguages  Avalaible languages for the site
 * @param  [string]  $default             Default language for the site
 * @return [string]                       Language code/prefix
 */
function get_browser_language( $available = ['fr', 'en'], $default = 'fr' ) {
	// if ( isset( $_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ] ) ) {
    if ( !empty( $_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ] ) ) {   
		$langs = explode( ',', $_SERVER['HTTP_ACCEPT_LANGUAGE'] );
    if ( empty( $available ) ) {
    //   return $langs[ 0 ];
      return substr( $langs[0], 0, 2 );
    }
		foreach ( $langs as $lang ){
			$lang = substr( $lang, 0, 2 );
			if( in_array( $lang, $available ) ) {
				return $lang;
			}
		}
	}
	return $default;
}