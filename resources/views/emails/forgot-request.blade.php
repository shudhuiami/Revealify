<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box; font-family: 'Lato', sans-serif;">

    <div style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
        <div style="max-width: 650px; height: auto; padding: 40px;">
            <div style="width: 100%; height: auto; text-align: center;">
                <img src="{{asset('./images/global/logo-name.svg')}}" style="width: 200px; height: auto;" alt="logo.svg">
            </div>
            <br><br>
            <div style="font-weight: bold; font-size: 23px;">Reset your password</div>
            <br><br>
            <div>
                you've requested a link to change your password. In order to reset your password,
                click the button below.
            </div>
            <br><br>
            <div style="font-weight: bold; text-align: center;">
                <a href="{{route('reset',['token' => $user->reset_code])}}" style="text-decoration: none; color: #ffffff; background-color: #000000; display: inline-block; padding: 12px 20px; border-radius: 5px;">
                    Change Password
                </a>
            </div>
            <br><br>
            <div>
                if you didn't request this, please ignore this email. Your password won't change until you access the
                link above and create a new one.
            </div>
            <br><br>
            <div style="width: 100%; height: auto; text-align: center; opacity: 0.5;">
                <img src="{{asset('/images/global/logo-name.svg')}}" style="width: 200px; height: auto;" alt="logo.svg">
            </div>
            <br><br>
            <div style="font-weight: normal; font-size: 16px; text-align: center;">
                The world's largest, top-rated booking platform form beauty and wellness, trusted by millions worldwide. unlimited possibilities, subscription-free
            </div>
            <div style="display: flex; justify-content: space-around; align-items: center;">
                <a href="javascript:void(0)" style="margin: 30px 0;">
                    <img src="{{asset('/images/email/facebook.svg')}}" style="width: 30px; height: 30px;" alt="facebook.svg">
                </a>
                <a href="javascript:void(0)" style="margin: 30px 0;">
                    <img src="{{asset('/images/email/instagram.svg')}}" style="width: 30px; height: 30px;" alt="instagram.svg">
                </a>
                <a href="javascript:void(0)" style="margin: 30px 0;">
                    <img src="{{asset('/images/email/linkedin.svg')}}" style="width: 30px; height: 30px;" alt="linkedin.svg">
                </a>
            </div>
            <hr>
            <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin: 20px 0;">
                <div style="padding: 10px 0;">
                    Top rated 5/5
                </div>
                <div style="display: flex; align-items: center; padding: 10px 0">
                    <img src="{{asset('/images/email/star.svg')}}" style="width: 30px; height: 30px;" alt="star.svg">
                    <img src="{{asset('/images/email/star.svg')}}" style="width: 30px; height: 30px;" alt="star.svg">
                    <img src="{{asset('/images/email/star.svg')}}" style="width: 30px; height: 30px;" alt="star.svg">
                    <img src="{{asset('/images/email/star.svg')}}" style="width: 30px; height: 30px;" alt="star.svg">
                    <img src="{{asset('/images/email/star.svg')}}" style="width: 30px; height: 30px;" alt="star.svg">
                </div>
            </div>
            <div style="width: 100%; height: auto; text-align: center;">
                <img src="{{asset('/images/global/logo.svg')}}" style="width: 200px; height: auto;" alt="logo.svg">
            </div>
            <br><br>
            <div style="text-align: center">
                <div style="color: #6c757d;">
                    @2023 Barberly
                    <br><br>
                        10 York Road, London, United Kingdom
                    <br><br>
                        You're receiving this email as you created an account with Barberly
                    <br><br>
                    <div style="text-align: center;">
                        <a href="localhost:8000/auth/email-verification" style="text-decoration: none; color: #4AC1C0; font-weight: bold;">
                            click here
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
