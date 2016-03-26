from HTMLParser import HTMLParser

class MyHTMLParser(HTMLParser):
    def handle_starttag(self, tag, attrs):
        print tag
        for attr, value in attrs:
            print "->", attr, ">", value

    def handle_startendtag(self, tag, attrs):
        print tag
        for attr, value in attrs:
            print "->", attr, ">", value

html = ''
for _ in range(int(raw_input())):
    html += raw_input().rstrip() + '\n'

parser = MyHTMLParser()
parser.feed(html)
parser.close()
