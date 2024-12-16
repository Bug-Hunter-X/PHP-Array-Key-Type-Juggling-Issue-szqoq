In PHP, a common yet subtle error arises when dealing with array keys that are not strictly numerical.  Consider this scenario:

```php
$data = [];
$data["1"] = "one";
$data[1] = "ONE";

echo count($data); // Outputs 2
foreach ($data as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
```

While seemingly simple, PHP treats "1" and 1 as distinct keys due to type juggling. This can lead to unexpected results when you intend keys to be strictly numerical or when relying on array order.