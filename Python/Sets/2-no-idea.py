#!/usr/bin/python

happiess = 0

n, m = map(int, raw_input().split(" "))

nums = list(map(int, raw_input().split(" ")), 0)

A, B = set(map(int, raw_input().split(" ")) for _ in range(2))


for i in num:
    if i in A:
        happiess = happiess + 1
    if i in B:
        happiess = happiess - 1

print happiess
