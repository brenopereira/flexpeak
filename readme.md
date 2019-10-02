## Project

- Stack
    - PHP
    - MySQL / PostgreSQL
    - Nginx
    - Docker
    - Apache

- Structure
    - <strong>App/Domains</strong>: Domains of application
    - <strong>App/Units</strong>: Units of application
    - <strong>App/Support</strong>: Support for application

- Domains: Responsible for connecting the database with the entity with the application and isolation of the business rule of the entire system.
- Units: The units are responsible for user requests, so she handles the route, calls a controller, and indicates which view will be returned to the client, considering calling repository contracts to call something from the database.
- Support: The support is intended to assist the application and can be extended, implemented or used directly in application units and domains.


Configure the .env file with info from user, password and database.

Start application with command: `php artisan serve`