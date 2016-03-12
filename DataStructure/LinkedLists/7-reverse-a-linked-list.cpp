Node* Reverse(Node* head)
{
    // head empty or have only one element.
    if (head == NULL || head->next == NULL) {
        return head;
    }

    Node* nextNode = head->next;
    head->next = NULL;
    Node* newNode = Reverse(nextNode);

    newNode->next = head;
    return newNode;
}

