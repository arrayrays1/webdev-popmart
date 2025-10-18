========= HOW TO RUN =========
10/18/2025
1. Make sure that the folder is named as "website-popmart"
2. Copy and paste the project folder to the xampp htdocs folder (C:\xampp\htdocs)
3. Open the project folder to your preferred IDE.
4. Update database credentials: Go to the "db" folder. Open "db_connect.php" then change this block of code to your MySQL credentials:
        $host = '127.0.0.1:3307'; //your mysql host and port
        $db   = 'webpopmart_db';
        $user = 'root'; // your mysql username
        $pass = ''; // your mysql password
        $charset = 'utf8mb4';
5. Open your XAMPP Control Panel. Click "start" to your Apache and MySQL. 
6. Try to access the website by pasting this link to your browser: "http://localhost/website-popmart/"
    - the database will be automatically created and initialized on first access.
    - ".installed" marker file will be auto-generated to prevent re-initilization.
    - "test_auto_setup.php" - test script to verify the database setup (this can be deleted)
7. Test if the validations are working and check if the database is working.

note: please read the comments present in the program as guide/reference.