<?php

/*
---------------------------------------
Kirby Configuration
---------------------------------------
By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out https://getkirby.com/docs/guide/configuration
*/

return [
  // Be sure to read this: https://getkirby.com/docs/reference/system/options/panel#allow-the-panel-to-be-installed-on-a-remote-server
  // 'panel' =>[
  //   'install' => true
  // ],

  'debug' => true,

  // Thumbnail options
  'thumbs' => require_once 'thumbs.php',

  // Routes & redirects
  'routes' => require_once 'routes.php',

  'sitemap.ignore' => ['error'],

  // Enable panel on public server
  'panel.install' => true,

  // Adding hash to {css,js} files for cache busting via https://github.com/bnomei/kirby3-fingerprint
  'bnomei.fingerprint.hash' => function ($file) {
    $url = null;
    $fileroot = is_a($file, 'Kirby\Cms\File') || is_a($file, 'Kirby\Cms\FileVersion') ? $file->root() : kirby()->roots()->index() . DIRECTORY_SEPARATOR . ltrim(str_replace(kirby()->site()->url(), '', $file), '/');

    if (\Kirby\Toolkit\F::exists($fileroot)) {
      $filename = implode('.', [
        \Kirby\Toolkit\F::name($fileroot),
        \filemtime($fileroot),
        \Kirby\Toolkit\F::extension($fileroot)
      ]);

      if (is_a($file, 'Kirby\Cms\File') || is_a($file, 'Kirby\Cms\FileVersion')) {
        $url = str_replace($file->filename(), $filename, $file->url());
      } else {
        $dirname = str_replace(kirby()->roots()->index(), '', \dirname($fileroot));
        $url = ($dirname === '.') ? $filename : ($dirname . '/' . $filename);
      }
    } else {
      $url = $file;
    }
    return \url($url);
  },

  // Email presets
  'email' => [
    'presets' => [
      'contact' => [
        'from' => [
          'info@craftcontractingltd.com' => 'Craft Contracting Ltd.',
        ],
      ],
    ],

    // Live site SMTP settings.
    /*'transport' => [
      'type'     => 'smtp',
      'host'     => 'smtp.netfirms.com',
      'port'     => 465,
      'security' => 'ssl',
      'auth'     => true,
      'username' => 'smtp@craftcontractingltd.com',
      'password' => 'BA2ryp2D6JyZW!4',
    ],*/

    // Local development SMTP settings.
    'transport' => [
      'type'     => 'smtp',
      'host'     => 'smtp-relay.sendinblue.com',
      'port'     => 587,
      'security' => 'tls',
      'auth'     => true,
      'username' => 'paul@snowlakekeep.ca',
      'password' => 'xsmtpsib-2ea17eacf2a17b738472812cf7aa6b51e2406a72402af5fe75214a357eda20e8-GWFvaNmcb70KPOX4',
    ],
  ],

  // Default settings for link fields
  'oblik.linkField' => [
    'options' => [
      'page',
      'url',
    ],
    'settings' => [
      'popup' => [
        'label' => 'External Link',
        'help' => 'Open link in a new tab',
        'width' => '1/3',
      ],
      'text' => [
        'width' => '2/3',
      ],
      'hash' => false,
    ],
  ],

  // Auto-publish certain page types.
  'hooks' => [
    'page.update:after' => function($page) {
      $blueprints = [
        'pages/staff',
      ];
      if (in_array($page->blueprint()->name(), $blueprints)) {
        $page->changeStatus('listed');
      }
    }
  ],

  // Configure static site generator.
  'd4l' => [
    'static_site_generator' => [
      'endpoint'      => 'generate-static-site',
      'output_folder' => './static',
    ],
  ],

  // Configure srcset defaults.
  'thumbs' => [
    'srcsets' => [
      'default' => [670, 1340],
      'hero' => [
        '1x' => [
          'width' => 714,
          'height' => 720,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 1428,
          'height' => 1440,
          'crop' => 'center',
        ],
      ],
      'carousel' => [
        '1x' => [
          'height' => 600,
        ],
        '2x' => [
          'height' => 1200,
        ],
      ],
      'small_carousel' => [
        '1x' => [
          'height' => 506,
        ],
        '2x' => [
          'height' => 1012,
        ],
      ],
      'thumb' => [
        '1x' => [
          'width' => 240,
          'height' => 240,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 480,
          'height' => 480,
          'crop' => 'center',
        ],
      ],
      'image_text_left' => [
        '1x' => [
          'width' => 542,
          'height' => 440,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 1084,
          'height' => 880,
          'crop' => 'center',
        ],
      ],
      'image_text_right' => [
        '1x' => [
          'width' => 482,
          'height' => 520,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 964,
          'height' => 1040,
          'crop' => 'center',
        ],
      ],
      'image_text_full' => [
        '1x' => [
          'width' => 567,
          'height' => 400,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 1134,
          'height' => 800,
          'crop' => 'center',
        ],
      ],
      'project_samples' => [
        '1x' => [
          'width' => 400,
          'height' => 260,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 800,
          'height' => 520,
          'crop' => 'center',
        ],
      ],
      'three_columns' => [
        '1x' => [
          'width' => 493,
          'height' => 380,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 986,
          'height' => 760,
          'crop' => 'center',
        ],
      ],
      'projects_landscape_1' => [
        '1x' => [
          'width' => 664,
          'height' => 489,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 1328,
          'height' => 978,
          'crop' => 'center',
        ],
      ],
      'projects_square' => [
        '1x' => [
          'width' => 489,
          'height' => 489,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 978,
          'height' => 978,
          'crop' => 'center',
        ],
      ],
      'projects_portrait' => [
        '1x' => [
          'width' => 489,
          'height' => 644,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 978,
          'height' => 1288,
          'crop' => 'center',
        ],
      ],
      'projects_landscape_2' => [
        '1x' => [
          'width' => 744,
          'height' => 489,
          'crop' => 'center',
        ],
        '2x' => [
          'width' => 1488,
          'height' => 978,
          'crop' => 'center',
        ],
      ],
    ],
  ],
];
