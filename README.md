<div align="center">

# 🐘 PHP Foundations

*My hands-on PHP practice repo — from basics to forms, database, sessions & cookies.*

</div>

---

## 📁 Topics Covered

| # | Topic | Status |
|---|-------|:------:|
| 01 | Basics & Data Types | ✅ |
| 02 | Control Structures | ✅ |
| 03 | Functions | ✅ |
| 04 | Arrays | ✅ |
| 05 | Mini Projects | ✅ |
| 06 | Forms | ✅ |
| 07 | DB Connection | ✅ |
| 08 | Sessions | ✅ |
| 09 | Cookies | ✅ |

---

## 🧠 Key Concepts

**Forms** — Collect and process user input from the browser.
```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    echo "Hello, $name!";
}
```

**DB Connection** — Connect to MySQL using PDO with prepared statements.
```php
$pdo = new PDO("mysql:host=localhost;dbname=mydb", "root", "");
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
```

**Sessions** — Store user data on the server across multiple pages.
```php
session_start();
$_SESSION["username"] = "Matheesh";
```

**Cookies** — Store small data in the browser that persists over time.
```php
setcookie("theme", "dark", time() + (86400 * 30));
echo $_COOKIE["theme"];
```

---

## 🚀 How to Run

```bash
# Clone the repo
git clone https://github.com/matheeshainduwara/php-foundations.git

# Move into XAMPP htdocs or WAMP www folder
# Start Apache & MySQL, then open in browser:
http://localhost/php-foundations/07-db-connection/dbconnection.php
```

---

<div align="center">

⭐ **Star this repo if you find it helpful!**

</div>
