# Grading System

This is the practical week in which you are going to demonstrate Object Oriented approach and PHP 7 lessons that you have learned including its design patterns, this template is `pre-configured` to use [PDO queries](http://zetcode.com/php/pdo/) and have some examples that you can use to help you build this application from scratch.


# Installation

Run `./install.sh` to install the project dependencies.


# Objects

`index.php` = The main landing page of the application

`pages/example_page.php` = Example page template

`interface/IExample.php` = Example interface class

`abstract/AExample.php` = Example abstract class

`interface/IDbCredentials.php ` = Stores the database configuration

`classes/Connection.php` = Singleton database class connection of the application

`models/Contacts.php` = The data layer of the application


# Design Constraints

- Bootstrap or any CSS framework you prefer.

# Database  

<details>
<summary>  bc_school.sql </summary>
<br></br>


* Users = id, email, password
* Course = id,name
* Student = id, user_id, course_id, fullname 
* Criteria = id, name

Example criteria for grading:

```
	Assessments
	Toy problems
	Mini Project
	Fullstack Projects
```

* Grade = id, criteria_id, student_id

Example on how to get the percentage :

```
 Final grade % = ((items - total) / items)
```



</details>

#  Requirements

* [ ] Source code should be organized
* [ ] Use of PHP 7 new syntax
* [ ] Use of Polymorphism (Interface and Abtract class)
* [ ] Atleast one of these methods (Overriding, Overloading or Method Chaining)
* [x] Implementation of PDO connection class
* [x] Implementation of namespace and autoloader class
* [ ] Implementation of dependency injection

### Features

* A responsive layout
* A home page
* A way to Login/Logout a user
* A way to display a list of contacts
* A way to CREATE,UPDATE and DELETE a contact
* Design pattern and security should be documented at `DESIGN_SPECS.md`.

# Finished 

Submit a link to your fork of this repository to the Google Classroom assignment related to this project.
