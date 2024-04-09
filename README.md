<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Digital Fitness Platform

The Digital Fitness Platform connects users and trainers for a personalized fitness experience. Users choose 
trainers or follow predefined workouts, with an option to purchase equipment. Trainers undergo 
verification and guide users via a chat system. A secure payment system facilitates transactions. Additional 
features include a community hub for posting results, motivational content, and social engagement. This 
project aims to redefine digital fitness, fostering a supportive ecosystem for achieving health and wellness 
goals.

### Follow the Steps to Succesfully install the Project

- Step 1 : Create a New Folder and Open the Folder in Terminal and Run the following command

```
git clone https://github.com/CoderShubham007/Digital-Fitness-Platform.git
```

- Step 2 : Open the Folder inside your code Editor or use `cd` to change directory

```
cd Digital-Fitness-Platform
```

- Step 3 : Run the following command to update the composer and install all dependencies

```
composer update
```

- Step 4 : Run the following command to link storage
```
php artisan storage:link
```

- Step 5 : Once the storage in liked copy all the folders inside `/public/website-images` and paste it inside `/public/storage/public/`

- Step 6 : Turn on Apache and MySQL Server ( You can use XAMPP, WAMPP or any other Tools)

- Step 7 : Run All the Migration to create Database and Tables in MySQL
```
php artisan migrate
```

- Step 8 : Seed the Database Using the following commands ( You can see All the Seeders inside `/database/seeders/`)
```
php artisan db:seed
```

- Step 9 : Finally Start the serve and Use and Customize the App Accourding to your Need
```
php artisan serve
``` 

