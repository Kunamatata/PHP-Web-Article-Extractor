<?php
	
	/*	
		BoilerPHPipe
		PHP Class for extracting the main content of a webpage.
		Written as an implementaion of the 'Boilerplate detection using 
		Shallow Text Features' whitepaper http://www.l3s.de/~kohlschuetter/boilerplate/
	
		Code author: Luke Hines
		Licence: 
	*/
	
	class boilerPHPipe 
	{
		// Extracts article ('main') text from a given URL
		public static function runWithHTML($url) 
        { 
	        $html = file_get_contents($url);
	        return self::runWithHTMLStr($html);
	    }
		
		// Extracts article ('main') text from given raw HTML page
        public static function runWithHTMLStr($rawHTMLPage) 
        { 
	        $result = $rawHTMLPage;
	        return $result; 
	    }
	    
    }
?>  