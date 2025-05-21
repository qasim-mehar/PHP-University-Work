<h1 align="center">🎓 Student<span style="color:#e74c3c">Manager</span> – Modern CRUD Application with Laravel 11</h1> <p align="center"> <img src="https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel"> <img src="https://img.shields.io/badge/CRUD-Operations-success?style=for-the-badge"> <img src="https://img.shields.io/badge/Master_Layout-Included-important?style=for-the-badge"> <img src="https://img.shields.io/badge/MySQL-Database-blue?style=for-the-badge&logo=mysql"> </p><p align="center">A clean and efficient student management system demonstrating core Laravel concepts with modern UI components.</p>

🧩 Key Components
Component	Purpose	Technology
📄 Master Layout	Consistent page structure	Blade Templates
📊 Database	Student data storage	MySQL + Eloquent ORM
🔄 CRUD	Full student management	Laravel Controllers
🗂️ Folder Structure

resources/views/layout/
├── app.blade.php     # Master layout
└── students.blade.php # Student list view

app/Http/Controllers/
└── StudentController.php

app/Models/
└── Student.php

routes/
└── web.php