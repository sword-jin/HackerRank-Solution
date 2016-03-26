#!/usr/bin/python

country = set()
n = int(raw_input())

for _ in range(n):
    country.add(raw_input())

print len(country)
