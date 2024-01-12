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

<div style="width: 100%; min-height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div style="max-width: 600px; height: auto; background-color: #ffffff; border-radius: 20px; margin: 10px; box-shadow: 0 0 5px 0 #888888;">
        <div style="padding: 25px;">
            <div style="width: 100%; height: auto; text-align: center;">
                <img src="{{asset('./images/global/logo-name.svg')}}" style="width: 200px; height: auto;" alt="logo">
            </div>
            <br>
            <br>
            <div style="font-weight: bold; font-size: 23px;">
                Hi {{$user->first_name}}, Please verify your email address
            </div>
            <br>
            <div style="font-weight: normal; font-size: 16px;">
                To keep your account secure we need to check that the email address

                <a  style="text-decoration: none; color: #4AC1C0;">{{$user->email}} </a>

                belongs to you. You'll only need to do this once.
            </div>
            <br><br>
            <div style="font-size:16px;font-weight: bold;">
                <h3>Click Here to verify your account</h3>
                <h3><a href="{{route('user.verify.account', [$user->verified_token])}}" style="font-size: 14px;line-break: anywhere;">{{route('user.verify.account', [$user->verified_token])}}</a></h3>
            </div>
            <br><br>
            <div style="font-weight: bold; font-size: 20px;">Why did i receive this?</div>
            <br>
            <div style="font-weight: normal; font-size: 16px;">
                Your email address was entered on  <span style="background-color: #FFFB73; margin: 0 5px"> {{env('APP_NAME')}} </span>
                 to be used for login access. If you have received this
                message by mistake simply contact us

                    <a href="javascript:void(0)" style="text-decoration: none; color: #4AC1C0;">click here</a>

                to let us know.
            </div>
        </div>
    </div>
</div>

</body>
</html>
