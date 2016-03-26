#!/usr/bin/python

t = int(raw_input())

nums = []

for i in range(0, t):
    orgs = raw_input().split(' ')
    if orgs[0] == "insert":
        nums.insert(int(orgs[1]), int(orgs[2]))
    elif orgs[0] == "append":
        nums.append(int(orgs[1]))
    elif orgs[0] == "remove":
        nums.remove(int(orgs[1]))
    elif orgs[0] == "pop":
        nums.pop()
    elif orgs[0] == "index":
        print nums.index(int(orgs[1]))
    elif orgs[0] == "count":
        print nums.count(int(orgs[1]))
    elif orgs[0] == "sort":
        nums.sort()
    elif orgs[0] == "reverse":
        nums.reverse()
    elif orgs[0] == "print":
        print nums
