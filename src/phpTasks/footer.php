<footer>
    <?php
        $filename = basename($_SERVER['PHP_SELF']);
        $lastModified = filemtime($filename);

        echo "Last modified: " . date("F d, Y h:i A", $lastModified);
    ?>
        <p>&copy; 2026 My Progress. All rights reserved.</p>
    </footer>