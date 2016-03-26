#!/usr/bin/python

from __future__ import print_function

s = raw_input()

for a in s:
    if a.isalpha():
        if a.islower():
            print(a.upper(), end="")
        else:
            print(a.lower(), end="")
    else:
        print(a, end="")

# wtf!!!!
# import string
# print string.swapcase(raw_input())
