<?php if ($page->template() != 'home') : ?>
    <footer class="p-2 border-t border-orange">



        <!-- Begin Mailchimp Signup Form -->
        <div id="mc_embed_signup">
            <form action="https://passe-avant.us19.list-manage.com/subscribe/post?u=2b38610fa91014627f365ebb0&amp;id=4e9731bf6f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group">
                        <label for="mce-EMAIL" class="uppercase">Newsletter</label><br>
                        <input type="email" value="" name="Email" class="required email newsletter_submission my-2 rounded border border-black uppercase h-6 w-40 bg-white focus:outline-none" id="mce-EMAIL">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2b38610fa91014627f365ebb0_4e9731bf6f" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="bg-transparent focus:outline-none pb-2 pr-2"></div>
                </div>
            </form>
        </div>

        <!--End mc_embed_signup-->
        <div style="padding-top:30px">
            <?php
            $socials = $page->social()->toStructure();
            foreach ($socials as $item) : ?>
                <a href="<?= $item->url() ?>" target="_blank" class="overflow-visible"><?= $item->platform()->html() ?></a><br>
            <?php endforeach ?>

            <a href="<?= $site->find('contact')->url() ?>" class="overflow-visible"><?= $site->find('contact')->title() ?></a><br>
            <a href="<?= $site->find('impressum')->url() ?>" class="overflow-visible"><?= $site->find('impressum')->title() ?></a><br>
            <a href="<?= $site->find('datenschutz')->url() ?>" class="overflow-visible"><?= $site->find('datenschutz')->title() ?></a>
        </div>
    </footer>
<?php endif ?>
</div>
</body>

</html>
<?= js('assets/javascript.js') ?>