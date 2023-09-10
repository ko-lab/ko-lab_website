# Ko-Lab Wiki
This dir contains all the files needed for deploying the ko-lab wiki using docker compose
## How to use
- Host should have a working docker setup with the docker compose plugin installed.
  - See https://docs.docker.com/compose/gettingstarted/ for more info.
- Then the [TODO_FILL_AND_RENAME_gitIgnoredPasswords.php] file should be filled in and renamed in order to pass the required passwords.
 - As of writing this document only needed for the smtp password for sending mails.  
- Run `docker compose up -d`
 - if you have `docker-compose` installed instead of the docker compose plugin, then use: `docker-compose up -d`
- Then wiki should be available on running on port 80
