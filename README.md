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

A complete Entity-Relationship (ER) Diagram was designed for the system.

### Normalization

The database design was normalized up to **Third Normal Form (3NF)** to reduce data redundancy and maintain data consistency.

### Main Tables

The system contains four main relational tables:

- **Users** – Manages user account information
- **Diary Entries** – Stores personal journal records
- **Category** – Organizes diary entries into different classifications
- **Reminders** – Handles scheduled reminders and notifications

### Constraints

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