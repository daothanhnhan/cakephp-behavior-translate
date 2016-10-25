<?php 
class Post extends AppModel {
    public $actsAs = array(
        'Translate' => array(
            'title' => 'titleTranslation'
        )
    );
?>