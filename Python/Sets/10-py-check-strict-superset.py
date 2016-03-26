#!/usr/bin/python

A = set(raw_input().split(" "))
B = set()

for _ in range(int(raw_input())):
    B |= set(raw_input().split(" "))

print not bool(B ^ A)
