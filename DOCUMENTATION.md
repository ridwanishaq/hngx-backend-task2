# backend-stage-two-task

The application serves as an API for managing information about persons. It exposes several endpoints to perform CRUD operations on the data. The supported endpoints are as follows:

## Create: 
To add a new person to the database. This is achieved by sending a **POST** request to the (https://hngx-backend.lgcinsuranceportal.com/index.php/api) endpoint with JSON data containing the person's name, age, and email.

> POST https://hngx-backend.lgcinsuranceportal.com/index.php/api <br>
Content-Type: application/json
{
    "name":"Rilwanu Isyaku",
    "age":"18",
    "email":"rilwanu@engineer.com"
}

### Response:
>{ <br>
    "message": "Person added successfully" <br>
} <br>

## Read: 
To fetch details of a person. This can be done in two ways:

1. Sending a **GET** request to the (https://hngx-backend.lgcinsuranceportal.com/index.php/api) endpoint retrieves details of all persons in the database.
2. Sending a **GET** request to the (https://hngx-backend.lgcinsuranceportal.com/index.php/api/1) /:id endpoint (where :id is the specific person's ID) retrieves details of a particular person.

> POST https://hngx-backend.lgcinsuranceportal.com/index.php/api <br>
 Content-Type: application/json`

 ### Response:
 <pre>
[
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
]
 </pre>


## Update: 
To modify details of an existing person. This is accomplished by sending a **PUT** request to the (https://hngx-backend.lgcinsuranceportal.com/index.php/api/1) - :id endpoint (where :id is the specific person's ID) with JSON data containing the updated information.

> PUT https://hngx-backend.lgcinsuranceportal.com/index.php/api/1 <br>
Content-Type: application/json
<pre>
{
    "name": "Updated Ishaq Haruna",
    "age": "27",
    "email": "ishaqharuna@hngx.com"
}
</pre>

### Response:
<pre>
{
    "message": "Person updated successfully"
}
</pre>

## Delete: 
To remove a person from the database. A **DELETE** request to the (https://hngx-backend.lgcinsuranceportal.com/index.php/api/1) - :id endpoint (where :id is the specific person's ID) deletes the corresponding person's record.

> DELETE https://hngx-backend.lgcinsuranceportal.com/index.php/api/1 <br>
 Content-Type: application/json
<br>

### Response:
<pre>
{
    "message": "Person deleted successfully"
}
</pre>


# Local Installation
### Step 1: Install XAMPP

If you haven't already, download and install XAMPP from the official website: [XAMPP Download](https://www.apachefriends.org/index.html).


## Step 2: Start XAMPP Services

- Launch XAMPP Control Panel (usually found in the XAMPP installation directory).
- Start the "Apache" and "MySQL" services by clicking the "Start" buttons next to them.


### Step 3: Create a Database

- Open a web browser and navigate to (http://localhost/phpmyadmin/).
- Click on "Databases" in the top menu.
- Enter a database name, such as "hngx_task2," and click "Create." This database will be used by your PHP project.


### Step 4: Create a Project Directory

- Create a directory in your XAMPP's "htdocs" folder where you will place your PHP project files. You can name it whatever you like; for example, **"backendtask."**


### Step 5: Place Your PHP Project Files

- Place your PHP project files, including the **index.php** file, inside the directory you created in Step 4. Your project files should be located at C:\xampp\htdocs\backendtask (or the equivalent on your system).


### Step 6: Configure Database Connection

- In your index.php file, you've specified database connection details at the beginning of the code. Ensure that these details match your XAMPP MySQL configuration. In most cases, the default XAMPP MySQL configuration uses:

>
Host: 'localhost'
Database name: 'hngx_task2'
User: 'root'
Password: '' (empty)

If you've changed any of these settings in XAMPP, update them in your PHP code accordingly.

### Step 7: Test Your API Using Postman

- Open Postman: If you don't have Postman installed, you can download it from the official website: [Postman Download](https://www.postman.com/downloads/).
- Create a New Request: 
    -- Launch Postman. 
    -- Click on the "New" button in the top-left corner to create a new request.
- Name Your Request:
    -- Give your request a name to identify it easily, such as "Create Person."
- Select the Request Type:
    -- Use the dropdown next to the request name to select the HTTP request type you want to test (e.g., POST, GET, PUT, DELETE).
- Enter the Request URL:
    -- In the URL field, enter the API endpoint URL. For example, if you want to test the "Create" operation, use (http://localhost/backendtask/index.php/api) for the URL.
- Add Request Body (For POST and PUT):
    - If you're testing a POST or PUT request, go to the "Body" tab and enter the JSON data in the request body. 
    For example:

    <pre>
    {
        "name": "Ishaq Haruna",
        "age": "24",
        "email": "ishaqharuna@hngx.com"
    }
    </pre>
- Send the Request:
    -- Click the "Send" button to send the request to the API.
- Repeat for Other Endpoints:
    -- Repeat these steps for other API endpoints you want to test (e.g., GET, PUT, DELETE) by creating new requests in Postman and changing the request type and endpoint URL accordingly.

### Step 9: Troubleshooting

If you encounter any issues, check the following:

- Ensure that XAMPP services (Apache and MySQL) are running.
- Verify the database connection details in index.php file.
- Check for any PHP syntax errors in index.php code.


# UML Diagram

![UML Task2](https://hngx-backend.lgcinsuranceportal.com/api_uml_digram.png)
<!-- 
<p>
<img src="https://hngx-backend.lgcinsuranceportal.com/api_uml_digram.png" width="100%" height="600px" />
</p> -->

