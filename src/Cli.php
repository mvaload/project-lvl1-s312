<?

use function \cli\line;

line('Welcome to the Brain Games!');
$name = \cli\prompt('May I have your name?');
line("Hello, %s!", $name);