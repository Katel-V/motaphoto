<!-- Bouton contact mondale header -->
 <button id="btn-open-modal">CONTACT</button>

<!-- Modale -->
 <div class="modal">
    <div class="modal-content"> 
        <span class="close">X</span>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/contact.webp'; ?>" alt="Contact" />
            <!-- Contact Form 7 Shortcode -->
            <?php echo do_shortcode('[contact-form-7 id="b93a2fe" title="Contact"]'); ?>
    </div>
</div>