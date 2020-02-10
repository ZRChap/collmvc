<?php

class Home extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $db = DB::getInstance();
        $data = $db->get_columns('album');
        pnd($data);

        $fields = [
            'userName' => 'TESSSSTTT',
            'firstName' => 'update',
            'lastName' => 'testing',
            'email' => 'testing@testmail.com',
            'pwd' => 'another password',
        ];

        // $updateUser = $db->update('users', 23, $fields);
        // $delete = $db->delete('users', 21);
        // $newUser = $db->insert('users', $fields);
      
        $this->view->render('home/index');
    }
}
