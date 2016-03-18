#!/usr/bin/python

for _ in range(int(raw_input())):
    m, A, n = (int(raw_input()), set(raw_input().strip().split(" ")), int(raw_input()))
    print not bool(A.difference(set(raw_input().strip().split(" "))))
