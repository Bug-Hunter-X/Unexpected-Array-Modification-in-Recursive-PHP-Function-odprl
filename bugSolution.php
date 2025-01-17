```php
function processData(array $data): array {
    return array_map(function ($value) {
        if (is_array($value)) {
            return processData($value); // Recursive call
        } else if (is_string($value) && strpos($value, 'error') !== false) {
            return str_replace('error', 'problem', $value);
        }
        return $value; 
    }, $data);
}

$data = [
    'name' => 'John Doe',
    'details' => [
        'age' => 30,
        'status' => 'error: inactive',
    ],
    'address' => '123 Main St',
];

$processedData = processData($data);
print_r($processedData);
```