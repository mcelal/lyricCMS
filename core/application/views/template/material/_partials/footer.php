<footer class="page-footer red darken-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Company Bio</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="/assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="/assets/js/materialize.min.js"></script>
<?php
foreach ($scripts['foot'] as $file)
{
    $url = starts_with($file, 'http') ? $file : base_url($file);
    echo "<script src='$url'></script>".PHP_EOL;
}
?>

<?php // Google Analytics ?>
<?php $this->load->view('_partials/ga') ?>
<script>
    $(document).ready(function(){

        $('.modal').modal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                inDuration: 300, // Transition in duration
                outDuration: 200, // Transition out duration
                startingTop: '4%', // Starting top style attribute
                endingTop: '10%', // Ending top style attribute
                ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                    alert("Ready");
                    console.log(modal, trigger);
                },
                complete: function() { alert('Closed'); } // Callback for Modal close
            }
        );

        $(".button-collapse").sideNav();
        $('select').material_select();

    });

    <?php if (isset($_SESSION['toast'])) : ?>
    Materialize.toast('<?=$_SESSION['toast']?>', 3000);
    <?php endif; ?>
</script>
</body>
</html>