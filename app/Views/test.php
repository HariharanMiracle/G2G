Test

Step 1: In public/ directory, copy index.php and .htaccess to your root project directory.

Step 2: In the root project directory, open index.php and edit the following line:

index.php -> $pathsPath = FCPATH . '../app/Config/Paths.php';

to

index.php => $pathsPath = FCPATH . 'app/Config/Paths.php';