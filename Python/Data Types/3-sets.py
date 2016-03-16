#!/usr/bin/python

m = int(raw_input())
one = set(map(int, raw_input().split()))
n = int(raw_input())
two = set(map(int, raw_input().split()))

result = one.symmetric_difference(two)

for i in sorted(result):
    print i
