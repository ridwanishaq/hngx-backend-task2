# backend-stage-two-task

The application serves as an API for managing information about persons. It exposes several endpoints to perform CRUD operations on the data. The supported endpoints are as follows:

## Create: 
To add a new person to the database. This is achieved by sending a **POST** request to the (http://hngx-backend.lgcinsuranceportal.com/index.php/api) endpoint with JSON data containing the person's name, age, and email.

> POST http://hngx-backend.lgcinsuranceportal.com/index.php/api
Content-Type: application/json
{
    "name":"Rilwanu Isyaku",
    "age":"18",
    "email":"rilwanu@engineer.com"
}

### Response:
`{
    "message": "Person added successfully"
}
`

## Read: 
To fetch details of a person. This can be done in two ways:

    1. Sending a **GET** request to the (http://hngx-backend.lgcinsuranceportal.com/index.php/api) endpoint retrieves details of all persons in the database.
    2. Sending a **GET** request to the (http://hngx-backend.lgcinsuranceportal.com/index.php/api/1) /:id endpoint (where :id is the specific person's ID) retrieves details of a particular person.

`POST http://hngx-backend.lgcinsuranceportal.com/index.php/api
 Content-Type: application/json`

 ### Response:
 `[
    {
        "id": "1",
        "name": "Ishaq Haruna",
        "age": "27",
        "email": "ishaqharuna@hngx.com"
    },
    {
        "id": "2",
        "name": "Mark Essien",
        "age": "18",
        "email": "mark@hngx.com"
    },
    {
        "id": "3",
        "name": "John Tr Essien",
        "age": "34",
        "email": "jh@hngx.com"
    },
    {
        "id": "4",
        "name": "Glorio Blick",
        "age": "17",
        "email": "glorio@hngx.com"
    },
    {
        "id": "5",
        "name": "Hassan Usman",
        "age": "18",
        "email": "hassan@hngx.com"
    },
    {
        "id": "6",
        "name": "Adamu Umar Usman",
        "age": "28",
        "email": "adams@hngx.com"
    },
    {
        "id": "7",
        "name": "Tanko Lipson",
        "age": "16",
        "email": "tanko@hngx.com"
    },
    {
        "id": "8",
        "name": "Abubakar Faisal",
        "age": "28",
        "email": "abk@hngx.com"
    },
    {
        "id": "9",
        "name": "Rilwanu Isyaku",
        "age": "23",
        "email": "rilwanu@hngx.com"
    },
    {
        "id": "10",
        "name": "Ahmad Isyaku Ahmad",
        "age": "24",
        "email": "ahmad@hngx.com"
    },
    {
        "id": "11",
        "name": "Ali Yau",
        "age": "19",
        "email": "ali2@hngx.com"
    },
    {
        "id": "12",
        "name": "Garba Tanko",
        "age": "18",
        "email": "garba42@hngx.com"
    }
]`


## Update: 
To modify details of an existing person. This is accomplished by sending a **PUT** request to the (http://hngx-backend.lgcinsuranceportal.com/index.php/api/1) - :id endpoint (where :id is the specific person's ID) with JSON data containing the updated information.

`PUT http://hngx-backend.lgcinsuranceportal.com/index.php/api/1
Content-Type: application/json
{
    "name": "Updated Ishaq Haruna",
    "age": "27",
    "email": "ishaqharuna@hngx.com"
}`

### Response:
`{
    "message": "Person updated successfully"
}
`

## Delete: 
To remove a person from the database. A **DELETE** request to the (http://hngx-backend.lgcinsuranceportal.com/index.php/api/1) - :id endpoint (where :id is the specific person's ID) deletes the corresponding person's record.

`DELETE http://hngx-backend.lgcinsuranceportal.com/index.php/api/1
 Content-Type: application/json`

### Response:
`{
    "message": "Person deleted successfully"
}
`


# Local Installation




# UML Diagram

![UML Task2](https://github.com/ridwanishaq/hngx-backend-task2/assets/76391957/417e9914-4cf4-45fc-ba88-f244742afd4e)











