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

