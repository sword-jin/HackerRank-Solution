Node* Insert(Node *head, int data)
{
    Node *p = new Node(data);
    Node *q;
    q = head;
 
    if(head == NULL)
        return (p);
    while(q->next != NULL){
        q = q->next;
    }
    q->next = p;
    return head;
}


