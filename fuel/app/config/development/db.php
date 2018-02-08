<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
        'default' => array(
                'connection'  => array(
                        'dsn'        => 'mysql:host=localhost;dbname=Target',
                        'username'   => 'root',
                        'password'   => 'root',
                ),
        ),
);


/**return array(
	'development' => array(
    'type'           => 'mysqli',
    'connection'     => array(
        'hostname'       => 'localhost',
        'port'           => '3306',
        'database'       => 'Target',
        'username'       => 'user01',
        'password'       => '',
        'persistent'     => false,
        'compress'       => false,
    ),
    'identifier'   => '`',
    'table_prefix'   => '',
    'charset'        => 'utf8',
    'enable_cache'   => true,
    'profiling'      => false,
	),

);*/
