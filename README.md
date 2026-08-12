# PHP Foundations (php-foundations)

Hands-on examples and small exercises that teach core PHP concepts and common application patterns. The repository is organized as short, focused chapters covering basics (variables, types, operators), control structures, functions, arrays, forms, sessions, cookies, database connection, and mini projects.

## Stack

- **Language(s):** PHP (primary), Hack (secondary)
- **Runtime / Frameworks:** Plain PHP (examples are framework-agnostic). Some examples illustrate patterns used in modern PHP apps.
- **Notable topics covered:** procedural PHP examples, array & string utilities, basic session/cookie handling, simple database connection patterns, and small mini-projects demonstrating CRUD and application flow.

## Repository structure

Top-level entries:

```text
01-basics/            Intro to PHP: variables, data types, operators
02-control-structures/ If/else, switch, match, loops, comparison & logical operators
03-functions/         Example functions and small utilities
04-arrays/            Array usage and array helper examples
05-mini-projects/     Small apps and combined examples (e.g. student management)
06-forms/             HTML forms and request handling examples
07-db-connection/     Simple DB connection examples (mysqli / PDO)
08-sessions/          Session start/access/destroy and visit counter examples
09-cookies/           Cookie set/get/delete examples
README.md             This file
```

How it fits together: these are short, self-contained PHP scripts intended for learning. Files inside each chapter demonstrate individual concepts and can be run independently or combined to form small apps (see 05-mini-projects/ for a larger example).

## How to run the examples

Most examples are single-file scripts and can be run either from the CLI (php script.php) or served with PHP's built-in web server for web-focused examples.

From a fresh clone:

```bash
# clone
git clone https://github.com/matheeshainduwara/php-foundations.git
cd php-foundations

# run an example from the CLI
php 03-functions/calculator.php

# or start a local web server for web-form/session/cookie examples
php -S 127.0.0.1:8000
# then open http://127.0.0.1:8000/06-forms/01-html-forms/<filename>.php
```

Notes:
- Database examples in 07-db-connection are minimal; adjust credentials and/or switch to PDO as needed.
- Examples are written for modern PHP versions; PHP 8.1+ is recommended.

## Contributing

Contributions, corrections and additional examples are welcome. To contribute:

1. Fork the repository
2. Create a branch for your change: `git checkout -b feature/your-example`
3. Add your files / tests
4. Commit and push; open a Pull Request describing the change

Please prefer small, focused PRs that add a single concept or chapter.

## License

This repository is available under the MIT License. See the LICENSE file if present.

## Contact

Open an issue or submit a PR if you have suggestions or want to add examples.
