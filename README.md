# Trigone Tech

## Brief Description

This is a very tiny implementation of a RestAPI using Symfony 5. The main goal was to build a back-end API that would be used to manage leave (on holidays) requests from employees of a small business.

## Endpoints

PS: Before diving into the endpoints, we should know that this API is build for two kind of users:   
&nbsp;&nbsp;&nbsp;* Human Ressources (HR) : They (1) have access to all leave requests, (2) can accept or refuse a leave request   
&nbsp;&nbsp;&nbsp;* Employees : They can (1) ask for a vacation by specifying the period, (2) cancel a specific vacation (3) consult their list of incoming vactions.   

### Main
  
<div align='center'>

| Definition                          |                     Parameters                     |                  Description           |    Access Rights   |
|-------------------------------------|--------------------------------------------------|------------------------------------------|--------------------|
| GET /api/employee/{id} | id : The employee's ID you want information about |Returns a JsonResponse filled with all an employee leave requests and validated vacations | HR / Employee |
| POST /api/employee/{id}/holiday | id : The employee's ID in the database | Register a new leave request| Employee |
| PUT /api/employee/{eid}/holiday/{id} | eid : employee's ID <br> id : vaction's ID | Accept or refuse a leave request| HR |
| DELETE /api/employee/{eid}/holiday/{id} | eid : employee's ID <br> id : vaction's ID |Delete a leave request| Employee |

</div>

### Add-ons

<div align='center'>

| Definition                          |                     Parameters                   |                  Description             |
|-------------------------------------|--------------------------------------------------|------------------------------------------|
| GET / |  | Default debug homepage|
| GET /api/home   |  | Empty homepage **TODO** |
| GET /api/logout |  | Logout the user|
| GET /api/login |  | Render the login form|
| GET /api/register |  | Render the registration form|
| POST /api/new |  | Create a new user|



</div>
