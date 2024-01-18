<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revealify</title>

    @vite('resources/stylesheet/style.scss')
</head>
<body>
    <div class="vh-100 d-flex align-items-center justify-content-center download">
        <div class="container text-center">
            <div class="alert alert-success success-box">
                <img src="{{asset('/images/generate-form/excellence.png')}}" alt="">
                <div class="mt-5">
                    Your template has been created successfully. Please download it.
                </div>
            </div>
            <div class="buttons mt-5">
                <button class="btn btn-aqua-blue me-3">Download pdf</button>
                <button class="btn btn-aqua-blue">Save resume</button>
            </div>
        </div>
    </div>
</body>
</html>
