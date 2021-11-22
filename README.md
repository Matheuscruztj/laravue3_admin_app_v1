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

## Main Screen (Sales Dashboard) after logged in
<h1 align="center">
    <img alt="Main Screen (Sales Dashboard) after logged in" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/dashboard.PNG" /><br>
</h1>

## Main Screen (Sales Dashboard) after logged in
<h1 align="center">
    <img alt="Main Screen (Sales Dashboard) after logged in" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/dashboard.PNG" /><br>
</h1>

### Menu is customized by user permissions, using functions of User Class, there are options and actions that are only displayed to user, if their permissions are allowed on database ('view' and 'edit'). The edit permissions is about add, edit or delete a record.
<br>

<h1 align="center">
    <img alt="User class functions" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/user_class.PNG" /><br>
</h1>

## Users Panel
<h1 align="center">
    <img alt="Users Panel" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/users.PNG" /><br>
</h1>

## Register a new user (after click on 'Add' on Users Panel)
<h1 align="center">
    <img alt="Register a new user (after click on 'Add' on Users Panel)" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/add_user.PNG" /><br>
</h1>

## Edit an user 
<h1 align="center">
    <img alt="Edit an user" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/user_edit.PNG" /><br>
</h1>

## Roles Panel 
<h1 align="center">
    <img alt="Edit an user" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/roles.PNG" /><br>
</h1>

## Register a new role
<h1 align="center">
    <img alt="Register a new role" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/role_add.PNG" /><br>
</h1>

## Edit a role
<h1 align="center">
    <img alt="Edit a role" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/role_edit.PNG" /><br>
</h1>

## Products Panel
<h1 align="center">
    <img alt="Products Panel" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/products.PNG" /><br>
</h1>

## Register a new product
<h1 align="center">
    <img alt="Register a new product" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/product_add.PNG" /><br>
</h1>

## Edit a product
<h1 align="center">
    <img alt="Edit a product" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/product_edit.PNG" /><br>
</h1>

## Orders Panel
<h1 align="center">
    <img alt="Orders Panel" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/orders.PNG" /><br>
</h1>

## Products of order
<h1 align="center">
    <img alt="Products of order" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/order_products_view.PNG" /><br>
</h1>

## Exported CSV from Orders Panel
<h1 align="center">
    <img alt="Exported CSV from Orders Panel" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/exported_csv.PNG" /><br>
</h1>

## On the editor role, you can edit some features, but only on Roles Panel you can do nothing
<h1 align="center">
    <img alt="Editor Role" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/editor_role.PNG" /><br>
</h1>

## On the viewer role, you only can view features, an example on Products Panel, you can't edit or delete anything.
<h1 align="center">
    <img alt="Viewer Role" src="https://github.com/Matheuscruztj/laravue3_admin_app_v1/blob/main/images/view_role.PNG" /><br>
</h1>
