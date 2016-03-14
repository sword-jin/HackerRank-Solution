#include <cstdio>
#include <stdlib.h>

using namespace std;

struct Node
{
    int data;
    Node* next;
};

int Length(Node* head);
void Push(Node** headref, int value);
void changeToNull(Node** headref);
Node* AddAtHead();
Node* BuildWithSpecialCase();
Node* BuildWithDummyNode();
Node* BuildWithLocalRef();
void Print(Node* head);

int main()
{
    Node* head = AddAtHead();
    Print(head);
    changeToNull(&head);
    Print(head);
    head = BuildWithSpecialCase();
    Print(head);
    head = BuildWithDummyNode();
    Print(head);
    head = BuildWithLocalRef();
    Print(head);

    return 0;
}

/**
 * Get the node list length.
 * @parse Node* head
 * @return int
 */
int Length(Node* head)
{
    int count = 0;
    Node* current = head;

    while (current != NULL) {
        count ++;
        current = current->next;
    }

    return (count);
}

/**
 * Push a element to head of list.
 * @parse Node** headref
 * @parse int value
 */
void Push(Node** headref, int value)
{
    Node *temp = (Node*)malloc(sizeof(struct Node));
    if (temp == NULL) exit(-1);
    temp->data = value;
    temp->next = NULL;
    if (*headref != NULL) temp->next = *headref;
    *headref = temp;
}

/**
 * Change a list to null.
 * @parse Node** headref
 */
void changeToNull(Node** headref)
{
    *headref = NULL;
}

/**
 * Add ont to five to head of list.
 * @return Node** head
 */
Node* AddAtHead()
{
    Node* head = NULL;

    for (int i = 1; i < 6; i ++) {
        Push(&head, i);
    }

    return (head);
}

/**
 * Build a head.
 * @return Node* head
 */
Node* BuildWithSpecialCase()
{
    Node* head = NULL;
    Node* tail;
    int i;

    Push(&head, 1);
    tail = head;

    for (i = 2; i < 6; i ++) {
        Push(&(tail->next), i);
        tail = tail->next;
    }

    return (head);
}

/**
 * Build a dummy list.
 * @return Node* head
 */
Node* BuildWithDummyNode()
{
    Node dummy;
    Node* tail = &dummy;

    int i;

    dummy.next = NULL;

    for (i = 1; i < 6; i ++) {
        Push(&(tail->next), i);
        tail = tail->next;
    }

    return (dummy.next);
}

/**
 * Build
 * @return Node* head.
 */
Node* BuildWithLocalRef()
{
    Node* head = NULL;
    Node** lastPtrRef = &head;
    int i;

    for (i = 1; i < 6; i ++) {
        Push(lastPtrRef, i);
        lastPtrRef = &((*lastPtrRef)->next);
    }

    return (head);
}

/**
 * Print list.
 * @param Node* head
 */
void Print(Node* head)
{
    printf("list: ");
    while (head != NULL) {
        printf("%d ", head->data);
        head = head->next;
    }
    printf("\n");
}
