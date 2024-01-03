<?php

return [
	/**
	 * This is the application's timezone
	 * This will also be used in setting the PDO connection timezone
	 * If you want the PDO connection timezone be different from this timezone
	 * Set the timezone in the `database.php` config in `commands` section
	 */
	'timezone' => 'UTC',

	'views' => [
		/**
		 * Whether to use the cache file to be return on the client
		 * During development, it is recommended to set it to false
		 */
		'use_cached' => false
	]
];
