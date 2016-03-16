#!/usr/bin/python

n = int(raw_input())

nums = map(int, raw_input().split())

print max(filter(lambda x: x != max(nums), nums))

# just solution two.
# big, sbig = -6000, -6000
# for i in lis:
#     if (i > big):
#         big, sbig = i, big
#     elif (i < big and i > sbig):
#         sbig = i
# print (sbig)
