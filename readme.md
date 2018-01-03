<h2 align="center"> Automatic Question-paper generator </h2>

<p align="center"> Automatic Question-paper generator is a web application build with PHP's Laravel Framefowk (Version 5.4). The use of this application is to generate question papers based on the specifications given by the user.This application needs a database of questions to generate question sets.A subject, Department, Questions and New Users can be added and managed very easily.Users can download or print the pdf version of the generated question paper. Every question paper is saved in the database for future usages. The user can add as many questions as he/she wants. The user also can create an unlimited number of Question papers (PDFs).</p>

<h3>Technical specifications</h3>

```diff
+ Languages used: HTML,CSS,JS,PHP (Laravel-5.4).
+ Database used : SQL Server.
+ Blade syntax used very frequently.
+ Cross-Site Request Forgery (CSRF) Protected useing csrf token.
+ Laravel's native Bcrypt used for Hashing passwords.

- 10 tables used in the database
- Database collation: utf8mb4_unicode_ci
```

<h3>Use Case Modeling and Description</h3>

* When the application starts the user authentication takes place.
* After successful user authentication, the program will show Dashboard of details entry about Departments, Subjects, Broad questions and MCQ’s and then asks for number of questions to be generated in written or as in MCQ.
* Clicking on the left side Department Bar this will show Add department and Manage Department sections.
* Then clicking on the Subjects Bar this will show Add subject and Manage subject sections.
* Next comes the Question bank Bar includes Broad Question and MCQ unit.
* In Broad question dropdown bar it also have Add and Manage section as well.
* For question entry click to ADD in Broad Question and MCQ unit to add both types of questions.
* In Broad question entry page there will be an upper Dropdown box section for designing the final question paper look. That section will have column like ( Department, Subject, Chapter, Question type, Difficulty level, Bloom’s level, Question marks, Appeared year, Question options, Duration of exam etc. ).
* After adding a question it can keep as published or unpublished and there must a Edit and Delete button in Manage unit after clicking Save question box.
* When the number of questions is specified, the user is asked for mentioning the particular subject and topics to be referred from previously stored question banks.
* Finally the user needs to select the difficulty level for generating the test paper.
* To add any question into question bank unit user must check mark (✔) or use radio button for each option given in question add area or box.
* Questions adding box will have options button for Marks (1/2/3/4/5), Grade (Easy, Medium, Hard), Question importance level (*, **, ***) , Bloom’s Taxonomy Level (LOCQ , IOCQ  , HOCQ) .
* After specifying these level, the user has to click on the “Generate Paper” button which results into successful generation of question paper using randomization by means of shuffling algorithm.
* Before auto generating a question paper set, user can choose his/her desired number of questions and also from which chapter he/she wants them within his/her expected question type or based on total question marks.
* After generating a question paper it can further edited manually by user.
* In question bank unit there will be also some additional buttons like SEARCH, ADD, EDIT, DELETE, Next page, Previous page etc.
* A new question can be added to the bank at any instance. Different sets of test papers could be generated without any limitation.
* Generated question paper can be Save, Download, Print or Send in users given E-mail address by specific buttons. User can easily find the final generated paper when he/she wants.
In keeping with the sincere to provide complete educational solutions and knowledge, Smart Question Paper Generator Software takes over the entire task and does the manual, laborious work swiftly and efficiently. 
