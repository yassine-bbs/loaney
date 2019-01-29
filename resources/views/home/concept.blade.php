@extends('layouts.main')

<body class="home_page">
<header class="home_header">
    <div class="header_description_page">
        <p class="header_desc">#Loaney</p>
        <h1 class="header_title">Notre concept.</h1>
        <div class="concept_description_header">
            <p>La vie étudiante est remplie de moments mémorables, de rires, de rencontres, mais aussi d’imprévus.<br/>La vie courante coûte de plus en plus cher et de nombreux étudiants se retrouvent souvent à finir le mois avec un budget très serré. Il n’est pas toujours facile d’admettre que l’on a besoin d’aide et la famille ne peut pas toujours aider. <br/>Seul face à cette situation les étudiants multiplient les petits boulots, mais dans la majorité des cas ce n’est pas suffisant. Bien souvent, c’est une petite somme qui manque pour finir le mois dans le vert. Et lorsqu’il y a un imprévu…<br/>Par exemple, un ordinateur qui tombe en panne est bien souvent synonyme de riz et pâtes pour le mois à venir.<br/> C’est pour toutes ces raisons que LOANEY existe. Une solution simple, rapide et anonyme pour permettre aux étudiants de s’entraider et de boucler leurs fins de mois !</p>
            <div><img src="img/img_concept.png" alt="" /></div>
        </div>
    </div>
</header>
<main class="home_main">
    <section class="section_option">
        <h2 class="main_title">Deux options</h2>
        <div class="option_container">
            <div class="option_content">
                <div class="option_title">Je prête...</div>
                <div class="option_description">
                    <p class="option_description_items">A une personne de ma communauté</p>
                    <p class="option_description_items">pour l’aider à arrondir ses fins de mois</p>
                    <p class="option_description_items">tout en touchant une commission</p>
                </div>
                <a class="main_btn main_btn_pink option_btn">Commencer</a>
            </div>
            <div class="option_content">
                <div class="option_title">J'emprunte...</div>
                <div class="option_description">
                    <p class="option_description_items">A une personne de ma communauté</p>
                    <p class="option_description_items">pour arrondir mes fins de mois</p>
                    <p class="option_description_items">anonymement</p>
                </div>
                <a class="main_btn main_btn_pink option_btn">Commencer</a>
            </div>
        </div>
    </section>
    <section class="section_qui_somme_nous">
        <h2 class="main_title">Qui sommes nous ?</h2>
        <p class="home_section_desc">Une équipe de quatre fous du volant bien décidés à aider leur prochain. Ces quatre mousquetaires ont décidés de monter Loaney après avoir constaté que certains de leurs camarades avaient du mal à boucler leur fin de mois.</p>
        <div class="qsn_container">
            <div class="qsn_user">
                <img class="qsn_user_img" src="img/ilana.png" />
                <div class="qsn_user_title">Ilana Bloch</div>
                <div class="qsn_user_desc">Web Marketeur</div>
            </div>
            <div class="qsn_user">
                <img class="qsn_user_img" src="img/david.png" />
                <div class="qsn_user_title">David Regnault</div>
                <div class="qsn_user_desc">Web Designer</div>
            </div>
            <div class="qsn_user">
                <img class="qsn_user_img" src="img/benjamin.png" />
                <div class="qsn_user_title">Benjamin Kissous</div>
                <div class="qsn_user_desc">Web Designer</div>
            </div>
            <div class="qsn_user">
                <img class="qsn_user_img" src="img/yassine.png" />
                <div class="qsn_user_title">Yassine Baba-Slimane</div>
                <div class="qsn_user_desc">Web Developper</div>
            </div>
        </div>
    </section>
</main>
</body>
</html>
