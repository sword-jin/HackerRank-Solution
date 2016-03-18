#!/usr/bin/python

from collections import Counter

K = int(raw_input())

lists = Counter(map(int, raw_input().split(" ")))

for i in lists:
    if (lists[i] == 1):
        print i
        break
