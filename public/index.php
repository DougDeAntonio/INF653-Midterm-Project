<?php
// Allow from any origin
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes API Documentation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            color: #333;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        code {
            background-color: #f5f5f5;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: monospace;
        }
        pre {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .endpoint {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .method {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: bold;
            margin-right: 10px;
        }
        .get { background-color: #61affe; color: white; }
        .post { background-color: #49cc90; color: white; }
        .put { background-color: #fca130; color: white; }
        .delete { background-color: #f93e3e; color: white; }
    </style>
</head>
<body>
    <h1>Quotes API Documentation</h1>
    
    <p>
        Welcome to the Quotes API. This RESTful API provides access to a database of quotes, authors, and categories.
        Below you'll find information on available endpoints and how to use them.
    </p>

    <h2>Base URL</h2>
    <p>
        <?php 
            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
            $base_url = $protocol . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
            echo $base_url; 
        ?>
    </p>

    <h2>Endpoints</h2>

    <h3>Quotes</h3>
    
    <div class="endpoint">
        <h4><span class="method get">GET</span> /api/quotes/</h4>
        <p>Returns all quotes with author and category information.</p>
        <h5>Response Example:</h5>
        <pre>
{
    "data": [
        {
            "id": "1",
            "quote": "The only way to do great work is to love what you do.",
            "author": "Steve Jobs",
            "category": "Inspirational",
            "author_id": "2",
            "category_id": "1"
        },
        {
            "id": "2",
            "quote": "Life is what happens when you're busy making other plans.",
            "author": "Albert Einstein",
            "category": "Wisdom",
            "author_id": "1",
            "category_id": "2"
        }
    ]
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method get">GET</span> /api/quotes/?id=1</h4>
        <p>Returns a single quote with the specified ID.</p>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "1",
    "quote": "The only way to do great work is to love what you do.",
    "author": "Steve Jobs",
    "category": "Inspirational",
    "author_id": "2",
    "category_id": "1"
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method post">POST</span> /api/quotes/</h4>
        <p>Creates a new quote.</p>
        <h5>Request Body:</h5>
        <pre>
{
    "quote": "Your time is limited, so don't waste it living someone else's life.",
    "author_id": 2,
    "category_id": 1
}
        </pre>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "5",
    "quote": "Your time is limited, so don't waste it living someone else's life.",
    "author_id": "2",
    "category_id": "1",
    "author": "Steve Jobs",
    "category": "Inspirational"
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method put">PUT</span> /api/quotes/</h4>
        <p>Updates an existing quote.</p>
        <h5>Request Body:</h5>
        <pre>
{
    "id": 1,
    "quote": "Updated quote text goes here.",
    "author_id": 2,
    "category_id": 1
}
        </pre>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "1",
    "quote": "Updated quote text goes here.",
    "author_id": "2",
    "category_id": "1",
    "author": "Steve Jobs",
    "category": "Inspirational"
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method delete">DELETE</span> /api/quotes/</h4>
        <p>Deletes the specified quote.</p>
        <h5>Request Body:</h5>
        <pre>
{
    "id": 5
}
        </pre>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "5"
}
        </pre>
    </div>

    <h3>Authors</h3>
    
    <div class="endpoint">
        <h4><span class="method get">GET</span> /api/authors/</h4>
        <p>Returns all authors.</p>
        <h5>Response Example:</h5>
        <pre>
{
    "data": [
        {
            "id": "1",
            "author": "Albert Einstein"
        },
        {
            "id": "2",
            "author": "Steve Jobs"
        },
        {
            "id": "3",
            "author": "Maya Angelou"
        }
    ]
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method get">GET</span> /api/authors/?id=2</h4>
        <p>Returns a single author with the specified ID.</p>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "2",
    "author": "Steve Jobs"
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method post">POST</span> /api/authors/</h4>
        <p>Creates a new author.</p>
        <h5>Request Body:</h5>
        <pre>
{
    "author": "Mark Twain"
}
        </pre>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "5",
    "author": "Mark Twain"
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method put">PUT</span> /api/authors/</h4>
        <p>Updates an existing author.</p>
        <h5>Request Body:</h5>
        <pre>
{
    "id": 5,
    "author": "Samuel Clemens"
}
        </pre>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "5",
    "author": "Samuel Clemens"
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method delete">DELETE</span> /api/authors/</h4>
        <p>Deletes the specified author.</p>
        <h5>Request Body:</h5>
        <pre>
{
    "id": 5
}
        </pre>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "5"
}
        </pre>
    </div>

    <h3>Categories</h3>
    
    <div class="endpoint">
        <h4><span class="method get">GET</span> /api/categories/</h4>
        <p>Returns all categories.</p>
        <h5>Response Example:</h5>
        <pre>
{
    "data": [
        {
            "id": "1",
            "category": "Inspirational"
        },
        {
            "id": "2",
            "category": "Wisdom"
        },
        {
            "id": "3",
            "category": "Humor"
        }
    ]
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method get">GET</span> /api/categories/?id=1</h4>
        <p>Returns a single category with the specified ID.</p>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "1",
    "category": "Inspirational"
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method post">POST</span> /api/categories/</h4>
        <p>Creates a new category.</p>
        <h5>Request Body:</h5>
        <pre>
{
    "category": "Motivation"
}
        </pre>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "5",
    "category": "Motivation"
}
        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method put">PUT</span> /api/categories/</h4>
        <p>Updates an existing category.</p>
        <h5>Request Body:</h5>
        <pre>
{
    "id": 5,
    "category": "Self-Improvement"
}
        </pre>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "5",
    "category": "Self-Improvement"
}

        </pre>
    </div>

    <div class="endpoint">
        <h4><span class="method delete">DELETE</span> /api/categories/</h4>
        <p>Deletes the specified category.</p>
        <h5>Request Body:</h5>
        <pre>
{
    "id": 5
}
        </pre>
        <h5>Response Example:</h5>
        <pre>
{
    "id": "5"
}
        </pre>
    </div>

    <h2>Error Responses</h2>
    <p>When an error occurs, the API will return an appropriate HTTP status code along with a message:</p>
    <pre>
{
    "message": "Error message description"
}
    </pre>

    <h2>Testing The API</h2>
    <p>
        You can test this API using tools like <a href="https://www.postman.com/" target="_blank">Postman</a> or 
        using curl commands from the terminal. Make sure to set the correct Content-Type header for POST and PUT requests:
    </p>
    <pre>Content-Type: application/json</pre>

    <h2>API Implementation</h2>
    <p>
        This API is implemented using PHP with a PDO database connection. It follows RESTful principles for creating, 
        reading, updating, and deleting resources. The code is organized in an object-oriented way, with separate 
        model classes for each resource type.
    </p>

    <hr>
    <p>
        <small>Created for the PHP OOP REST API Midterm Project. &copy; <?php echo date('Y'); ?></small>
    </p>
</body>
</html>
