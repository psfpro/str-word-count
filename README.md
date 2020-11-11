# Str word count

⚡️ Powerful function that returns the 5 most common words in the text

## Example

```php
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
 In culpa qui officia deserunt mollit anim id est laborum.';

most_common_words($text);
```

Result:

```text
Array
(
    [in] => 3
    [ut] => 3
    [dolor] => 2
    [velit] => 1
    [ex] => 1
)
```

## Test
Simply use:
```shell script
$ ./vendor/bin/phpunit
```
