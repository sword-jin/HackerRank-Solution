import xml.etree.ElementTree as etree

xml = ''.join(raw_input() for _ in range(int(raw_input())))
tree = etree.ElementTree(etree.fromstring(xml))

def traverse(node):
    return len(node.attrib) + sum(traverse(child) for child in node)

print traverse(tree.getroot())
