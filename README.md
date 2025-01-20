# Football Project
This project is a real-time football score system built with Laravel, Vite, and Reverb WebSocket. It supports real-time score updates and client broadcasting for connected clients.

# Features
Real-time score updates using WebSockets.
Frontend powered by Vite and modern JavaScript.
Backend API built with Laravel.
Handles multiple WebSocket clients seamlessly.

# Installation Instructions
## Step 1: Clone the Repository

## Step 2: Install PHP Dependencies
Install Laravel dependencies using Composer:
    composer install
## Step 3: Install Node.js Dependencies
Install frontend dependencies using npm:
    npm install
## Step 4: Configure Environment
Copy the .env.example file to .env:
        cp .env.example .env
Generate the Laravel application key:
    php artisan key:generate
Update the .env file with your database and WebSocket configurations:

## Step 5: Start the Reverb WebSocket Server
Install Reverb as a global dependency:
    npm install reverb -g
Start the WebSocket server:
    php artisan reverb:start

## Step 6: Start Laravel Development Server

php artisan serve

## Step 7: Run Vite Development Server
 npm run dev


Vite development server, Laravel development server and Reverb WebSocket Server theis three servers run separatly and using above command and Open the application in your browser at laravel port

