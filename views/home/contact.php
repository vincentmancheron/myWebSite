<?php include(dirname(__FILE__).'/../../controllers/form-ctrl.php') ?>

<section id="contact" class="row">
    <h3>Contact</h3>
    <div class="col">
        <div class="row justify-content-around">
            <div class="col-12 col-md-6">
                <div class="row justify-content-center">
                    <p class="border col-8 col-md-8 col-lg-6">
                        <a href="tel:+3323232425">Tel:<br>
                            07.88.22.87.29<br><br>
                            <a href="mailto:vmancheron@yahoo.fr">Mail:<br>
                                vmancheron@yahoo.fr</a><br><br>
                            <a href="https://goo.gl/maps/GvfHcFbvjrcBQaz59" target="_blank">Ville:<br>
                                Amiens, France</a>
                    </p>
                </div>
                <div class="row justify-content-center mt-5 mb-0">
                    <a class="mx-2 my-2" href="" target="_blank">
                        <img src="/assets/img/linkedin.png" alt="Linkedin">
                    </a>
                    <a class="mx-2 my-2" href="https://github.com/vincentmancheron" target="_blank">
                        <img id="github" src="/assets/img/github.png" alt="GitHub">
                    </a>
                </div>
                <div class="row d-flex justify-content-center mt-0 mb-5">
                    <a class="mx-2 my-2" href="https://www.facebook.com/vincent.mancheron80/" target="_blank">
                        <img src="/assets/img/fb.png" alt="Facebook">
                    </a>
                    <a class="mx-2 my-2" href="https://www.instagram.com/oxwigzoo/" target="_blank">
                        <img src="/assets/img/logoig.png" alt="Instagram">
                    </a>
                </div>
            </div>

            <form id="contactForm" class="blocked col-12 col-md-6" action="mail.php"
                method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6 mx-3 mx-md-0">
                        <label for="lastname">Nom</label>
                        <input required type="text" class="form-control" id="lastname" name="lastname"
                            pattern="<?=regAlpha?>" title="N'utilisez que des lettres." minlength="2" maxlength="50" value="<?= $lastname ?? '' ?>"
                            placeholder="Mancheron">
                        <div class="error"><?= $error['empty']['lastname'] ?? '' ?></div>
                    </div>
                    <div class="form-group col-md-6 mx-3 mx-md-0">
                        <label for="firstname">Prénom</label>
                        <input required type="text" class="form-control" id="firstname" name="firstname"
                            pattern="<?=regAlpha?>" title="N'utilisez que des lettres." minlength="2" maxlength="50" value="<?= $firstname ?? '' ?>"
                            placeholder="Vincent">
                        <div class="error"><?= $error['empty']['firstname'] ?? '' ?></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mx-3 mx-md-0">
                        <label for="email">Email</label>
                        <input required type="email" class="form-control" id="email" name="email"
                            value="<?= $email ?? '' ?>" placeholder="vmancheron@yahoo.fr">
                        <div class="error"><?= $error['empty']['email'] ?? '' ?></div>
                    </div>
                    <div class="form-group col-md-6 mx-3 mx-md-0">
                        <label for="phoneNumber">Téléphone</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber"
                            pattern="<?=regPhoneNumber?>" title="Indiquez une série de 10 chiffres sans caractère spéciaux."
                            minlength="10" maxlength="10" value="<?= $phoneNumber ?? '' ?>" placeholder="07 88 22 87 29">
                        <div class="error"><?= $error['empty']['phoneNumber'] ?? '' ?></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mx-3 mx-md-0">
                        <label for="city">Ville</label>
                        <input type="text" class="form-control" id="city" name="city" pattern="<?=regAlpha?>"
                            title="N'utilisez que des lettres." minlength="2" maxlength="50" value="<?= $city ?? '' ?>" placeholder="Amiens">
                        <div class="error"><?= $error['empty']['city'] ?? '' ?></div>
                    </div>
                    <div class="form-group col-md-4 mx-3 mx-md-0">
                        <label for="state">Pays</label>
                        <select id="state" name="state" minlength="2" maxlength="50" class="form-control">
                            <option><?= $state ?? 'Choisir' ?></option>
                        </select>
                        <div class="error"><?= $error['empty']['state'] ?? '' ?></div>
                    </div>
                    <div class="form-group col-md-2 mx-3 mx-md-0">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zip" pattern="<?=regNumber?>"
                            title="Indiquez une série de 5 chiffres." minlength="5" maxlength="5" value="<?= $zip ?? '' ?>" placeholder="80000">
                        <div class="error"><?= $error['empty']['zip'] ?? '' ?></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-11 mx-auto mx-md-0">
                        <label for="text">Votre message</label>
                        <textarea required class="form-control" id="text" name="text"
                            value="<?= $message ?? '' ?>"></textarea>
                        <div class="error"><?= $error['empty']['message'] ?? '' ?></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check ml-3 ml-md-0">
                        <input required class="form-check-input" type="checkbox" id="cgc" name="cgc"
                            value="1">
                        <label class="form-check-label" for="cgc">
                            <p>Je suis en accord avec les <a href=>CGC</a>.</p>
                        </label>
                        <div class="error"><?= $error['empty']['cgc'] ?? '' ?></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3 ml-md-0">Soumettre</button>
                <p><?php (isset($retour) && $retour)?'Votre message à bien été envoyé.':'Votre message n\'a pas pu être envoyé.' ?></p>
            </form>
        </div>
    </div>
</section>