<?php require_once('header.php'); ?>

<main>
    <h1>Contact</h1>
    <div class="container">
       <div class="text">
        <p>
            LevelUp Hardware
        </p>
        <p>
            Tel.:
        </p>
        <p>
            Adres:
        </p>
        <p>
            e-mail:
        </p>
       </div>
    </div>
    <form class="form" method="post">
        <label for="name">Naam:</label>
        <input type="text" id="name" placeholder="Vul hier je naam">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="e-mailadres">
        <label for="password">Password:</label>
        <input type="password" id="password">
    </form>
    <a id="nieuwsbrief" href="">Schrijf je in voor de nieuwsbrief!</a>
    <iframe 
        id="maps"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4955.932272916868!2d4.7778452395815405!3d51.60550906595162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c69f990d127d8b%3A0x1e825fb420ca913c!2sCurio%2C%20Terheijdenseweg%20350!5e0!3m2!1snl!2snl!4v1793725697784!5m2!1snl!2snl" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="strict-origin-when-cross-origin">
    </iframe>
</main>
<?php require_once('footer.php'); ?>