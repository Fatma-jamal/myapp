</main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; MyApp 2023</div></div>
                    <div class="col-auto">
                    <?php 
                        $menuItem = '<a class="link-light small" href="{{url}}">{{title}}</a><span class="text-white mx-1">&middot;</span>';
                        $params = array(
                            'menu-item' => $menuItem,
                        );
                        myAppRenderMenu('footer-menu',$params); ?>
                        <!--
                        <a class="link-light small" href="privacy">Privacy</a><span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="terms">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="contact">Contact</a>
-->
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="<?php echo ROOT_PATH; ?>assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo ROOT_PATH; ?>assets/js/scripts.js"></script>
    </body>
</html>