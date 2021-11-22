# Docker Laravue - Admin Panel
---
## Technologies:

- Docker - Infrastructure
- Laravel (PHP) - Backend
- Vue - Front
- Typescript - Pattern for front
- Swagger - API Documentation and test
- MySQL - Database
---
## Container ports:
### Front: 8080:8080
### Back: 8000:8000
### Database: 3306:3306 / 33866:3386
---
## Useful commands:
## Startup containers
```
docker compose up -d --build
```
#### Ps: this command can take some minutes because it will dockering the project and install the related dependencies.

## Create tables, populate and create passport auth:
```
docker exec -it back bash create_tables.sh
```

## Generate and publish Swagger documentation
```
php artisan l5-swagger:generate
```

## Swagger endpoint:
### localhost:8000/api/documentation
<br />

### Ps: It can be modified on file: back\config\l5-swagger.php
---
# System overview:
## Roles: Admin, Editor, Viewer and custom.
### Admin: can do everything.
### Editor: only can edit and view.
### Viewer: only view.
### Custom: can have mixed permissions.
<br />

## Features:
### Sales Dashboard
### Users Panel
### Roles Panel
### Products Panel
### Orders Panel
<br />

# System screens:
<br />

## Sign in
<h1 align="center">
    <img alt="sign in screen" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/signin.PNG" /><br>
</h1>

## Sign up
<h1 align="center">
    <img alt="sign up screen" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/signup.PNG" /><br>
</h1>

## Swagger - Main Screen
<h1 align="center">
    <img alt="swagger screen" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/swagger_general.PNG" /><br>
</h1>

## Swagger - Simple Get Request
<h1 align="center">
    <img alt="Swagger - Simple Get Request" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/swagger_simple_get.PNG" /><br>
</h1>

## Swagger - Simple Post Request
<h1 align="center">
    <img alt="Swagger - Simple Get Request" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/swagger_simple_post.PNG" /><br>
</h1>

## Swagger - Schemas
<h1 align="center">
    <img alt="Swagger - Schemas" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/swagger_schemas.PNG" /><br>
</h1>

