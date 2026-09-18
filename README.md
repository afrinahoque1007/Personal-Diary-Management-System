# Personal Diary Management System

A PHP and Oracle-based Personal Diary Management System developed as an individual Database Management System project for the 4th semester.

## Project Overview

The Personal Diary Management System is a database-driven web application designed to transform traditional journaling into a structured digital experience.

The system allows users to store, organize, search, and manage personal diary entries digitally. It also provides category-based organization, reminders, and SQL-based data retrieval.

## Course Information

- **Course:** Database Management System
- **Course Code:** CSE-2424
- **Semester:** 4th Semester
- **Project Type:** Individual Project

## Features

- User Registration and Authentication
- Create, Edit, Delete, and View Diary Entries
- Categorize diary entries
- Manage personal reminders
- Search and filter entries
- Filter entries by date or category
- Execute SQL queries
- Support for single-table and multi-table queries
- Support for subqueries
- Sorting and aggregation
- Structured relational database design

## Database Design

The project follows relational database design principles.

### ER Diagram

A complete Entity-Relationship (ER) Diagram was designed for the system to represent the relationships between the different entities.

### Normalization

The database design was normalized up to **Third Normal Form (3NF)** to reduce data redundancy and maintain data consistency.

### Main Tables

The system contains four main relational tables:

- **Users** – Manages user account information
- **Diary Entries** – Stores personal journal records
- **Category** – Organizes diary entries into different classifications
- **Reminders** – Handles scheduled reminders and notifications

### Constraints

The database design uses:

- Primary Key constraints
- Foreign Key constraints
- Relationships between relational tables
- Data integrity and consistency

## Database Operations

The project demonstrates several important database operations:

- DDL (Data Definition Language)
- DML (Data Manipulation Language)
- Single-table queries
- Multi-table queries
- Joins
- Subqueries
- Aggregate functions
- Sorting
- Data filtering
- Advanced data retrieval

## Technologies Used

### Frontend

- HTML
- JavaScript

### Backend

- PHP

### Database

- Oracle Database 10g XE
- Oracle OCI

### Development Environment

- XAMPP Apache Server
- Visual Studio Code
- Web Browser

## System Architecture

The system follows a simple application architecture:

```text
User
  |
  v
HTML / JavaScript Frontend
  |
  v
PHP Backend
  |
  v
Oracle Database
```

The user interacts with the application through the HTML and JavaScript-based interface. The PHP backend processes the requests and communicates with the Oracle database using Oracle OCI.

## Project Structure

```text
Personal-Diary-Management-System/
│
├── index.html
├── server.php
├── db.php
├── db_connect.php
├── .gitignore
└── README.md
```

## Setup and Installation

### 1. Install Required Software

Install the following software and tools:

- XAMPP
- Oracle Database 10g XE
- PHP with Oracle OCI support
- Visual Studio Code
- Web Browser

### 2. Clone the Repository

Clone the repository using Git:

```bash
git clone https://github.com/afrinahoque1007/Personal-Diary-Management-System.git
```

### 3. Move the Project to XAMPP

Place the project folder inside the XAMPP `htdocs` directory.

Example:

```text
C:\xampp\htdocs\Personal-Diary-Management-System
```

### 4. Start XAMPP

Open the XAMPP Control Panel and start the:

- Apache server

### 5. Configure Oracle Database

Make sure the Oracle Database service is running.

Open the following files:

```text
db.php
db_connect.php
```

Configure them with your own Oracle database username, password, and connection string.

> **Note:** Do not upload real database passwords or credentials to a public GitHub repository.

### 6. Run the Application

Open a web browser and visit:

```text
http://localhost/Personal-Diary-Management-System/
```

The application should now be accessible through the browser.

## Database Connectivity

The application uses PHP and Oracle OCI to communicate with the Oracle database.

The frontend sends requests to the PHP backend, and the backend processes the required SQL operations before communicating with the Oracle database.

## Learning Outcomes

Through this project, practical experience was gained in:

- Relational database design
- Entity-Relationship (ER) modeling
- Database normalization
- SQL query development
- DDL and DML operations
- Joins and subqueries
- Database constraints
- PHP and Oracle integration
- CRUD operations
- Building a database-driven web application

## Project Purpose

The main purpose of this project was to apply the concepts learned in Database Management System coursework to the development of a practical database-driven application.

It provided hands-on experience in designing a relational database, implementing SQL operations, connecting a web application with an Oracle database, and managing structured data.

## Academic Project

This project was developed as an individual academic project for the **Database Management System** course during the **4th semester**.

## Author

**Afrina Hoque**

CSE Undergraduate

GitHub: [Afrina Hoque](https://github.com/afrinahoque1007)