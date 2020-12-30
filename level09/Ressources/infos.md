1. Si on teste le programme avec `./level09 1111111` on remarque son fonctionnement
   ```
   $ ./level09 1111111
   
   1234567
   ```
2. On peut donc créer un script permettant de recupérer le token

   ```
   cat ../../level08/flag

   scp -P 4242 level09@192.168.5.70:token .

   chmod 664 token

   ./reverse.py

   => f3iji1ju5yuevaus41q1afiuq
   ```

> Flag: s5cAJpM8ev6XHw998pRWG728z