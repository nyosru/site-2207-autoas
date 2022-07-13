    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <!DOCTYPE html>
    <html lang="en">
        <head>

            <meta charset="UTF-8">
            <title>Магия в деталях</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="stylesheet" href="/vendor/didrive/base/design/design/font/iconsmind/style.css" />
            <link rel="stylesheet" href="/vendor/didrive/base/design/design/font/simple-line-icons/css/simple-line-icons.css" />

            <link rel="stylesheet" href="/vendor/didrive/base/design/design/css/vendor/bootstrap.min.css" />
            <link rel="stylesheet" href="/vendor/didrive/base/design/design/css/vendor/bootstrap-float-label.min.css" />
            <link rel="stylesheet" href="/vendor/didrive/base/design/design/css/main.css" />
            <link rel="stylesheet" type="text/css" href="/vendor/didrive/base/design/design/css/dore.light.blue.min.css">

                    <meta property="og:image" content="http://php-cat.com/sites/my2007phpcat/download/didrive-preview_for_fb.jpg"/>

        </head>

        <body class="background xshow-spinner">
            <div class="fixed-background"></div>
            <main>
                <div class="container">
                    <div class="row h-100">
                        <div class="col-12 col-md-10 mx-auto my-auto">
                            <div class="card auth-card">
                                <div class="position-relative image-side "  >

                                    <p class=" text-white h2" style="text-transform: uppercase; text-shadow: 0 0 5px black; ">Магия в&nbsp;деталях</p>

                                    <p class="white mb-0" style="text-shadow: 0 0 5px black;">
                                        Управляйте управляемым
                                                                        </p>
                                </div>
                                <div class="form-side">


                                    <center>



                                        <h6>Войти с помощью:</h6>
                                        <br/>

                                        <table><tr>

                                                                                            <td>
                                                    <div id="uLogin_didrive" data-ulogin="verify=1;display=panel;theme=classic;fields=first_name,last_name;providers=vkontakte,yandex,odnoklassniki,google,facebook;redirect_uri=%2F%2Favto-as.ru%2Fi.didrive.php;mobilebuttons=0;"></div>
                                                </td>
                                            </tr>
                                        </table>

                                        <br/>
                                        <br/>

                                        <h6 class="mb-4">или</h6>

                                        <form action="" method="post" >
                                            <label class="form-group has-float-label mb-4">
                                                <input class="form-control" type="text" name="login2" value="" required="" />
                                                <span>Логин</span>
                                            </label>

                                            <label class="form-group has-float-label mb-4">
                                                <input class="form-control" type="password" name="pass2" value=""  required="" />
                                                <span>Пароль</span>
                                            </label>

                                                                                    <button class="btn btn-primary btn-lg btn-shadow" type="submit" name="enter" value="Войти" >Войти</button>

                                        </form>

                                        <br/>
                                        <br/>
                                        <br/>

                                        <a href="http://php-cat.com" style="color:rgba(0,0,0,0.4);" target="_blank" >Создание сайта php-cat.com</a>

                                    </center>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </body>

        <script src="/vendor/didrive/base/design/design/js/vendor/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            $().ready(function () {
                // удаление загрузчика
                $('body').removeClass('show-spinner');
            });
            // document.write('<script src=' + '"//ulogin.ru/js/ulogin.' + 'js"><' + '/script>');
        </script>
        <script src="//ulogin.ru/js/ulogin.js"></script>

    </html>
