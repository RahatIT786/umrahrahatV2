
<?php
exec('php artisan optimize');

exec('php artisan route:clear');
exec('php artisan view:clear');
exec('php artisan optimize');
exec('php artisan config:cache');
exec('php artisan config:clear');
echo "Application optimized!";
?>
