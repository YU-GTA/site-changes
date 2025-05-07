<?php
return function($kirby, $pages, $page) {

    $alert = null;

    // Check if the form has been submitted
    if($kirby->request()->is('POST') && get('submit')) {

        // Honeypot check: if the honeypot field (e.g., 'hp') is filled, ignore the submission
        if(get('hp') !== '') {
            return ['alert' => $alert];
        }

        // Retrieve the email field from the form data
        $data = [
            'email' => get('email'),
        ];

        // Validate the email address
        $errors = [];
        if(empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address';
        }

        if(empty($errors)) {
            try {
                // Send the email using Kirby's email method
                $kirby->email([
                    'replyTo'  => $data['email'],
                    'to'       => 'rjarkell1@gmail.com',
                    'subject'  => esc($data['email']) . ' would like to receive newsletter',
                    'data'     => [
                        'email' => esc($data['email']),
                    ]
                ]);
                $alert = 'Success! Your email has been sent.';
            } catch (Exception $e) {
                $alert = 'Failed to send the email: ' . $e->getMessage();
            }
        } else {
            $alert = implode(', ', $errors);
        }
    }

    // Return variables to the template
    return [
        'alert' => $alert
    ];
};
