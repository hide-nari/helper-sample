fizzbuzz function Sample on php version 8.3 or later.

# about this package

## function fizzbuzz(number)

### When given a number, it returns string or number depending on the condition.

#### Conditions

- If divisible by 3, it returns “fizz”.
- If divisible by 5, it returns “buzz”.


- Extends - If divisible by 30, it returns uppercase words.

## Update Rules

When updating, execute the following command.

```
herd coverage ./vendor/bin/pest --coverage
./vendor/bin/pest
./vendor/bin/pint
./vendor/bin/phpstan analyse src --level=10
```

## License

This utility is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).