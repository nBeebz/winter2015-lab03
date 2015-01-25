<?php

class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $author = $this->quotes->get(4);
        $this->data = array_merge( $this->data, $author );
        $this->render();
    }
	
}