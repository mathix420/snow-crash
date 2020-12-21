1. Verifier ce que fait le binaire avec `ltrace`
2. On remarque qu'il utilise la commande `echo` depuis `/usr/bin/env`
3. On creer un exploit (exploit.sh) dans `/tmp/bin`
4. On override la variable PATH pour qu'elle utilise `/tmp/bin` en premier
   ```
   export PATH="/tmp/dede:$PATH"
   ```
5. On lance le binaire et nous voila sur le compte flag03

> Flag: qi0maab88jeaj46qoumi7maus