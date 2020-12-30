1. Lister tous les fichiers appartenants à `flag05`
   ```
   find / -user flag05 2> /dev/null
   ```
2. Lire le fichier `/usr/sbin/openarenaserver`
   ```
   cat /usr/sbin/openarenaserver
   ```
3. L'exécutable va lire tous les fichiers contenus dans /opt/openarenaserver/ et les exécuter `bash -x "$i"`
4. Le but est donc de créer un payload qui va exécuter la fonction `getflag` et stocker le résultat dans un fichier accessible (`/tmp/log1`)
5. On rend le payload exécutable
   ```
   chmod +x /opt/openarenaserver/payload.sh
   ```
6. On attend en vérifiant le fichier log
7. `cat /tmp/log1`

> Flag: viuaaale9huek52boumoomioc
