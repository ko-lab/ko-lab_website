cd /ko-lab_website
pwd
SQL_DUMP=mysql_dump.sql
echo "backing up sql to $SQL_DUMP"
time $(docker run --network=ko-lab_wiki_default -it mysql:8.1 mysqldump --compress --host=db --user=admin --password=admin ko-lab_wiki > ko-lab_wiki/$SQL_DUMP)

echo "syncing sqldump"
time rclone sync ko-lab_wiki/$SQL_DUMP ko-lab_wiki_google_backup:ko-lab_wiki_backup/

echo "syncing images"
time rclone sync ko-lab_wiki/images ko-lab_wiki_google_backup:ko-lab_wiki_backup/images
echo "backup done"
