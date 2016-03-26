#!/usr/bin/python

# why...
raw_input()
A = set(raw_input().split(" "))

raw_input()
B = set(raw_input().split(" "))

print len(A.union(B))
