### Repository for challenges
### Steps for running the application
1. Copy repository
2. Copy the file .env.example and rename the new one to .env
3. run php artisan key:generate on your system terminal at the root of the project
4. run composer install on your system terminal at the root of the project (requires php and composer installed)
#### In the description below you can find the location for the main files where the logic for each task is included:
1. Algorithm exercise - Factorial:
  - app\Http\Services\FactorialService.php
2. String manipulation exercise - Palindrome: 
  - app\Http\Services\PalindromeService.php
3. Web development exercise - Contact Form:
  - View: resources\views\form.blade.php
  - Controller: app\Http\Controllers\FormController.php
  - Validation: app\Http\Requests\FormDataRequest.php
4. Data structure exercise - Stack:
  - app\Stack\StackExample.php
5. Object Oriented Exercise - Bench:
  - Folder: app\Http\Bank
6. File manipulation exercise - Word Count:
  - app\Http\Services\CountWordsService.php
7. Recursion exercise - Fibonacci:
  - app\Http\Services\FibonacciService.php
