<?php

Kirby::plugin('renga/craft', [
  'pageMethods' => [
    'previewImage' => function() {
      $image = false;

      if ($this->isHomePage() && $this->content()->has('projects')) {
        // Use first project's first image.
        $image =
          $this->projects()->toPages()
            ->first()->content()
              ->images()->toFiles()
                ->first();
      } elseif ($this->content()->has('hero_image')) {
        // Use hero image if available.
        $image = $this->hero_image()->toFile();
      } else {
        // Else default to first image uploaded to page.
        $image = $this->image();
      }

      return $image;
    }
  ],

  // Define custom route for mail submission.
  'routes' => [
    [
      'pattern' => 'contact/submit.json',
      'method'  => 'POST',
      'action'  => function() {
        try {
          $kirby = kirby();

          $data = $kirby->request()->data();
          $dest = $data['InquiryDestination'];

          // Decrypt $dest
          $ciphering = 'AES-128-CTR';
          $iv        = '2937594820394750';
          $key       = 'Renga Craft Contracting';
          $dest      = openssl_decrypt($dest, $ciphering, $key, 0, $iv);
          $dest      = explode('|', $dest);

          $data['InquiryDestination'] = $dest[1];

          $success = $kirby->email('contact', [
            'to'        => $dest[0],
            'replyTo'   => [
              $data['Email'] => $data['Name'],
            ],
            'subject'   => 'Craft Contracting Contact Form: ' . $dest[1],
            'template'  => 'contact',
            'data'      => $data,
          ])->isSent();

          if ($success) {
            return [
              'status' => 'success',
            ];
          } else {
            return [
              'status'  => 'error',
              'message' => 'There was an unknown error while attempting email delivery.',
            ];
          }
        } catch (Exception $error) {
          return [
            'status'  => 'error',
            'message' => $error->getMessage(),
          ];
        }
      },
    ],
  ],
]);
