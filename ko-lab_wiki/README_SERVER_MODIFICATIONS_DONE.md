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

