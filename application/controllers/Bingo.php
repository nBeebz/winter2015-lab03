<?php

class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $author = $this->quotes->get(5);
        $this->data = array_merge( $this->data, $author );
        $this->render();
    }
	
	function wisdom()
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $author = $this->quotes->get(6);
        $this->data = array_merge( $this->data, $author );
        $this->render();
	}
}