1. Après avoir cherché pendant des heures, on en a finalement déduit qu'il fallait exploiter `getflag`
2. C'est assez simple, le premier obstacle c'est la sécurité anti reverse-engeneering `0x0804898e`, ensuite il suffit de définir l'uid au bon endroit `0x08048b0a`
   ```
   gdb getflag

   b *0x0804898e
   b *0x08048b0a
   r
   set $eax=0x42
   n
   set $eax=3014
   n
   ```

> Flag: 7QiHafiNa3HVozsaXkawuYrTstxbpABHD8CPnHJ
