#!/usr/bin/python

raw_input()
A = set(raw_input().split(" "))

raw_input()
B = set(raw_input().split(" "))

print len(A.intersection(B))
