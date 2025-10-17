========= HOW TO RUN =========
10/17/2025
1. Make sure that the folder is named as "website-popmart"
2. Copy and paste the project folder to the xampp htdocs folder (C:\xampp\htdocs)
3. Open the project folder to your preferred IDE.
4. Go to the "db" folder. Open "db_connect.php" then change this block of code to your MySQL credentials:
    $servername = "127.0.0.1:3307"; //make sure to change this to your db credentials
    $username = "root";
    $password = "";
    $database = "popmart_db"; //keep database name as is
5. Open your XAMPP Control Panel. Click "start" to your Apache and MySQL. 
6. Click "Admin" from MySQL to access the phpMyAdmin or enter this to your browser "http://localhost/phpmyadmin/"
7. Click the "Databases" tab and enter the database name "popmart_db" and click create.
8. To create and set up the tables, in the same "db" folder (/website-popmart/db) open the "create_users_table.sql" and run the queries to your phpMyAdmin SQL tab. (note: read the comments present in the .sql file)
9. To add the product details, in the same "db" folder (/website-popmart/db) open the "create_products_table.sql" and run the queries to your phpMyAdmin SQL tab.
10. Try to access the website by pasting this link: "http://localhost/website-popmart/"
11. Test if the validations are working and check if the database is working.

note: please read the comments present in the program as guide/reference.