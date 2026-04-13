# 📌 Todo List Application

A simple and efficient **To-Do List web application** built using **PHP, MySQL, and Bootstrap**.  
This project allows users to manage daily tasks with full CRUD functionality.

---

## 🚀 Features

- ➕ Add new tasks
- 📋 View all tasks in a dashboard
- ✏️ Edit existing tasks
- 🗑️ Delete tasks
- ✅ Mark tasks as Completed / Pending
- 🎯 Set task priority (High / Medium / Low)
- 📅 Automatic creation date

---

## 🛠️ Tech Stack

- PHP (Core Backend)
- MySQL (Database)
- HTML5
- CSS3
- Bootstrap 5
- Font Awesome

---

## 📂 Project Structure
تمام 🔥 ده README احترافي جاهز Copy/Paste لمشروعك:

# 📌 Todo List Application

A simple and efficient **To-Do List web application** built using **PHP, MySQL, and Bootstrap**.  
This project allows users to manage daily tasks with full CRUD functionality.

---

## 🚀 Features

- ➕ Add new tasks
- 📋 View all tasks in a dashboard
- ✏️ Edit existing tasks
- 🗑️ Delete tasks
- ✅ Mark tasks as Completed / Pending
- 🎯 Set task priority (High / Medium / Low)
- 📅 Automatic creation date

---

## 🛠️ Tech Stack

- PHP (Core Backend)
- MySQL (Database)
- HTML5
- CSS3
- Bootstrap 5
- Font Awesome

---

## 📂 Project Structure


TODO-app/
│
├── assets/
│ ├── index.css
│ ├── create_task.css
│ ├── update_task.css
│ └── logo.png
│
├── database/
│ └── config.php
│
├── inc/
│ ├── header.php
│ └── footer.php
│
├── actions/
│ ├── create.php
│ ├── update.php
│ ├── delete.php
│ └── toggle.php
│
├── index.php
├── create_task.php
├── update_task.php
├── maintenance.php
└── README.md

---

## ⚙️ Database Setup

Run the following SQL:

```sql
CREATE DATABASE todo_app;

USE todo_app;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    priority ENUM('high','medium','low') DEFAULT 'medium',
    is_completed TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

How to Run the Project
Install XAMPP

Move project folder to:

C:\xampp\htdocs\TODO-app
Start Apache & MySQL
Import database using phpMyAdmin

Open browser:


Add screenshots here:

Dashboard page
Create Task page
Update Task page
👨‍💻 Author

Mahmoud Alamawy

GitHub: https://github.com/mahmoudalamwy514-arch
📌 Notes

This project was built to practice:

CRUD operations using PHP
MySQL database integration
Frontend design with Bootstrap
Clean project structure
