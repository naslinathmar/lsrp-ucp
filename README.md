# lsrp-beta-ucp

- If you're using apache:
  - To make the ucp work you need to enable module rewrite and allow htaccess through the config file
  
- If you're using nginx:
   - Convert htaccess using https://winginx.com/en/htaccess
   
You would have to also mass edit every .php file by changing the old website url to the one you're using, this includes the javascript files.
If you see "62.4.16.133" replace it with your VPS IP, and edit lsrp-ucp/modules/core/config.php (Database, Server IP).
