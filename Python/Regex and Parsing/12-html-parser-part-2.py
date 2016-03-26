from __future__ import print_function
from HTMLParser import HTMLParser

class MyHTMLParser(HTMLParser):
    def handle_comment(self, data):
        if (len(data.split('\n')) != 1):
            print(">>> Multi-line Comment")
        else:
            print(">>> Single-line Comment")
        print(data.replace("\r", "\n"))
    def handle_data(self, data):
        if data.strip():
			print(">>> Data")
			print(data)

html = ""
for i in range(int(raw_input())):
    html += raw_input().rstrip() + "\n"

parser = MyHTMLParser()
parser.feed(html)
parser.close()
