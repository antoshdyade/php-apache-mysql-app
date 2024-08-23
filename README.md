# php-apache-mysql-app

# PHP-Apache-MySQL Docker Application

This is a simple PHP application with a user registration and login system, running on an Apache web server with a MySQL database. The entire environment is managed using Docker Compose.

## Project Structure

php-apache-mysql-app/ │ ├── docker-compose.yml # Docker Compose configuration ├── html/ # Directory containing PHP and HTML files │ ├── index.html # Main landing page │ ├── register.php # User registration script │ ├── login.php # User login script │ ├── welcome.php # Welcome page for logged-in users │ ├── dbtest.php # Script to test MySQL connection │ ├── info.php # PHP information page │ ├── config.php # Database configuration script │ └── logout.php # (Optional) Script to handle user logout └── mysql_data/ # (Auto-generated) Directory for MySQL data storage


## Prerequisites

Ensure that you have Docker and Docker Compose installed on your system:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Getting Started

### 1. Clone the Repository

Clone this repository to your local machine:

git clone https://github.com/antoshdyade/php-apache-mysql-app.git
cd php-apache-mysql-app

###2. Set Up the Environment
The project uses Docker Compose to manage the services (Apache, PHP, and MySQL). All you need to do is run:


docker-compose up -d

This command will:

Build and start the containers for the PHP-Apache web server and MySQL database.
Set up the network between the services.
Mount the html/ directory to /var/www/html in the Apache container.

###3. Access the Application
Once the containers are up and running, you can access the application in your web browser:

Main Page: http://localhost:8080
Register Page: http://localhost:8080/register.php
Login Page: http://localhost:8080/login.php
Welcome Page (Post-Login): http://localhost:8080/welcome.php
PHP Info: http://localhost:8080/info.php
Database Connection Test: http://localhost:8080/dbtest.php


###4. Database Configuration
The MySQL database is automatically set up with the following credentials (as defined in docker-compose.yml):

MySQL Root Password: example
Database Name: exampledb
Database Schema
To manually create the necessary table for user registration and login, use the following SQL command:

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
This command creates a users table with columns for user IDs, usernames, and hashed passwords.

###5. Stopping and Cleaning Up
To stop the running containers and clean up the environment, use:

docker-compose down -v
This command stops the containers, removes them, and deletes the associated volumes.

##Additional Information
Volumes: MySQL data is stored in a Docker volume named mysql_data, ensuring persistence between container restarts.
Network: The services communicate over a custom Docker network named app-network.

##Contributing
If you find any issues or have suggestions for improvements, feel free to open an issue or submit a pull request. Contributions are welcome!

##License
This project is licensed under the MIT License.
