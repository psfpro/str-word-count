<?php

if (!function_exists('most_common_words')) {
    function most_common_words(string $value): array
    {
        $result = array_count_values(array_filter(preg_split('~[^\p{L}\p{N}\']+~u', mb_strtolower($value))));
        arsort($result);
        $result = array_slice($result, 0, 5);

        return $result;
    }
}
