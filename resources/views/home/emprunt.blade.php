@extends('layouts.main')

<body class="home_page">
<header class="home_header_emprunt">

    <div class="header_description_emprunt">
        <p class="header_desc">#EmprunterFacilement</p>
        <h1 class="header_title">Votre emprunt à portée <br />de main.</h1>
    </div>
</header>
<main class="home_main">
    <section class="emprunter_section">
        <h2 class="main_title">Empruntez entre 30€ et 200€</h2>
        <p class="emprunter_desc">Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <div class="section_form_emprunter">
            <div class="form_container">
                <div class="form_item_container">
                    <h5 class="form_title">J'emprunte</h5>
                    <div class="form_value_container">
                        <div class="form_txt_container">
                            <p class="form_txt_nb" contenteditable="true">100</p>
                            <p class="form_txt_devise">€</p>
                        </div>
                        <div class="form_btn_container ">
                            <div class="form_btn btn_border">+</div>
                            <div class="form_btn">-</div>
                        </div>
                    </div>
                </div>
                <div class="form_item_container">
                    <h5 class="form_title">Pendant</h5>
                    <div class="form_value_container">
                        <div class="form_txt_container">
                            <p class="form_txt_nb" contenteditable="true">3</p>
                            <p class="form_txt_devise">Semaines</p>
                        </div>
                        <div class="form_btn_container ">
                            <div class="form_btn btn_border">+</div>
                            <div class="form_btn">-</div>
                        </div>
                    </div>
                </div>

                <div class="form_item_container special_container_form">
                    <h5 class="form_title">Je rembourse</h5>
                    <div class="form_value_container">
                        <div class="form_txt_container">
                            <p class="form_txt_nb">100</p>
                            <p class="form_txt_devise">€/semaine</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="form_last_value_section">
                <h5 class="form_title">Vous souhaitez emprunter pour payer :</h5>
                <div class="last_value_container">
                    <select class="last_select">
                        <option value="">--Veuillez choisir une option--</option>
                        <option value="depenses professionnelles">Dépenses professionnelles</option>
                        <option value="cat">Cat</option>
                        <option value="hamster">Hamster</option>
                    </select>
                    <img></img>
                </div>
            </div>
        </div>
    </section>
    <section class="tarif_section">
        <h2 class="main_title">Nos tarifs</h2>
        <p class="emprunter_desc">Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula</p>
    </section>
</main>

</body>
</html>