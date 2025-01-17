```php
function processData(array $data): array {
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = processData($value); // Recursive call
        } else if (is_string($value) && strpos($value, 'error') !== false) {
            // Handle error strings
            $data[$key] = str_replace('error', 'problem', $value);
        }
    }
    return $data;
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