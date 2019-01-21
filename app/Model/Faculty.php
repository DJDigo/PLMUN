<?php
App::uses('AppModel', 'Model');

class Dean extends AppModel {
   public $validate = [
        'title' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Title is required'
            ]
        ],
        'description' => [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Description is required'
            ]
        ]
    ];
}