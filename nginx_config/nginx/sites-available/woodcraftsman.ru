server {

        root /home/w/woodtools/woodcraftsman.ru/public_html;
        index index.html index.php;

        server_name woodcraftsman.ru www.woodcraftsman.ru;

        location / {
                # First attempt to serve request as file, then
                # as directory, then fall back to displaying a 404.
                try_files $uri $uri/ =404;
        }

        # pass PHP scripts to FastCGI server
        #
        location ~ \.php$ {
               include snippets/fastcgi-php.conf;

               # With php-fpm (or other unix sockets):
               fastcgi_pass unix:/var/run/php/php7.2-fpm.sock;
        }

        # deny access to .htaccess files, if Apache's document root
        # concurs with nginx's one
        #
        location ~ /\.ht {
               deny all;
        }


              
    listen [::]:443 ssl http2 ipv6only=on; # managed by Certbot
    listen 443 ssl http2; # managed by Certbot
    ssl_certificate /etc/letsencrypt/live/woodcraftsman.ru/fullchain.pem; # managed by Certbot
    ssl_certificate_key /etc/letsencrypt/live/woodcraftsman.ru/privkey.pem; # managed by Certbot
    include /etc/letsencrypt/options-ssl-nginx.conf; # managed by Certbot
    ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem; # managed by Certbot


}


server {
    if ($host = www.woodcraftsman.ru) {
        return 301 https://$host$request_uri;
    } # managed by Certbot


    if ($host = woodcraftsman.ru) {
        return 301 https://$host$request_uri;
    } # managed by Certbot



        server_name woodcraftsman.ru www.woodcraftsman.ru;
    listen 80;
    return 404; # managed by Certbot




}