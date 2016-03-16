#!/usr/bin/python

string = raw_input()
findme = raw_input()
count = 0
start = 0

while 1:
    temp = string.find(findme, start)
    if (temp != -1):
        count = count + 1
        start = temp + 1
    else:
        break

print count

# A = raw_input()
# x = raw_input()

# count = 0
# for i in range(len(A)-len(x)):

#     if A[i:i+len(x)] == x:
#         count += 1
# print count
