@extends('layouts.main')

<body class="home_page">
<header class="home_header">
    <div class="header_description_page">
        <p class="header_desc">#MicroCredit</p>
        <h1 class="header_title">La première plateforme de<br /> micro-crédit étudiante.</h1>
        <div class="concept_description_header">
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non.</p>
            <div><img src="src/img/img_concept.png" alt="" /></div>
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
                    <p class="option_description_items">pour l’aider à arrondir ses fins de mois</p>
                    <p class="option_description_items">tout en touchant une commission</p>
                </div>
                <a class="main_btn main_btn_pink option_btn">Commencer</a>
            </div>
        </div>
    </section>
    <section class="section_qui_somme_nous">
        <h2 class="main_title">Qui sommes nous ?</h2>
        <p class="home_section_desc">Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <div class="qsn_container">
            <div class="qsn_user">
                <img class="qsn_user_img" href="src/img/ilana.png" />
                <div class="qsn_user_title">Ilana Bloch</div>
                <div class="qsn_user_desc">Web Marketeur</div>
            </div>
            <div class="qsn_user">
                <img class="qsn_user_img" href="src/img/david.png" />
                <div class="qsn_user_title">David Regnault</div>
                <div class="qsn_user_desc">Web Designer</div>
            </div>
            <div class="qsn_user">
                <img class="qsn_user_img" href="src/img/benjamin.png" />
                <div class="qsn_user_title">Benjamin Kissous</div>
                <div class="qsn_user_desc">Web Designer</div>
            </div>
            <div class="qsn_user">
                <img class="qsn_user_img" href="src/img/yassine.png" />
                <div class="qsn_user_title">Yassine Baba-Slimane</div>
                <div class="qsn_user_desc">Web Developper</div>
            </div>
        </div>
    </section>
</main>

</body>
</html>