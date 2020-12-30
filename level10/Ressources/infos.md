1. `strings level10 | less` nous donne des infos sur le fonctionnement du programme
   ```
   %s file host
         sends file to host if you have access to it
   Connecting to %s:6969 ..
   Unable to connect to host %s
   .*( )*.
   Unable to write banner to host %s
   Connected!
   Sending file ..
   Damn. Unable to open file
   Unable to read from file: %s
   wrote file!
   You don't have access to %s

   [...]

   /usr/include/netinet
   sockaddr.h
   socket.h
   ```

2. `ltrace ./level10 /tmp/test 192.168.5.60` nous montre que l'accès au fichier est verifié via la fonction `access`
3. En regardant le man d'access on remarque ceci
   ```
   Warning: Using access() to check if a user is authorized to, for example, open a file before actually doing so using open(2) creates a security hole, because the user might exploit the short time interval between checking and opening the file to manipulate it.
   ```
4. On va donc exploiter de cette manière (voir l'exploit)
5. On obtient le token avec l'exploit `woupa2yuojeeaaed06riuj63c`

> Flag: feulo4b72j7edeahuete3no7c