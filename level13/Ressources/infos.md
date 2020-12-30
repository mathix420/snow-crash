1. Le programme demande que l'UID soit 4242, nous n'avons pas les droits nécessaires pour réaliser un changement d'UID sur notre user
2. Un simple bypass de la vérification via gdb devrait suffire
   ```
   b *0x0804859a
   r
   set $eax=0x1092
   n
   ```

> Flag: 2A31L79asukciNyi8uppkEuSx