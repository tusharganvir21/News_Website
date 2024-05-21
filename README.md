# News_Website
Welcome to the News Website project! It is college project of a basic News website using HTML, CSS, JS, PHP and MySQL. 
This project allows users to read news, upload news articles, and sign up or log in to their accounts. The website features a fully functional navigation bar for easy access to different sections.

## Features

- **Read News**: Users can browse and read various news articles.
- **Upload News**: Registered users can upload news articles with images.
- **User Authentication**: Users can sign up for new accounts or log in to existing ones.
- **Navigation Bar**: A responsive and user-friendly navbar for easy navigation.

## Getting Started

To run this project locally, follow these steps:

### Prerequisites

Make sure you have the following installed on your system:

- XAMPP Control Pannel
- MySQL

### Installation

1. **Clone the Repository**

    ```sh
    git clone https://github.com/your-username/news-website.git
    cd news-website
    ```

2. **Database Setup**

    - Open your MySQL command line or MySQL Workbench and create a new database:

        ```sql
        CREATE DATABASE news_website;
        ```

    - Use the following SQL commands to create the required tables:

        ```sql
        USE news_website;

        CREATE TABLE news (
            id INT AUTO_INCREMENT PRIMARY KEY,
            news varchar(10000) NOT NULL,
            image VARCHAR(255),
            date timestamp NOT NULL,
            title VARCHAR(255) NOT NULL
        );

        CREATE TABLE signup (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL,
            password VARCHAR(255) NOT NULL,
            cnfpassword VARCHAR(255) NOT NULL
        );
        ```

3. **Configuration**

    Create a `.db` file in the project root directory and add your database configuration details:

    ```db
    DB_HOST="localhost:3360"
    DB_USER="root"
    DB_PASSWORD="YourPassword"
    DB_NAME="news_website"
    ```

4. **Run the Application**
   ```run
   Save the project in htdocs folder of XAMPP server folder.
   Turn on the 'Apache' and 'MySQL' server on Xampp Server.
   Run the localhost/project_fileName/index.php on any browser. 

## Usage

- **Read News**: Navigate to the homepage to view the latest news articles.
- **Upload News**: Log in or sign up, then navigate to the "Upload News" section to add a new article.
- **User Authentication**: Use the "Login" or "Sign Up" options in the navigation bar to access your account.
