from __future__ import print_function
from itertools import combinations

args = raw_input().strip().split(" ")
word = args[0]
limit = int(args[1])

all = set()
for i in range(1, limit + 1):
    for j in combinations(sorted(word), i):
        for s in j:
            print(s, sep="", end="")
        print("")

