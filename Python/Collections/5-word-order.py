from collections import OrderedDict

words = OrderedDict()

for _ in range(int(raw_input())):
    key = raw_input()
    if key in words:
        words[key] += 1
    else:
        words[key] = 1

print ' '.join(map(str, words.values()))
