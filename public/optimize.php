
<?php
exec('php artisan optimize');
exec('php artisan config:cache');
exec('php artisan config:clear');
echo "Application optimized!";
?>
