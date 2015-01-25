<?php
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $author = $this->quotes->first();
        $this->data = array_merge( $this->data, $author );
        $this->render();
    }
	
	function zzz()
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $author = $this->quotes->get(1);
        $this->data = array_merge( $this->data, $author );
        $this->render();
	}
	
	function gimme( $num )
	{
		$this->data['pagebody'] = 'justone';    // this is the view we want shown
        $author = $this->quotes->get( $num );
        $this->data = array_merge( $this->data, $author );
        $this->render();
	}

}