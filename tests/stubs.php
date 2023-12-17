<?php

\define('APP_TEST_PATH', __DIR__ );

/**
 * WordPress Cache Set Stub.
 *
 * Sets the value of a cache key in the group.
 *
 * @param string $key   Cache key.
 * @param mixed  $value Cache value.
 * @param string $group Cache group. Default is ''.
 * @param int    $expire Expiration time in seconds. Default 0 (no expiration).
 * @return bool True on successful set, false on failure.
 */
function wp_cache_set($key, $value, $group = '', $expire = 0) {
    return true; // Stub return value.
}

/**
 * WordPress Cache Get Stub.
 *
 * Retrieves the value of a cache key from the group.
 *
 * @param string $key   Cache key.
 * @param string $group Cache group. Default is ''.
 * @param bool   $force Whether to force an update of the local cache from the persistent cache. Default false.
 * @param bool   $found Optional. Whether the key was found in the cache (passed by reference). Default null.
 * @return mixed Cached object value.
 */
function wp_cache_get($key, $group = '', $force = false, &$found = null) {
    return null; // Stub return value.
}

/**
 * WordPress Cache Delete Stub.
 *
 * Removes the cache contents matching key and group.
 *
 * @param string $key   Cache key.
 * @param string $group Cache group. Default is ''.
 * @return bool True on successful removal, false on failure.
 */
function wp_cache_delete($key, $group = '') {
    return true; // Stub return value.
}
