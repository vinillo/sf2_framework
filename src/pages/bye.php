<!-- example.com/src/pages/hello.php -->

<?php $name = $request->get('name', 'World') ?>

Bye <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>