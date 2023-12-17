# README for the `ObCache` Class

## Overview
The `ObCache` class is a versatile and easy-to-use PHP class designed for caching in WordPress environments. It provides functionality to manage caching operations with ease, supporting operations such as setting, getting, and removing cached data. This class is particularly useful in scenarios where data retrieval from a cache is preferred over repeatedly querying a database or performing complex computations.

## Features
- **Flexible Caching Control**: Control whether caching is enabled or disabled.
- **Easy Initialization**: Instantiation via a constructor or a static `init` method.
- **Data Storage and Retrieval**: Methods for setting and retrieving cached data.
- **Cache Removal**: Functionality to remove specific cache entries.

## Usage

### Instantiation
- Directly via constructor:
  ```php
  $cache = new ObCache();
  ```
- Using the static `init` method:
  ```php
  $cache = ObCache::init();
  ```

### Setting Cache Mode
- Enable or disable caching:
  ```php
  $cache->set_cache_allowed(true); // Enable caching
  $cache->set_cache_allowed(false); // Disable caching
  ```

### Setting Data in Cache
- Use the `set` method to cache data:
  ```php
  $cache->set('cache_key', function() {
      // Data generation logic
      return $data;
  }, 3600); // 3600 seconds expiration
  ```

### Retrieving Data from Cache
- Use the `get` method to retrieve or generate and cache data:
  ```php
  $data = $cache->get('cache_key', function() {
      // Data generation logic
      return $data;
  }, 3600);
  ```

### Removing Data from Cache
- Use the `forget` method to remove data from the cache:
  ```php
  $cache->forget('cache_key');
  ```

## Integration with WordPress
This class utilizes WordPress caching functions (`wp_cache_set`, `wp_cache_get`, `wp_cache_delete`) and is designed to work within a WordPress environment.

## Notes
- The class uses a protected constant `PLUGIN_CACHE_GROUP` to define a cache group for better organization and management of cached items.
- Cache mode status can be checked using `is_cache_allowed()` method.
- When caching is disabled, the `set` and `get` methods directly handle data without caching.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
