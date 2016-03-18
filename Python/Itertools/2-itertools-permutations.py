#!/usr/bin/python

from __future__ import print_function
from itertools import permutations

args = raw_input().strip().split(" ")
all = list(permutations(args[0], int(args[1])))

for i in sorted(all):
    for j in i:
        print(j, sep=" ", end="")
    print("")
