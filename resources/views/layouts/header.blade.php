<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* Consistent font across the page */
        }



        .alert {
            margin-top: 10px;
        }


        .navbar {
            background-color: #f8f9fa;
            /* Light gray background */
        }

        .container {
            max-width: 960px;
            /* Max width and centering */
            margin: 40px auto;
        }

        .settings-form {
            background-color: #fff;
            /* White background for form */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: #666;
            /* Grey text */
        }
    </style>
    <script>
        tinymce.init({
            selector: '#postContent',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
        });
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('createPost') }}">Create Post</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('settings') }}">Settings</a></li>
                </ul>
            </div>
        </div>
    </nav>
