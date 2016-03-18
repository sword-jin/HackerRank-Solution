#!/usr/bin/python

string = raw_input()
length = len(string)

the_vowel = "AEIOU"

kiven = 0
stuart = 0
for i in range(length):
    if string[i] in the_vowel:
        kiven = kiven + length - i
    else:
        stuart = stuart + length - i

if kiven > stuart:
    print "Kevin %d" % kiven
elif kiven < stuart:
    print "Stuart %d" % stuart
else:
    print "Draw"

# stupied solution.
# score = {}

# # Kevin
# Kevin = {}
# for i in range(length):
#     if string[i:i+1] in the_vowel:
#         for j in range(i + 1, length + 1):
#             s = string[i:j]
#             count = 1
#             start = i + 1
#             if s not in Kevin:
#                 while 1:
#                     temp = string.find(s, start)
#                     if (temp != -1):
#                         count = count + 1
#                         start = temp + 1
#                     else:
#                         break
#                 Kevin[s] = count

# # Stuart
# Stuart = {}
# for i in range(length):
#     if string[i:i+1] not in the_vowel:
#         for j in range(i + 1, length + 1):
#             s = string[i:j]
#             count = 1
#             start = i + 1
#             if s not in Stuart:
#                 while 1:
#                     temp = string.find(s, start)
#                     if (temp != -1):
#                         count = count + 1
#                         start = temp + 1
#                     else:
#                         break
#                 Stuart[s] = count

# sum = 0
# for x in Kevin:
#     sum = sum + Kevin[x]
# score['kevin'] = sum

# sum = 0
# for x in Stuart:
#     sum = sum + Stuart[x]
# score['stuart'] = sum

# if score['kevin'] > score['stuart']:
#     print "Kevin %d" % score['kevin']
# elif score['kevin'] < score['stuart']:
#     print "Stuart %d" % score['stuart']
# else:
#     print "Draw"

