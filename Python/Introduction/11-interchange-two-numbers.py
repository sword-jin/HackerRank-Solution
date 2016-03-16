#!/usr/bin/python

a = int(raw_input())
b = int(raw_input())

temp = a
a = b
b = temp

num = (a, b)

print num[0]
print num[1]
