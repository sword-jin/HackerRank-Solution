int CompareLists(Node *headA, Node* headB)
{
    int result = 1;

    while (headA != NULL && headB != NULL) {
        if (headA->data != headB->data) {
            result = 0;
            break;
        }
        headA = headA->next;
        headB = headB->next;
    }

    if ((headA != NULL && headB == NULL) || (headB != NULL && headA == NULL)) {
        result = 0;
    }

    return result;
}

// editorial
int CompareLists(Node *headA, Node* headB)
{
    if (headA == NULL && headB == NULL) {
        return 1;
    }
    if ((headA != NULL && headB == NULL) || (headA == NULL && headB != NULL)) {
        return 0;
    }
    if (headA.data != headB.data) {
        return 0;
    }

    return CompareLists(headA->next, headB->next);
}
