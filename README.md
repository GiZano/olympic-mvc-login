# 🏂 Milano-Cortina 2026 - Volunteer Portal

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Status](https://img.shields.io/badge/Status-Ready-brightgreen?style=for-the-badge)

## Project Description
Welcome to the repository of the **Milano-Cortina Volunteer Portal**. This project is a fullstack web application developed in pure PHP to manage the login and registration process for volunteers of the upcoming 2026 Winter Olympic Games.

The portal has been strictly designed following the **MVC (Model-View-Controller)** architecture to ensure clean, maintainable, and scalable code. Instead of a standard relational database, the application leverages advanced PHP Session management to simulate data persistence, making it perfect for rapid testing, prototyping, or demonstrations.

## 🎥 Demo
Here is a quick demonstration of the portal in action, from login to registering a new volunteer:

![Login and Registration Portal Demo](./public/assets/demo_login.gif)

## 🛠 Tech Stack
* **Core Language:** PHP 
* **Frontend:** HTML5, CSS3, Bootstrap 5.3 (via CDN)
* **Architecture:** MVC Pattern

## 📁 Project Structure

The codebase is divided into logical directories following the MVC pattern. Here is the complete tree structure:

```text
.
├── controller/
│   ├── home.php
│   ├── login.php
│   ├── logout.php
│   └── register.php
├── model/
│   └── data.php
├── public/
│   ├── assets/
│   │   ├── demo_login.gif
│   │   ├── login-card.png
│   │   ├── registration-card.png
│   │   └── volunteer-page.png
│   ├── css/
│   │   └── style.css
│   └── index.php
└── view/
    ├── home_view.php
    └── volunteer_view.php
```

### Directory Breakdown:
* ```public/``` : The web-exposed directory. It contains the application entry point (```index.php```) and public assets (CSS, images, and the demo GIF).
* ```controller/``` : The routing "brain". It handles HTTP requests, processes forms, and decides which View to render (```home.php```, ```login.php```, ```register.php```, ```logout.php```).
* ```model/``` : The data layer. It contains ```data.php``` which handles authentication logic, registration, and the manipulation of the session-based mock database.
* ```view/``` : The User Interface. The ```home_view.php``` and ```volunteer_view.php``` files present data to the end user.

## 🚀 How to Run Locally

To run this project on your local machine, you don't need to configure Apache, Nginx, or a MySQL server. You just need PHP installed!

1. Clone this repository to your local machine.
2. Open your favorite terminal and navigate to the project's root folder.
3. Start the PHP built-in development server, pointing it to the ```public``` directory:
   
   ```bash
   php -S localhost:8000 -t public
   ```

4. Open your web browser and go to: ```http://localhost:8000```

## ✨ Features

* **Authentication:** Login system with credential validation.
* **Volunteer Registration:** Ability to create new user accounts on the fly.
* **Data Persistence (Mock):** Uses ```$_SESSION``` to keep created accounts active until the browser session is destroyed.
* **Message Handling (Feedback):** Integrated system to provide users with immediate visual feedback (red for errors, green for success).
* **Responsive UI:** Mobile and desktop-friendly interface powered by Bootstrap.

## 👨‍💻 Author
**GiZano** (Giovanni Zanotti) - © 2026 All rights reserved.