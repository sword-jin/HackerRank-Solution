#!/usr/local/python

import math

a = int(raw_input())
b = int(raw_input())

print "%d°" % round(math.atan2(a, b) * 180 / math.pi)
