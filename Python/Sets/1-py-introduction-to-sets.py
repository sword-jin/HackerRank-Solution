#!/usr/bin/python

from __future__ import division

n = int(raw_input())
nums = set(map(int, raw_input().split(" ")))

print "%.3f" % (sum(nums) / len(nums));
