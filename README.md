Welcome to the Ladies Can STEM platform! This guide will walk you through the steps needed to set up and run the project locally on your computer.

Prerequisites
Before you begin, ensure you have the following installed on your system:

XAMPP: A local server environment that includes Apache, MySQL, PHP, and Perl.
A text editor or Integrated Development Environment (IDE) like NetBeans.
Installation Steps
Download and Install XAMPP:

Visit the XAMPP website.
Download the appropriate installer for your operating system.
Follow the installation instructions provided on the website.
Start XAMPP:

After installation, launch the XAMPP Control Panel.
Start the Apache and MySQL services by clicking on their respective "Start" buttons.
Download the Ladies Can STEM Project:

Clone this repository to your local machine using Git or download it as a ZIP file and extract it.
Move Project Files:

Move the project files to the htdocs directory of your XAMPP installation. This directory is typically located in C:\xampp\htdocs on Windows, or /opt/lampp/htdocs on Linux.
Database Setup:

Open a web browser and navigate to http://localhost/phpmyadmin.
Create a new database named ladies_can_stem.
Import the SQL dump file provided with the project into this database. You can usually find this file in a database or sql directory within the project.
Configure Database Connection:

Open the project files in your text editor or IDE.
Locate the database connection configuration file, often named something like config.php or database.php.
Update the database connection settings to match your local environment. This typically includes the database name, username, password, and host (usually localhost).
Run the Application:

Open a web browser and navigate to http://localhost/PhpProject2/Home.html where  is the directory where you placed the project files.
You should now see the Ladies Can STEM platform up and running locally on your machine!
Usage
Explore the different features and functionalities of the platform.
If you encounter any issues or have feedback, please feel free to submit an issue on GitHub.
Contributing
If you would like to contribute to the Ladies Can STEM project, please refer to the contribution guidelines.