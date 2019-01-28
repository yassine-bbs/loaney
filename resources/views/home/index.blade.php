@extends('layouts.main')

<body class="home_page">
<header class="home_header">
    <div>
        <div class="header_description">
            <p class="header_desc">#MicroCredit</p>
            <h1 class="header_title">La première plateforme de<br /> micro-crédit étudiante.</h1>
            <a class="main_btn main_btn_blue header_btn">C'est quoi ?</a>
        </div>
    </div>
</header>
<main class="home_main">
    <section class="home_section home_section_grey">
        <h2 class="main_title">Ils nous soutiennent</h2>
        <p class="home_section_desc">Acteurs incontournables de Loaney, nos partenaires nous permettent de vous offrir le service le plus fiable possible.</p>
        <div class="section_content_container">
            <img src="img/img_soutien_1.png" alt="">
            <img src="img/img_soutien_2.png" alt="">
            <img src="img/img_soutien_3.png" alt="">
        </div>
        <a class="main_btn main_btn_pink home_btn_partenaires">Partenaires</a>
    </section>
    <section class="home_section  home_section_white">
        <h2 class="main_title">Obtenez un mini-crédit rapidement</h2>
        <p class="home_section_desc">Loaney, c'est LA plateforme de micro-crédit étudiante. Obtenez ou prêter de l'argent anonymement entre étudiants.</p>
        <div class="section_content_container">
            <div class="section-concept-content">
                <img src="img/img_concept_1.png" alt="">
                <h3>Sécurisé</h3>
                <p>Toutes les transactions sont sécurisées</p>
            </div>
            <div class="section-concept-content">
                <img src="img/img_concept_2.png" alt="">
                <h3>Anonyme</h3>
                <p>Bénificiare ou donnateur,<br />nul n'a besoin de connaître votre identité</p>
            </div>
            <div class="section-concept-content">
                <img src="img/img_concept_3.png" alt="">
                <h3>Rapide</h3>
                <p>Obtenez une réponse et l'argent sur votre compte en 24h</p>
            </div>
        </div>
        <a class="main_btn main_btn_pink home_btn_concept">Concept</a>
    </section>
    <section class="home_section home_section_grey">
        <h2 class="main_title">Ce que nos utilisateurs pensent de nous</h2>
        <div class="section_content_container">
            <div class="home_section_user">
                <img class="section_user_img" src="img/img_user.png" alt="">
                <p class="section_user_desc">Loaney me permet d'aider les étudiants de mon université simplement !</p>
                <p class="section_user_name">J.A</p>
            </div>
            <div class="home_section_user">
                <img class="section_user_img" src="img/img_user.png" alt="">
                <p class="section_user_desc">Grace à Loaney, j'arrive enfin à finir le mois dans le vert.</p>
                <p class="section_user_name">M.O</p>
            </div>
            <div class="home_section_user">
                <img class="section_user_img" src="img/img_user.png" alt="">
                <p class="section_user_desc">Les imprevus sont prévisibles avec Loaney !</p>
                <p class="section_user_name">P.A</p>
            </div>
        </div>
    </section>
</main>
</body>

