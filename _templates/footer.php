<?php
set_l10n_domain('layout');
?>
        </div>
        <footer>
            <p>
                Copyright &copy; <?php echo date('Y'); ?> elementary LLC. <a href="<?php echo $page['lang-root'].'privacy-policy'; ?>">Privacy Policy</a>
            </p>
            <div class="popover">
                <a href="#"><i class="fa fa-language"></i>&nbsp;Language</a>
                <div class="popover-content">
                    <strong>Change Site Language</strong>
                    <ul>
                    <?php
                    foreach (list_langs() as $langCode => $langName) {
                        $path = $sitewide['root'].$langCode.'/'.(($page['name'] == 'index') ? '' : $page['name']);
                        ?>
                        <li><a href="<?php echo $path; ?>" rel="alternate" hreflang="<?php echo str_replace('_', '-', $langCode); ?>">
                            <?php echo $langName; ?>
                        </a></li>
                        <?php
                        if ($langCode == 'en') {
                            ?>
                            <hr>
                            <?php
                        }
                    }
                    ?>
                    </ul>
                </div>
            </div>
            <ul>
                <li><a href="https://twitter.com/elementary" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="http://reddit.com/r/elementaryos" target="_blank" title="Reddit"><i class="fa fa-reddit"></i></a></li>
                <li><a href="https://plus.google.com/114635553671833442612" target="_blank" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.facebook.com/elementaryos" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            </ul>
        </footer>

        <!--[if lt IE 9]>
            <div id="legacy-warning">
                <h1>The elementary OS website is built on modern web technologies your browser doesn&rsquo;t support.</h1>

                <p>This version of Internet Explorer is out of date and may contain bugs or security vulnerabilities. Please <a href="http://browsehappy.com/">upgrade</a> to IE 11 or an alternative web browser.</p>

                <div id="legacy-warning-buttons">
                    <a href="#" onClick="document.getElementById('legacy-warning').style.display = 'none';">Dismiss</a>

                    <a class="suggested-action" href="http://browsehappy.com/" target="_blank">Learn More</a>
                </div>
            </div>
        <![endif]-->
    </body>
</html>
<?php
end_html_l10n();
?>