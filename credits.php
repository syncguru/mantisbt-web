<?php include( "top.php" ); ?>

<span class="page_title">Credits</span>
<hr size=1 noshade width="100%">
<p>
        <ul>
<?php
        $file = file( "files/CREDITS");
        $count = count($file);
        $state = 0;
        for ($i=8;$i<$count;$i++) {
                $file[$i] = trim( $file[$i] );
                if ( $file[$i] == "CREDITS" ) {
                        continue;
                } else if ($state == 1) {
                        echo "</ul><p><b>".$file[$i]."</b><p><ul>";
                        $state = 2;
                } else if (ereg('^-+$', $file[$i])) {
                } else if ( !empty( $file[$i] ) ) {
                        echo "<li>".$file[$i]."<br />";
                        $state = 0;
                } else if ($state == 0) {
                        $state = 1;
                }
        }
?>
        </ul>
<?php include( "bot.php" ); ?>