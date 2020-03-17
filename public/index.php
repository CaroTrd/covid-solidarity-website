<?php
require_once __DIR__ . '/lib/I18N.php';
I18N::load();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= __("Covid-19 solidarity") ?></title>
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="apple-touch-icon" sizes="57x57" href="./apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:image:height" content="304">
    <meta property="og:image:width" content="580">
    <meta property="og:title" content="<?= __("Would you like to give your neighbour a helping hand?") ?>">
    <meta property="og:description"
          content="<?= __('Join the movement and propose to help your neighbour by grocery shopping for them to provide for their basic needs.') ?>">
    <meta property="og:url" content="http://www.covid-solidarity.org">
    <meta property="og:image" content="http://www.covid-solidarity.org/assets/img/og-image.jpg">

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-TB48ZGS');</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160690896-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());
      gtag('config', 'UA-160690896-1');
    </script>
</head>

<body itemscope itemtype="http://schema.org/WebPage">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TB48ZGS"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="app" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPageElement">
    <header class="app-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="./" data-aos="fade-right" data-aos-delay="200">
                    <img src="./assets/img/logo.svg" alt="covid-19 solidarity logo">
                </a>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= I18N::getCurrentLang() === 'fr' ? 'active' : '' ?>" data-aos="fade-left" data-aos-delay="200">
                        <a class="nav-link" href="./fr?force_locale=true">FR</a>
                    </li>
                    <li class="nav-item <?= I18N::getCurrentLang() === 'nl' ? 'active' : '' ?>" data-aos="fade-left" data-aos-delay="400">
                        <a class="nav-link" href="./nl?force_locale=true">NL</a>
                    </li>
                    <li class="nav-item <?= I18N::getCurrentLang() === 'en' ? 'active' : '' ?>" data-aos="fade-left" data-aos-delay="600">
                        <a class="nav-link" href="./?force_locale">EN</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="app-body">
        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col" data-aos="fade-right" data-aos-delay="400">
                        <h1><?= __('Would you like to give your neighbour a helping hand?') ?></h1>
                        <p>
                            <?= __('Join us in the movement and propose to help your neighbours by grocery shopping for
                            their basic needs') ?>
                        </p>
                        <a class="btn btn-success btn-mobile-block" href="#help">
                            <?= __('I want to help') ?></a>
                        <a class="btn btn-help btn-mobile-block" href="#need-help"><?= __('Need help? Click here') ?></a>
                    </div>
                    <div class="col d-none d-lg-block">
                        <img src="./assets/img/header-pic.png" alt="applicant opening the door">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 text-center" data-aos="fade-up" data-aos-delay="200">
                        <h2><?= __('Let’s spread solidarity, not the virus') ?></h2>
                        <p><?= __('In order to slow down the circulation of the virus, the government and the medical staff
                            strongly recommend the population to stay home isolated. How can we access basic needs
                            and feed ourselves if we’re stuck at home in isolation?') ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white" id="need-help">
            <div class="container">
                <div class="row">
                    <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                        <h2><?= __('How does it work?') ?></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center" data-aos="fade-up" data-aos-delay="400">
                        <img class="rounded" src="./assets/img/applicant.png" alt="applicant">
                        <h3 class="title-quote"><?= __('“I would like to get help”') ?></h3>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <p class="text-center"><img src="./assets/img/ico_print.svg" height="100px" . /></p>
                        <p><?= __('Print out your shopping list and ask your neighbour to do the shopping for you.') ?></p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <p class="text-center"><img src="./assets/img/ico_door.svg" height="100px" . /></p>
                        <p><?= __('Stick it to your door or put it in the hallway.') ?></p>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="900">
                        <p class="text-center"><img src="./assets/img/ico_thanks.svg" height="100px" . /></p>
                        <p><?= __('Wait for a helping neighbour to fetch the list. (S)He will contact you and deliver to you
                            as soon as possible.') ?></p>
                    </div>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-delay="600">
                    <a onclick="gtag()" class="btn btn-success btn-mobile-block" href="./files/EN.pdf" target="_blank"><?= __('Print out your
                        shopping list') ?></a>
                    <a class="btn btn-help btn-mobile-block"
                       href="https://docs.google.com/forms/d/e/1FAIpQLSftvX-pPQZePG8K46Npk8pBvUUP5Da7MP8CXPbtL-wAz0spcw/viewform"
                       target="_blank"><?= __('Find someone to help me') ?></a>
                </div>

                <div class="section-spacer"></div>

                <div class="row" id="help">
                    <div class="col text-center" data-aos="fade-up" data-aos-delay="300">
                        <img class="rounded" src="./assets/img/hero.png" alt="hero">
                        <h3 class="title-quote"><?= __('“I can help ”') ?></h3>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="500" style="margin-left: 50px;">
                        <ol class="list-instructions">
                            <li>
                                <a class="text-underline"
                                   href="https://docs.google.com/forms/d/e/1FAIpQLSftvX-pPQZePG8K46Npk8pBvUUP5Da7MP8CXPbtL-wAz0spcw/viewform"
                                   target="_blank"><u><b><?= __('Fill out this form') ?></b></u></a> 📝
                            </li>
                            <li>
                                <a class="text-underline" href="./files/EN.pdf" target="_blank"><u><b><?= __('Print out the
                                            template') ?></b></u></a> <?= __('“shopping list” in A4 format 🖨️') ?>
                            </li>
                            <li>
                                <?= __('Share it or place it in your neighbour’s mailbox 📬') ?>
                            </li>
                            <li>
                                <?= __('Go back home and enjoy a coffee ☕') ?>
                            </li>
                            <li>
                                <?= __('Take your neighbour’s filled in shopping list and tell him/her you’ll go shop for him 🚶') ?>
                            </li>
                            <li>
                                <?= __('Go to the store, try not to empty the shelves if you have what you need, be mindful to others. 📝') ?>
                            </li>
                            <li>
                                <?= __('Preferably use a shopping cart instead of a shopping basket, you create additional distance. 🛒') ?>
                            </li>
                            <li>
                                <?= __('Come alone. 🚶‍♂️') ?>
                            </li>
                            <li>
                                <?= __('Only touch products you are gonna buy. 🤚') ?>
                            </li>
                            <li>
                                <?= __('Pay electronically. 💳') ?>
                            </li>
                            <li>
                                <?= __('Go back to your neighbour’s home, put the groceries down in front of the door, and ring! 🎒') ?>
                            </li>
                            <li>
                                <?= __('<b>Mission accomplished, thank you very much for your help!</b> 🚀 💚') ?>
                            </li>
                            <li class="list-item-instagram">
                                <?= __('Now you can also share a picture on Facebook or Instagram with #covidsolidarity 📸') ?>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!--<section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Instagram feed</h2>

                    TODO
                </div>
            </div>
        </div>
    </section>-->

        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                        <h2><?= __('Rules to respect') ?></h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="400">
                        <ol>
                            <li><?= __('Wash your hands regularly or use a hand disinfectant after the delivery (this is for
                                both the receiver and the volunteer of the delivery)') ?></li>
                            <li><?= __('Keep a distance of 3 meters between the receiver and the volunteer. By all means,
                                avoid physical contact, practice social distancing with vulnerable people. Avoid
                                social contact as much as possible.') ?></li>
                            <li><?= __('Avoid touching door handles and other metallic objects during the delivery. When
                                contacting between the receiver and the volunteer, communicate by phone or through a
                                message application (WhatsApp or Messenger for example).') ?></li>
                            <li><?= __('Cover your mouth and nose with a tissue when you cough or sneeze or use the inside
                                of your elbow.') ?></li>
                            <li><?= __('Be careful with vulnerable groups i.e. Senior-aged individuals +65, diabetics,
                                people suffering from heart diseases, pulmonary insufficiency, renal failure, and
                                immunosuppressed patients and many others.') ?></li>
                            <li><?= __('If a volunteer is not delivering we recommend you stay home safe and avoid social
                                contact.') ?></li>
                        </ol>
                        <p><?= __('For more information visit our page: <a href="https://www.info-coronavirus.be/en/"
                                                                   target="_blank">https://www.info-coronavirus.be/en/</a>') ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                        <h2><?= __('Do you have any questions ? We’ve got the answers !') ?></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center" data-aos="fade-up" data-aos-delay="300">
                        <img class="rounded" src="./assets/img/hero.png" alt="hero">
                        <h3 class="title-quote"><?= __('“I would like to help”"') ?></h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <div class="card-deck">
                            <div class="card card-question" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-body">
                                    <h4 class="card-title"><?= __('Will I get paid to help my neighbour?') ?></h4>
                                    <p class="card-text"><?= __('No, we are acting strictly on a voluntary basis.
                                        But of course your neighbour is free to decide how (s)he would like to thank
                                        you.') ?>
                                    </p>
                                </div>
                            </div>

                            <div class="w-100 d-none d-sm-block d-md-block d-lg-none mb-4"></div>

                            <div class="card card-question" data-aos="fade-up" data-aos-delay="400">
                                <div class="card-body">
                                    <h4 class="card-title"><?= __('I don’t want to pay the money upfront') ?></h4>
                                    <p class="card-text">
                                        <?= __('This is a condition you need to fill in order to help your neighbour. Not to
                                        make it too expensive, we advise you to only provide for basic needs.') ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-deck">
                            <div class="card card-question" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-body">
                                    <h4 class="card-title"><?= __('How to hand over groceries to someone inside a building?') ?>
                                    </h4>
                                    <p class="card-text">
                                        <?= __('You just have to make contact with the person you want to do the shopping
                                        for, and tell him at what time you will put the groceries in front of his
                                        door. Don’t forget rules for proper hygiene.') ?>
                                    </p>
                                </div>
                            </div>

                            <div class="w-100 d-none d-sm-block d-md-block d-lg-none mb-4"></div>

                            <div class="card card-question" data-aos="fade-up" data-aos-delay="400">
                                <div class="card-body">
                                    <h4 class="card-title"><?= __('How will I get refunded?') ?></h4>
                                    <p class="card-text">
                                        <?= __('It’s very simple ! The only thing you have to do is to write down your bank
                                        account number on the shopping list that you will give back to your
                                        neighbour. Your neighbour will pay you back as soon as possible.') ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="section-spacer"></div>

                <div class="row">
                    <div class="col text-center" data-aos="fade-up" data-aos-delay="300">
                        <img class="rounded" src="./assets/img/applicant.png" alt="applicant">
                        <h3 class="title-quote"><?= __('“I would like to get help”') ?></h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <div class="card-deck">
                            <div class="card card-question" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-body">
                                    <h4 class="card-title"><?= __('Can I contact the person who helped me again in the
                                        future?') ?>
                                    </h4>
                                    <p class="card-text">
                                        <?= __('Of course ! The goal is that the two of you can meet in order to create a
                                        relationship of trust. Nevertheless, do not forget the rules of hygiene in
                                        order to stay safe.') ?>
                                    </p>
                                </div>
                            </div>

                            <div class="w-100 d-none d-sm-block d-md-block d-lg-none mb-4"></div>

                            <div class="card card-question" data-aos="fade-up" data-aos-delay="400">
                                <div class="card-body">
                                    <h4 class="card-title"><?= __('How to know who is shopping for me?') ?></h4>
                                    <p class="card-text">
                                        <?= __('When your helper takes your shopping list, he will contact you on your phone
                                        number to inform you that (s)he is on her/his way.') ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-deck">
                            <div class="card card-question" data-aos="fade-up" data-aos-delay="200">
                                <div class="card-body">
                                    <h4 class="card-title"><?= __('I am not able to easily send money') ?></h4>
                                    <p class="card-text">
                                        <?= __('You can ask a friend or a family member to help you pay back the person who
                                        did the shopping for you or download a payment application on your mobile
                                        phone. The best is to ask for help.') ?>
                                    </p>
                                </div>
                            </div>

                            <div class="w-100 d-none d-sm-block d-md-block d-lg-none mb-4"></div>

                            <div class="card card-question" data-aos="fade-up" data-aos-delay="400">
                                <div class="card-body">
                                    <h4 class="card-title"><?= __('What is the maximum amount that I can order for?') ?></h4>
                                    <p class="card-text">
                                        <?= __('You can order for as much as you’d like, but we advise not to go over 25 to
                                        30 euros and focus on your basic needs. Also mind the weight of the shopping
                                        bag, the person who will deliver it to you will have to carry it.') ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                        <h2><?= __('With the help of') ?></h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="400">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img src="./assets/img/partners-carrefour.png" alt="Carrefour">
                            </li>
                            <li class="list-inline-item">
                                <img src="./assets/img/partners-delhaize.png" alt="Delhaize">
                            </li>
                            <li class="list-inline-item">
                                <img src="./assets/img/partners-mestdagh.png" alt="Mestdagh">
                            </li>
                            <li class="list-inline-item">
                                <img src="./assets/img/partners-mm.png" alt="Medi Market">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                        <h2><?= __('A 100% voluntary initiative') ?></h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="400">
                        <p>
                            <?= __('We were touched by the way the Covid-19 crisis turned out to affect our community. This
                            epidemic forced us to find pragmatic solutions to bring help to those in need. We
                            decided to serve the population through collective intelligence.') ?>

                        </p>

                        <p>
                            <?= __('A non-profit citizen movement created online by a group of entrepreneurs and students
                            from the BeTech Community who wanted to create a positive social impact .') ?>
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="400">
                        <ul class="list-team">
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="100">
                                <img class="rounded" src="./assets/img/team_1.png" alt="Olivier R. Rousseaux"
                                     title="Olivier R. Rousseaux">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="200">
                                <img class="rounded" src="./assets/img/team_2.png" alt="Michel Pierret"
                                     title="Michel Pierret">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="300">
                                <img class="rounded" src="./assets/img/team_3.png" alt="Adrien Duchateau"
                                     title="Adrien Duchateau">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="400">
                                <img class="rounded" src="./assets/img/team_4.png" alt="Maxim Berge"
                                     title="Maxim Berge">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="500">
                                <img class="rounded" src="./assets/img/team_5.png" alt="Carolina Tirado"
                                     title="Carolina Tirado">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="600">
                                <img class="rounded" src="./assets/img/team_6.png" alt="Stijn Verlinden"
                                     title="Stijn Verlinden">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="700">
                                <img class="rounded" src="./assets/img/team_7.png" alt="Léon Lamotte"
                                     title="Léon Lamotte">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="800">
                                <img class="rounded" src="./assets/img/team_8.png" alt="Georges-Alexandre Hanin"
                                     title="Georges-Alexandre Hanin">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="900">
                                <img class="rounded" src="./assets/img/team_9.png" alt="Louis-Philippe Loncke"
                                     title="Louis-Philippe Loncke">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="1000">
                                <img class="rounded" src="./assets/img/team_10.png" alt="Dan Sum" title="Dan Sum">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="1100">
                                <img class="rounded" src="./assets/img/team_11.png" alt="Quentin Petit"
                                     title="Quentin Petit">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="1200">
                                <img class="rounded" src="./assets/img/team_12.png" alt="Melvyn Hills"
                                     title="Melvyn Hills">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="1300">
                                <img class="rounded" src="./assets/img/team_13.png" alt="Gaylord roukine"
                                     title="Gaylord roukine">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="1400">
                                <img class="rounded" src="./assets/img/team_14.png" alt="Louis Driegelinck"
                                     title="Louis Driegelinck">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="1500">
                                <img class="rounded" src="./assets/img/team_15.png" alt="Jonathan Schockaert"
                                     title="Jonathan Schockaert">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="1600">
                                <img class="rounded" src="./assets/img/team_16.png" alt="Stéphan Zych"
                                     title="Stéphan Zych">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="1700">
                                <img class="rounded" src="./assets/img/team_17.png" alt="Edouard Jadot"
                                     title="Edouard Jadot">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="1800">
                                <img class="rounded" src="./assets/img/team_18.png" alt="Ines Bensusan"
                                     title="Ines Bensusan">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="1900">
                                <img class="rounded" src="./assets/img/team_19.png" alt="Nicolas Frenay"
                                     title="Nicolas Frenay">
                            </li>
                            <li class="list-inline-item" data-aos="fade-up" data-aos-delay="2000">
                                <img class="rounded" src="./assets/img/team_20.png" alt="Jose Zurstrassen"
                                     title="Jose Zurstrassen">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="app-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
        <div class="container">
            <div class="row">
                <div class="col text-center" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        <?= __('❤️ Made with love to beat Covid-19') ?>
                    </p>

                    <p>
                        <?= __('Contact') ?> - <a href="mailto:info@covid-solidarity.org">info@covid-solidarity.org</a> <br>
                        <a class="link-facebook" href="https://www.facebook.com/covidsolidarity/"
                           target="_blank"><?= __('Join the movement on Facebook') ?></a> - <a class="link-facebook"
                                                                                  class="link-facebook" href="https://www.instagram.com/covid19.solidarity/">Instagram</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="./assets/js/app.js"></script>
</body>