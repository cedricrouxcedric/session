<?php
session_start();
require 'inc/head.php';
require 'inc/data/products.php';
if (isset($_COOKIE['id'])) {
    $articles = explode(',', $_COOKIE['id']);
}
?>
<section class="cookies container">
    <div class="row">
        <div class="col-lg-5">
            <h2>Your cart:</h2>
            <?php if (isset($_COOKIE['id'])) {
                foreach ($articles as $article) {
                    echo '<p>' . $catalog[$article]['name'] . '</p>';
                }
                echo '<h3> Your cart contains ' . count($articles) . ' articles </h3>';
            } else {
                echo '<h3> Your cart is empty </h3>';
            } ?>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
