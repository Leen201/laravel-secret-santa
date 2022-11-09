# Secret Santa

## Running the project

It's very simple to get the API up and running. First, create the database (and database
user if necessary) and add them to the `.env` file.

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then:

1. Install dependencies:
   `composer install`
2. Migrate database and generate users (100 users will be generated):
   `php artisan migrate --seed`
3. Run server:
   `php artisan serve`

Voilà! The API will be running on `localhost:8000`.

## Using the project

To see information about user and their receiver you simply have to send a valid GET request to the url shown below:

`http://localhost:8000//user?id={{id}}`

where {{id}} is id of the user (must be integer from 1 to 100).

### Response example

    {
        "sender": {
            "id": 10,
            "name": "Layne Berge"
        },
        "receiver": {
            "id": 51,
            "name": "Dale Bergnaum"
        }
    }
