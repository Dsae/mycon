<div id="top-header2">

    <div id="menu-button"
         onclick="togglePanel('menu-button','navigation-panel','165px')"
         onmouseover="brighten('menu-button')"
         onmouseleave="dim('menu-button')">
        <img src="./assets/images/menu_button.svg">
    </div>

    <div id="top-header-container">
        <div class="header-button" id="anmelden"
             onclick="togglePanel('anmelden','login-panel','140px')"
             onmouseover="brighten('anmelden')"
             onmouseleave="dim('anmelden')">
            Anmelden</div>
        <div class="header-button" id="registrieren"
             onclick="togglePanel('registrieren','register-panel','240px')"
             onmouseover="brighten('registrieren')"
             onmouseleave="dim('registrieren')">
            Registrieren</div>
    </div>

</div>

<div id="navigation-panel"></div>

<div id="login-panel">
    <form>
        <label for="loginUsername">Benutzername:</label><br>
        <input class="login-input" type="text" id="loginUsername"><br>
        <label for="loginPassword">Passwort:</label><br>
        <input class ="login-input" type="password" id="loginPassword"><br>
        <button class="panel-button" type="submit" id="login"
                onmouseover="brighten('login')"
                onmouseleave="dim('login')">
            Login</button>
    </form>
</div>

<div id="register-panel">
    <form>
        <label for="Feld1">Feld1:</label><br>
        <input class="login-input" type="text" id="Feld1"><br>
        <label for="Feld2">Feld2:</label><br>
        <input class="login-input" type="text" id="Feld2"><br>
        <label for="Feld3">Feld3:</label><br>
        <input class="login-input" type="text" id="Feld3"><br>
        <label for="Feld4">Feld4:</label><br>
        <input class="login-input" type="text" id="Feld4"><br>
        <button class="panel-button" type="submit" id="confirm"
                onmouseover="brighten('confirm')"
                onmouseleave="dim('confirm')">
            Bestätigen</button>
    </form>
</div>

<div id="header-banner">
    <img id="mycon-logo" src="./assets/images/mycon.png">
</div>