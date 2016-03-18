from __future__ import print_function
from itertools import combinations_with_replacement

args = raw_input().strip().split(" ")

for s in combinations_with_replacement(sorted(args[0]), int(args[1])):
    for i in s:
        print(i, sep="", end="")
    print("")
