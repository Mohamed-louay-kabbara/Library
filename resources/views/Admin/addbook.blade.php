<!DOCTYPE html>
<html>

<head>
    <title>Add Book</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/Alaa.css">
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
            font-weight: 500;
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
            ;
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
        }

        button:hover {
            background: #09bcf3;
        }

        @media (min-width: 568px) {
            form {
                width: 60%;
            }

            p {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <form action="{{ route('savebook') }}" method="POST" class="decor" enctype="multipart/form-data">
        @csrf
        <div class="form-left-decoration"></div>
        <div class="form-right-decoration"></div>
        <div class="circle"></div>
        <div class="form-inner">
            <h1>Add Books</h1>
            <p> :Book Name
            <p>
                <input type="text" name="name">
            <p> :Author Name
            <p>
                <input type="text" name="author_name">
            <p> :Date Publication
            <p>
                <input type="date" name="history_bublish">
            <p> :Picture
            <p>
                <input type="file" name="picture">
                @error('picture')
                    <small>{{ $message }}</small>
                @enderror
            <p> :Nmuber
            <p>
                <input type="nmuber" name="count">
            <p>
            <p> :Price
                <input type="nmuber" name="price">
                <input type="hidden" name="cotigory_id" value="{{ $cotigory_id }}">
                <button type="submit">Addition</button>
        </div>
    </form>
</body>

</html>
