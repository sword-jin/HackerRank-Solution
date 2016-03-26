#!/usr/bin/python

n = int(raw_input())

width = len(bin(n)) - 2

for i in range(1, n + 1):
    print "{0:{width}d} {0:{width}o} {0:{width}X} {0:{width}b}".format(i,width = width)

# from __future__ import print_function
# for i in range(1, n + 1):
#     print("%s %s %s %s" % (str(i).rjust(width, " "), str(oct(i))[1:].rjust(width, " "), hex(i)[2:].rjust(width, " ").upper(), bin(i)[2:].rjust(width, " ")))
