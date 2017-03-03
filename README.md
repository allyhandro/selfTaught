Self Taught - PHP files demonstrating my time in iRepertoire
=====
#### author: Ally Han

![mircroArray visualization](http://static.wixstatic.com/media/c9f231_bc99030dc9104492b747480fa21945dd.jpg_srz_381_300_85_22_0.50_1.20_0.00_jpg_srz)
######a colorful visualization of a patient's immuno repertoire

This repository contains several php, css, html, and javascript files for the purpose of demonstrating some of the skills I aquired on the job at my iRepertoire internship. Because all of the files are the result of individual research online, many more experienced full stack engineers my very likely scoff at the decisions I made as well as the convensions I did not follow. However, I believe these files are worth shareing as they demonstrate the many challenges I faced and the many work arounds I had to find.


## Optimizations and Cleaning to be Done:
With the knowledge that I have now, I understand that a lot of the work that I did could be encapsulated within sinificantly fewer files by indroducing middleware. Additionally, customization of responses and requests combined with abstraction of their implementation would contribute to a higher level of security, protecting user information from potentially malicious js or SQL injection.


## Files worth mentioning
Within the `sForm` folder are the various files used to create a service application form from the online form building app, [Jotform](https://www.jotform.com/) . The problem presented was to parse information given in the form into a database, from which the storage application would be built. At the start of the project, I parsed csv files produced by jotform to do this, but as the project went on, I found that it was most practical to use JotForm's source code as a basis, adding functionality and customization on top. Some of the customization includes:
* autofill in from database if user is registered
* input varification for correct form and placement of sample names

The `php` folder contains files for the User Portal web app that was created in the mid to later phases of the project, in which we began implementing a seperate web app clients could use to directly manage their own submissions, as well as check their order's progress. I was able to implement basic user functionality including:
* form submission
* access to previous forms depending on permission level
* automated emails upon submission
* password retrieval
* create new user under Primary Investigator
* create new Primary Investigator
* edit account information

