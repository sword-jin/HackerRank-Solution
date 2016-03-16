#!/usr/bin/python

from __builtin__ import hash

n = int(raw_input())
nums = map(int, raw_input().split(" "))

tuples = tuple(nums)

print hash(tuples)
