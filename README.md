# Bagisto Custom Reactive Package

![Bagisto Logo](https://bagisto.com/wp-content/themes/bagisto/images/logo.png)

Welcome to the **Bagisto Custom Reactive Package** repository! This repository contains a [Bagisto](https://bagisto.com) project that give a reactive shop view with cart.

## Table of Contents

- [About](#about)
- [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)


## About

[Provide a brief description of your project. What does it do? Why was it created?]

## Getting Started

### Prerequisites

Before you begin, make sure you have the following software installed:

- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/) (Recommended version: 7.3 or higher)
- [Node.js](https://nodejs.org/) (Recommended version: 14.x or higher)
- [NPM](https://www.npmjs.com/) (Comes with Node.js)
- [Git](https://git-scm.com/)
### Installation

1. Step-by-step instructions to install and set up your project.

Bagisto is an open-source e-commerce platform built on top of Laravel. This guide will walk you through the process of installing Bagisto on your local machine for development purposes.



## Installation Steps

1. **Clone the Bagisto Repository**

   ```bash
   git clone https://github.com/bagisto/bagisto.git

2. Configuration steps required.

    cd bagisto  
    composer install  
    cp .env.example .env  
    cp .env.example .env  
    php artisan key:generate  
  #### Configure Database Settings
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password

continual with Bagisto [documentation](https://devdocs.bagisto.com/1.5.x/prologue/)
