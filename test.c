#include <stdlib.h>
#include <stdio.h>

// g++ compile c, struct keyword is not necessary
struct Node
{
    int data;
    struct Node* next;
};

void Insert(Node** head, int x);
void Insert(Node** head, int data, int pos);
void InsertToTail(Node** head, int data);
void Delete(Node** head, int pos);
Node* Reverse(Node* head);
Node* RecursionReverse(Node* head);
void Print(Node* head);
void RecursionPrint(Node* head);
void RecursionPrintReverse(Node* head);

int main(int argc, char const *argv[])
{
    Node *head = NULL; // init
    printf("numbers count: \n");
    int n, i, x;
    scanf("%d", &n);
    for (int i = 0; i < n; i ++) {
        printf("Enter a number: ");
        scanf("%d", &x);
        Insert(&head, x);
        Print(head);
    }

    head = RecursionReverse(head);
    Print(head);

    return 0;
}

void Insert(Node** head, int x) {
    Node *temp = (Node*)malloc(sizeof(struct Node));
    temp->data = x;
    // temp->next = head;
    // head = temp;
    temp->next = NULL;
    if (*head != NULL) temp->next = *head;
    *head = temp;
}

void Insert(Node** head, int data, int pos)
{
    Node* temp1 = new Node();
    temp1->data = data;
    temp1->next = NULL;
    if (pos == 1) { // insert beginning at the list.
        temp1->next = *head;
        *head = temp1;

        return;
    }

    Node* temp2 = *head;
    for (int i = 0; i < pos - 2; i ++) {
        temp2 = temp2->next;
    }
    temp1->next = temp2->next; // test1 + rest
    temp2->next = temp1;
}

void InsertToTail(Node** head, int data)
{
    Node *temp = (Node*)malloc(sizeof(struct Node));

    if (temp == NULL) {
        exit(-1);
    }

    temp->data = data;
    temp->next = NULL;

    if (*head == NULL) {
        *head = temp;
    } else {
        Node* current = *head;
        while (current->next != NULL) {
            current = current->next;
        }
        current->next = temp;
    }
}

void Delete(Node** head, int pos)
{
    Node* temp1 = *head;

    if (pos == 1) { // beginning
        *head = temp1->next;
        free(temp1);

        return;
    }

    for (int i = 0; i < pos - 2; i ++) {
        temp1 = temp1->next;
    }
    Node* temp2 = temp1->next;
    temp1->next = temp2->next;
    free(temp2);
}

Node* Reverse(Node* head)
{
    Node* prev;
    Node* current;
    Node* next;
    current = head;
    prev = NULL; // first step. head is null.
    while (current != NULL) {
        next = current->next; // next
        current->next = prev; // 2->1
        prev = current; // prev->1
        current = next; // next.
    }

    return prev;
}

Node* RecursionReverse(Node* head)
{
    if (head == NULL || head->next == NULL) {
        return head;
    }

    Node* nextNode = head->next;
    head->next = NULL;
    Node* newNode = RecursionReverse(nextNode);

    newNode->next = head;
    return newNode;
}

void Print(Node* head) {
    printf("List is: ");
    while (head != NULL) {
        printf("%d ", head->data);
        head = head->next;
    }
    printf("\n");
}

void RecursionPrint(Node* head)
{
    if (head == NULL) {
        printf("\n");
        return; // dont go on.
    }

    printf("%d ", head->data);
    RecursionPrint(head->next);
}

void RecursionPrintReverse(Node* head)
{
    if (head == NULL) {
        return; // dont go on.
    }

    RecursionPrintReverse(head->next);
    printf("%d ", head->data);
}
