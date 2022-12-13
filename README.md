Перед началом работы:
1. Поправить в файле .env параметры подключения к базе.
2. Запустить миграции командой:
   php artisan migrate
   
   В результате чего создадутся основные таблицы: users, courses, lessons, userprogress.

Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (47.96ms)
Migrating: 2019_12_14_000001_create_personal_access_tokens_table
Migrated:  2019_12_14_000001_create_personal_access_tokens_table (46.31ms)
Migrating: 2022_12_08_181226_create_courses_table
Migrated:  2022_12_08_181226_create_courses_table (20.06ms)
Migrating: 2022_12_08_181635_create_lessons_table
Migrated:  2022_12_08_181635_create_lessons_table (18.49ms)
Migrating: 2022_12_08_181726_create_userprogress_table
Migrated:  2022_12_08_181726_create_userprogress_table (25.02ms)


3. Запустить сиды для заполнения БД данными:
   php artisan db:seed

Seeding: Database\Seeders\UsersTableSeeder
Seeded:  Database\Seeders\UsersTableSeeder (1,742,405.86ms)
Seeding: Database\Seeders\CoursesTableSeeder
Seeded:  Database\Seeders\CoursesTableSeeder (2.41ms)
Seeding: Database\Seeders\LessonsTableSeeder
Seeded:  Database\Seeders\LessonsTableSeeder (59.40ms)
Seeding: Database\Seeders\UserProgressTableSeeder
Seeded:  Database\Seeders\UserProgressTableSeeder (98,886.01ms)
Database seeding completed successfully.
