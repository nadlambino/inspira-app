<?php

return [
	'default' => env('DB_CONNECTION', 'mysql'),

	'connections' => [
		'mysql' => [
			'driver'   => 'mysql',
			'host'     => env('DB_HOST', 'localhost'),
			'port'     => env('DB_PORT', 3306),
			'database' => env('DB_DATABASE', 'inspira'),
			'credentials' => [
				'username' => env('DB_USERNAME', 'root'),
				'password' => env('DB_PASSWORD', ''),
			],

			/**
			 * Database connection string
			 * This will be use instead of the given host, port, and database
			 */
			'database_url' => env('DB_URL', ''),

			/**
			 * SQL commands that will be executed upon creating the PDO connection
			 * For example: setting charset, time_zone, session sql_mode, etc.
			 * Refer to the official documentation of MySQL for the command you need
			 */
			'commands' => [],

			/**
			 * PDO attributes
			 */
			'attributes' => []
		],

		'pgsql' => [
			'driver'   => 'pgsql',
			'host'     => env('DB_HOST', 'localhost'),
			'port'     => env('DB_PORT', 5432),
			'database' => env('DB_DATABASE', 'inspira'),
			'credentials' => [
				'username' => env('DB_USERNAME', 'postgres'),
				'password' => env('DB_PASSWORD', ''),
			],

			/**
			 * Database connection string
			 * This will be use instead of the given host, port, and database
			 */
			'database_url' => env('DB_URL', ''),

			/**
			 * SQL commands that will be executed upon creating the PDO connection
			 * For example: setting charset, time_zone, session sql_mode, etc.
			 * Refer to the official documentation of PostgreSQL for the command you need
			 */
			'commands' => [],

			/**
			 * PDO attributes
			 */
			'attributes' => []
		],

		'sqlite' => [
			'driver'   => 'sqlite',
			'database' => env('DB_DATABASE', '../database/sqlite.db'),

			/**
			 * Database connection string
			 * This will be use instead of the given database
			 */
			'database_url' => env('DB_URL', ''),

			/**
			 * PDO attributes
			 */
			'attributes' => []
		],

		/** SQL Server is not yet supported!!! */
		'sqlsrv' => [
			'driver'   => 'sqlsrv',
			'host'     => env('DB_HOST', 'localhost'),
			'port'     => env('DB_PORT', 1433),
			'database' => env('DB_DATABASE', 'inspira'),
			'credentials' => [
				'username' => env('DB_USERNAME', 'sa'),
				'password' => env('DB_PASSWORD', ''),
			],

			/**
			 * Database connection string
			 * This will be use instead of the given host, port, and database
			 */
			'database_url' => env('DB_URL', ''),

			/**
			 * SQL commands that will be executed upon creating the PDO connection
			 * For example: setting charset, time_zone, session sql_mode, etc.
			 * Refer to the official documentation of SQLServer for the command you need
			 */
			'commands' => [],

			/**
			 * PDO attributes
			 */
			'attributes' => []
		],
	],
];
