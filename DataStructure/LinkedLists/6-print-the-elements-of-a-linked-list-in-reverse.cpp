void ReversePrint(Node* head)
{
    if (head == NULL) {
        return;
    }
    ReversePrint(head->next);
    printf("%d\n", head->data);
}
