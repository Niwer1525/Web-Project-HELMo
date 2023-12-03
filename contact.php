<html lang="fr">
    <?php
        $title = 'Equipe';
        include("inc/header.inc.php");
    ?>
    <body>
        <?php
            include("inc/nav.inc.php");
        ?>
        <main>
            <div class="usefulLinks">
                <h2>Nous contacter</h2><hr>
                <ul>
                    <li><i class="fa fa-map"></i><span> Adresse : </span>Rue de la Science, 23 - 1040 Bruxelles</li>
                    <li><i class="fa fa-phone"></i><span> Téléphone : </span>+32 2 650 22 11</li>
                    <li><i class="fa fa-envelope"></i><span> Email : </span>contact@lumieresavoire.be</li>
                </ul>
            </div>
            <hr>
            <form action="contact.php" method="post">
                <div>
                    <label for="mail">E-mail</label>
                    <input type="email" id="mail" name="user_mail" placeholder="john.california@gmail.com">
                </div>
                <div>
                    <label for="name">Nom Prénom</label>
                    <input type="text" id="name" name="user_name" placeholder="Jhon California">
                </div>
                <div>
                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="user_subject" placeholder="Votre sujet"></input>
                </div>
                <div>
                    <label for="msg">Message</label>
                    <textarea id="msg" name="user_message" placeholder="Votre message"></textarea>
                </div>
                <div class="button">
                    <button type="submit">Envoyer</button>
                </div>
        </main>
        <?php
            include("inc/footer.inc.php");
        ?>
    </body>
</html>