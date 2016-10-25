<?php 
class PostsController extends AppController {
	
	public function index(){
		// Read the spanish locale data.

		$this->Post->locale = 'vi_vn';
		/*$id = 1;
		$results = $this->Post->find('first', array(
			'conditions' => array('Post.id' => $id)
		));*/
		$results = $this->Post->find('all');
		// $results will contain the spanish translation.
		$this->set('results', $results);
	}

    public function add() {
        //if (!empty($this->request->data)) {
            // we are going to save the german version
            $this->Post->locale = 'en_us';
            $this->Post->create();			
			$data = array(
				'Post' => array(
					'title' => 'abc',
					'body' => 'english'
				)
			);

			$this->Post->save($data);
			
        //}
    }
	
	public function vi_vn(){		

		//$kq = $this->Post->find('all', array('order' => 'desc'));
		$this->Post->id = 2;
		$this->Post->locale = 'vi_vn';
		$data = array(
			'Post' => array(
				'title' => '123',
				'body' => 'vietnam'
			)
		);
		$this->Post->save($data);
	}
}
?>