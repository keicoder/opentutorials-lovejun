<html>
        <body>
                Current time is <br /><br /><br />
<?php
    echo date('G:i:s');
?> (by php) <br /><br /><br />
        <script type="text/javascript">
                var d = new Date();
                var curr_hour = d.getHours();
                var curr_min = d.getMinutes();
                var curr_sec = d.getSeconds();
                document.write('Current time is '+curr_hour+":"+curr_min+":"+curr_sec+" (by javascript)");
        </script>
<br /><br /><br />
<?php
    echo 'hgffghj';
?> (by php)

        <body>
</html>
    
    <IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /
    RewriteCond $1 !^(index\.php|images|captcha|data|include|uploads|robots\.txt)
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ /index.php/$1 [L]
    </IfModule>