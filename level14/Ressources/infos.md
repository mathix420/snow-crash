1. Apres avoir chercher des heures, j'en ai finalement deduis qu'il fallait exploit `getflag`
2. C'est assez simple, le premier obstacle c'est la securite anti reverse-engeneering `0x0804898e`, ensuite il suffit de definir l'uid au bon endroit `0x08048b0a`
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
