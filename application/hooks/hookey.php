<?php

// bolds capitalized words contained in <p> tags with the "lead" class 
function lead_bold()
{
	$CI =& get_instance();
	$output = $CI->output->get_output();
	$pattern = "#<p class=\"lead\">(.+)</p>#";
	if( preg_match( $pattern, $output, $matches ) )
	{	
		$content = "";
		for( $i = 1; $i < count( $matches ); ++$i )// iterate from index 1 because index 0 matches whole string
			$content .= preg_replace( $pattern, "<p class=\"lead\">" . bold_caps( $matches[$i] ) . "</p>", $output, 1 );
		echo $content;
	}
	else
	{
		echo $output;
	}
}

// returns a copy of the passed string with the capitalized words enclosed in <strong> tags.
function bold_caps( $str )
{
	$words = explode( " ", $str );
	$answer = array();
	foreach( $words as $word )
	{
		if( preg_match( "/[A-Z][a-z]*/", $word ) )
		{
			$word = "<strong>" . $word . "</strong>";
		}
		array_push( $answer, $word );
	}
	return implode( " ", $answer );
}