<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p> -->

# Digital Fitness Platform (HTML, CSS, Bootstrap, JavaScript, Laravel & MySQL)

The Digital Fitness Platform connects users and trainers for a personalized fitness experience. Users choose 
trainers or follow predefined workouts, with an option to purchase equipment. Trainers undergo 
verification and guide users via a chat system. A secure payment system facilitates transactions. Additional 
features include a community hub for posting results, motivational content, and social engagement. This 
project aims to redefine digital fitness, fostering a supportive ecosystem for achieving health and wellness 
goals.

## Follow the Steps to Successfully install the Project

### Step 1 - Download the zip file of this Project and Open the File in your Code Editor
**OR**
### Create a New Folder and Open the Folder in Terminal and Run the following command 

```
git clone https://github.com/ShubhamKrVishwakarma/Digital-Fitness-Platform.git
```

### Step 2 - Open the Folder inside your code Editor or use `cd` to change directory

```
cd Digital-Fitness-Platform
```

### Step 3 - Run the following command to update the composer and install all dependencies

```
composer update
```

### Step 4 - Run the following command to link storage
```
php artisan storage:link
```

### Step 5 - Once the storage in liked copy all the folders inside `/public/project-images/` and paste it inside `/public/storage/`

### Step 6 - Create a New File called `.env` in your Project root directory and Set up .env File according to your need 
**OR**
### copy all contents of `/.env.example` to your newly created `/.env` File

### Step 7 - Now Turn on Apache and MySQL Server `( You can use XAMPP, WAMPP or any other Tools)`

### Step 8 - Run All the Migration to create Database and Tables in MySQL and also seed the Tables
```
php artisan migrate --seed
```

### Step 9 - Now run the following command to Generate App Key
```
php artisan key:generate
```

### Step 10 - Finally Start the serve and Use and Customize the App according to your Need
```
php artisan serve
```
### Your Server in now running at: http://localhost:8000/

**NOTE:**
We are using Razorpay Payment Gateway Integration so order payment and subscription payment will not 
work unless you provide the Razorpay API Keys or use your required Payment Gateways

If you want to use Razorpay create new account on https://razorpay.com/ and generate your API Key and Secret Key and paste the API Keys in the `/env` file variables

```
RAZORPAY_API_KEY=
RAZORPAY_SECRET_KEY=
```
