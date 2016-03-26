import numpy

P  = map(float, raw_input().split())
x = float(raw_input())
print numpy.polyval(P, x)
