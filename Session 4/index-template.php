
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CashDiary - Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <nav class="nav">

            <div class="logo">
                <img src="img/logo.simple.png" alt="Logo CashDiary">
            </div>

            <div class="fonction">
                <a href="#">Fonctionnalité</a>
                <a href="#">Carnet</a>
                <a href="#">Comment ça marche</a>
            </div>

            <div class="action">
                <button>Commencer</button>
            </div>

        </nav>
    </header>

    <section>
        <div class="content">

            <div class="texte">
                <h1 class="titre">Notez vite, <br>comptez juste.</h1>

                <p>
                    Gardez un œil sur vos dépenses.
                    Votre budget, <br> sans prise de tête.
                </p>

                <button>Commencer gratuitement ➚</button>
            </div>

            <div>
                <img src="img/Tableau.png" alt="Tableau de bord CashDiary">
            </div>

        </div>
    </section>

    <section>

        <div class="title-cartes">
            <h1>Tout ce qu'il faut pour suivre votre <br> budget</h1>
            <span>Pas de tableau compliqué. Vous notez, Cash Diary calcule.</span>
        </div>

<div class="carte">

    <?php foreach ($cartes as $carte): ?>

        <div class="icones">

            <img 
                src="<?= htmlspecialchars($carte['image']) ?>" 
                alt="<?= htmlspecialchars($carte['alt']) ?>"
            >

            <h2><?= htmlspecialchars($carte['titre']) ?></h2>

            <p><?= htmlspecialchars($carte['description']) ?></p>

        </div>

    <?php endforeach; ?>

</div>

    </section>

    <section>

        <div class="etapes">

            <h1>Comment ça marche</h1>
            <span>Trois étapes, et votre carnet est prêt.</span>

            <div class="carres-container">

                <div class="carre">
                    <h2>Créez votre compte</h2>
                    <p>Inscrivez-vous gratuitement en moins d'une minute.</p>
                </div>

                <div class="carre">
                    <h2>Ajoutez vos opérations</h2>
                    <p>Chaque dépense ou revenu va directement dans votre carnet.</p>
                </div>

                <div class="carre">
                    <h2>Analysez et ajustez</h2>
                    <p>Consultation instantanée de vos statistiques et de votre solde.</p>
                </div>

            </div>

        </div>

    </section>

    <section class="container">

        <div class="connexion">
            <h1>Prêt à mieux gérer votre argent ?</h1>
            <span>Ouvrez votre carnet aujourd'hui.</span>
            <button>Créer mon compte</button>
        </div>

    </section>

    <footer class="fin">
        <h2>Cash Diary</h2>
        <span>Dépensez mieux, économisez plus.</span>
        <span>© 2026 Cash Diary.</span>
    </footer>

</body>
</html>
