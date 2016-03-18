#!/usr/bin/python

raw_input()
A = set(map(int, raw_input().split(" ")))

n = int(raw_input())

for _ in range(n):
    args = raw_input().split(" ")
    nums = set(map(int, raw_input().split(" ")))
    if (args[0] == 'intersection_update'):
        A &= nums
    if (args[0] == 'symmetric_difference_update'):
        A ^= nums
    if (args[0] == 'difference_update'):
        A -= nums
    if (args[0] == 'update'):
        A |= nums

print sum(A)
