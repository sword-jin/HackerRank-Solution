import re

ROMAN_REGEX = re.compile(r"^(?=[MDCLXVI])M{0,3}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$")

print bool(re.match(ROMAN_REGEX, raw_input()))
