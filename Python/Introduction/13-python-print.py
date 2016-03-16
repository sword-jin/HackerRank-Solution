#!/usr/bin/python

# n = int(raw_input())

# print ''.join(map(str, range(1, n + 1)))
# print ''.join(str(x+1) for x in range(input()))

from __future__ import print_function

N = int(input())
print(*range(1, N + 1), sep='', end='\n', file=sys.stdout)
