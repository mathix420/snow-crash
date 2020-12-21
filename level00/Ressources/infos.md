1. Lister tous les fichiers qui peuvent appartenir a flag00
   ```bash
   find / -user flag00 2> /dev/null
   ```
2. On obtient `/usr/sbin/john` => `cdiiddwpgswtgt`
3. Le code ne semble pas etre un hash, je teste donc des chiffrements alternatifs dont le code de cesar
4. `cdiiddwpgswtgt` => rot(15) => `nottoohardhere`

> Flag: x24ti5gi3x0ol2eh4esiuxias