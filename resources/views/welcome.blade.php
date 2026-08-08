<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Laravel Client-Server Project</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        main {
            width: min(90%, 560px);
            padding: 40px;
            text-align: center;
            background: #ffffff;
            border: 1px solid #dbe3ef;
            border-radius: 8px;
            box-shadow: 0 12px 30px rgba(31, 41, 55, 0.08);
        }

        h1 {
            margin: 0 0 16px;
            color: #ff2d20;
            font-size: 42px;
        }

        p {
            margin: 10px 0;
            font-size: 20px;
        }

        .details {
            margin-top: 28px;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <main>
        <h1>Hello Laravel!</h1>
            <p>Client-Server Technologies Laravel Setup Project</p>

        <div class="details">
            <p class="label">Developed by: Jessica</p>
            <p>Student Name : Jessica Pambago</p>
            <p>Course: BSIT</p>
            <p>Section 3B</p>
        </div>
    </main>
</body>
</html>
