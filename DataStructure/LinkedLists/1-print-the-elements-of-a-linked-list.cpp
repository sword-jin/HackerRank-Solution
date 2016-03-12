void Print(Node *head)
{
    while (head != NULL) {
        cout << head->data << endl;
        head = head->next;
    }
}
