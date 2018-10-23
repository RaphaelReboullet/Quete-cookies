<?php

require 'inc/head.php';
if (!isset($_SESSION['loginname'])){
    header ('location: login.php');
}
?>


<section class="cookies container-fluid">
    <div class="container justify content-center">
    <div class="row">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Cookie</th>


            </tr>
            </thead>
            <tbody>
<?php foreach ($_SESSION['cart']['name'] as $value => $key) { ?>
    <tr>
                <th scope="row"><?php echo $key ?></th>
            </tr>
<?php }; ?>


            </tbody>
        </table>

    </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
