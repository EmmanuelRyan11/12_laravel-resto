<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 1rem;
            padding-left: 1rem;
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border {
            border-width: 1px
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }
    </style>
</head>

<body>
    <div class="container bg-merah text-gray-700 border-gray-200 items-center">
        @yield('content')
    </div>
</body>

</html>