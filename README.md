# REST API


## Table of Contents
- [REST API](#rest-api)
  - [Table of Contents](#table-of-contents)
  - [General Info](#general-info)
  - [Technologies](#technologies)
  - [Installation](#installation)
<!-- 4. [Collaboration](#collaboration) -->
<!-- 5. [FAQs](#faqs) -->


## General Info
***
Secured RESTful API with CodeIgniter and JSON Web Tokens.

The growing use and applications of cloud services necessitates a more efficient architectural style than the Simple Object Access Protocol (SOAP). REST (REpresentational State Transfer) allows for a light-weight, stateless communication between clients and the Application Programming Interface (API). Because the communication is stateless, access control for Restful APIs is based on tokens which carry enough information to determine whether or not the client is authorized to perform the requested action on the resource.

I have used CodeIgniter to build a RESTful API. CodeIgniter is a powerful PHP framework with a very small footprint which allows developers to build full-scale web applications.

<!-- ### Screenshot -->
<!-- ![Image text](https://www.united-internet.de/fileadmin/user_upload/Brands/Downloads/Logo_IONOS_by.jpg) -->


## Technologies
***
A list of technologies used within the project:
* [PHP](https://php.net): Version 7.3 or higher  
* [Composer](https://getcomposer.org): Version Latest 
* [CodeIgniter 4](https://codeigniter.com): Version 4.0.0 
* [Firebase/PHP-JWT](https://github.com/firebase/php-jwt): Version 5.4


## Installation
***
<!-- A little intro about the installation.  -->
Step 1: Clone the repository
```
$ git clone https://github.com/mohsin-shaikh/rest-api.git
$ cd rest-api
$ code .
```
Step 2: Copy env as .env and Setup the database
```
$ cp env .env
```
Step 3: Run composer install
```
$ composer install
```
Step 4: Run the database migration
```
$ php spark migrate
```
Step 5: Run the database seed
```
$ php spark db:seed ClientSeeder
$ php spark db:seed ProductSeeder
```
Step 6: Run Server
```
$ php spark serve
```
<!-- Side information: To use the application in a special environment use ```lorem ipsum``` to start -->

<!-- ## Collaboration
***
Give instructions on how to collaborate with your project.
> Maybe you want to write a quote in this part. 
> Should it encompass several lines?
> This is how you do it. -->

<!-- ## FAQs
***
A list of frequently asked questions
1. **This is a question in bold**

Answer to the first question with _italic words_. 

2. __Second question in bold__ 

To answer this question, we use an unordered list:
* First point
* Second Point
* Third point

3. **Third question in bold**

Answer to the third question with *italic words*.

4. **Fourth question in bold**

| Headline 1 in the tablehead | Headline 2 in the tablehead | Headline 3 in the tablehead |
|:--------------|:-------------:|--------------:|
| text-align left | text-align center | text-align right | -->
