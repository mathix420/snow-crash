#! /bin/env python3

with open('token', 'rb') as fp:
    token = bytearray(fp.read())

for i, c in enumerate(token[:-1]):
    print(chr(int(c) - i), end="")

print()
