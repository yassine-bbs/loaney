@extends('layouts.main')

<body class="home_page">
<header class="home_header_contact">

    <div class="header_description_contact">
        <p class="header_desc">#ContactezNous</p>
        <h1 class="header_title">Contact.</h1>
    </div>
</header>

<main class="home_main">
    <section class="contact_section">
        <div class="contact_container">
            <h2 class="main_title contact_title">Contactez-nous</h2>
            <div class="contact_content">
                <div class="champs_contact_double">
                    <input class="input_contact" type="text" name="fname" placeholder="Nom">
                    <input class="input_contact" type="text" name="fname" placeholder="Prénom">
                </div>
                <div class="champs_contact_double">
                    <input class="input_contact" type="mail" name="email" placeholder="Email">
                    <input class="input_contact" type="objet" name="objet" placeholder="Objet">
                </div>
                <input class="input_txt_contact" type="text" name="description" placeholder="Votre message">
                <button type="submit"><a class="main_btn main_btn_pink btn_contact">ENVOYER</a></button>
            </div>
        </div>
    </section>
</main>

</body>
</html>
