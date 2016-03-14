Node* Insert(Node *head, int data)
{
    Node *temp = (Node*)malloc(sizeof(struct Node));

    if (temp == NULL) {
        exit(-1);
    }

    temp->data = data;
    temp->next = NULL;

    if (head == NULL) {
        head = temp;
    } else {
        Node* current  = head;
        while (current->next != NULL) {
            current = current->next;
        }
        current->next = temp;
    }

    return head;
}
