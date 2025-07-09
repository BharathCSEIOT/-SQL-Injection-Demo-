# 📄 SQL Injection Demo — Beginner Cybersecurity Project
## ✅ Overview
This is a simple PHP + SQLite web app that demonstrates:

🔓 How a login form can be vulnerable to SQL Injection

🛡️ How prepared statements prevent SQL Injection

🔍 How an attacker can bypass authentication

## ✨ How to fix it properly

### ⚡ Tech Stack
PHP (Built-in server)

SQLite3 (file-based database, no server required)

HTML (Simple login form)

### 📁 Project Structure
```
sql_injection_demo/
├── index.html        # The login form page
├── login.php         # The PHP logic (vulnerable or secure)
├── users.sql         # SQL script to create the users table
├── test.db           # SQLite database file
├── info.php          # (Optional) phpinfo() to check extensions
├── screenshots/      # Screenshots for README

```

![image](https://github.com/user-attachments/assets/a3af71a7-62e9-4269-9535-8ffe0a6959fb)

### 🚀 How to Run
1️⃣ Create the SQLite database
```
sqlite3 test.db < users.sql

```
✅ Or open sqlite3 test.db and run .read users.sql

2️⃣ Start the PHP built-in server
```
php -S localhost:8000

```
3️⃣ Visit the login page
```
http://localhost:8000/index.html

```

![image](https://github.com/user-attachments/assets/84f6b352-f30c-4a19-8c77-a72a491b6fcf)

### ⚠️ Test the Vulnerability
Valid login:

```
Username: admin
Password: password123
```

![image](https://github.com/user-attachments/assets/965d79a7-84aa-459b-9244-6011dd3ef699)

![image](https://github.com/user-attachments/assets/accbb3be-f45f-485e-bc31-56f7c1c25afc)

➜ Login successful

![image](https://github.com/user-attachments/assets/11d10557-548f-492d-851e-f68b9c1e3128)

SQL Injection payload:
```
Username: admin' --
Password: (anything)
```
![image](https://github.com/user-attachments/assets/8f28b97e-76a0-4d2c-9309-f090625c4e20)


➜ Login successful (should fail!)

![image](https://github.com/user-attachments/assets/b839a07e-847e-4cba-9fbb-4b1115ed8364)

✅ Demonstrates SQL Injection working.

### 🔒 Test the Secure Version
Switch to the prepared statement version in login.php.
Try the same injection payload:
```
Username: admin' --
Password: anything
```
![image](https://github.com/user-attachments/assets/5665b886-277a-4851-8114-67afa0f38e4f)

➜ ✅ Login failed

![image](https://github.com/user-attachments/assets/a39c077a-1584-4eda-acf7-10079ba5efd7)

✔️ Now the injection is blocked — inputs are safely handled!

##Learning
✅ How SQL Injection works
✅ How untrusted input breaks a query
✅ Why prepared statements are important
✅ How to use SQLite in PHP for simple demos
✅ How to test security vulnerabilities safely

## 🔒 Key Cybersecurity Takeaway

Always use prepared statements for any database input.

Never trust user input. Validate and sanitize properly!



## 📜 License
Feel free to use or share this project for learning purposes!

## Author
Bharath K

Beginner Cybersecurity Enthusiast

🌐 “My first hands-on web security project!”
