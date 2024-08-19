<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            margin-top: 5%;
            background-image: url('https://cdn.wccftech.com/wp-content/uploads/2024/07/Netflix.jpg'); /* Replace with your image URL */
            background-size: cover; 
            background-position: center; 
            background-attachment: fixed; 
            color: #fff; 
        }
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px; 
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>
    
</body>
</html>
