<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
   
      <!-- style -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f4f4f4;
            text-align: center;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 5px 0px;
        }
        header h1 {
            margin: 0;
        }
        nav {
            margin: 5px 0;
            text-align: left
        }
        nav a {
            display: inline-block;
            margin: 10px 20px;
            padding: 10px 20px;
            color: white;
            background-color: #0056b3;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            
        }
        nav a:hover {
            background-color: #003d80;
            
        }
        

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }


        .button-container {
            display: flex;
            justify-content: space-between;
        }
        
    
        .btn-validate {
            background-color: #0056b3;
            color: white;
        }
        .btn-validate:hover {
            background-color: #0056b3;
        }
        .btn-cancel {
            background-color: #dc3545;
            color: white;
        }
        .btn-cancel:hover {
            background-color: #c82333;
        }


        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 5px 0;
            margin-top: 20px;
        }

    </style>
</head>
<body>

       

    {{-- contenu du header des pages --}}
        @yield('contenu_header')
    {{-- fin du header --}}

    {{-- contenu du formulaire --}}
    @yield('contenu_form_signup')
    {{-- fin du formulaire --}}
    @yield('contenu_form_signin')
    
    

<footer>
    <p>&copy; 2025 . Tous droits réservés.</p>
</footer>