<div class="top-header" id="top-header">
    <div class="header-buttons">
        <div class="header-button" onclick="login()">LogIn</div>
        <div class="login-drop" id="login-drop" style="display: none">
            <form class="login-form">
                <label for="loginUsername">Benutzername:</label>
                <input class="login-input" type="text" id="loginUsername">
                <label for="loginPassword">Passwort:</label>
                <input class ="login-input" type="password" id="loginPassword"><br>
                <button class="login-button" type="submit">Login</button>
            </form>
        </div>
        <div class="header-button">Register</div>
    </div>
</div>

<div class="logo">
    <img id="myconLogo" src="<?=ROOT.'assets/images/mycon.png'?>">
</div>

<div class = "content">

    <div class="nav">
       <a href="<?=$_SERVER['SCRIPT_NAME']?>/?p=home"><div class="nav-button">Home</div></a>
        <div class="nav-button">Conventions</div>
        <div class="nav-button">Profile</div>
        <div class="nav-button">Dokumentation</div>
    </div>

    <img src="<?=ROOT.'assets/images/convention-3.png" class="convention-picture'?>">

    <div class="convention-text">
        <h2>Convention Text</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Nulla varius suscipit odio, at pharetra metus feugiat nec.
            Duis ullamcorper risus convallis nisi ullamcorper mattis. Nunc eget tincidunt eros.
            Suspendisse eget dictum tellus, nec condimentum enim. Praesent ultricies condimentum elit,
            eget dapibus ante convallis nec. Vestibulum sollicitudin magna volutpat tellus blandit tempor
            eu a nulla. Donec id hendrerit erat. Nunc sem sem, pulvinar sed dictum et, pellentesque eu
            libero. Nam aliquet ac nulla at mollis. Nullam interdum, ex a scelerisque cursus, justo
            ligula scelerisque justo, vitae dignissim justo lectus sed eros. Nulla a ex vulputate,
            ullamcorper ipsum non, tempor magna. Etiam ultricies urna sed lacus suscipit blandit.
            Nullam fermentum pulvinar ante at bibendum.
        </p>

        <div class="convention-button">Direkt zur Convention</div>

        <div class="offer">
            Nichts gefunden? <div class="offer-button">Zur Übersicht</div>
        </div>
    </div>

    <?
        echo sqlGet($DB,"userName","accounts","accountID=1");
        if( comparePassword($DB,"Wfuhvy65", "ecb3cbw1rwb1lg") == true){
            echo "true";
        }
     ?>


</div>

<div class="footer">
    <div class="imprint">
        Imprint
    </div>
</div>