## Server setup done
We try to keep the changes to this VM as minimal as possible. However, some changes were necessary
### HTTPS via cloudflare zero trust tunnel
in order to use use cloudflare zero trust tunnel and in that way provide https for the website, we installed some cloudflare app:
Code we executed for this was:
``` 
curl -L --output cloudflared.deb https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64.deb && 

sudo dpkg -i cloudflared.deb && 

sudo cloudflared service install eyJhIjoiOGQ0NjQ0NGZmNmU4MTc0OTA4YjdkZThkNGI5ZGI0YzQiLCJ0IjoiYWY4MTFmNjYtYzdlYy00NzMzLTg4Y2MtYjdlYjljOWRkY2RkIiwicyI6Ik56WTFOVGM1WWpFdE1EaG1PUzAwWkdVeExXRTBPV1V0WkRkbU1HSmpOR0ZtTWpSbSJ9
```

### Getting E-mail working
In order to get email working, we had to do a modification to the emailer code. The reason for this is that the emailer code uses the db id in the message id and that it goes wrong with a dash character in the ko-lab_wiki.

So since we couldn't easily change the db id, we modified the below file to change the line
`$domainId = WikiMap::getCurrentWikiDbDomain()->getId();`
to
`$domainId = "kolabwiki";`

vi /var/www/mediawiki/w/includes/mail/UserMailer.php
