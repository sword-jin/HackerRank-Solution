import re

string = raw_input().strip()
findme = raw_input().strip()

results = map(lambda x: (x.start(1), x.end(1) -1), re.finditer(r"(?=(%s))" % findme, string))

if results:
    for i in results:
        print i
else:
    print (-1, -1)
