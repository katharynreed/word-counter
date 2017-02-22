#Redundancy Matcher

Redundancy Matcher, Feb 17th, 2017

Author: Katharyn Reed

##Description:

This program built to practice basic PhP, PhPUnit testing, and twig. The web page takes user data and stores it within the local server. This web page serves as an redundancy checker.


##Specifications:
Behavior | Input | Output
------------ | ------------- | -------------
The user can input a block of text (string) and a word (word) they would like to search for. If the user's string matches does not match the user's word, the program will not return as a match (i.e. false). | 'Is this true.', 'false' | false
The user can input a block of text (string) and a word (word) they would like to search for. If the user's string matches the user's word, the program will return as a match (i.e. true). | 'Is this true.', 'true' | true
The user can input a block of text (string) and a word (word) they would like to search for. Program will remove all punctuation before running test. Test included in 'tests' folder. | 'This is a test', 'test!' | 'this is a test','test'
The user can input a block of text (string) and a word (word) they would like to search for. Program will remove all punctuation before running test. Test included in 'tests' folder. | 'This is a test!', 'test' | 'this is a test', test
The user can input a block of text (string) and a word (word) they would like to search for. If the user does not input a string or the word, they will be returned an error message. Test included in 'tests' folder. | ' ', ' ' | 'You have not entered a sentence.'
The user can input a block of text (string) and a word (word) they would like to search for. If the user inputs both a string and a word, but there are no matches it will return a 0 value. | 'This is a test.', 'cat' | 0 instances of CAT
The user can input a block of text (string) and a word (word) they would like to search for. If the user inputs both a string and a word, they will be returned with the number of exact matches. | 'This is a test within one test inside another test.', 'test' | 3 instances of TEST




##Setup and Installation Requirements:

* Click on the clone or download button
* Download the zip (unzip to desktop) or open in desktop
* Download composer [here](https://getcomposer.org/download/)
* Run 'composer_install' from the top level of the project directory
* Enter 'php -S localhost:8000' in 'web' folder
* Enter 'localhost:8000' into browser window
* Enjoy!

##Known Bugs:

There are no known bugs at this time.

##Support and Contact Details:

If you run into any issues, questions, or ideas please contact katharynreedpierce@gmail.com

##Technologies Used:

This program was created with intermediate HTML, CSS, and Bootstrap; as well as beginner Twig, and PhP.

##License:

This program features MIT licensing.

*Copyright (C) 2017 Katharyn Reed*
