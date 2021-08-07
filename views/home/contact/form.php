            <form id="contactForm" class="col-12 col-md-6 pr-5" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>"
                method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6 mx-3 mx-md-0">
                        <label for="lastname">Nom:*</label>
                        <input required type="text" class="form-control" id="lastname" name="lastname"
                            pattern="<?=REGALPHA?>"
                            title="N'utilisez que des lettres, des espaces et des guillemets/apostrophes." minlength="2"
                            maxlength="50" value="<?= $lastname ?? '' ?>">
                        <div class="error"><?= $error['empty']['lastname'] ?? '' ?></div>
                    </div>
                    <div class="form-group col-md-6 mx-3 mx-md-0">
                        <label for="firstname">Prénom:</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" pattern="<?=REGALPHA?>"
                            title="N'utilisez que des lettres, des espaces et des guillemets/apostrophes." minlength="2"
                            maxlength="50" value="<?= $firstname ?? '' ?>">
                        <div class="error"><?= $error['empty']['firstname'] ?? '' ?></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mx-3 mx-md-0">
                        <label for="email">Email:*</label>
                        <input required type="email" class="form-control" id="email" name="email" minlength="5"
                            maxlength="70" value="<?= $email ?? '' ?>">
                        <div class="error"><?= $error['empty']['email'] ?? '' ?></div>
                    </div>
                    <div class="form-group col-md-6 mx-3 mx-md-0">
                        <label for="tel">Téléphone:</label>
                        <input type="tel" class="form-control" id="tel" name="tel" value="<?= $tel ?? '' ?>">
                        <div class="error"><?= $error['empty']['tel'] ?? '' ?></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 mx-auto mx-md-0">
                        <label for="subject">Sujet:</label>
                        <input type="text" class="form-control" id="subject" name="subject" pattern="<?=REGALPHA?>"
                            title="N'utilisez que des lettres, des espaces et des guillemets/apostrophes." minlength="3"
                            maxlength="100" value="<?= $subject ?? '' ?>">
                        <div class="error"><?= $error['empty']['subject'] ?? '' ?></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12 mx-auto mx-md-0 mb-0">
                        <label for="body">Votre message:*</label>
                        <textarea required class="form-control" id="body" name="body" minlength="25" maxlength="1500"
                            value="<?= $message ?? '' ?>"></textarea>
                        <div class="error"><?= $error['empty']['message'] ?? '' ?></div>
                    </div>
                </div>
                <p class="font-italic">*: Mentions obligatoires.</p>
                <div class="form-group">
                    <div class="form-check ml-3 ml-md-0">
                        <input required class="form-check-input" type="checkbox" id="cgc" name="cgc" value="1">
                        <label class="form-check-label" for="cgc">
                            <p>Je suis en accord avec les <a class="blocked">CGC</a>.</p>
                        </label>
                        <div class="error"><?= $error['empty']['cgc'] ?? '' ?></div>
                    </div>
                </div>
                <button type="submit" onclick="sendEmail()" class="btn btn-primary ml-3 ml-md-0">Soumettre</button>
                <p><?php (isset($retour) && $retour)?'Votre message à bien été envoyé.':'Votre message n\'a pas pu être envoyé.' ?>
                </p>
            </form>