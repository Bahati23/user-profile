

---

# User Profile Form Project

## Overview
This project implements a **User Profile Management System**. It includes a user-friendly HTML form for capturing user information, styled with CSS, and stores the submitted data in a MySQL database using a backend script (e.g., PHP).

---

## Features
- A responsive and accessible user profile form.
- Clean and professional design using CSS.
- Secure backend integration to handle user data.
- Data storage in a well-structured MySQL database.

---

## Technologies Used
- **Frontend:** HTML, CSS
- **Backend:** PHP (or any backend language of choice)
- **Database:** MySQL

---

## Project Structure
```
project/
│
├── profile.html         # Main HTML file with the user profile form
├── styles.css         # CSS file for styling the form
├── profile.php            # Backend PHP file to handle form submissions
├── README.md          # Project documentation (this file)
└── database.sql       # SQL script to create the user_profile table
```

---

## Setup Instructions

### 1. Clone the Repository
Clone this project to your local machine:
```bash
git clone https://github.com/yourusername/user-profile-form.git
cd user-profile-form
```

### 2. Set Up the Database
1. Open a MySQL client or GUI tool (e.g., phpMyAdmin).
2. Create a new database:
   ```sql
   CREATE DATABASE user_profiles;
   ```
3. Use the provided SQL script (`database.sql`) to create the `user_profile` table:
   ```sql
   USE user_profiles;
   SOURCE database.sql;
   ```

### 3. Configure the Backend
Ensure your backend script (`profile.php`) connects to the database:
```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_profiles";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

---

## Files Description

### **HTML: `profile.html`**
- Contains the structure of the user profile form.
- Fields: Name, Email, Phone, Date of Birth, Marital Status, Gender, Address, and Occupation.
- Example snippet:
```html
<label for="name">Name:</label>
<input type="text" id="name" name="name" placeholder="Enter your full name" required>
```

### **CSS: `styles.css`**
- Styles the form with a clean, muted design.
- Ensures responsiveness and accessibility.
- Example styling:
```css
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}
```

### **Backend: `profile.php`**
- Handles form submissions.
- Inserts the data into the MySQL database securely using prepared statements.

### **Database: `database.sql`**
- Defines the `user_profile` table:
```sql
CREATE TABLE user_profile (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    phone VARCHAR(15) NOT NULL,
    dob DATE NOT NULL,
    marital_status ENUM('Single', 'Married') NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    address VARCHAR(255) NOT NULL,
    occupation VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

---

## How to Run

1. Open the project in a local server environment (e.g., XAMPP, WAMP, or MAMP).
2. Access the `profile.html` file in your browser.
3. Fill out the form and submit it.
4. Verify that the data is saved in the MySQL database.

---

## Future Improvements
- Add client-side validation for form inputs using JavaScript.
- Implement server-side validation to enhance data security.
- Provide user feedback upon successful submission (e.g., a success page or message).
- Expand the database schema to include more fields or related tables.

 ## Author
Jael Bahati 
- [GitHub](https://github.com/Bahati23)  
- [LinkedIn](https://linkedin.com/in/jael-bahati)  
 

