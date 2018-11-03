<?php
App::uses('AppModel', 'Model');

class DeanFeedback extends AppModel {
    public $validate = [
        'email' => [
            'required' => [
                'rule'    => ['notBlank'],
                'message' => 'Email address is required.'
            ],
            'unique' => [
                'rule'     => ['isUnique', false],
                'message'  => 'Email address must be unique.',
                'required' => false
            ],
            'email' => [
                'rule'     => ['email'],
                'message'  => 'Email address is invalid format.',
                'required' => false
            ],
            'maxLength' => [
                'rule'    => ['maxLength', 255],
                'message' => 'Email must not exceed 255 characters.'
            ],
            'validEmail' => [
                'rule'    =>  ['checkEmail'],
                'message' => 'Email address is invalid format.'
            ]
        ],
    ];

    public function checkEmail() {
        $email = $this->data['DeanFeedback']['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        } else {
            return true;
        }
    }
}