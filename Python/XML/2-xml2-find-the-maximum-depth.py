from xml.etree.ElementTree import XMLParser

class MaxDepth:
    MaxDepth = 0
    depth = 0
    def start(self, tag, attributes):
        self.depth += 1
        if self.depth > self.MaxDepth:
            self.MaxDepth = self.depth
    def end(self, tag):
        self.depth -= 1
    def data(self, data):
        pass
    def close(self):
        return self.MaxDepth

target = MaxDepth()
parser = XMLParser(target=target)

xml = ''
for _ in range(int(raw_input())):
    xml += raw_input().rstrip() + "\n"

parser.feed(xml)
print parser.close() - 1
