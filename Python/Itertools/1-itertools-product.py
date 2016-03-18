#!/usr/bin/python

from __future__ import print_function
from itertools import product

all = tuple(product(map(int, raw_input().strip().split(" ")), map(int, raw_input().strip().split(" "))))

for i in all:
    print(i, end=" ")
