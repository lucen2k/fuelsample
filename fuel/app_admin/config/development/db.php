<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
    'active' => 'ERSdb',
    /**
     * Base config, just need to set the DSN, username and password in env. config.
     */
    'default' => array(
        'type'        => 'pdo',
        'connection'  => array(
            'persistent' => false,
        ),
        'identifier'   => '`',
        'table_prefix' => '',
        'charset'      => 'utf8',
        'enable_cache' => true,
        'profiling'    => false,
    ),

    'redis' => array(
        'default' => array(
            'hostname'  => '127.0.0.1',
            'port'      => 6379,
        )
    ),

    'ERSdb' => array(
        'type'   => 'mysqli',
        'connection' => array(
            'hostname'   => 'localhost',
            'database'   => 'fuelsample',
            'username'   => 'root',
            'password'   => '',
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => false,
        'profiling'    => true,
    ),
);