# CS4710 (Senior Design), Fall 2013

## Introduction
---------------
Senior Design project, Fall 2013.
Advisor: Dr. Robert Pastel
Students: Nick Lanam, Collin Kappauf, Raven Rebb, Greg Antrim, and Joshua Socha

## Installation
---------------

1.  Prepare a basic LAMP or WAMP server. If you elect to do the former,
    we assume you know what you're doing. In the latter case, we
    highly recommend installing XAMPP.  

2.  Download a working copy of the mercurial repository.
    If you're reading this in a local directory, you've already done that.
    If you're reading this on BitBucket, follow their instructions.  

3.  The folder containing this README is the root of
    your web server. Whether this is your main server
    or a virtual host, you will need these things:  
    * mod_rewrite.
    * mod_mysql.
    * php5.

4.  Visit the INSTALLATION folder, contained in this root.  
    * Prepare a new database for this project, if you haven't already.
    * Run ion_auth.sql on that database.  

5.  Visit the server you've started. If you're using a basic installation,
    this will probably just be localhost to the browser.  

6.  Profit!  

## Coding standards
-------------------

We have five developers, and are using several popular frameworks.
To ensure the sanity of everyone, the following standards should
be followed (subject to change at meetings):  

1.  When using any displayed strings, be sure to use lang("string_key"),
    rather than just hard-coding it. This will ensure that we can easily
    translate the entire project at a later date, without having to
    change any code.  

2.  (To be discussed at next meeting)  

