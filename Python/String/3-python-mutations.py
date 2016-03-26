#!/usr/local/python

s = raw_input()
args = raw_input().split()
pos = int(args[0])
char = args[1]

print s[:pos] + char + s[pos + 1:]
