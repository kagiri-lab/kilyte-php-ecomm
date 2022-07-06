<?php $this->title = $error['code'] . " - Error" ?>

<div class="container">
    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="container">
            <?php
            $debug = "false";
            if (isset($_ENV["DEBUG"]))
                $debug = $_ENV["DEBUG"];
            $code = $error['code'];
            $message = $error['message'];
            echo '<div class="row card">';
            echo '<div class="card-body">';
            echo "<h4 class='card-title'>Error : $code</h4>";
            echo "<p class='card-text'>$message</p>";
            echo "<hr/>";
            if (strtolower($debug) == 'true') {
                foreach ($error['trace'] as $rs => $vs) {
                    if (is_array($vs)) {
                        echo '<div class="col-12">';
                        foreach ($vs as $v => $s) {
                            if (is_array($s)) {
                                if (count($s) > 0) {
                                    echo "<p><strong>" . ucfirst($v) . "</strong> :</p>";
                                    echo '<div class="card" style="max-height: 400px; overflow-y: auto;">';
                                    echo '<div class="card-body">';
                                    echo "<code>";
                                    foreach ($s as $us => $uv) {
                                        echo "<pre>";
                                        print_r($uv);
                                        echo "</pre>";
                                    }
                                    echo "</code>";
                                    echo '</div>';
                                    echo '</div>';
                                }
                            } else
                                echo "<p><strong>" . ucfirst($v) . "</strong> : $s</p>";
                        }
                        echo '</div>';
                    }
                    echo '<div class="col-12"><hr/></div>';
                }
            }
            echo '<div class="col-12">';
            echo '<a class="btn btn-primary" href="/">Back to home</a>';
            echo '<br />';
            echo '</div>';
            echo "</div>";

            echo "</div>";

            ?>

        </div>

    </section>
</div>