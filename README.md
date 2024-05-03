
## About JobScout

JobScout is a Laravel-based web application designed to serve as a job portal for job seekers and employers. It is a Final Year Project at Herald College Kathmandu and University of Wolverhampton, with the aim of providing a simple and efficient platform to connect job seekers with potential employers.

The application features a clean and intuitive user interface, making it easy for users to navigate and find relevant job postings. Job seekers can create their profiles, upload their resumes, and search for job listings based on various criteria such as location, industry, experience, and job type. They can also receive job alerts and notifications when new job listings that match their preferences are posted.

Employers can create their profiles, post job listings, and search for candidates based on various criteria such as location, experience, and education. They can also receive candidate applications, manage and communicate with applicants, and schedule interviews.


<h2>Installation</h2>

1. Install the xampp or wampp server or Mamp in case of MacOS.
2. Navigate to htdocs directory inside xampp or www directory in case of wampp. 
3. Download this project as zip and extract it inside the htdocs or www directory.
4. Import a SQL file provided with this project or run migration simply by running <code>php artisan migrate</code>.
5. Run the seeders by running <code>php artisan db:seed</code>.
6. Update the .env file with all the database credentials and the database name.
5. Since, there are no seeders, It is recommended to import the sql file into the database.
6. Update the .env file with all the database credentials and the database name.
7. After Successfully completing the above steps, simply run this command to start artisan server <code>php artisan serve</code>.
8. Alternatively, You can directly navigate to project folder like this <code>localhost/jobscout/public</code>.
