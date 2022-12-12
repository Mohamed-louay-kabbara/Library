<!DOCTYPE html>
<html>

<head>
    <title>Edit Category</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100vh;
            padding: 0;
            margin: 0;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
            direction: rtl;
        }

        input,
        textarea {
            outline: none;
            height: 70px
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: #97fbd1;
        }

        h1 {
            font-size: 30px;
            margin-top: 0;
            font-weight: 700;
            text-align: center;
        }

        form {
            position: relative;
            width: 80%;
            border-radius: 30px;
            background: #fff;
        }

        .form-left-decoration,
        .form-right-decoration {
            content: "";
            position: absolute;
            width: 50px;
            height: 20px;
            border-radius: 20px;
            background: #f6a4ec;
        }

        .form-left-decoration {
            bottom: 60px;
            left: -30px;
        }

        .form-right-decoration {
            top: 60px;
            right: -30px;
        }

        .form-left-decoration:before,
        .form-left-decoration:after,
        .form-right-decoration:before,
        .form-right-decoration:after {
            content: "";
            position: absolute;
            width: 50px;
            height: 20px;
            border-radius: 30px;
            background: #fff;
        }

        .form-left-decoration:before {
            top: -20px;
        }

        .form-left-decoration:after {
            top: 20px;
            left: 10px;
        }

        .form-right-decoration:before {
            top: -20px;
            right: 0;
        }

        .form-right-decoration:after {
            top: 20px;
            right: 10px;
        }

        .circle {
            position: absolute;
            bottom: 80px;
            left: -55px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #fff;
        }

        .form-inner {
            padding: 40px;
        }

        .form-inner input,
        .form-inner textarea,
        select {
            display: block;
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            background: #d0dfe8;
        }

        .form-inner textarea {

            resize: none;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border-radius: 20px;
            border: none;
            border-bottom: 4px solid #09bcf3;
            background: #09bcf3;
            font-size: 16px;
            font-weight: 400;
            color: #fff;
            height: 70px
        }

        button:hover {
            background: #09bcf3;
        }

        /* @media (min-width: 568px){ */
        form {
            width: 60%;
        }
    </style>
</head>

<body>
    <form action="{{ route('updatecatigory', $edit->id) }}" method="POST" class="decor">

        @csrf
        <div class="form-left-decoration"></div>
        <div class="form-right-decoration"></div>
        <div class="circle"></div>
        <div class="form-inner">
            <h1> :Category Name</h1>
            <input type="text" name="name" value="{{ $edit->name }}">
            <button type="submit">Update</button>
        </div>
    </form>
</body>

</html>
