import re

EMAIL_REGEX = re.compile(r'^[a-zA-Z]{1}[\w\-\.]+@[a-zA-Z]+\.[a-zA-Z]{1,3}$')

for _ in range(int(raw_input())):
    name, email = raw_input().strip().split()
    if (re.match(EMAIL_REGEX, email[1:-1])):
        print name, email
