<div id="right">
    <div id="text_page"></div>
        <h1>Регистрация</h1>
        <form action='registration/registrationRun' method="POST">
                <div>
                    <div>
                        <label for="login">Ваше логин<sup>*</sup></label>
                        <input type="text" id="login" name="login"
                        placeholder="Логин" value="" required/>
                    </div>
                    <div>
                        <label for="password">Ваше пароль<sup>*</sup></label>
                        <input type="text" id="password" name="password"
                               placeholder="Пароль" value="" required/>
                    </div>
                    <div>
                        <label for="first_name">Ваше имя<sup>*</sup></label>
                        <input type="text" id="first_name" name="first_name"
                        placeholder="Имя" value="" required/>
                    </div>
                    <div>
                        <label for="last-name">Ваша фамилия<sup>*</sup></label>
                        <input type="text" id="last-name" name="last_name"
                               placeholder="Фамилия" value="" required/>
                    </div>
                    <div>
                        <label for="email">Email<sup>*</sup></label>
                        <input type="email" id="email" name="email"
                               placeholder="example@example.com" value="" required/>
                    </div>
                    <div>
                        <label for="phone">Телефон<sup>*</sup></label>
                        <input type="phone" id="phone" name="phone"
                               placeholder="0684141572" value="" />
                    </div>
                    <div>
                        <input type="submit" id="#" name="send_form"  value="Зарегистрироваться"/>
                    </div>
                </div>
                </form>

</div>
