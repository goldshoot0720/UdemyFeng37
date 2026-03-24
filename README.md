# UdemyFeng37

A single-page course tracking project with a refreshed 2026-2027 futuristic tech-style interface.

## Overview

UdemyFeng37 keeps the original course management workflow intact while modernizing the presentation layer.  
Users can review course records, edit learning context, update progress, and add new courses from the same page.

## Core Data

The interface manages these original fields:

- `courseMain`
- `courseSub`
- `courseContext`
- `courseProgress`

## UI Direction

This version focuses on interface modernization only:

- Original content structure preserved
- Original workflow preserved
- Updated futuristic tech-style dashboard design
- Improved visual hierarchy for desktop and mobile

## Features

- View all courses in a single-page dashboard
- Edit course context and progress inline
- Add a new course from the same interface
- Save updates through PHP endpoints
- Keep the legacy data structure while improving the UI

## Project Structure

- `index.html` - single-page frontend interface
- `ReadCourse.php` - reads course data
- `AddCourse.php` - inserts new course data
- `UpdateCourse.php` - updates existing course data

## Run Locally

1. Open the project in a PHP-enabled environment.
2. Start a local PHP server in the project folder.
3. Visit the page from the browser.

```bash
php -S 127.0.0.1:8000
```

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
