import re

EMAIL_REGEX = re.compile(r"^[\w-]+@[a-zA-Z0-9]+\.[^@]{1,3}$")

emails = list()
for _ in range(int(raw_input())):
    emails.append(raw_input())

print filter(lambda e: EMAIL_REGEX.match(e), sorted(emails))
