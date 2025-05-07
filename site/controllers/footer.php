<?php
return function($kirby, $pages, $page) {

    $alert = null;

    if($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        $data = [
            'email' => get('email'),
        ];

        $rules = [
            'email' => ['required', 'email'],
        ];

        $messages = [
            'email' => 'Please enter a valid email address',
        ];

        // the data is fine, let's send the email
            try {
                $kirby->email([
                    'replyTo'  => $data['email'],
                    'to'       => 'rjarkell1@gmail.com',
                    'subject'  => esc($data['email']) . ' would like to recieve newsletter',
                    'data'     => [
                        'email'   => esc($data['email']),
                    ]
                ]);

            } 
    }
};