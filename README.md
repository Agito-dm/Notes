## Проект приложения заметки

В проекте у каждого пользователя свой аккаунт. Можно просматривать, создавать, изменять и удалять записи.
Для авторизации и регистрации в приложении нужна почта и пароль. Это необходимо чтобы сохранять доступ к своим заметкам и не давать возможности просмотра заметок другим пользователям. 
У каждого пользователя приложения доступны только его заметки и скрыты заметки других пользователей. В профиле аккаунта можно изменить пароль, почту и свое имя пользователя.

Используются директиры для защиты от межсайтовых запросов csrf и выводится созданная мной страница ошибки 403 при заходе на заметку другого пользователя по изменению URL адресса

## Ветки

В проекте две ветки. Первая main без регистрации нового пользователя и тестируется с помощью seeds: php artisan db:seed
Вторая ветка актуальная с регистрацией, авторизацией пользователя

## Созданные страницы
По пути resources\views\note\... находятся основные созданные страницы .blade.php, а остальные файлы я разместил согласно стандартному расположению файлов в laravel 11

## Информация в базе данных

![изображение](https://github.com/user-attachments/assets/3c21e715-ea25-4e35-bbaa-b3aaca518b7a)

![изображение](https://github.com/user-attachments/assets/d528c8f4-6b06-47de-a123-fc3ebb44aaba)

![изображение](https://github.com/user-attachments/assets/097cd5f6-993a-4da5-bdd1-14dd05dcba6f)


## Изображения и инструкция по созданию пользователя

В .env указаны параметры подключения к базе данных MySQL, но можно сделать подключение и к другой базе данных изменив параметры:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Notes
DB_USERNAME=root
DB_PASSWORD=

### Для создания тестового пользователя со 100 записями используй команду ниже. Подробности указаны в DatabaseSeeder.php
### php artisan db:seed

### В начальном окне сверху справа нужно нажать на кнопку регистрации:
![изображение](https://github.com/user-attachments/assets/bcffffc0-47a2-4505-9234-519c91a7bffe)

### Ввести все параметры, можно не настоящую электронную почту, но пароль стоит запомнить
![изображение](https://github.com/user-attachments/assets/ee8de358-557c-4a20-bcf8-d4b1170a8e14)

### После этого будет переход на страницу как на скриншоте ниже. Нужно сверху слева нажать на "Notes" и потом как на скриншоте выслать на почту подтверждение
![изображение](https://github.com/user-attachments/assets/7a4a4bbc-c5f2-41f2-9852-66bec60d8278)
![изображение](https://github.com/user-attachments/assets/44c9bc37-6458-4149-84f3-f9eaa8b61d49)

## В stodage\logs нужно открыть файл laravel.log и с помощью поиска найти письмо как показано на скрине ниже и зайти по сгенерированной уникальной ссылке
![изображение](https://github.com/user-attachments/assets/339f89e5-433d-4508-9ef1-37eb91e255e9)
![изображение](https://github.com/user-attachments/assets/1ff25512-a268-4e17-9c77-f006b5e57ed4)

## Учетная запись активирована! При нажатии на Notes сверху слева будет главный экран и можно создавать записи. Также сверху слева можно зайти в свой аккаунт и изменить настройки
![изображение](https://github.com/user-attachments/assets/985eb80c-03e6-4b82-8744-14d5c69940f6)
![изображение](https://github.com/user-attachments/assets/94ae2bf9-81ee-4bec-a47d-ec7e9800ee74)
![изображение](https://github.com/user-attachments/assets/88b527ad-c3d2-4b89-bedf-f75707ae10d7)
![изображение](https://github.com/user-attachments/assets/290afb50-ca64-4019-8ff9-fcb91718ae87)
![изображение](https://github.com/user-attachments/assets/1f50b707-54b0-43b8-baea-b728e7bd45fa)

## Вход в систему авторизованного пользователя по кнопке "Log in" на начальной странице и после этого на странице авторизации нужно ввести почту и пароль
![изображение](https://github.com/user-attachments/assets/44d5b5ef-0cf1-4436-b13e-70a2cdf7c922)

## База данных хранит информацию на устройстве независимо от разработки. Если загрузить проект на сервер, то БД не будет ограничена устройством. Ниже фотография работы БД без других приложений
![изображение](https://github.com/user-attachments/assets/cea1f82e-45ae-4832-ad07-27aa5474e8f7)
