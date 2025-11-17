# Inventory Management System

## RP Tumba College
**Module:** Develop Backend using PHP  
**Level:** 6, Year 2  
**Learning Unit:** 3  
**Individual Assignment**  

---

## Project Overview
This is a **simple Inventory Management System** developed using **PHP** and **MySQL**.  
It allows users to:  
- Sign up and log in  
- Add new items  
- Update existing items  
- Delete items  
- View all items in a table  

---

## Features / Interfaces

### 1. Signup Page
- **File:** `signup.php`  
- **Purpose:** Allows a new user to register an account.  
- **Inputs:** Username, Email, Password  
- **Screenshot:**  
![Signup Page](screenshots/signup.png)  

---

### 2. Login Page
- **File:** `login.php`  
- **Purpose:** Allows a registered user to log in.  
- **Inputs:** Username, Password  
- **Screenshot:**  
![Login Page](screenshots/login.png)  

---

### 3. Dashboard
- **File:** `dashboard.php`  
- **Purpose:** Main page after login. Shows all items and provides options to add, update, or delete items.  
- **Screenshot:**  
![Dashboard](screenshots/dashboard.png)  

---

### 4. Add Item
- **File:** `insert.php`  
- **Purpose:** Handles adding new items to the database.  
- **Inputs:** Item Name, Quantity  

---

### 5. Update Item
- **File:** `update.php`  
- **Purpose:** Allows updating name or quantity of an existing item.  
- **Inputs:** Item Name, Quantity  

---

### 6. Delete Item
- **File:** `delete.php`  
- **Purpose:** Deletes a selected item from the database.  

---

### 7. Logout
- **File:** `logout.php`  
- **Purpose:** Ends the user session and redirects to login page.  

---

## Database
- **Database Name:** `inventory_database`  
- **Tables:** `users`, `items`  
- **SQL Export File:** `inventory_database.sql` (included in repo)  

**Note:** Import the SQL file in phpMyAdmin to create the database and tables.  

---

