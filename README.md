<h1 align="center">👨‍💼 Product Management System — Codeigniter MVC Web App 🧮🚀</h1>
<p align="left"><i>🛠️ Product Management System — CodeIgniter 3 (MVC)
This is a CodeIgniter 3 MVC-based web application designed to manage Product data efficiently. The application provides a full suite of CRUD operations (Create, Read, Update, Delete), allowing administrators to maintain product records through a user-friendly web interface.</i></p>
<br>

<p align="center"><i>CRUD Operations</i> 👨🏽‍💻 
  <br>

<p align="left"><i>Product Management System is a CodeIgniter 3-based MVC web application that provides a streamlined solution to Create, Read, Update, and Delete (CRUD) product records through a responsive and user-friendly interface.

This system enables administrators or staff to efficiently manage product-related data in a well-organized, secure, and intuitive manner.</i></p>

✅ Key Highlights
```sh
  Built using CodeIgniter 3 Framework
  Follows MVC Architecture
  Fully functional CRUD for products
  User Registration & Login system
  Image Upload support
  Pagination for managing large datasets (AJAX optional)
  Responsive UI with Bootstrap
  Easy to set up and extend
```

 ## ✨ Features
```sh
✅ Register / Login (Basic Auth)
✅ Add New Product
✅ View All Products
✅ Edit / Update Product
✅ Delete Product
✅ Image Upload
✅ Pagination (AJAX optional)
✅ Bootstrap UI
✅ Follows MVC structure (Model, View, Controller)
```
<!-- TABLE OF CONTENTS -->
<details>
  <summary>📚 Table of Contents (Click to expand)</summary>
  <ol>
    <li><a href="#about-the-project">📌 About the Project</a></li>
    <li><a href="#built-with">🛠️ Built With</a></li>
    <li><a href="#demo">📸 Demo</a></li>
    <li>
      <a href="#getting-started">🚀 Getting Started</a>
      <ul>
        <li><a href="#prerequisites">📌 Prerequisites</a></li>
        <li><a href="#installation">⚙️ Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">🧪 Usage</a></li>
    <li><a href="#roadmap">📈 Roadmap</a></li>
  </ol>
</details>



 ## Built With :
  # Technology Stack:
  * Php
  * Codeigniter
  * HTML
  * Bootstrap
  * JavaScript
  * MySQL Database
  

<!-- GETTING STARTED -->
## Demo:
*Login
   <img width="1913" height="858" alt="image" src="https://github.com/user-attachments/assets/0a30aceb-5a7f-4b5e-b4a0-00799f62f02a" />
* Register
  <img width="1911" height="897" alt="image" src="https://github.com/user-attachments/assets/974d9bb2-f4f5-47b4-bbe9-52ef96c7f0cc" />
* All Products User Interface
  <img width="1897" height="966" alt="image" src="https://github.com/user-attachments/assets/e67ccf24-b3ce-4eb9-a689-f2e9b971cfef" />
* Add Employee User Interface
  <img width="1900" height="956" alt="image" src="https://github.com/user-attachments/assets/f3c3762f-5c84-451d-b96e-d5dd7332e27c" />

* Update Employee User Interface
 <img width="1913" height="977" alt="image" src="https://github.com/user-attachments/assets/6a134dbe-2dea-4ec5-90e3-1b5925328659" />
* Delete Employee User Interface
  <img width="1868" height="966" alt="image" src="https://github.com/user-attachments/assets/8c2bc4e9-340a-4937-bdb6-c00f7d109ab1" />
* Pagination:
  1. Page No.1:
    <img width="1712" height="901" alt="image" src="https://github.com/user-attachments/assets/8ce8e202-3c7e-4c4e-81d4-37e25cf0980b" />
  2. Page No.2:
    <img width="1796" height="838" alt="image" src="https://github.com/user-attachments/assets/8189a129-588d-4f94-92b2-0fbafa1f6f59" />

* Database Table
  1. Products
   <img width="1171" height="566" alt="image" src="https://github.com/user-attachments/assets/7121bec8-f83c-4ab4-8904-cc0d51c17c67" />
	2. User
    <img width="1210" height="360" alt="image" src="https://github.com/user-attachments/assets/44f4fde0-884a-4e93-8672-92a8b5046c30" />

     
  

## Getting Started
### Prerequisites
```sh
       PHP >= 7.4  
       MySQL / MariaDB  
       Apache (XAMPP / WAMP / LAMP recommended)  
       Composer (optional)  
       CodeIgniter 3.x  
  ```
### Installation 
   Follow these simple steps to get the server up and running 👾🧮🚀✅.
  1. Clone the repo

```sh
      git clone https://github.com/vikashshaarma007/Product-Management-System.git
     cd Product-Management-System
```
2. Run the Project
   ```sh
   1. Move the project folder to your web server root:
   For XAMPP (Windows):
   C:\xampp\htdocs\Product-Management-System

   For Linux (Apache):
   sudo mv Product-Management-System /var/www/html/

   2. Open the project in your preferred IDE:
   (VS Code, PHPStorm, Sublime Text, etc.)
   
   3. Import the SQL file:
   - Open phpMyAdmin
   - Create a new database: product_db
   - Import the provided file: product_db.sql
   
   4. Configure database settings:
   Open: application/config/database.php

   Update these values:
   'hostname' => 'localhost',
   'username' => 'root',
   'password' => '',
   'database' => 'product_db',
   'dbdriver' => 'mysqli',
   
   5. Set your base URL:
   Open: application/config/config.php

   Set:
   $config['base_url'] = 'http://localhost/Product-Management-System/';

   6. Enable URL rewriting (optional but recommended):
   - Rename 'htaccess.txt' to '.htaccess'
   - In .htaccess, make sure the RewriteBase matches your folder:
     RewriteBase /Product-Management-System/
   
   7. (Optional) Organize Views with Header/Footer:
   - application/views/templates/header.php
   - application/views/templates/footer.php
   - Load them in your main view using:
     $this->load->view('templates/header');
     $this->load->view('products/index');
     $this->load->view('templates/footer');
   
   8. Open the app in the browser:
   http://localhost/Product-Management-System/index.php/products

   9. Use the web app to:
   ✅ Register
   ✅ Login
   ✅ Add Products  
   ✅ View All Products  
   ✅ Edit / Update Products  
   ✅ Delete Products  
   ✅ Image upload & pagination (AJAX optional)

   
   ```
## Usage
```sh
   Click "Add New Product" to insert data  
   Use the edit/delete buttons to manage products  
   Each action performs DB operations through CodeIgniter's Model  
   Pagination and flash messages included  
```
## Roadmap
```sh
   ✓ Ajax-based pagination  
   ✓ Product image popup preview  

   ☐ Role-based access (admin, editor)  
   ☐ Export to Excel / PDF  
   ☐ RESTful APIs (optional)

```

