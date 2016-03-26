import numpy
N = int(raw_input())
print numpy.linalg.det(numpy.array([raw_input().split() for _ in range(N)], float))
