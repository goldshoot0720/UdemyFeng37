# UdemyFeng37

UdemyFeng37 is a single-page course tracking interface for managing:

- `courseMain`
- `courseSub`
- `courseContext`
- `courseProgress`

## Features

- View all courses in a single-page dashboard
- Edit course context and progress inline
- Add a new course from the same interface
- Save course updates through PHP endpoints
- Use a refreshed 2026-2027 futuristic tech-style UI without changing the original content structure

## Current UI Direction

The current version keeps the original content structure and workflow, while refreshing the interface into a 2026-2027 futuristic tech-style dashboard.

## Run Locally

1. Place the project in a PHP-enabled environment.
2. Start a local PHP server from the project folder.
3. Open `index.html` in the browser through that local server.

Example:

```bash
php -S 127.0.0.1:8000
```

Then open:

```text
http://127.0.0.1:8000/index.html
```

## Database

- Database name: `udemyfeng37`
- Table name: `udemy3data`

## Table Fields

- `courseMain` TEXT
- `courseSub` TEXT
- `courseContext` TEXT
- `courseProgress` TEXT
