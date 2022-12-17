<?php return array(
    'root' => array(
        'name' => 'blockify/creatify',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '4727dbd6ceb286e7c947a2e9e6f2f62b88f6e581',
        'type' => 'wordpress-theme',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'blockify/creatify' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '4727dbd6ceb286e7c947a2e9e6f2f62b88f6e581',
            'type' => 'wordpress-theme',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'blockify/framework' => array(
            'pretty_version' => 'dev-package',
            'version' => 'dev-package',
            'reference' => 'c3db002735ff0946af1150d2398a5f84d90d2719',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../blockify/framework',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'tgmpa/tgm-plugin-activation' => array(
            'pretty_version' => 'dev-develop',
            'version' => 'dev-develop',
            'reference' => '2d34264f4fdcfcc60261d490ff2e689f0c33730c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../tgmpa/tgm-plugin-activation',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
