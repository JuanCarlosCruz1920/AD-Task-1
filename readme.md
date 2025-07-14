Calendar App
A simple event calendar built using fundamental PHP concepts and modular design.

Table of Contents
Overview
Key Components
Technology
Deployment
Rules, Practices and Principles
File Structure
Git Commit Labels

Overview
Calendar App is a sample PHP project that demonstrates core programming principles through the creation of a basic calendar and event listing interface. It emphasizes procedural PHP, modular file structure, and static data handling without the use of frameworks or databases.

Key Concepts Demonstrated:
Arrays: Used to manage lists of events and dates.
Associative Arrays: Events are stored as associative arrays with properties like title, date, description, and category.
Functions: Reusable logic for rendering calendars, formatting dates, and filtering events.
Fragmentation: The app is split into layout files, static data, utility functions, and page-specific logic for better maintainability.

Key Components
Home Page (/): Displays a monthly calendar with clickable dates.
Event Page (/calendar): Lists events for the selected date or month.
Static Data: Events are stored in staticData/release.staticdata.php.
Layout: Shared components like headers and footers are modularized in the layout/ folder.
CSS Styling: Custom styles are located in assets/css/calendar.css.

Technology
Language: PHP
Styling: CSS3
Frameworks: None (pure PHP)
Database: None (static PHP files)

AD-TASK-1-MAIN/
│
├── assets/
│   └── css/
│       ├── calendar.css
│       └── releases.css
│
├── layout/
│   ├── footer.layout.php
│   └── header.layout.php
│
├── pages/
│   ├── calendar/
│   │   └── index.php
│   └── releases/
│       └── index.php
│
├── staticData/
│   └── releases.staticdata.php
│
├── bootstrap.php
├── composer.json
├── composer.lock
├── index.php
└── readme.md
