import re

for _ in range(int(raw_input())):
    s = raw_input().rstrip()
    if re.search(r'^[456]\d{3}(\?|(-)|)(\d{4}\1){2}\d{4}$', s) not re.search(r'(\d)(-|\1){4}', s):
        print "Valid"
    else:
        print "Invalid"
