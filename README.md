# LUXIMA API

===============

A brief description of the project.

## Table of Contents

#### 1. [Introduction](#introduction)

#### 2. [Features](#features)

#### 3. [Installation](#installation)

#### 4. [Usage](#usage)

#### 5. [Contributing](#contributing)

#### 6. [License](#license)

## Introduction

---

This project aims to provide a solution to [briefly describe the problem or opportunity]. It is designed to be [scalable, efficient, user-friendly, etc.].

### Description

This API is built using technologies/frameworks used, e.g., Laravel 11 , PHP 8.2, MySQL 8.0, and is designed to provide a robust and scalable solution for control and manage the data.

### Prerequisites

Ensure you have PHP, Composer, and Git installed on your system.
Familiarize yourself with Git, Laravel, Laravel Passport, Spatie Laravel Permission, and Unsplash.

-   Git
-   PHP 8.2
-   Composer
-   MySQL 8.0
-   Laravel 11
-   Laravel Passport
-   Spatie Laravel Permission
-   Unsplash

### Features

---

## Features

---

### List of Features

-   **User Management**: The Luxima API provides a robust user management system, allowing users to register, login, and manage their profiles.
-   **Role-Based Access Control**: The API uses Spatie Laravel Permission to implement role-based access control, ensuring that users can only access features and data that they are authorized to.
-   **Image Management**: The API integrates with Unsplash to provide a robust image management system, allowing users to upload, store, and retrieve images.
-   **API Documentation**: The API provides comprehensive documentation, making it easy for developers to integrate the API into their applications.
-   **Error Handling**: The API provides robust error handling, ensuring that errors are handled and reported in a consistent and user-friendly manner.
-   **Security**: The API uses Laravel Passport to implement OAuth 2.0 authentication, ensuring that user data is secure and protected.

## Installation

---

### Step-by-Step Guide

1. Clone the repository using the following command:
    ```bash
    git clone https://github.com/Siddiq-Achmad/Luxima-API
    ```
2. Navigate to the project directory:
    ```bash
    cd Luxima-API
    ```
3. Install the required packages using composer :
    ```bash
    composer install
    ```
4. Install the required packages using npm :
    ```bash
    npm install
    ```
5. Copy the `.env.example` file to create a new `.env` file:

    ```bash
    cp .env.example .env
    ```

6. Create a new database and update the .env file with the correct database credentials.
7. Run the following command to create the tables in the database:
    ```bash
    php artisan migrate
    ```
8. Run the following command to seed the database with some initial data:
    ```bash
    php artisan db:seed
    ```
9. Run the following command to start the application:
    ```bash
    php artisan serve
    ```

#### Accessing the Application

1.  Open a web browser and navigate to `http://localhost:8000` to access the application.
2.  You can now use the application by interacting with the API endpoints.

#### API Documentation

API documentation is available in the `docs` directory of the repository. You can access the API documentation by navigating to `http://127.0.0.1:8000/api/documentation` in your web browser.

#### API Endpoints

The API endpoints are as follows:

-   `http://127.0.0.1:8000/api/documentation` (API documentation)

Please refer to the API documentation for detailed information on available endpoints, request methods, and response formats.

#### Dependencies

The Luxima API relies on the following dependencies:

-   Laravel
-   Laravel Passport
-   Spatie Laravel Permission
-   Unsplash

### Usage

#### API Endpoints

The Luxima API provides a set of endpoints for interacting with the application. These endpoints are documented in the API documentation section.

#### Request and Response Formats

The API accepts JSON-formatted requests and returns JSON-formatted responses.

#### Authentication

The API uses Laravel Passport for authentication. You can obtain an access token by sending a POST request to the `/oauth/token` endpoint with your client credentials.

#### Error Handling

The API returns error responses in JSON format. The error response will contain a `message` field with a human-readable error message and a `code` field with a unique error code.

### Contributing

#### Reporting Issues

If you encounter any issues with the Luxima API, please report them on the GitHub issue tracker.

#### Pull Requests

If you'd like to contribute to the Luxima API, please submit a pull request with your changes. Make sure to follow the coding standards and include tests for your changes.

#### Code of Conduct

The Luxima API follows the Contributor Covenant Code of Conduct. Please ensure that your contributions adhere to this code of conduct.

### License

The Luxima API is licensed under the MIT License.

#### License Text

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
