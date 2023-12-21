@php
$theme_color = '#404042';
@endphp

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Theme Four</title>
    <style>
        @page { margin: 0;}
        body { margin: 0; }
        * { padding: 0; }
        table {
            border-collapse: collapse;
        }

        th, td {
            border: none !important;
        }
    </style>
</head>
<body>
<table style="width: 100%;border-collapse: collapse">
    <tbody>
        <tr>
            <td style="width: 35%; vertical-align: middle;">
                <div style="padding: 30px 0; text-align: center;">
                    <img src="./images/template-four/images/person.jpg" alt=""
                         style="height: 150px; width: 150px; border-radius: 50%;">
                </div>
            </td>
            <td style="width: 65%; vertical-align: middle;">
                <div style="padding: 30px 0 30px 30px; position: relative; top: 10px;">
                    <div style="font-size: 40px; line-height: 0; color: {{$theme_color}}">Jennifer</div>
                    <div style="font-size: 40px; font-weight: bold; margin-bottom: 5px; color: {{$theme_color}}">Anderson</div>
                    <div style="color: #404042">User experience designer</div>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 35%; vertical-align: top;">
                <div style="padding: 30px 0 43.2px 30px; background-color: {{$theme_color}}; border-radius: 0 40px 0 0;">
                    {{--contact--}}
                    <div style="color: #ffffff; margin-bottom: 40px;">
                        <div style="border-bottom: 2px solid #b4b4b6; margin-bottom: 15px;">
                            <div
                                style="height: 40px; width: 40px; text-align: center; border-radius: 50%; background-color: #ffffff;display: inline-block;">
                                <img src="./images/template-four/icons/phone-book.png" alt=""
                                     style="position:relative; top: 7px;">
                            </div>
                            <div
                                style="text-transform: uppercase; margin-left: 10px; font-weight: bold; display: inline-block;position:relative; top: -9px; font-size: 22px;">
                                contact
                            </div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Address</div>
                            <div>12th Avenue Street Australia 40000</div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Mobile:</div>
                            <div>02800200</div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Home:</div>
                            <div>02800200</div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Email:</div>
                            <div>janderson@gmail.com</div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Website:</div>
                            <div>janderson.com</div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Skype:</div>
                            <div>username</div>
                        </div>
                    </div>

                    {{--skills--}}
                    <div style="color: #ffffff; margin-bottom: 40px;">
                        <div style="border-bottom: 2px solid #b4b4b6; margin-bottom: 15px;">
                            <div
                                style="height: 40px; width: 40px; text-align: center; border-radius: 50%; background-color: #ffffff;display: inline-block;">
                                <img src="./images/template-four/icons/settings.png" alt=""
                                     style="position:relative; top: 7px;">
                            </div>
                            <div
                                style="text-transform: uppercase; margin-left: 10px; font-weight: bold; display: inline-block;position:relative; top: -9px; font-size: 22px;">
                                skills
                            </div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Communication</div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Creativity</div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Teamwork</div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Organization</div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Teamplayer</div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 15px;">
                            <div>Leadership</div>
                        </div>
                    </div>

                    {{--references--}}
                    <div style="color: #ffffff;">
                        <div style="border-bottom: 2px solid #b4b4b6; margin-bottom: 15px;">
                            <div
                                style="height: 40px; width: 40px; text-align: center; border-radius: 50%; background-color: #ffffff;display: inline-block;">
                                <img src="./images/template-four/icons/contract.png" alt=""
                                     style="position:relative; top: 7px;">
                            </div>
                            <div
                                style="text-transform: uppercase; margin-left: 10px; font-weight: bold; display: inline-block;position:relative; top: -9px; font-size: 22px;">
                                references
                            </div>
                        </div>
                        <div style="margin-bottom: 15px; font-size: 15px;">
                            <div style="font-size: 15px; font-weight: bold; margin-bottom: 5px;">William Kleiman</div>
                            <div>Director, Matrix Media Limited</div>
                            <div>Phone: +555 123 5566</div>
                            <div>Email: williamkleiman@gmail.com</div>
                        </div>
                        <div style="font-size: 15px;">
                            <div style="font-size: 15px; font-weight: bold; margin-bottom: 5px;">Jensen Smith</div>
                            <div>Web developer, Design mate LTD</div>
                            <div>Phone: +555 123 4455</div>
                            <div>Email: jensonsmith@gmail.com</div>
                        </div>
                    </div>
                </div>
            </td>
            <td style="width: 65%; vertical-align: top;">
                <div style="padding: 30px 0  20px 30px;">
                    {{--about--}}
                    <div style="margin-bottom: 55px;">
                        <div style="border-bottom: 2px solid #b4b4b6; margin-bottom: 20px;">
                            <div
                                style="height: 40px; width: 40px; text-align: center; border-radius: 50%; background-color: {{$theme_color}};display: inline-block;">
                                <img src="./images/template-four/icons/suitcase.png" alt=""
                                     style="position:relative; top: 7px;">
                            </div>
                            <div
                                style="text-transform: uppercase; margin-left: 10px; font-weight: bold; display: inline-block;position:relative; top: -9px; font-size: 22px; color: {{$theme_color}}">
                                About Me
                            </div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 13px;">
                            <div style="color: #adadad; padding-right: 30px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                asperiores dolor dolorem
                                dolorum exercitationem explicabo facere fugit id laborum minima, nihil quaerat quidem quis
                                quod temporibus voluptate voluptatem. Cumque, doloremque eligendi ipsa nam nisi non
                                quibusdam quis! A dicta ipsa provident ullam vero! Aliquam aliquid architecto assumenda
                                autem beatae blanditiis commodi consequuntur corporis dolor doloremque ducimus eos error et
                                eum excepturi fugiat in iste itaque iure labore magni maxime mollitia nemo nesciunt numquam
                                omnis perferendis quibusdam quis ratione repellat reprehenderit sapiente tempore temporibus,
                                veniam veritatis voluptas voluptatibus. Ea eum fugit iste rem ut? Consequuntur culpa.
                            </div>
                        </div>
                    </div>

                    {{--experiences--}}
                    <div style="margin-bottom: 50px;">
                        <div style="border-bottom: 2px solid #b4b4b6; margin-bottom: 20px;">
                            <div
                                style="height: 40px; width: 40px; text-align: center; border-radius: 50%; background-color: {{$theme_color}};display: inline-block;">
                                <img src="./images/template-four/icons/suitcase.png" alt=""
                                     style="position:relative; top: 7px;">
                            </div>
                            <div
                                style="text-transform: uppercase; margin-left: 10px; font-weight: bold; display: inline-block;position:relative; top: -9px; font-size: 22px;color: {{$theme_color}};">
                                Experiences
                            </div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 13px;">
                            <table style="width: 100%;">
                                <tbody>
                                <tr>
                                    <td style="width: 35%; color: #444444; vertical-align: top;">
                                        <div style="margin-bottom: 5px; font-weight: bold;font-size: 15px;">Graphic Designer</div>
                                        <div>2015 -2017</div>
                                    </td>
                                    <td style="width: 65%; vertical-align: top;padding-right: 30px;">
                                        <div style="margin-bottom: 5px; color: #444444; font-weight: bold;font-size: 15px;">Soft Design Studio</div>
                                        <div style="color: #adadad;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, inventore,
                                            nihil! Accusantium eos odit quasi velit. At aut, dolore doloremque.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div style="margin-bottom: 20px"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 35%; color: #444444; vertical-align: top;">
                                        <div style="font-size: 15px;margin-bottom: 5px; font-weight: bold;font-size: 15px;">Web Designer</div>
                                        <div>2015 -2017</div>
                                    </td>
                                    <td style="width: 65%; vertical-align: top;padding-right: 30px;">
                                        <div style="margin-bottom: 5px; color: #444444; font-weight: bold;font-size: 15px;">Web Tech Ltd</div>
                                        <div style="color: #adadad;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, inventore,
                                            nihil! Accusantium eos odit quasi velit. At aut, dolore doloremque.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div style="margin-bottom: 20px"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 35%; color: #444444; vertical-align: top;">
                                        <div style="margin-bottom: 5px; font-weight: bold; font-size: 15px;">Lead Web Designer</div>
                                        <div>2015 -2017</div>
                                    </td>
                                    <td style="width: 65%; vertical-align: top;padding-right: 30px;">
                                        <div style="margin-bottom: 5px; color: #444444; font-weight: bold; font-size: 15px;">Dev Creative Solution</div>
                                        <div style="color: #adadad;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, inventore,
                                            nihil! Accusantium eos odit quasi velit. At aut, dolore doloremque.
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{--education--}}
                    <div>
                        <div style="border-bottom: 2px solid #b4b4b6; margin-bottom: 20px;">
                            <div
                                style="height: 40px; width: 40px; text-align: center; border-radius: 50%; background-color: {{$theme_color}};display: inline-block;">
                                <img src="./images/template-four/icons/graduate.png" alt=""
                                     style="position:relative; top: 7px;">
                            </div>
                            <div
                                style="text-transform: uppercase; margin-left: 10px; font-weight: bold; display: inline-block;position:relative; top: -9px; font-size: 22px; color: {{$theme_color}}">
                                Education
                            </div>
                        </div>
                        <div style="margin-bottom: 10px; font-size: 13px;">
                            <table style="width: 100%;">
                                <tbody>
                                <tr>
                                    <td style="width: 35%; color: #444444; vertical-align: top;">
                                        <div style="margin-bottom: 5px; font-weight: bold; font-size: 15px;">University of Lorem</div>
                                        <div>2008 -2010</div>
                                    </td>
                                    <td style="width: 65%; vertical-align: top; padding-right: 30px;">
                                        <div style="margin-bottom: 5px; color: #444444; font-weight: bold; font-size: 15px;">Certificate of Web Training</div>
                                        <div style="color: #adadad;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, inventore,
                                            nihil! Accusantium eos odit quasi velit. At aut, dolore doloremque.
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div style="margin-bottom: 20px"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 35%; color: #444444; vertical-align: top;">
                                        <div style="margin-bottom: 5px; font-weight: bold; font-size: 15px;">University of Lorem</div>
                                        <div>2007 -2009</div>
                                    </td>
                                    <td style="width: 65%; vertical-align: top; padding-right: 30px;">
                                        <div style="margin-bottom: 5px; color: #444444; font-weight: bold; font-size: 15px;">Bachelor of Art Director</div>
                                        <div style="color: #adadad;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, inventore,
                                            nihil! Accusantium eos odit quasi velit. At aut, dolore doloremque.</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
