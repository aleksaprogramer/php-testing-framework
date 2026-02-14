# Very Simple PHP Testing Framework

[!CAUTION]
**This testing framework is in very early phase and is only for very basic and simple PHP projects. Dont't still consider it as a valid PHP testing framework for large projects.**

## Description
This is a simple PHP Testing Framerowk for small projects. It provides a nice and easy-to-use folder structure, as well as very readable interface with good UX.

## Guide
1. index.php file in root folder should be hosted locally (you can use web server like **XAMPP**),
2. In folder **specs** you can create your tests and than require them in main index.php file in root folder under or above the comment that shows where test files go,
3. In test file you should require ```'./lib/classes/Test.php'``` because that file contains Test class and all the required functions,
4. Also you should require your file that you want to test, for example ```requie_once './src/fileToTest.php'```, and it goes under the previous required file,
5. For a function **title** use function ```title('function for testing')```,
6. To test a function in a specific test case use function ```test_case('specific test case')->expect(givenFunction('given value'))->to_equal('same value as a result')```,
7. If test passed you will get the nice green message, but if it fails you will get a red line, warning sign and a red colored message that shows what causes the error.

## Code Examples

```php
<?php
require_once './lib/classes/Test.php';
requie_once './src/fileToTest.php';

title('function for testing');
test_case('specific test case')->expect(givenFunction('given value'))->to_equal('same value as a result');
```
