#!/usr/bin/python

# n = int(raw_input())
# for i in range(n):
#     s = "-".join(chr(ord('a')+n-j-1) for j in range(i+1))
#     print((s+s[::-1][1:]).center(n*4-3, '-'))

# for i in range(n-1):
#     s = "-".join(chr(ord('a')+n-j-1) for j in range(n-i-1))
#     print((s+s[::-1][1:]).center(n*4-3, '-'))

a = ord('a')
n = int(raw_input())
width = 4 * n - 3

str = []

for i in range(1, n):
    left = ''
    for j in range(i - 1):
        left = left + chr(a + n - 1 - j) + '-'
        right = left;
    left = left + chr(a + n - i) + left[::-1]
    str.append(left)

center = ''
for i in range(n - 1):
    center = center + chr(a + n - 1 - i) + '-'
center = center + 'a' + center[::-1]

for s in str:
    print s.center(width, '-')
print center.center(width, '-')

for s in reversed(str):
    print s.center(width, '-')
