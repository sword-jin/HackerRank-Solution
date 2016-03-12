Node* Insert(Node *head, int data)
{
    Node* temp = (Node*)malloc(sizeof(struct Node));

    if (temp == NULL) {
        exit(-1);
    }

    temp->data = data;
    temp->next = NULL;
    if (head != NULL) temp->next = head;

    return temp;
}
