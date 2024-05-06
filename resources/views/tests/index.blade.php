<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .container {
            display: flex;
            justify-content: center;
            border-radius: 2px;
            flex-wrap: wrap; /* Allow items to wrap to the next line */
            gap: 10px; /* Add some gap between items */
        }

        .card {
            width: calc(33.33% - 20px); /* Each card takes up one-third of the container's width with some margin */
            margin: 10px; /* Add some margin around each card */
            background-color: #f0f0f0; /* Example background color */
            border: 1px solid #ccc; /* Example border */
            border-radius: 4px; /* Example border radius */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Example box shadow */
        }

        .card-header,
        .card-body {
            padding: 10px; /* Add some padding inside card header and body */
        }
    </style>
</head>

<body>
    <div class="container">
        @foreach($data as $value)
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    {{ $value->name}}
                </div>
            </div>
            <div class="card-body">
                {{ $value->email}}
                {{ $value->body}}
            </div>
            <div class="footer">
                <!-- Footer content -->
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>
