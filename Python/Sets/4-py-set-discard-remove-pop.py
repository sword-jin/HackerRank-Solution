#!/usr/bin/python

n = int(raw_input())

s = set(map(int, raw_input().strip().split(" ")))

m = int(raw_input())

for _ in range(m):
    args = raw_input().split(" ")
    if (args[0] == "pop"):
        s.pop()
    elif (args[0] == 'remove'):
        s.remove(int(args[1]))
    elif (args[0] == 'discard'):
        s.discard(int(args[1]))

print sum(s)
