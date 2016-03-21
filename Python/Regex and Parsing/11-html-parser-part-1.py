import re
from HTMLParser import HTMLParser

class MyHTMLParser(HTMLParser):
    def handle_starttag(self, tag, attrs):
        print "Start : %s" % tag
        for attr, value in attrs:
            print "->", attr, ">", value
    def handle_endtag(self, tag):
        print "End   : %s" % tag
    def handle_startendtag(self, tag, attrs):
        print "Empty : %s" % tag
        for attr, value in attrs:
            print "->", attr, ">", value

string = ''
for _ in range(int(raw_input())):
    string += raw_input()

parser = MyHTMLParser()
parser.feed(string)
