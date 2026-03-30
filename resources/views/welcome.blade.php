<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        .card {
            background: #fff;
            padding: 15px;
            margin: 15px 0;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card h4 {
            margin: 5px 0;
            color: #555;
        }

        form {
            background: #fff;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input:focus {
            border-color: #007bff;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

    <h1>Holle Words</h1>

    <div class="container">

        <form action="{{ route('home.store') }}" method="POST">
            @csrf

            <input type="text" name="Name" placeholder="Enter Name">
            <input type="email" name="Email" placeholder="Enter Email">
            <input type="text" name="Subject" placeholder="Enter Subject">
            <input type="text" name="Message" placeholder="Enter Message">

            <button type="submit">Submit</button>
        </form>

        @foreach ($homedata as $item)
            <div class="card">
                <h4><strong>Name:</strong> {{ $item->Name }}</h4>
                <h4><strong>Email:</strong> {{ $item->Email }}</h4>
                <h4><strong>Subject:</strong> {{ $item->Subject }}</h4>
                <h4><strong>Message:</strong> {{ $item->Message }}</h4>
            </div>
        @endforeach



    </div>

</body>

</html>