<div align="center">

# 🏂 Milano-Cortina 2026 - Volunteer Portal

### MVC PHP Web Application

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
![Architecture](https://img.shields.io/badge/Architecture-MVC-orange?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Ready-brightgreen?style=for-the-badge)

</div>

---

## 📖 Project Description
Welcome to the repository of the **Milano-Cortina Volunteer Portal**. This project is a fullstack web application developed in pure PHP to manage the login and registration process for volunteers of the 2026 Winter Olympic Games.

The portal has been strictly designed following the **MVC (Model-View-Controller)** architecture to ensure clean, maintainable, and scalable code. Instead of a standard relational database, the application leverages advanced PHP Session management to simulate data persistence, making it an excellent showcase for rapid prototyping, session handling, and state management without external dependencies.

---

## 🎥 Live Demo
Here is a quick demonstration of the portal in action, from login to registering a new volunteer:

<div align="center">
  <img src="./public/assets/demo_login.gif" alt="Login and Registration Portal Demo" width="100%" />
</div>

---

## ✨ Key Features

* **🔐 Authentication:** Secure login system with credential validation.
* **📝 Dynamic Registration:** Ability to create new volunteer accounts on the fly.
* **💾 State Management (Mock DB):** Utilizes `$_SESSION` to simulate a persistent database, keeping accounts active for the duration of the browser session.
* **💬 User Feedback System:** Integrated message handling to provide immediate visual cues (e.g., red alerts for errors, green for success).
* **📱 Responsive UI:** Mobile and desktop-friendly interface built with HTML5, CSS3, and Bootstrap 5.3.

---

## 📂 Project Structure & MVC Architecture

The codebase enforces a strict **Separation of Concerns**, divided into logical directories following the MVC pattern.

```text
.
├── controller/          # Application logic and routing
│   ├── home.php
│   ├── login.php
│   ├── logout.php
│   └── register.php
├── model/               # Data layer and state management
│   └── data.php
├── public/              # Web-exposed directory (Entry point)
│   ├── assets/
│   │   ├── demo_login.gif
│   │   ├── login-card.png
│   │   ├── registration-card.png
│   │   └── volunteer-page.png
│   ├── css/
│   │   └── style.css
│   └── index.php
└── view/                # User Interface (Presentation layer)
    ├── home_view.php
    └── volunteer_view.php
```

### Directory Breakdown:
* **`public/`** : The only directory exposed to the web server. It contains the application entry point (`index.php`) and static assets (CSS, images).
* **`controller/`** : The "brain" of the application. It handles incoming HTTP requests, processes form submissions, interacts with the Model, and dictates which View to render.
* **`model/`** : The data layer. `data.php` encapsulates the authentication logic, registration processes, and manipulation of the session-based mock database.
* **`view/`** : The UI layer. These files (`home_view.php`, `volunteer_view.php`) are strictly for presenting data to the end-user, containing no complex business logic.

---

## 🚀 How to Run Locally

To test this project on your local machine, you do **not** need to configure Apache, Nginx, or a MySQL server. A local PHP installation is all that is required.

### 1. Clone the repository
Navigate to your preferred directory and clone the project:

```bash
git clone https://github.com/GiZano/Milano-Cortina-2026.git
cd Milano-Cortina-2026
```

### 2. Start the PHP Built-in Server
Open your terminal in the project's root folder and start the server, explicitly pointing the document root to the `public` directory:
   
```bash
php -S localhost:8000 -t public
```

### 3. Access the Application
Open your web browser and navigate to: 
[http://localhost:8000](http://localhost:8000)

---

<div align="center">

**Developed by [GiZano](https://giovanni-zanotti.is-a.dev)**

</div>
