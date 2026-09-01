# 🎓 Class Committee Website

A web-based Class Committee Management System designed to improve communication and coordination between students and teachers. The platform provides separate student and teacher portals for managing academic information, class activities, attendance, timetables, events, complaints, and surveys.

---

## 📌 Project Overview

The **Class Committee Website** is a full-stack web application developed to centralize class-related academic and communication activities in one platform.

The system provides separate interfaces for **students and teachers**, allowing them to access and manage information based on their respective roles.

---

## 🎯 Objectives

- Provide a centralized platform for class-related activities
- Improve communication between students and teachers
- Manage academic information digitally
- Provide easy access to timetables and events
- Allow students to submit complaints and feedback
- Manage attendance information
- Conduct surveys and collect student responses
- Implement separate functionality for students and teachers

---

## 🧠 Technologies Used

### 💻 Programming & Development

- HTML5
- CSS3
- JavaScript
- PHP

### 🗄️ Database

- MySQL

### 🛠️ Development Tools

- XAMPP
- phpMyAdmin
- Git
- GitHub

---

## ⚙️ System Modules

### 👨‍🎓 Student Module

- Student registration
- Student login
- Student profile
- Attendance information
- Class timetable
- Class events
- Complaint submission
- Surveys and feedback

### 👨‍🏫 Teacher Module

- Teacher registration
- Teacher login
- Teacher profile
- Attendance management
- Timetable management
- Event management
- Complaint management
- Survey and feedback management

---

## 🔐 Authentication & Access Control

The system provides separate authentication workflows for students and teachers.

After successful login, users are redirected to their respective dashboards and can access functionality based on their role.

Session management is used to maintain authenticated user access throughout the application.

---

## 🔄 Methodology

The application follows a basic client-server architecture:

```text
User
  ↓
Frontend Interface
  ↓
PHP Backend
  ↓
MySQL Database
  ↓
Data Processing
  ↓
Response to User
```

## 📚Key Learning Outcomes

Through this project, I gained practical experience in:

- Full-stack web application development
- PHP backend development
- MySQL database integration
- CRUD operations
- User authentication
- Session management
- Role-based access control
- Form handling and validation
- Database queries and relationships
- Frontend development using HTML, CSS, and JavaScript
- Connecting frontend and backend components
- Managing a multi-page web application
- Integrating multiple modules into a single system
- Using Git and GitHub for version control
- Working collaboratively on a software project

## Project Structure

```text
Class-Committee/
│
├── uploads/
│
├── index.php
├── connect.php
├── logout.php
│
├── student_login.php
├── student_register.php
├── student_homepage.php
├── student_profile.php
├── student_atten.php
├── student_complaints.php
├── student_event.php
├── student_survey.php
├── student_timetable.php
│
├── teacher_login.php
├── teacher_register.php
├── teacher_homepage.php
├── teacher_profile.php
├── teacher_atten.php
├── teacher_complaints.php
├── teacher_event.php
├── teacher_survey.php
├── teacher_timetable.php
│
├── update_complaint_status.php
├── update_timetable.php
│
├── script.js
│
├── style_index.css
├── style_login.css
├── style_homepage.css
├── style_profile.css
└── style_register.css
