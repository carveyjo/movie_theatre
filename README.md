# movie_theatre
Download XAMPP and select version 8.0.0 PHP 8.0.0 at https://www.apachefriends.org/download.html

Run the downloaded .exe file and select next for every option. The installation will begin and takes ~2 minutes.

Once complete, the XAMPP control panel will open. Click the 'Start' button for Apache and MySQL. Click on 'config' button for Apache. Click on Apache(httpd. conf) file. Change port 80 to 8080 in the file (three times). Save and close the file. Restart Xampp. Now apache will run in port 8080.

Go to C:\xampp\htdocs and paste the folder from GitHub: movie_theatre e.g. htdocs\movie_theatre

Open up localhost:8080/phpmyadmin in Chrome and go to 'databases'->'create database'->name it 'movie_theatre' then hit 'create'->'import'->'choose file'->select project_db.sql->'go' at the bottom. You'll see within database movie_theatre there is now one table: cash_register

There is no need to create a user or password as it will use 'root' as user and no password required. Go to the table database view at localhost:8080/movie_theatre/tables/database.html to view the table and go to the cash register or receipt generator from there.

3 HTML pages you can use:
1) Form:localhost:8080/movie_theatre/forms/cash_register.html
2) Receipt: localhost:8080/movie_theatre/tables/receipt.html
3) Database: localhost:8080/movie_theatre/tables/database.html
How the form works:
Max quantity of a ticket or food beverage is 10. Select a quanity from the movies/food beverages and hit the submit button.
Once you hit submit, you can click the receipt button and it will go to a page where the query selects the most recent transaction submittted to the database. From there you can either go back to the cash register for another customer or view the database of historical receipts with additional data including the timestamp. There is also the ability to search and export the data as csv, excel, or copy.
