#!/usr/bin/python

t = int(raw_input())

stus = {}

for i in range(0, t):
    name, math, physic, chemistry = raw_input().split(" ")
    stus[name] = (float(math) + float(physic) + float(chemistry)) / 3

name = raw_input()
if name in stus:
    print("%.2f" % stus[name])
else:
    print "No"
