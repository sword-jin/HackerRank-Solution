#!/usr/bin/python

s = raw_input();

print any(char.isalnum() for char in s)
print any(char.isalpha() for char in s)
print any(char.isdigit() for char in s)
print any(char.islower() for char in s)
print any(char.isupper() for char in s)

# one = 0
# two = 0
# three = 0
# four = 0
# five = 0
# for a in s:
#     if a.isalnum():
#         one = 1
#         break
# for a in s:
#     if a.isalpha():
#         two = 1
#         break
# for a in s:
#     if a.isdigit():
#         three = 1
#         break
# for a in s:
#     if a.islower():
#         four = 1
#         break
# for a in s:
#     if a.isupper():
#         five = 1
#         break

# if (one == 1):
#     print "True"
# else:
#     print "False"

# if (two == 1):
#     print "True"
# else:
#     print "False"

# if (three == 1):
#     print "True"
# else:
#     print "False"

# if (four == 1):
#     print "True"
# else:
#     print "False"

# if (five == 1):
#     print "True"
# else:
#     print "False"
