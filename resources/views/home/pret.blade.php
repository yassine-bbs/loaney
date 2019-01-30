@extends('layouts.main')

<body class="home_page">
<header class="home_header_pret">

    <div class="header_description_pret">
        <p class="header_desc">#PreterFacilement</p>
        <h1 class="header_title">Votre prêt à portée de main.</h1>
    </div>
</header>
<main class="home_main">
    <section class="preter_section">
        <h2 class="main_title">Prêter entre 30€ et 200€</h2>
        <p class="preter_desc">Entrer le montant que vous souhaitez preter et la durée puiss découvrez combien vous serez rembourser !(désolé ça ne marche pas encore mais on vous promet que ça va bientôt marcher *coeur sur vous*)</p>
        <div class="section_form_preter_preter">
            <div class="form_preter_container">
                <div class="form_preter_item_container">
                    <h5 class="form_preter_title">Je prête</h5>
                    <div class="form_preter_value_container">
                        <div class="form_preter_txt_container">
                            <p class="form_preter_txt_nb" contenteditable="true">100</p>
                            <p class="form_preter_txt_devise">€</p>
                        </div>
                        <div class="form_preter_btn_container ">
                            <div class="form_preter_btn btn_border">+</div>
                            <div class="form_preter_btn">-</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="main_btn main_btn_blue preter_btn">PRETER</a>
    </section>
    <section class="tarif_section">
        <h2 class="main_title">Nos tarifs</h2>
        <p class="preter_desc">Le taux de remboursement est défini en fonction de 3 critères : le montant souhaiter, la durée du prêt et si vous êtes un "bon" payeur. C'est simple, respecter les délais de payement que vous définissez et vous aurez un taux d'intérêt minimum!</p>
    </section>
</main>
</body>
</html>
